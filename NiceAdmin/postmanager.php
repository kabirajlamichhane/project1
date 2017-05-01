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
                            POSTMANAGER
                        </header>
                        <a href="addslider.php" class="btn btn-success">add slider</a>
                        <div class="panel-body">
                            <div class="container">
                                <form method="post" action="controller.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="post_title">POST-TITLE</label>
                                        <input type="text" name="post_title" placeholder="post title here" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="post_conatain">POST-CONTAIN</label>
                                        <textarea class="form-control" rows="5" name="post_contain">
                                              
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="seo_title">SEO-TITLE</label>
                                        <input type="text" name="seo_title" placeholder="seo title title" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_title">META-TITLE</label>
                                        <input type="text" name="meta_title" placeholder="meta title here" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_keyword">META-KEYWORD</label>
                                        <input type="text" name="meta_keyword" class="form-control" placeholder="meta title here">
                                    </div>

                                    <div class="form-group">
                                        <label for="date">DATE</label>
                                        <input type="text" name="date" placeholder="DD-MM-YYYY" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">STATUS</label>
                                        <select name="status" class="form-control">
                                            <option value="1" name="active">ACTIVE</option>
                                            <option value="0" name="inactive">INACTIVE</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>IMAGE</label>
                                        <input type="file" name="image[]" multiple="multiple" >
                                    </div><br><br />

                                    <input type="submit" name="addpostmanager" value="submit" class="btn btn-primary">
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
  