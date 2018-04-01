<?php
// This class handles the users and login functionality
class User {
    public $rights;
    public $firstName;
    public $lastName;
    
// Function Verifies Login from login.php and sets the $_SESSION['username']  acordingly
    public function login($userName, $password){
      $bot = new DatabaseHandler;
      $sql = "SELECT * FROM customers WHERE cus_username = '$userName' OR cus_email = '$userName'";
      
      $result = $bot->readObject($sql);
      
      // The password in the database needs to be a hashed string, plain text is not allowed.
      // echo $hash = password_hash("dev", PASSWORD_BCRYPT);
      // thislogin method is vunreable to SQL injection
      // investigate:http://piotrpasich.com/how-to-hack-the-form-sql-injection/
      // $stmt = $db->prepare(�update users set parameter = ? where id = ?�);<br>$stmt->bind_param(�si�,$name,$id);<br>$stmt->execute();
      
      
      
      if ($result->num_rows > 0){
         
        while ($row = $result->fetch_assoc()) {
            
                if(($userName == $row["cus_username"]  || $userName == $row["cus_email"]) && password_verify($password,$row["cus_pass"])){
              
              $_SESSION['valid'] = true;
              $_SESSION['timeout'] = time();
              $_SESSION['username'] = $userName;
    
              echo 'You have entered valid user name and password';
              $response=TRUE;
              break;
              } else {
              $response=FALSE;
              }
        
        
        
        if ($response == FALSE) {
          //bad input
          echo "Username or password dont match our records";
          $_SESSION['status']='badPswdOrUsr';
        }

      }
     
      } elseif ($result->num_rows == 0){
          //there are no such users in the database
          echo "Username or password dont match our records. No such user";
          $_SESSION['status']='badPswdOrUsr';
          
      } else {
          //There is another error
          
          echo "Ops. There is something wrong with the database!";
          $_SESSION['status']='dbNotConn';
      }
        

    }
    private function getFK_id(){
        $bot = new DatabaseHandler;
        $sql = "SELECT count(*) FROM accounts";
        $number = $bot->readObject($sql);
        return $number;
    }
    private function createAccount($number){
        $bot = new DatabaseHandler;
        $type = "accounts";
        $arguments = "'acc_no','balance'";
        $values = $number."','"."100";
        $result = $bot->saveObject($type,$arguments,$values);
    }

    public function createUser($cus_name,$cus_surname,$cus_email,$cus_password,$cus_username) {
        $cus_phone = "123 456 789";
        $password = password_hash($cus_password, PASSWORD_BCRYPT);
        $bot = new DatabaseHandler;
        $type = "customers";
        $arguments = "'cus_name','cus_surname','cus_username','cus_pass','cus_email','FK_account_id'";
        
        
        $number = ($this->getFK_id());
        echo print_r($number);
        
        $resultA = $this->createAccount($number);
        $FK_account_id = $number;
        
        $values = $cus_name."','".$cus_surname."','".$cus_email."','".$cus_username."','".$password."','".$cus_phone."','".$FK_account_id;
        $result = $bot->saveObject($type,$arguments,$values);
    }
    public function editUser() {

    }


}


?>
