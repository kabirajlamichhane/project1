<?php
      // include('slider.php');

?>





<!DOCTYPE html>
<html>
<head>
  <title>well-come to imagemanager </title>
   <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
  <script src="static/js/jquery-3.1.1.min.js"></script>
  <script src="static/js/bootstrap.min.js"  ></script>
  <script src="static/script/script.js"></script>
</head>
<body>
      <form method="post" action="" enctype="mutipart/form-data"><br><br />
      
      <div class="container"> 
      <a href="multiplefile.php" class="btn btn-warning">ADD MULTIEIMAGE</a><br><br />
      
        <table border='1px' class="table">
          <tr>
              <th>id</th>
              <th>IMAGE</th>
              <th>PID</th>
                <!-- <th>DELETE</th> -->
          </tr>
      </div>      



<?php

    include('crud.php');
    $obj = new crud;
    $res=$obj->IMAGEVIEW();
    foreach($res as $row)
    {         
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td><img src='image/$row[image]' width='200px',height='200px'></td>";
                echo"<td>".$row['pid']."</td>";
                // echo"<td><a href='controller.php?delete_id=$row[id]'>delete</td>";
                echo"</tr>";
    }
?>           
          </table>

      </form>
</body>
</html>