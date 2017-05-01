<!-- <?php
// session_start();
//  include('slider.php');

// 	if(!isset($_SESSION['email']))
// 	{
// 		header('location:index.php');
// 	}
?> -->



<body>
 	<form method="post" action=""  >
	
	<div class="container">
	<a href="newpage.php" class="btn btn-info" role="button">ADD PAGE</a> <br><br />
	<table border='1px' class="table">
 		<tr class="success">
	 		<th>id</th>
	 		<th>title</th>
	 		<th>content</th>
	 		<th>image</th>
	 		<th>EDIT</th>
	 		<th>DELETE</th>
	 		<th>parent_id</th>
 		</tr>
	
            <?php

                	include('crud.php');
   					$obj = new crud();
					$result=$obj->SELECT();
					foreach ($result as $row)
				 	{
				 		if($row['parent_id'] == -2)
				 			continue;
    					echo"<tr id=\"Table$row[id]\">";
 		     			echo"<td>".$row['id']."</td>";
 		     			echo"<td>".$row['title']."</td>";
 		     			echo"<td>".$row['content']."</td>";
 		     			echo "<td><img src='image/$row[image]' width='300px' height='150px'</td>";
  		     			echo"<td><a href='edit.php?edit_id=$row[id]' class='btn btn-info'>EDIT</a></td>" ;
 		     			echo"<td><a class='btn btn-danger del' id='$row[id]'>delete</a></td>";
 		     			 echo "<td>".$row['parent_id']."</td>";
 		     			echo"</tr>";
 					}  
			?>

 		 </table><br><br/>
 		  <a href="multipleimage.php" class="btn btn-warning">IMAGE COLLECTION</a>

 		  <h3>footerpages</h3>
 		  
 		  <table border='1px' class="table">
 		<tr class="success">
	 		<th>id</th>
	 		<th>title</th>
	 		<th>content</th>
	 		<th>image</th>
	 		<th>EDIT</th>
	 		<th>DELETE</th>
	 		<th>parent_id</th>
 		</tr>
	
            <?php


					foreach ($result as $row)
				 	{
				 		if($row['parent_id'] != -2)
				 			continue;
    					echo"<tr>";
 		     			echo"<td>".$row['id']."</td>";
 		     			echo"<td>".$row['title']."</td>";
 		     			echo"<td>".$row['content']."</td>";
 		     			echo "<td><img src='image/$row[image]' width='300px' height='150px'</td>";
  		     			echo"<td><a href='edit.php?edit_id=$row[id]' class='btn btn-info'>EDIT</a></td>" ;
 		     			echo"<td><a class='btn btn-danger' ?> >delete</a></td>";
 		     			 echo "<td>".$row['parent_id']."</td>";
 		     			echo"</tr>";
 					}  
			?>

 		 </table><br><br/>
	
 	</div>	  
 	</form>



</body>
</html>

	<script type="text/javascript">

		$('.del').click(function(){
			var id=$(this).attr("id");
			var confirmQuery = confirm("are you sure you want to delete it?");
			
			if(confirmQuery)
			{
				$.ajax
				({
					type: 'GET',
					url: 'delete.php',
					data: {
						id:id	
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
