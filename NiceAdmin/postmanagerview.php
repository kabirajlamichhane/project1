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
																
																		 
												
												<form method="post" action="controller.php" enctype="multipart/form-data">
													<div class="container">
													
														<a href="postmanager.php" class="btn btn-primary">ADD POSTMANAGER</a><br><br>

														<div class="table-reposive">
															<table class="table" border="2px">
																<tr>
																	<th>ID</th>
																	<th>POST-TITLE</th>
																	<th>POST-CONTAIN</th>
																	<th>SEO-TITLE</th>
																	<th>META-TITLE</th>
																	<th>META-KEYWORD</th>
																	<th>DATE</th>
																	<th>STATUS</th>
																	<th>IMAGE</th>
																	<th>EDIT</th>
																	<th>DELETE</th>
																</tr>

																<?php
																	
																	$conn=new mysqli("localhost","root","","100");
																	$sql="SELECT * FROM post_manager";
																	$result=mysqli_query($conn,$sql);
																	$images = mysqli_fetch_assoc($result);
																	// $array = explode(",", $images['image']);
																	 // print_r($array[0]);
																	 // die();
																	while($res=mysqli_fetch_assoc($result))
																		{
																			$image = explode(",",$res['image']);
																			

																			echo"<tr id=\"Table$res[id]\">";
																				echo "<td>".$res['id']."</td>"; 
																				echo "<td>".$res['post_title']."</td>"; 
																				echo "<td>".$res['post_contain']."</td>"; 
																				echo "<td>".$res['seo_title']."</td>";  
																				echo "<td>".$res['meta_title']."</td>"; 
																				echo "<td>".$res['meta_keyword']."</td>"; 
																				echo "<td>".$res['date']."</td>"; 
																				echo "<td>".$res['status']."</td>"; 
																				echo "<td><img src=\"sliderimage/{$image['0']}\" width='200px' height='150px'></td>";
																				echo "<td><a href=\"postmanageredit.php?postmanageredit_id=$res[id]\" class=\"btn btn-success\">EDIT</a></td>";
																				echo "<td><a class=\"btn btn-danger del\" id=\"$res[id]\">DELETE</a></td>"; 
																			echo "</tr>";
																		} 
																?>
															</table>
														</div>
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
						postid:id	
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