 <?php
       
          $id=$_GET['title_id'];
          $conn=new mysqli("localhost","root","","100");
          $sql="SELECT * FROM pages WHERE id=$id";
          $res=mysqli_query($conn,$sql);
          $result=mysqli_fetch_assoc($res);
          
            echo $result['content'];
            echo"<a href=../admin/image/{$result['image']} rel=\"prettyPhoto[gallery1]\">";
            echo "<img src=../admin/image/{$result['image']} >";
            echo "</a>";
          
       
?>   
 