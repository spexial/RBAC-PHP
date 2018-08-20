<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 上午10:54
 */
namespace Spexial\Rbac;
require_once ('../autoload.php');
use Spexial\Rbac\Database\Connection;
class RbacManage
{
    public function __construct()
    {
        $connect = Connection::$Db;
        return $connect;
    }

    function tablePrefix()
    {
        return Connection::$tablePrefix;
    }
}
$Rbac = new RbacManage();
var_dump($Rbac->tablePrefix());
