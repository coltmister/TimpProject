<?php
namespace app\modules\coder\models;

use yii\base\Model;
use \app\modules\coder\models\Algorithm;

class CodeForm extends Model
{

    public $algorithm;

    public function rules()
    {
        return [
            ['algorithm', 'required'],
        ];
    }

    public function saveCode()
    {
        if ( $this->validate() && !$this->hasErrors()){
            $code = new Algorithm();
            $count = count(Algorithm::find()->all())+1;
            $code->link = $count.'.html';
            $fp = fopen('../modules/coder/src/'.$code->link, 'at');
            fwrite($fp, $this->algorithm);
            fclose($fp);
            $code->save();
            return true;
        }
        return false;
    }

}