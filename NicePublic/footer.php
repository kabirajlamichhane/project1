<?php
	$conn=new mysqli("localhost","root","","100");
	$sql="SELECT * FROM setting";
	$footerpages="SELECT * pages";
	$result=mysqli_query($conn,$sql);
	$resultfooter=mysqli_query($conn,$footerpages);
	$res=mysqli_fetch_assoc($result);
	$resfooter=mysqli_fetch_assoc($resultfooter);
	// print_r($res);die;
?>

<div class="container-fluid">
	<footer class="site-footer">
		
			<div>
				<p>vist us @<a href="http://eaglevisionit.com/">click here</a></p>
			</div>
			<div class="bottom-footer">
				<p> <?php echo $res['footername']; ?> &nbsp all about our company</p>
				<div class="col-md-5">© 2016 Next EAGLE VISIION. All rights reserved.</div>
				<div class="col-md-7">
					<ul class="footer-nav">
						<li><a href="#"><i class="fa fa-facebook">facebook</i></a></li>
						<li><a href="https://twitter.com/"><i class="fa fa-twitter">twitter</i></a></li>
						<li><a href="#"><i class="fa fa-linkedin">linkedin</i></a></li>
					</ul>
			</div>	
			
			</div>
		</div>
		
	</footer>
	
