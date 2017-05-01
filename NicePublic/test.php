<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>
<?php include ('index.php');
  if(!isset($_GET['page_id']))
  {
    $page = 1;
  }
  else {
    $page = $_GET['page_id'];
  }
 ?>

<div class="container" style="margin-left: 189px; margin-bottom: 50px">
  <h2>Pagination</h2>
  <?php
  // include ('siteurl.php');
  $site=siteurl();
  $conn=new mysqli("localhost","root","","100");
  
  if($page == "" || $page == 1)
  {
    $page1 =0;
  } 
  else
  {
    $page1=($page*2)-2;
  }
    $sql="SELECT * FROM post_manager";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);


      $sql="SELECT * FROM post_manager limit $page1,2";
      $result=mysqli_query($conn,$sql);
      while($res=mysqli_fetch_assoc($result))
        {
            $image = explode(",",$res['image']);
          
             echo "<table border=1px;>";
           echo"<tr>";
                                     echo "<td><img src=\"$site/NiceAdmin/sliderimage/$image[0]\" width='200px' height='150px'></td>"."<br>";
                                    echo "<td>".$res['id']."</td>"."<br>"; 
                                     echo "<td>".$res['post_title']."</td>"."<br >"; 
                                    // echo "<td>".$res['post_contain']."</td>"; 
                                    // echo "<td>".$res['seo_title']."</td>";  
                                    // echo "<td>".$res['meta_title']."</td>"; 
                                    // echo "<td>".$res['meta_keyword']."</td>"; 
                                    // echo "<td>".$res['date']."</td>"; 
                                    // echo "<td>".$res['status']."</td>"; 
                                    
                                    
                                    
                                        $conn=new mysqli("localhost","root","","100");
                                        // $post_contain=$_POST['post_contain'];
                                        $query="SELECT post_contain FROM post_manager";
                                        $check=mysqli_query($conn,$query);
                                        while($contain=mysqli_fetch_assoc($check));
                                        {
                                            echo $contain['post_contain'];
                                        }
                                    echo "</div>";
                                echo "</tr>". "<br ><br/>";




                       echo "</table>";          
        }

 
     $a=ceil($count/2);
     // echo $a; die;
      for($i=1; $i <= $a; $i++)
     {
        ?><a href="test.php?page_id=<?php echo $i;?>"><?php echo $i . " ";?></a><?php
     }


      ?>
  
</div>

</body>
</html>
