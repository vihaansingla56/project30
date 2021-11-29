<?php
session_start();
class main_class{
    //Email validation
    private function EmailValidation($email)
    {
        $demail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$demail) {
            return true;
        } else {
            return false;
        }
    }

    // Phone number validation
    private function PhoneNumberValidation($phone_number)
    {
        $filtered_phone_number = filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($filtered_phone_number) < 10 or strlen($filtered_phone_number) > 11) {
            return true;
        } else {
            return false;
        }
    }
 

    //Email Exist in database
    private function emailExists($email, $db)
    {
        $sql = "SELECT * FROM `register` WHERE `email`=:email";
        $statement = $db->prepare($sql);
        if (is_object($statement)) {
            $statement->bindparam(':email',$email);
            $statement->execute();
            if ($statement->rowCount() > 0) {
                return true;
            }
        }
        return false;
    }

    // Register 
    public function register($register,$db){


        if(empty(trim($register['name'])) || empty(trim($register['email'])) || empty(trim($register['password']))){ 
            return 'missing_field';
        }
        else if($this->EmailValidation($register['email'])){
             return 'email_invalid';

        }
        else{

          $name = htmlspecialchars($register['name']);
          $email = htmlspecialchars($register['email']); 
          $email = strtolower($email);
          $name  = strtolower($name);

          $sql = "INSERT INTO `register`(`name`, `email`, `password`) VALUES (?,?,?)";
          $statement = $db->prepare($sql);

          if(is_object($statement)){
            $hashpassword = password_hash($register['password'],PASSWORD_DEFAULT);
             $statement->bindParam(1,$name,PDO::PARAM_STR);
             $statement->bindParam(2,$email,PDO::PARAM_STR);
             $statement->bindParam(3,$hashpassword,PDO::PARAM_STR); 
             $statement->execute();
             if ($statement->rowCount() == 1) {
                $_SESSION['user_log'] = ['name'=>$name];
             }
             return 'success';
            }
            else{
                return 'error';
            }
        }

    }

    public function login($login,$db){
        $email =   htmlspecialchars($login['email']);   
        if(empty(trim($login['email'])) OR empty(trim($login['password']))){
            return 'error';
        }
        else{
            $sql = "SELECT `user_id`, `name`, `email`, `password` FROM `register` WHERE email=?";
            $statement = $db->prepare($sql);
            if (is_object($statement)) {
                $statement->bindparam(1, $email, PDO::PARAM_STR);
                $statement->execute();
                if ($row = $statement->fetch(PDO::FETCH_OBJ)) {

                    if(password_verify($login['password'],$row->password)){
                   
                        $_SESSION['user_log'] = ['name' => $row->name, 'user_id'=>$row->user_id];
                        return 'success';
                    }
    
                    return 'error';
                }
                return 'error';
            }
        }



    }

}
$main_class = new main_class();