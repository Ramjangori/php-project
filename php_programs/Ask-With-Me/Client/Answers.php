    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./Public/style.css">
 

<div class="offset-sm-1">
<div class="container">
    <h3>Answers</h3>
    <?php
     $sql = "SELECT * FROM answer where question_id ='$qid'";
     $result=$conn->query($sql);
     foreach($result as $row)
     {
        $answer = $row['answer'];
        $user = $row['user_Email'];
        echo "<p>user=>".$user."</p>";
        echo "<div class='answer_wrapper'><p> Answer =>*  ".$answer."</p></div>";
     }

    
    
    ?>
</div></div>
