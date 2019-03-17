<?php

namespace App\Classes;

use mysql_xdevapi\Exception;

class Database
{
    public  function  db_connection(){
       try{
           $connection=new \PDO('mysql:host=localhost;dbname=ppi-ecommerce','root','');
           $connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
           return $connection;
       }catch (Exception $e){
           echo "connection failed to database".$e->getMessage();
       }

    }


}