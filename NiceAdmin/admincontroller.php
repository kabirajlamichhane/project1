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
		                        $conn= mysqli_connect("localhost","root","","100");
		                        if(isset($_POST['check']))
		                        {
		                            $email=$_POST['email'];
		                            $password=$_POST['password'];
		                            $sql="SELECT * FROM user WHERE email='$email' AND password='$password'"; 
		                            $result=mysqli_query($conn,$sql);
		                               // print_r ($result);die;
		                            if(mysqli_num_rows($result) == 1)
		                              {
		                                 // echo "finally";
		                                 header('adminview.php');
		                                 exit;
		                              }
		                              else
		                              {
		                                echo "sorry";
		                              }
		                        }

	                      	?>

                          
                        </div>
                    </section>
                     
                </div>
            </div>
              <!-- Basic Forms & Horizontal Forms-->
         </section>
    </section>
      <!--main content end-->
</div>      
      

   