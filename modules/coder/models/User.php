<?php
/**
 * Created by PhpStorm.
 * User: Admin Colt
 * Date: 15.04.2018
 * Time: 18:56
 */

class User extends \app\modules\coder\controllers\ServiceController
{
    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'colt',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
            'type' => '7',
        ],
        '101' => [
            'id' => '101',
            'username' => 'sit',
            'password' => 'sit',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
            'type' => 0,
        ],
    ];

    public static function FindByUsername()
    {

    }
}