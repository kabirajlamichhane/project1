<from >
<?php $conn=new mysqli("localhost","root","","100");?>
	<table>
		<tr>
			<td>select country</td>
				<td>
				<select  class="change" id="country">
					<option>
						select
					</option>
						<?php

						
						$sql="SELECT * FROM countries";
						$result=mysqli_query($conn,$sql);
						// print_r($result);die;
						while($res=mysqli_fetch_assoc($result))
						{
							?>

							<option value="<?php echo $res['id']?>">
								<?php echo $res['name'] . $res['sortname'] .$res['phonecode'];?>
							</option>
							<?php
						}
						
					?>
					</option>
					
				</select>	
			</td>
		</tr>

		<tr>
			<td>states</td>
			<td>
				<div id="state">
					<select>states
						<option>
							
						</option>
					</select>
				</div>	
			</td>
		</tr>
	</table>
</from>


