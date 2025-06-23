    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./Public/style.css">
 <?php
  include("./Common/db.php");
 ?>
 
 <div class="container col-6">
        <h1 class="header">Questions</h1>
        <?php
        
        $query = "SELECT * FROM Questions where id =$qid";
        $result = $conn->query($query);
        $row=$result->fetch_assoc();
        echo "<h4>Question :".$row['title']."</h4>
        <p>".$row['description']."</p>";
        
        include("./Client/Answers.php");
         
         ?> <?php if(isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])) { ?>

         <form action="./Server/request.php" method="post">
            <input type="hidden" name="Question_id" value="<?php echo $qid; ?>">
           
         <textarea class="form-control" name="answer" placeholder="your Answer" width="700px"></textarea><br>
         <button class="btn btn-primary" name="answer_submit">Submit Answer</button>
</form>
<?php }?>
         
 </div>