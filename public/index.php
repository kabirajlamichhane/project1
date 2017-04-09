<?php
    include('topheader.php');
    $conn=new mysqli("localhost","root","","100");
    $sql="SELECT * FROM pages";
    $result=mysqli_query($conn,$sql);
    //$res = mysqli_fetch_assoc($result);

?> 


<html>
<head>
	<title>navbar</title>
      <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="static/css/nav.css">
      <link rel="stylesheet" type="text/css" href="static/css/footer.css">
      <link rel="stylesheet" type="text/css" href="static/css/topheader.css">
      <script src="static/js/jquery-1.6.1.min.js"></script>
      <script src="static/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
      <script src="static/js/jquery.prettyPhoto.js" type="text/javascript"></script>
      <link rel="stylesheet" href="static/css/prettyPhoto.css" type="text/css" media="screen" />
    
</head>

<body>
  <!--  -->
  <div class="container-fluid content" id="con">
    <div class="col-sm-2" id="content1">
      <ul class="nav nav-pills nav-stacked">
       <?php while(  $res=mysqli_fetch_assoc($result)){ ?>
        <li><a href="index.php?title_id=<?php  echo $res['id'] ; ?>" ><?php  echo $res['title']; ?></a></li>
        <?php } ?>    

       <!--  <?php while($set = $res){
          echo "<li>". $set['title'] . "</li>";
        }

        ?> -->
      </ul>
    </div>
     

    <div class="col-sm-10">
      <?php
        if(isset($_GET['title_id']))
        {
          $id=$_GET['title_id'];
          $conn=new mysqli("localhost","root","","100");
          $sql="SELECT * FROM pages WHERE id=$id";
          $res=mysqli_query($conn,$sql);
          while(  $result=mysqli_fetch_assoc($res))
          {
            echo $result['content'];
            echo"<a href=\"../admin/image/{$result['image']}\" rel=\"prettyPhoto[gallery1]\">";
            echo "<img src=\"../admin/image/{$result['image']}\" >";
            echo "</a>";
          }
        }
       
      ?> 
    </div>
  </div>  
  
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
      $("a[rel^='prettyPhoto']").prettyPhoto();
    });
  </script>



</body>
</html>

<?php
  include('footer.php');
?>

