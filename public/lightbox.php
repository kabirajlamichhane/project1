<!DOCTYPE html>
<html>
<head>
	<title>for test light box</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/css/lightbox.css">

	
	<link rel="stylesheet" href="static/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	
     
     
</head>
<body>
	<div class="container">
		<div class="gallery">
			<div class="row">
			<div class="col-lg-4">
				<a href="../admin/image/c1.jpg"	data-title="1st-time" rel="prettyPhoto[gallery1]">
				<img src="../admin/image/c1.jpg" class="img-thumbnail"/></a>
			</div>

			
		<div class="col-lg-4">
				<a href="../admin/image/c1.jpg"	data-title="1st-time" rel="prettyPhoto[gallery1]">
				<img src="../admin/image/c1.jpg" class="img-thumbnail"/></a>
			</div>
	
	

				
		<div class="col-lg-4">
				<a href="../admin/image/c1.jpg"	data-title="1st-time" rel="prettyPhoto[gallery1]">
				<img src="../admin/image/c1.jpg" class="img-thumbnail"/></a>
			</div>
	
	





		</div>		
	</div>

	


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
</html>