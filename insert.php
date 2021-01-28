<?php


if(isset($_POST['username'])){
   $username = $_POST['username'];
}else{
   $username = "Username not set in POST Method";
}



if(isset($_POST['password'])){
   $password = $_POST['password'];
}else{
   $password  = "Passsword not set in POST method";
}


if(isset($_POST['gender'])){
  $gender = $_POST['gender'];
}else{
  $gender = "Gender not set in POST method";
}

if(isset($_POST['email'])){
      $email = $_POST['email']; 
 }else{
      $email = "Email not set in POST Method";
 }

if(isset($_POST['phoneCode'])){
      $phoneCode = $_POST['phoneCode']; 
 }else{
      $phoneCode = "Phone Code not set in POST Method";
 }


if(isset($_POST['phone'])){
      $phone = $_POST['phone']; 
 }else{
      $phone = "Phone not set in GET Method";
 }


if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)){
      $host = "localhost";
      $dbUsername = "admin";
      $dbPassword = "w2000y07177";
      $dbname ="LOGIN";

      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname );
 
      if(mysqli_connect_error()){
          die("Connection Error" . mysqli_connect_error().')'.mysqli_connect_error());
       
        }

       else{


           $SELECT = "SELECT email From register Where email = ? Limit 1";
           $INSERT = "INSERT Into register (username, password, gender, email, phoneCode, phone) values(?,?,?,?,?,?)";
           $stmt = $conn->prepare($SELECT);
           $stmt-> bind_param("s",$email);
           $stmt->execute();
           $stmt->bind_result($email);
           $stmt->store_result();
           $rnum= $stmt->num_rows;


           if ($rnum==0){
              $stmt -> close();
              $stmt = $conn -> prepare($INSERT);
              $stmt->bind_param("ssssii",$username, $passowrd, $gender, $email, $phoneCode, $phone);
              $stmt->execute();
              echo "New record inserted successfully";
              

            }
            else{

                    echo "somebody already register using this email";
               
 

            }
            $stmt->close();
            $conn->close();
       }
}

else{
echo "All fields are reguired";
die();

}
?>
