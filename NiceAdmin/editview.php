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
					       <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
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
       
                                    $conn = new mysqli("localhost","root","",100);
                                    $id=$_GET['ad_id'];
                                    $sql= "SELECT * FROM user where id='$id'";
                                    $res=mysqli_query($conn,$sql);
                                    $result=mysqli_fetch_assoc($res);
      
                                ?>


                                <form method="post" action="controller.php?ad_id=<?php echo $id; ?>"  onsubmit= "return validation()">

                                    <div class="container">
                                        <div class="form-group">

                                            email<input type="text" name="email"  value="<?php echo  $result['email']; ?>" class="form-control"><br / >
                                        </div>
            
                                         <div class="form-group">
              
                                            password<input type="text" name="password"  value="<?php echo  $result['password']; ?>" class="form-control"><br />

                                        </div>
          
                                        <input type="submit" name="adminupdate" value="UPDATE" class="btn btn-success"> 
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
 