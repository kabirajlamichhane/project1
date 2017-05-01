<?php
    include('navigation.php');
    if(isset($_GET['error']) && $_GET['error']==1)
    echo "Please enter all the fields";
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
                                $conn=new mysqli("localhost","root","","100");
                                $sql="SELECT * FROM pages";
                                $result=mysqli_query($conn,$sql);
        
                            ?>


                            <form method="post" action="controller.php" enctype="multipart/form-data" onsubmit= "return validation()">
                            	<!-- TITLE:
                            	<input type="text" name="title"> <br> -->
                            	
                                <div class="container">
                            		<div class="form-group">
                            			<h2>create a new page</h2>
                                  		<label for="">title:</label>
                                  		<input type="text"  name="title" id="title" class="form-control" id="usr">
                                    </div>
                            	
                                	<div class="form-group">
                                      		<label for="">Content:</label>
                                      		<textarea class="form-control"  name="content"  id="content" rows="5" id="comment"></textarea>
                                    </div>

                            	    <input type="file" name="image" class="btn btn-warning"><br><br/>

                            	    <div class="container"> 
                            		 <!-- <label>parent_id</label> -->
                                  		<div class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">   
                                            parent_id
                                        </div>

                              		    <select name="parent_id">
                              			    <option>NEWPARENTPAGE</option>
                                        <option>NEWPARENTFOOTERPAGE</option>
                              				<?php 
                              					 while($res=mysqli_fetch_assoc($result))
                              					{
                              						echo "<option>{$res['title']}</option> ";
                              					}
                              				?>	
                              		    </select>

                            	    </div><br><br />  

                              	    <input type="submit" name="submit" value="ADD" class="btn btn-primary">	
                              	</div>
                            </form>

                                <script>
                                	CKEDITOR.replace('content');
                                </script>
                          
                        </div>
                    </section>
                     
                </div>
            </div>
              <!-- Basic Forms & Horizontal Forms-->             
         </section>
    </section>
</div>

<script src="<?php echo siteurl();?>/NiceAdmin/static/script/newscript.js"></script>
<script src="<?php echo siteurl();?>/NiceAdmin/ckeditor/ckeditor.js"></script>


