<?php
  include('databaseconnection.php');
  // include($_SERVER['DOCUMENT_ROOT'].'/CMS/DATABASE/databaseconnection.php');
  class crud extends dbconn
	 {
		  public function  __construct()
      {
     	  parent::__construct();
      }

     	public function LOGIN($email,$password)
     	{
     		$sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
     		$result= $this->conn->query($sql);
     		return $result;
     	}

     	// satrt remember me //
    	public function REMEMBERME()
     	{
          	$sql="SELECT * FROM user";
          	$result=$this->conn->query($sql);
          	return $result;

     	}

     	//start manager addnew pagge//
     	public function INSERT($parent_id,$title,$content,$image)
    	{
         	 $sql="INSERT INTO pages(`parent_id`,`title`,`content`,`image`) VALUES($parent_id,'$title','$content','$image')";
          	$result=$this->conn->query($sql);
          	return $result;
     	}


      //start a view pages//
      public function SELECT()
      {
          $sql ="SELECT * FROM pages";
          $result=$this->conn->query($sql);
          return $result;
      }
      //end view page//


      //upadte section start here//
      public function UPDATE($id,$title,$content,$image)
      {

          $sql="UPDATE PAGES SET title='$title',content='$content',image='$image' WHERE id=$id;";
          $result=$this->conn->query($sql);
          return $result;
      }

       //start delete section here//
      public function DELETE($id)
      {
          $sql ="DELETE FROM pages WHERE id ='$id'";
          $result= $this->conn->query($sql);
          return $result;
      }

      // for multiple image//
      public function IMGINSERT($image)
      {
          $sql ="INSERT INTO multiplefile(image)values('$image')";
          $result=$this->conn->query($sql);
          return $result;
      }

      public function IMGSELECT()
      {
          $sql="SELECT * FROM multiplefile";
          $result=$this->conn->query($sql);
          return $result;
      }

      public function DELETEMULTI($id)
      {
          $sql="DELETE FROM multiplefile WHERE id='$id'";
          $result=$this->conn->query($sql);
          return  $result;
      }


      // //siteconfiguration
      public function ADMIN($id,$email,$password)
      {
          $sql="UPDATE  user SET email='$email' AND password='$password' WHERE id=$id";
          $result=$this->conn->query($sql);
          return $result;

      }
    
     
      //for images//
      public function INSERTIMAGES($pid,$image)
      {
        $sql="INSERT images (`pid`,`image`)VALUES('$pid','$image')";
        $result=$this->conn->query($sql);
        return $result;
      }

      //for image view//
      public function IMAGEVIEW()
      {
        $sql="SELECT * FROM images";
        $result=$this->conn->query($sql);
        return $result;
      }

      //forgot password//
      public function forgot($email)
      {
        $sql="SELECT  * FROM user WHERE email='$email'";
        $result=$this->conn->query($sql);
        return $result;
      }
      // //change password//
      public function change_select()
      {
        $sql="SELECT * FROM user";
        $result=$this->conn->query($sql);
        return $result;

      }

      public function update_password($id, $email, $password)
      {
        $sql ="UPDATE user SET email='$email',password='$password' WHERE id='$id'";
        $result=$this->conn->query($sql);
        return $result;


      }
      //make a new admin user//
      public function ADMININSERT($email,$password) 
      {
        $sql="INSERT  user(`email`,`password`)VALUES('$email','$password')";
        $result=$this->conn->query($sql);
        return $result;

      }

      //for site update setting//
      public function INSERTSETTING($id,$sitename,$footername,$logo)
      {
        $sql="INSERT INTO setting(`id`,`sitename`,`footername`,`logo`) values($id,'$sitename','$footername','$logo')
        ON DUPLICATE KEY UPDATE id=$id,sitename='$sitename',footername='$footername',logo='$logo'";
        $result=$this->conn->query($sql);
        return $result;
        // print_r($result);die;
      }

      

     //for admin choes page//
      public function pagesid($title)
      {
         $query = "SELECT * FROM pages WHERE title = '{$title}'";
            
         $result=$this->conn->query($query);

        return $result;

      }

      //for sliderimage//
      public function sliderimage_insert($title,$description,$sliderimage)
        {
          $sql="INSERT INTO sliderimage(`title`,`description`,`sliderimage`) VALUES('$title','$description','$sliderimage')";
          $result=$this->conn->query($sql);
          // print_r($result);
          return $result;
        }

        //for sliderimagedelete//
        public function sliderimagedelete($id)
          {
            $sql="DELETE FROM sliderimage WHERE id='$id'";
            $result=$this->conn->query($sql);
            return $result;
          }

        //for sliderimageupadte//
        public function UPDATESLIDER($id,$title,$description,$sliderimage)
          {
            $sql="UPDATE sliderimage SET id='$id',title='$title',description='$description',sliderimage='$sliderimage'";
            $result=$this->conn->query($sql);
            // if(!$result)
            // {
            //   die(mysqli_error($this->conn));
            // }
            return $result;
          }  

          
         //for postamagerinsert//
         public function POSTMANAGER_INSERT($post_title,$post_contain,$seo_title,$meta_title,$meta_keyword,$date,$val,$status){
            $sql="INSERT INTO post_manager (`post_title`,`post_contain`,`seo_title`,`meta_title`,`meta_keyword`,`date`,`image`,`status`) VALUES('$post_title','$post_contain','$seo_title','$meta_title','$meta_keyword','$date','$val',$status)";
              
            $result=$this->conn->query($sql);
            // if(!$result){
            //   die("hello".mysqli_error($this->conn));
            // print_r($result);die;
            // }
            return $result;
          
          }


         //for postmanager delete//
          public function POSTMANAGERDELETE($id)
          {
            $sql="DELETE FROM post_manager WHERE id='$id'";
            $result=$this->conn->query($sql);
            return $result;
          } 


          //for postmanagerupdate//
          public function POSTMANAGERUPDATE($post_title,$post_contain,$seo_title,$meta_title,$meta_keyword,$date,$val,$status,$id)
          {
            $sql="UPDATE post_manager SET post_title='$post_title',post_contain='$post_contain',seo_title='$seo_title',meta_title='$meta_title',meta_keyword='$meta_keyword',date='$date',image='$val',status='$status' WHERE id='$id'";
              // echo $sql;exit;
            $result=$this->conn->query($sql);
            // if(!$result){
            //   die(mysqli_error($this->conn));
            // }
            return $result;
          }

          //for delete newslettersubscriber//
          public function DELETENEWSSUBSCRIBER($id)
          {
            $sql="DELETE FROM newsletter_subscriber WHERE id='$id'";
            $result=$this->conn->query($sql);
            return $result;
          }
  } 


    