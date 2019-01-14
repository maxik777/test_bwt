<?php

namespace app\lib;
use PDO;

class Db
{

    private static $db;

    public function __construct()
    {
        $config = include 'app/config/db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'], $config['user_name'], $config['password']);
    }



    public static function getDb()
    {
        if ( ! isset( self::$db ) ) {
            self::$db = new self();
        }

        return self::$db;

    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params))
        {
            foreach ($params as $key => $val)
            {
                if (is_int($val))
                {
                    $type = PDO::PARAM_INT;
                } else
                    {
                    $type = PDO::PARAM_STR;
                }
                $stmt->bindValue(':'.$key, $val, $type);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params=[])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}

