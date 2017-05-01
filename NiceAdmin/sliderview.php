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
                          slidermanager
                        </header>
                        <div class="panel-body">      
                            <form method="post" action="controller.php" >
                            
                            <div class="container">

                            <a href="addslider.php" class="btn btn-primary">ADD SLIDER</a><br><br>
                                <table border='1px' class="table">
                                    <tr>
	                                    <th>id</th>
	                                    <th>TITLE</th>
	                                    <th>DESCRIPTION</th>
	                                    <th>IMAGE</th>
	                                    <th>EDIT</th>
	                                    <th>DELETE</th>
                                   </tr>
                            
                                    <?php
                                        
                                        $conn=new mysqli("localhost","root","","100");
                                        $sql="SELECT * FROM sliderimage";
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            echo"<tr id=\"Table$row[id]\">";
                                            echo"<td>".$row['id']."</td>";
                                            echo"<td>".$row['title']."</td>";
                                            echo"<td>".$row['description']."</td>";
                                            echo "<td><img src=\"sliderimage/{$row['sliderimage']}\" width='200px' height='150px'></td>";
                                            echo"<td><a href='editslider.php?slideredit_id=$row[id]' class=\"btn btn-warning\">edit</a></td>";
                                            echo "<td><a class=\"btn btn-danger del\" id=\"$row[id]\">DELETE</a></td>"; 
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

<script type="text/javascript">

		$('.del').click(function()
		{
			var id=$(this).attr("id");
			var confirmQuery = confirm("are you sure you want to delete it?");
			
			if(confirmQuery)
			{
				$.ajax
				({
					type: 'GET',
					url: 'delete.php',
					data: {
						sliderid:id	
					},
					success: function()
					{
						var row = document.getElementById("Table" + id);
						row.parentNode.removeChild(row);			
					}
				});
			}
		});

	</script>  
 