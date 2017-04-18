<?php
    include('topheader.php');
    $conn=new mysqli("localhost","root","","100");
    $sql="SELECT * FROM pages";
    $result=mysqli_query($conn,$sql);
    //$res = mysqli_fetch_assoc($result);

?> 

<?php
    $conn=new mysqli("localhost","root","","100");
    $sql="SELECT * FROM site_url";
    $result1=mysqli_query($conn,$sql);
    $front=mysqli_fetch_assoc($result1);

?>

<html>
<head>
  <title>navbar</title>
      <link rel="stylesheet" type="text/css" href="<?php echo $front['url']; ?>/public/static/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $front['url']; ?>/public/static/css/nav.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $front['url']; ?>/public/static/css/footer.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $front['url']; ?>/public/static/css/topheader.css">
      <script src="<?php echo $front['url']; ?>/public/static/js/jquery-3.2.0.min.js"></script>
      <script src="<?php echo $front['url']; ?>/public/static/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
      <script src="<?php echo $front['url']; ?>/public/static/js/jquery.prettyPhoto.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?php echo $front['url']; ?>/public/static/css/prettyPhoto.css" type="text/css" media="screen" />
      <script src="<?php echo $front['url']; ?>/public/static/script/validation.js"></script>
    
</head>

<body>
  <div class="container-fluid content" id="con">
  <form method="post" action="test.php" onsubmit="return firstnamevalidation()" >

    <div class="col-sm-2" id="content1">
      <ul class="nav nav-pills nav-stacked">
       <?php while(  $res=mysqli_fetch_assoc($result)){ ?>
        <li><a href="<?php echo $front['url']; ?>/public/index.php?title_id=<?php echo $res['id']; ?>" ><?php  echo $res['title']; ?></a></li>
        <?php } ?>    

       
      </ul>
    </div>
     

    <div class="col-sm-10" id="main">
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
            echo"<a href=\"{$front['url']}/admin/image/{$result['image']}\" rel=\"prettyPhoto[gallery1]\">";
            echo "<img src=\"{$front['url']}/admin/image/{$result['image']}\" >";
            echo "</a>";
          }
        }
     // include('menu.php');  
        
      ?> 
    </div>
  </div>  
  
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
      $("a[rel^='prettyPhoto']").prettyPhoto();
    });
  </script>

</form>

<?php
   include('footer.php');
?>
</body>
</html>



