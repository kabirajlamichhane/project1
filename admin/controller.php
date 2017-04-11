<?php
	session_start();
	include('crud.php');
	// include($_SERVER['DOCUMENT_ROOT'].'/CMS/CRUD/crud.php');

	$obj=new crud();

	if(isset($_POST['login'], $_POST['email'], $_POST['password']))
	{

		$email=$_POST['email'];
		$password=$_POST['password'];
		// $password=md5($_POST['password']);
		$res=$obj->LOGIN($email,$password);
		 // print_r($res);die;
		if ($res->num_rows == 1) 
		{
			
		$_SESSION['email']=$email;
		//remeber function//
			$result=$obj->REMEMBERME();
			if($result)
			{
				if(isset($_POST['rememberme'])) 
				{
					$eamil=$_POST['email'];
					$password=$_POST['password'];
					   	
					$expiretime=time()+(60*60*24);
					setcookie('email',$email,$expiretime);
					setcookie('password',$password,$expiretime);
				}
			
				else
				{
					$unset=time()-(60*60*24*5);
					setcookie('email',$email,$unset);
					setcookie('password',$password,$unset);
				}
				
					header('location:mainview.php');
					 exit;
					// echo "wellcome to new sitesite";// Your email is ".$row['email']." and password is ".$row['password'];
			}
			else
			{
				header('location:index.php');
			}

		}
			else
			{
				header('location:index.php');
			}
	}


	// start addnew page//
	if(isset($_POST['submit']))
	{	
		
		$title =$_POST['title'];
		$parent_title=$_POST['parent_id'];

		if($parent_title == "")
		{
			$parent_id = -1;

		}
		else
		{
			$result = $obj->pagesid($parent_title);
			$page = mysqli_fetch_assoc($result);
			$parent_id = $page['id'];

		}
		$content =$_POST['content'];

		$image=$_FILES['image']['name'];
		$tmp_name=$_FILES['image']['tmp_name'];
		$folder="image/";
		
		move_uploaded_file($tmp_name, $folder.$image);
	
		if(!empty($title) && !empty($content) && !empty($image))
	 	{
			$res=$obj->INSERT($parent_id,$title,$content,$image);
			     // print_r($res);die;
			if($res)
			{
			 	header('location:pageview.php');
			}
			else
			{
				die(mysqli_error($obj));
			}
     	}
			else
	 		{
				 header('location:newpage.php?error=1');

	 		}
	
	}
	// end addnew page//

	// UPADTE PAGE//
	if(isset($_POST['update'])) 
	{
    	$id = $_GET['edit_id'];
    	$title = $_POST['title'];
    	$content = $_POST['content'];
    	$img=$_POST['img'];
    	if (!empty($_FILES['image']['name']))
    	{
        	$image = $_FILES['image']['name'];
        	$tmp_name = $_FILES['image']['tmp_name'];
        	$folder = "image/";
        	move_uploaded_file($tmp_name, $folder . $image);
        	$image_name = $folder . $image;
    	} 
    	else
    	{
        	$image = $img;
    	}

    	$res = $obj->UPDATE($id, $title, $content, $image);
    	if ($res) 
    	{
        	header('location:pageview.php');
    	}
    	else
    	{
    		echo "soory!";
    	}
	}	
	//END UPDATEY PAGE//

	//delete page start here//
    if(isset($_GET['del_id']))
    {
        $id=$_GET['del_id'];
        $res=$obj->DELETE($id);

        if($res)
        {
           	header('location:pageview.php');
        }
        else
        {
          	echo "plz check the code";
        }
    }		
	
	// for mutile file//
	if(isset($_POST['uplode']))
	{

		for ($i=0; $i<count($_FILES['img']['name']); $i++)  
		{
			$image=$_FILES['img']['name'] [$i];
			$tmp_name=$_FILES['img']['tmp_name'] [$i];
			$folder="image/";
			$image_name=$folder.$image;
		
			move_uploaded_file($tmp_name, $image_name);
			if(!empty($image))
			{
				$res=$obj->IMGINSERT($image);
				 // print_r($res);die;
				if($res)
				{
					header('location:multipleview.php');
				}
				else 
				{
					echo "plz try again";
				}
			}
				else
				{
					header('location:multiplefile.php');
				}
		}
	}

	//multiple delete//
	if(isset($_GET['delete_id']))
	{
		$id=$_GET['delete_id'];
		$res=$obj->DELETEMULTI($id);
		if($res)
		{
			header('location:multipleview.php');
		}
		else
		{
			echo"oops! error";
		}
	}

		
	//for images PARENT CHILD RELATION//
	if(isset($_POST['select']))
	{
		$pid=$_POST['pid'];
		$image=$_FILES['image']['name'];
		$tmp_name=$_FILES['image']['tmp_name'];
		$folder="image";
		move_uploaded_file($tmp_name, $folder.$image);
		$res=$obj->INSERTIMAGES($pid,$image);
		// print_r($res);die;
		if($res)
		{
			header('location:imageview.php');
		}
		else
		{
			echo "try again";
		}
	}


	// //forgot password//
	// if(isset($_POST['forgot']))
	// {
	// 	$email=$_POST['email'];
	// 	$res=$obj->forgot($email);
	// 	$row=mysqli_fetch_assoc($res);

	// 	// print_r($row);die;
	// 	if($res)
	// 	{
	// 		// echo "this is your password".$row['password'] ;
	// 		header('location:verification.php');
	// 	}
	// 	else
	// 	{
	// 		echo "not match your mail";
	// 	}
	
	// }	
	//update email  password//
	if(isset($_POST['adminupdate']))
	{
		$id=$_GET['ad_id'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		// $password=md5($_POST['password']);
		$res=$obj->update_password($id,$email,$password);
		// print_r($res);die;
		if($res)
			{
				//echo "done ";
				header('location:adminview.php');
			}
			else
			{
				echo "soory";
			}
	}

	//create new user admin//
	if(isset($_POST['admin']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$res=$obj->ADMININSERT($email,$password);
		// print_r($res);die;
		if($res)
		{
			header('location:adminview');
		}
		else
		{
			echo "sorry";
		}
	}


//FOR WEBSITE SETTING//
		if(isset($_POST['siteupdate']))
		{
				
				$sitename=$_POST['sitename'];
				$footername=$_POST['footername'];
				// echo $footername;die;
				$logo=$_FILES['logo']['name'];
				$tmp_name=$_FILES['logo']['tmp_name'];
				$folder="logo/";
				move_uploaded_file($tmp_name,$folder.$logo);
				$res=$obj->INSERTSETTING(1,$sitename,$footername,$logo);
				// print_r($res);die;
				if($res)

				{
					header('location: ../public/index.php');
				}
				else
				{
					echo "plz";
				}


			
		}	

