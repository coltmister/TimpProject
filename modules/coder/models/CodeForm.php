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
            $code->algorithm = $this->algorithm;
            $code->save();
            return true;
        }
        return false;
    }

}