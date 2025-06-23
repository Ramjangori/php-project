     <link rel="stylesheet" href="./Public/style.css">


<?php


include("./Common/db.php");
if($conn){
    $user = $_SESSION['user']['Email'];
    $sql = "SELECT * FROM Questions WHERE User_Email = ?";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $user); // 's' indicates string type
    $query->execute();
    $result = $query->get_result();
    
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           $question = $row['title'];
           $q_id = $row['id'];
           echo "<div class='row MyQ-list'>
        <h4><a href='?q_id=$q_id'>$question</a></h4>
        <h6><a href='Client/delete.php?q_id=$q_id' onclick='return confirm(\"Are you sure you want to delete this question?\");' class='delete-btn'>Delete</a></h6>
      </div>";

        }
    } else {
        echo "<h1 class='myquestion'>No Question Found<h1>";
    }
}
?>

