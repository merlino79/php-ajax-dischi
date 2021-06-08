 <?php
    require_once __DIR__ . '/data/db.php';
?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/style.css">
  <title>Document</title>
</head>
<body>
<header>

<div class="logo">
<img src="asset/img/logo.jpg" alt="">
</div>

<div class="generi">
 <select name="" id="generi">
       <option value=""><srong>rock</<strong></option>
            <option value=""><srong>metal</<strong></option>
            <option value=""><srong>classic</<strong></option>      
 </select>

</div>


</header>

<main>
<div class="container">



  <div class="box-albums">
      <?php foreach($database as $disco){ ?>
      <div class="album">  
          <img src="<?php echo $disco['poster'] ?>" alt="">     
          <h2> <?php echo $disco['author'] ?> </h2>
          
          <h4> <?php echo $disco['title'] . ' - ' . $disco['year'] ?> </h4>
      </div>
      <?php } ?>
    </div>




  
</div>

</main>



  
 
  
</body>
</html>