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
 
                            <form method="post" action="controller.php"> 
                                <div class="table-responsive">
                                    <table class="table" border="1px">

                                        <tr>
                                            <th>ID</th>
                                            <th>EMAIL</th>
                                            <th>DATE/TIME</th>
                                            <th>DELETE</th>
                                        </tr>
                                    
                                        <?php

                                            $conn=new mysqli("localhost","root","","100");
                                            $sql="SELECT * FROM  newsletter_subscriber";
                                            $result=mysqli_query($conn,$sql);
                                            while($res=mysqli_fetch_assoc($result))
                                            {       

                                                echo "<tr>";
                                                echo "<td>".$res['id']."</td>"; 
                                                echo "<td>".$res['email']."</td>";  
                                                echo "<td>".$res['date']."</td>"; 
                                                echo "<td><a href=\"controller.php?newsdelete_id=$res[id]\" class=\"btn btn-danger\">DELETE</a></td>";
                                                echo "</tr>";
                                            }
                                        ?>  
                                  </table>
                                </div>
                            </form>

                            <form method="post" action="excel.php">
                                <button class="btn btn-success" name="excel-export" value="Export to Excel">
                                    EXCEL-EXPORT
                                </button>
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
 