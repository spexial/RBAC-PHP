<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018-12-05
 * Time: 18:15
 */
use Spexial\Rbac\RbacManage;
require_once('../autoload.php');
class Install
{
    private $rbac;

    function __construct()
    {
        $this->rbac = new RbacManage();
    }

    function getSql()
    {
        $sql = file_get_contents(__DIR__. "/config/database.sql");
        $sql = str_replace("PREFIX_", $this->rbac->tablePrefix, $sql);
        return explode(";", $sql);
    }

    function installPdoMysql()
    {
        $sqls = $this->getSql();
        if (is_array($sqls)) {
            foreach ($sqls as $query)
            {
                $this->rbac->query($query);
            }
        }
    }
}
$install = new Install();
$install->installPdoMysql();
