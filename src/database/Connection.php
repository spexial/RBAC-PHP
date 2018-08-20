<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 上午10:54
 */
namespace Spexial\Rbac\Database;

class Connection
{
    private $host;
    private $user;
    private $pwd;
    private $dbname;
    private $port;
    private $prefix;
    public static  $Db;

    public function __construct()
    {
        $this->setMysqlConfig();
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;chatset=utf8";
        try {
            self::$Db = new \PDO($dsn, $this->user, $this->pwd);
        } catch (\PDOException $e) {
            die ($e->getMessage());
        }
    }

    public function setMysqlConfig()
    {
        $config       = $this->config('database.connection')['mysql'];
        $this->host   = $config['host'];
        $this->port   = $config['port'];
        $this->user   = $config['username'];
        $this->pwd    = $config['password'];
        $this->dbname = $config['database'];
        $this->prefix = $config['prefix'];
    }

    private function config($full)
    {
        $args  = explode('.',$full);
        $file  = $this->configFile(reset($args));
        $param = $file[end($args)];
        return $param;
    }
    private function configFile($file)
    {
        $file = __DIR__ . '/config/' .$file.'.php';
        if ($this->isFile($file)) {
            return require $file;
        }

        throw new \Exception("File does not exist at path {$file}");
    }

    private function isFile($file)
    {
        return is_file($file);
    }
}