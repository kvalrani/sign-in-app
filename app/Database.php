<?php
/**
 * Created by PhpStorm.
 * User: kunal
 * Date: 02/08/2018
 * Time: 10:11
 */

namespace App;
use Illuminate\Database\Capsule\Manager as DB;


class Database
{
    public function __construct()
    {
        $servername = getenv('SERVERNAME');
        $username = getenv('USERNAME');
        $password = getenv('PASSWORD');
        $dbname = getenv('DBNAME');


        // Create connection

        $this->db = new DB;

        $this->db->addConnection([
            'database'=>$dbname,
            'username'=>$username,
            'password'=>$password,
            'driver'=>'mysql',
            'host'=>$servername,
        ]);

        $this->db -> setAsGlobal();

        return $this->db;

    }
}