 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
     <link rel="stylesheet" href=".\Public\Style.css">



<div class="container">
    <div class="row">
    <div class="col-8">
        <h1 class="header">Questions</h1>
    <?php
 include("./Common/db.php");
 if(isset($_GET['c_id'])){
    $c_id = $_GET['c_id'];
 $sql = "SELECT * from Questions where category_id =$c_id ";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result)>0){
    foreach($result as $data){
        $title =  $data['title'];
        $q_id = $data['id'];
        echo "<div class='row question-list'><h4><a href='?q_id=$q_id'>$title</h4></a></div>";
        
    }
  }
  else {
    echo "No Questions related to this Category";
  }
  
 }
  else if(isset($_GET['latest'])){
    
 $sql = "SELECT * from Questions order by id desc limit 4 ";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result)>0){
    foreach($result as $data){
        $title =  $data['title'];
        $q_id = $data['id'];
        if(isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])) {
        echo "<div class='row question-list'><h4><a href='?q_id=$q_id'>$title</h4></a></div>";
        }
        else{
            echo "<div class='row question-list'><h4><a>$title</h4></a></div>";
        }
        
    }
  }}
  else if(isset($_GET['Search_Q'])){
    $search = $_GET['Search_Q'];
    
 $sql = "SELECT * from Questions where `title` LIKE  '%$search%' ";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result)>0){
    foreach($result as $data){
        $title =  $data['title'];
        $q_id = $data['id'];
        echo "<div class='row question-list'><h4><a href='?q_id=$q_id'>$title</h4></a></div>";
        
    }
  }}
 else
 {
     $sql = "SELECT * from Questions";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result)>0){
    foreach($result as $data){
        $title =  $data['title'];
        $q_id = $data['id'];
        echo "<div class='row question-list'><h4><a href='?q_id=$q_id'>$title</h4></a></div>";
        
    }
  }
 }

?>
</div>
<div class="col-4">
    <?php
    include(".\Client\categoryList.php");
    ?>
</div></div>

</div>
