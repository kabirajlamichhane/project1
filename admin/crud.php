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
  } 


    