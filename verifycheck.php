<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiqspace";


 //session_start();

if (isset($_POST['submitBtn'])){ 

      //GET VALUES INDEX.PHP INPUTFIELDS


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //pass the login data to php
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rememberMeChk =  $_POST['rememberMe'];


        $sql = "SELECT username, password, usertype FROM users WHERE username ='.$email.' AND password ='.$password.'"; 
        $result = $conn->query($sql);

        if($result -> num_rows >0){
            echo 'success';
            while($row = $result->fetch_row()){
                echo $row['id']." ".$row['username']." ".$row['password']."".$row['usertype'];
            }
            $_SESSION['setRole'] = $row['usertype'];
            $_SESSION['userID'] = $row['id'];
            $_SESSION['user'] = $row['username'];
            echo "Sessions are set";
            echo $_SESSION['setRole']." ".$_SESSION['userID']." ".$_SESSION['loginState'];
        }else{
            echo "no results";
        }
        $conn->close();
      


    //  $chkValues = $_POST['skills'];
    // $checkboxValues = ""; 

     // foreach ($chkValues as $chkValue){
       //  $checkboxValues .= $chkValue.", ";
      //}
  
      //$conn = new mysqli('localhost', 'root', '', 'mydb');
     // if ($conn -> connect_error){
      //   die ('Connection failed: ' .$conn->connect_error);
    //  }

     // $query = $conn->prepare("INSERT INTO register (firstname, lastname, email, phone_no, house_st, city, zipcode, skills) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    ///  $query->bind_param("sssissis", $fn, $ln, $email, $phone, $house, $city, $zc, $checkboxValues);
    //  $query->execute();
    //  $query->close();
    //  $conn-> close();

      //echo'<script>alert("Registered Successfully!")</script>';  
      //echo '<a href="index.php?login">Back to Registration Page</a>';
     
     
     /// sample test login successful
      echo '<script type="text/javascript">'; 
      echo 'alert("Login Successfully!");'; 
      echo 'window.location.href = "user.php?main";';
      echo '</script>';

}

// test to return to main index.php

echo '<script type="text/javascript">'; 
echo 'alert("Please login first!");'; 
echo 'window.location.href = "index.php?login";';
echo '</script>';
?>