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
                            SITE SETTING
                        </header>
                        <div class="panel-body">                             
                           
                         
                            <form method="post" action="controller.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label >YOUR SITE NAME</label>
                                    <input type="text" class="form-control" name="sitename">
                                </div>

                                <div class="form-group">
                                      <label >footer</label>
                                      <input type="text" class="form-control" name="footername">
                                </div>

                                <div class="form-group">
                                      <label >LOGO</label>
                                      <input type="file" class="btn btn-success" name="logo">
                                </div>

                                <div class="form-group">
                                      <input type="submit" name="siteupdate" value="update" class="btn btn-danger">
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
  