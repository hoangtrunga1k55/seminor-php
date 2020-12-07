<?php
/**
 * Created by PhpStorm.
 * User: hoangtrung
 * Date: 05/12/2020
 * Time: 21:07
 */
class DB_Connection {
    public static  $__conn;
    public static function connectDb() {
        if(!self::$__conn) {
            $servername = "localhost";
            $username = "pmauser";
            $password = "admin123";
            $dbname = "hoithao";
            self::$__conn = new mysqli($servername, $username, $password, $dbname);
        }
        return self::$__conn;
    }

    public function disconnect(){
        self::$__conn->close();
    }
}