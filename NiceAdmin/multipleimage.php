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
                                $conn=new mysqli("localhost","root","","100");
                                $sql="SELECT * FROM images";
                                $result=mysqli_query($conn,$sql);

                            ?>

                            <form method="post" action="controller.php" enctype="multipart/form-data">
                                <div class="container">
                                    <h3>plz enter the filed</h3>
                                    <select name="pid">
                                        <?php while($res=mysqli_fetch_assoc($result))
                                          {
                                            echo"<option>{$res['id']}</option>";
                                          }
                                        ?>
                                    </select><br><br/>

                                    <input type="file" name="image" class="btn btn-info"> <br><br />
                                    <input type="submit" name="select" value="select" class="btn btn-success">

                                </div>
                            </form>

                        </div>
                    </section>
                     
                </div>
            </div>
              <!-- Basic Forms & Horizontal Forms-->
  
        </section>
    </section>
      <!--main content end-->
</div>      
 