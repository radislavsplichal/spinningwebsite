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


    public function createUser($userName, $password, $firstName, $lastName, $rights) {

    }
    public function editUser() {

    }


}


?>
