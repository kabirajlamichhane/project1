 <?php
       
          $id=$_GET['post_id'];
          $conn=new mysqli("localhost","root","","100");
          $sql="SELECT post_contain FROM post_manager WHERE id=$id";
          $res=mysqli_query($conn,$sql);
          $content = mysqli_fetch_assoc($res);
          echo $content['post_contain'];

          
       
?>   