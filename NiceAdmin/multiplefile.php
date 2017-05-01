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
          				<li><i class="fa fa-home"></i><a href="<?php echo siteurl();?>/NiceAdmin/configuration.php"index.php">Home</a></li>
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
                           
                            <form method="post" action="controller.php" enctype="multipart/form-data">
                              
                                <div class="container">
                                    <h3>MULTIPLE FILE</h3>

                                    <input type="file" name="img[]" multiple="" class="btn btn-primary"><br><br />
                                    <input type="submit" name="uplode" value="uplode" class="btn btn-success">

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