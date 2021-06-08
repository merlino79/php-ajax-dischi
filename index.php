 <?php
    require_once __DIR__ . '/data/db.php';
?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

//var_dump($response);
?>

<ul>
  <?php foreach($response as $disco){ ?>

    <li>
      <?php echo $disco['title'] ?>
      <?php echo $disco['author'] ?>
      <?php echo $disco['poster'] ?>
    </li>

  <?php } ?>
</ul>
  
  
 
  
</body>
</html>