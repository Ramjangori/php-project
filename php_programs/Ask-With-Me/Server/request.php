<?php
session_start();
include("../Common/db.php");

if(isset($_POST['signup'])){
    // यह part सही है, इसमें email session में store हो रहा है
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $address = $_POST['address'];
  $check = "SELECT * FROM user_detail WHERE `email` = ?";
$stmt = $conn->prepare($check);
$stmt->bind_param("s", $email); // "s" = string टाइप
$stmt->execute();

$result = $stmt->get_result(); // रिजल्ट सेट प्राप्त करें
$count = $result->num_rows; // रो की संख्या गिनें

if($count > 0) {
    echo '<script>
        alert("यह यूजर पहले से मौजूद है। कृपया लॉग इन करें");
        window.location.href = "/php_programs/Ask-With-ME";
    </script>';
   
            

    }
    else{
    $query =  $conn->prepare(" insert into user_detail (`id` , `name` , `email` , `password` , address) values 
     (NULL, '$user' ,'$email' , '$pass' , '$address')");
     $result = $query->execute();
     if($result){
        $_SESSION['user'] =["username"=>$user , "Email"=>$email , "user_id"=>$query->insert_id];
        header("location: /php_programs/Ask-With-ME");
     }}
}
else if( isset($_POST['Login'])){
   $name = $_POST['User-name'];
   $Password = $_POST['password'];
   
   // ERROR 1: यहाँ $email variable use किया गया है जो define नहीं है
   // FIX: Database से email fetch करें
   $query = "select * from user_detail where name = '$name' and password = '$Password'";
   $result = $conn->query($query);
   
   if($result->num_rows==1){
      $user = $result->fetch_assoc(); // यह line add करें
      // ERROR 2: यहाँ email session में store नहीं हो रहा था
      $_SESSION['user'] =[
         "username"=>$name , 
         "Email"=>$user['email'], // Database से email लें
         "user_id"=>$user['id']   // User ID भी store करें
      ];
      header("location: /php_programs/Ask-With-ME");
   }
   else {
      header("Location: /php_programs/Ask-With-Me/Client/loginfaild.php");
exit();
   }  
}
else if (isset($_GET['logout'])) {
  session_unset();
  header("location: /php_programs/Ask-With-ME");
}

if(isset($_REQUEST['btn'])){
  header("location: /php_programs/Ask-With-ME");
}


  if(isset($_POST['Ask'])){
    if(!isset($_SESSION['user']['Email'])) {
        die("Please login first");
    }
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category  = $_POST['cat'];
    $user_Email = $_SESSION['user']['Email'];
    
    // Debugging
    echo "Email to be inserted: ".$user_Email."<br>";
    
    // Query with error handling
    $sql = "INSERT INTO Questions (`title`,`description`,`category_id`,`User_Email`) 
            VALUES ('$title','$description','$category','$user_Email')";
    
    if($conn->query($sql) === TRUE) {
        header("location: /php_programs/Ask-With-ME");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else if(isset($_POST['answer_submit'])){
      
       if(!isset($_SESSION['user']['Email'])) {
        die("Please login first");
    }
    
    $answer = $_POST['answer'];
    $question_id = $_POST['Question_id'];
    
    $user_Email = $_SESSION['user']['Email'];
    
    
    
    // Query with error handling
    $sql = "INSERT INTO answer (`answer`,`Question_id`,`User_Email`) 
            VALUES ('$answer','$question_id','$user_Email')";
 $result=$conn->prepare($sql);
 $result->execute();
 if($result){
      echo "Answer Submitted ";
      header("location: /php_programs/Ask-With-ME/?q_id=$question_id");
 }
 else{
      echo "oh no Answer not submitted";
 }
    
}
?>