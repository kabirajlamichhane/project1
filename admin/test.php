<?php
      
   
        $conn=new mysqli("localhost","root","","100");
        $sql="SELECT * FROM pages";
        $result=mysqli_query($conn,$sql);
        $res=mysqli_fetch_assoc($result);
      
?>

<?php
    // include('siteurl.php');
    
    include('slider.php');
    if(isset($_GET['error']) && $_GET['error']==1)
    echo "Please enter all the fields";
?>

   
  

<!DOCTYPE html>
<html>
<head>
    <title>new page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo siteurl();?>admin/static/css/newpagestyle.css">
        <script src="<?php echo siteurl();?>admin/static/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo siteurl();?>admin/static/js/bootstrap.min.js"  ></script>
        <script src="<?php echo siteurl();?>admin/static/script/script.js"></script>
        <script src="<?php echo siteurl();?>admin/static/script/newscript.js"></script>
        <script src="<?php echo siteurl();?>admin/ckeditor/ckeditor.js"></script>
</head>
<body>
    <form method="post" action="controller.php" enctype="multipart/form-data" onsubmit= "return validation()">
    <!-- TITLE:
    <input type="text" name="title"> <br> -->
    <div class="container">
           <div class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">parent_id</div>
                <select name="title">
                <?php while($res=mysqli_fetch_assoc($result))
                {
                    echo "<option>{$res['title']}</option> ";
                }
                ?>  
                </select>
        <br><br />

        <div class="form-group">
            <h2>create a new page</h2>
            <label for="">title:</label>
            <input type="text"  name="title" id="title" class="form-control" id="usr">
        </div>
    
        <div class="form-group">
            <label for="">Content:</label>
            <textarea class="form-control"  name="content"  id="content" rows="5" id="comment"></textarea>
        </div>
        <input type="file" name="image" class="btn btn-warning"><br><br/>

        <!-- <div class="container"> -->
        <!-- <label>parent_id</label> -->
     

    <input type="submit" name="submit" value="ADD" class="btn btn-primary"> 
    </div>
    </form>
</body>
</html>

<script >
    CKEDITOR.replace('content');
</script>

