 <?php $conn=new mysqli("localhost","root","","100");?>
 <?php
       
         $id=$_GET['state'];
		$state="SELECT  * FROM  states WHERE country_id='$id'";

		$result1=mysqli_query($conn,$state);

		while($row=mysqli_fetch_assoc($result1))
			{
				?>
				
				<option><?php echo $row['name'];?></option>

				<?php
			}


            
            
          
       
?>   
 