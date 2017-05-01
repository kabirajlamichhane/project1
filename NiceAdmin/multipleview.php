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
                            <div class="container">
                                <a href="addslider.php" class="btn btn-success">ADD SLIDER</a>
                            </div><br><br />  

                            <form method="post" action="" enctype="mutipart/form-data">
                                <div class="container">
                                    <table border='2px' class="table">
                                        <tr class="success">
                                            <th>id</th>
                                            <th>IMAGE</th>
                                            <th>DELETE</th>
                                        </tr>

                                        <?php
                                            // include('slider.php');
                                            include('crud.php');
                                            $obj = new crud;
                                            $res=$obj->IMGSELECT();
                                            foreach($res as $row)
                                            {         
                                                        echo"<tr>";
                                                        echo"<td>".$row['id']."</td>";
                                                        echo"<td><img src='image/$row[image]' width='200px',height='200px'></td>";
                                                        echo"<td><a href='controller.php?delete_id=$row[id]' class='btn btn-danger' onclick=\"return confirm('are u sure')\">delete</td>";
                                                        echo"</tr>";
                                            }
                                        ?>           
                                     </table>
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
  