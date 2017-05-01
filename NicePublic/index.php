<?php include('par.php') ?>
<?php
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM setting";
  $footerpages="SELECT * FROM pages WHERE parent_id=-2";
  $result=mysqli_query($conn,$sql);
  $resultfooter=mysqli_query($conn,$footerpages);
  $res=mysqli_fetch_assoc($result);
  // $resfooter=mysqli_fetch_assoc($resultfooter);
  // // print_r($res);die;
?>
<div style="position: fixed; bottom: 0; height: 50px; background: grey; width: 100%">
  <?php 
      echo "<div class='row'>";
      echo "<span class='col-sm-4' style='color: #fff'>$res[footername]</span>";
  
      while($footer=mysqli_fetch_assoc($resultfooter))
      {
        echo "<span style='color: #fff'>$footer[title]&nbsp;&nbsp;</span>";
      }
      echo "</div>";
  ?>
</div>
