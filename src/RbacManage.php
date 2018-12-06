<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 上午10:54
 */
namespace Spexial\Rbac;
use Spexial\Rbac\Database\Connection;
use PDO;
class RbacManage
{
    public  $tablePrefix;

    public function __construct()
    {
        $this->tablePrefix = Connection::getInstance()->prefix;
    }

    static function query($query)
    {
        return Connection::getInstance()->query($query);
    }

     static function first($query)
    {
        try{
            return self::query($query)->fetch(PDO::FETCH_ASSOC);
        }catch (\PDOException $e ){
            die($e->getMessage());
        }
    }
}