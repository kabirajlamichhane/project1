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

                            <form method="post" action="" enctype="mutipart/form-data"><br><br />
                              
                                <div class="container"> 
                                    <a href="multiplefile.php" class="btn btn-warning">ADD MULTIEIMAGE</a><br><br />
                                
                                    <table border='1px' class="table">
                                        <tr>
                                            <th>id</th>
                                            <th>IMAGE</th>
                                            <th>PID</th>
                                          <!-- <th>DELETE</th> -->
                                        </tr>      

                                        <?php

                                            include('crud.php');
                                            $obj = new crud;
                                            $res=$obj->IMAGEVIEW();
                                            foreach($res as $row)
                                            {         
                                                        echo"<tr>";
                                                        echo"<td>".$row['id']."</td>";
                                                        echo"<td><img src='image/$row[image]' width='200px',height='200px'></td>";
                                                        echo"<td>".$row['pid']."</td>";
                                                        // echo"<td><a href='controller.php?delete_id=$row[id]'>delete</td>";
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
  