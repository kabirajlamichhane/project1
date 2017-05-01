<?php
  include('navigation.php');
?>

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
                        ADDSLIDER
                      </header>

                      <div class="panel-body">                 
                       
                        <div class="container">
                          <form method="post" action="controller.php" enctype="multipart/form-data">
                            <div class="from-group">
                              <label for="title">TITLE</label>
                              <input type="text" name="title" class="form-control" placeholder="title here">
                            </div><br><br />

                            <div class="from-group">
                              <label for="description">DESCRIPTION</label>
                              <textarea class="form-control" rows="5" name="description"></textarea>
                            </div><br><br>

                            <div class="from-group">
                              <label for="sliderimage">SLIDERIMAGE</label>
                              <input type="file" name="sliderimage" class="btn btn-danger">
                            </div><br><br>

                            <div class="from-group">
                              <button class="btn btn-primary" name="addslider">SUBMIT</button>
                            </div>
                          </form>
                          
                        </div>
                      
                      </div>
                  </section>
                 
              </div>
          </div>
                  <!-- Basic Forms & Horizontal Forms-->  
      </section>
  </section>
  <!--main content end-->
  
