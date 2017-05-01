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
                        
                            <form method="post" action="admincontroller.php">
                            	<div class="container"> 
                              		<h3>just for configuration</h3> 

                              		<div class="form-group">
                                		email &nbsp  &nbsp  &nbsp<input type="text" name="email" placeholder="your eamil" class="form-control"><br><br />
                              		</div>
                              
                              		<div class="form-group">
                                 		password<input type="password" name="password" placeholder="your password" class="form-control"><br><br />
                              		</div>
                             
                              		<input type="submit" name="check" value="update" class="btn btn-info"><br><br/>
                                	<a href="newuser.php" class="btn btn-success">create a new user</a>

                            	</div>  
                          	</form>

                        </div>
                    </section>
                     
                </div>
            </div>

        </section>
    </section>
      <!--main content end-->
</div>      
      
  