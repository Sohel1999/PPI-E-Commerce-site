<?php
/**
 * Created by PhpStorm.
 * User: MD.SOHEL
 * Date: 3/16/2019
 * Time: 3:58 PM
 */

namespace App\classes;
use App\Classes\Database;

class Admin
{
    public function adminLoginCheck($data){
            $email=strtolower(trim($data['email']));
            $password=trim($data['password']);
            $con=new Database();
            $sql="SELECT id,email,password,role FROM `users` WHERE email=:email";
           $stm=$con->db_connection()->prepare($sql);
           $stm->bindParam(':email',$email);
           $stm->execute();
           $user=$stm->fetch();
           var_dump($user);
           if($user){
               if(password_verify($password,$user['password'])){
                 session_start();
                 $_SESSION['id']=$user['id'];
                 $_SESSION['email']=$user['email'];
                 header('Location: deshboard.php');
               }
           }

    }
    public  function  adminLout(){
        session_start();
        unset($_SESSION['id']);
        session_destroy();
    }


}