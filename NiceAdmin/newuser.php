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
                            <form method="post" action="controller.php" onsubmit="return validation()">
                                <h4> create new user</h4>

                                <div class="form-group">
                                    <label for="usr">email:</label>
                                        <input type="text" name="email" class="form-control" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" name="password" class="form-control" id="pwd">
                                </div>
              
                                <button type="submit" name="admin" value="submit" class="btn btn-success">submit</button><br /><br />
               
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
 