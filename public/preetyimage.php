<!DOCTYPE html>
<html>
<head>
	<title>preety image</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
	<script src="static/js/jquery-3.1.1.min.js"></script>
	<script src="static/js/bootstrap.min.js"  ></script>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>


	<script src="static/js/jquery.js" type="text/javascript"></script>
   	<script src="static/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<link rel="stylesheet" href="static/css/prettyPhoto.css" type="text/css" media="screen" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="img/e.jpg" rel="prettyPhoto[gallery1]" alt="image">
				<img src="img/e.jpg">
			</div>

			<div class="col-sm-4">
				<a href="img/e.jpg" rel="prettyPhoto[gallery1]" alt="image">
				<img src="img/e.jpg">
			</div>

			<div class="col-sm-4">
				<a href="img/e.jpg" rel="prettyPhoto[gallery1]" alt="image">
				<img src="img/e.jpg">
			</div>
		</div>		
	</div>
	

	
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
</body>
</html>