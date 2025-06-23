    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
       <link rel="stylesheet" href="./Public/style.css">

 

<div class="container">
    
    <h1 class="header">Ask a Question </h1>
    <form action="./Server/request.php" method="POST"> 
  <div class="sm-3 col-6 offset-sm-3 margin-bt-15" >
    <label for="title" class="form-label"> Title </label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Ask a Question" >
</div>
    
  
  <div class="sm-3 col-6 offset-sm-3 margin-bt-15">
    <label for="description" class="form-label">description</label>
    <input type="description" class="form-control" name="description" id="description">
  </div>
  <div class="sm-3 col-6 offset-sm-3 margin-bt-15">
   <?php
   include('./Client/catogery.php');
   ?>
  </div>
  
 
 
   
  <div class="offset-sm-3 margin-tp-15">
  <button type="submit" class="btn btn-primary" name="Ask" value="submit">Submit</button>
</div>
</form>
</div>
