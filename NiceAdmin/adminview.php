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
                            <form method="post" action="controller.php" >
                            
                            <div class="container">
                                <table border='1px' class="table">
                                    <tr>
	                                    <th>id</th>
	                                    <th>email</th>
	                                    <th>password</th>
	                                    <th>action</th>
                                   </tr>
                            
                                    <?php
                                        include('crud.php');
                                        $obj = new crud();
                                        $result=$obj->change_select();
                                        foreach ($result as $row)
                                        {
                                            echo"<tr>";
                                            echo"<td>".$row['id']."</td>";
                                            echo"<td>".$row['email']."</td>";
                                            echo"<td>".$row['password']."</td>";
                                            echo"<td><a href='editview.php?ad_id=$row[id]' onclick=\"return confirm('Are you sure?') \" class=\"btn btn-warning\">edit</a></td>";
                                            echo"</tr>";
                                        }  
                                    ?>

                              	</table>
                              </div>      
                              </form>
                                <div class="container">
                                <a href="<?php echo siteurl();?>/NiceAdmin/updatesite.php" class="btn btn-danger">WEBSITE SETING</a>
                            </div>
                        </div>
                    </section>
                           
                </div>
            </div>
            <!-- Basic Forms & Horizontal Forms-->
   
        </section>
    </section>
      <!--main content end-->
</div>      
 