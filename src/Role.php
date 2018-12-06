<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 上午10:48
 */

namespace Spexial\Rbac;
require_once ('../autoload.php');
class Role extends RbacManage
{
    public function getPermissions()
    {

    }
}

$role = new Role();
//TODO:: test
$sql = 'select * from admins where id = 2';
var_dump($role->first($sql));