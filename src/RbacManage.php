<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 上午10:54
 */
namespace Spexial\Rbac;


class RbacManage
{
    public function __construct()
    {
        return Connection::$Db;
    }

    public static function check()
    {

    }
}
$Rbac = new RbacManage();
var_dump($Rbac);