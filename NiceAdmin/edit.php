<?php
  include('navigation.php');
?>
<div>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
		    <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo siteurl();?>/NiceAdmin/index.php">Home</a></li>
					</ol>
				</div>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            PAGE MANAGER
                        </header>

                        <div class="panel-body">
     
                            <?php
                              // include('siteurl.php');
                              // include('slider.php');
                              $conn = new mysqli("localhost","root","",100);
                              
                              
                                $id=$_GET['edit_id'];
                                $sql= "SELECT * FROM pages where id='$id'";
                                $res=mysqli_query($conn,$sql);
                                $result=mysqli_fetch_assoc($res);
                              
                            ?>

                            <form method="post" action="controller.php?edit_id=<?php echo $id; ?>" enctype="multipart/form-data" onsubmit= "return validation()">
                            
	                            <div class="container">
		                            <input type="hidden" name="id" value="<?php echo $id?>">
		                            
		                            TITLE:
		                            &nbsp &nbsp &nbsp &nbsp<input name="title"  value="<?php echo $result['title']; ?>" ><br />

		                            CONTENT:
		                            <textarea name="content" rows="5" cols="50" ><?php echo  $result['content']; ?></textarea><br />

		                            <input type="file" name="image" class="btn btn-warning" value="<?php echo  $result['image']; ?>"/><br/>

		                            <!-- <input type="hidden" name="$img" value="<?php echo $img;?>" /> -->
		                            <input type="submit" name="update" value="EDIT" class="btn btn-success">
	                            </div>  
                            </form>

	                        <script >
	                            CKEDITOR.replace('content');
	                        </script>

                        </div>
                    </section>
                     
                </div>
            </div>
              <!-- Basic Forms & Horizontal Forms-->
             
        </section>
    </section>
      <!--main content end-->
</div>      
      
 