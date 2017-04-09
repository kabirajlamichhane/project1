<?php
  // include('siteurl.php');
  include('slider.php');
  session_start();

  if(!isset($_SESSION['email']))
  {
    header('location:index.php');
  }

?>



<!DOCTYPE html>
<html>
<head>
  <title>well-come to multiple view  </title>
  <link rel="stylesheet" type="text/css" href=""<?php echo siteurl();?>admin/static/css/bootstrap.min.css">;
  <script src=""<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
  <script src=""<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
</head>
<body>
      <form method="post" action="" enctype="mutipart/form-data">
      <div class="container">
      <table border='2px' class="table">
        <tr class="success">
            <th>id</th>
            <th>IMAGE</th>
            <th>DELETE</th>
        </tr>



<?php
    // include('slider.php');
    include('crud.php');
    $obj = new crud;
    $res=$obj->IMGSELECT();
    foreach($res as $row)
    {         
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td><img src='image/$row[image]' width='200px',height='200px'></td>";
                echo"<td><a href='controller.php?delete_id=$row[id]' class='btn btn-danger' onclick=\"return confirm('are u sure')\">delete</td>";
                echo"</tr>";
    }
?>           
          </table>
        </div> 
      </form>
</body>
</html>