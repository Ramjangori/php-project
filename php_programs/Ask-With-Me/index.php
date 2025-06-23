<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask-With-Me Project</title>
    <?php  include('./Client/CommonFile.php')
     ?>
</head>
<body>
    <?php
session_start();
include('./Client/Header.php');

if(isset($_REQUEST['SignUp'])) {
    include('./Client/SignUp.php');
}
else if(isset($_REQUEST['login'])) {
    include('./Client/login.php');
}
else if(isset($_REQUEST['ask'])) {
    include('./Client/Ask.php');
}
else if(isset($_REQUEST['MyQuestion'])){
    include(".\Client\MyQuestion.php");
}
else if(isset($_GET['q_id'])  ) {  
       $qid =$_GET['q_id'] ;// Corrected this line
    include("./Client/Questiondetail.php");  // Also corrected path
}
else if(isset($_GET['c_id']) && isset($_SESSION['user']['username']) ){
        include("./Client/Questions.php");  // Corrected path

    
}
else if(isset($_GET['latest']) && isset($_SESSION['user']['username']) ){
        include("./Client/Questions.php");  // Corrected path

    
}
else if(isset($_GET['Search_Q']) ){
        include("./Client/Questions.php");  // Corrected path

    
}

else {
    
     
    
    include("./Client/Questions.php");  // Corrected path
}
?>
    
</body>
</html>