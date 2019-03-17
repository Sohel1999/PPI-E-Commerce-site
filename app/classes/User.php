<?php

namespace App\classes;
use  App\Classes\Database;

class User
{
    public function userRegister($data,$file)
    {

        $first_name = trim(strtolower($data['first_name']));
        $last_name = trim(strtolower($data['last_name']));
        $username = trim(strtolower($data['username']));
        $email = trim(strtolower($data['email']));
        $password = trim($data['password']);
        $password=password_hash($password,PASSWORD_BCRYPT);

        if(!empty($file['photo']['tmp_name'])){
            $tmp_name=$file['photo']['tmp_name'];
            $file_name=$file['photo']['name'];
            $extract_file=explode('.',$file_name);
            $extension=end($extract_file);
            $new_file_name=uniqid('profile_',true).'.'.$extension;
            $dir='uploads/';    
           $upload=move_uploaded_file($tmp_name,$dir.$new_file_name);

        }
        $con=new \App\Classes\Database();
        $sql="INSERT INTO `users`
             (`first_name`,`last_name`,`username`,`email`,`password`,`photo`,`address`,`active`,`role`,`email_varification_token`,`email_varified_at`,`password_rest_token`,`create_at`)
 VALUES (:fname,:lname,:username,:email,:password,:photo,:address,:active,:role,:email_varification,:email_varified_at,:password_reset_token,:create_at)";
     $stm=$con->db_connection()->prepare($sql);
     $stm->bindParam(':fname',$first_name);
     $stm->bindParam(':lname',$last_name);
     $stm->bindParam(':username',$username);
     $stm->bindParam(':email',$email);
     $stm->bindParam(':password',$password);
     $stm->bindParam(':photo',$new_file_name);
    $stm->bindValue(':address','banani');
    $stm->bindValue(':active',1);
    $stm->bindValue(':role','admin');
    $stm->bindValue(':email_varification','');
    $stm->bindValue(':email_varified_at',date('Y-m-d'));
    $stm->bindValue(':password_reset_token','');
    $stm->bindValue(':create_at',date('y-m-d'));
   $response=$stm->execute();
   if($response){
       echo "success";
   }else{
       echo 'unsuccess';
   }


    }
}