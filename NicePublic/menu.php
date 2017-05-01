


<?php
  
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM countries ORDER BY name";
  $country=mysqli_query($conn,$sql);
    // print_r($result);die;


?>
<?php

  $sql1="SELECT * FROM setting";
  $footerpages="SELECT * FROM pages WHERE parent_id=-2";
  $result1=mysqli_query($conn,$sql1);

  $resultfooter=mysqli_query($conn,$footerpages);
  $res1=mysqli_fetch_assoc($result1);

  // $resfooter=mysqli_fetch_assoc($resultfooter);
  // // print_r($res);die;
?>
<!DOCTYPE html>
<html>
<head>
  
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="static/css/datepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
  <script src="static/script/validation.js"></script>

</head>

 
</head>
<body>
<?php include('par.php'); ?>

  <div class="container" style="
    margin-left: 189px; margin-bottom: 50px; overflow-y: scroll;
">
  <!-- <div class="col-sm-10"> -->
	  <div class="page-header">
			<h1>PLEASE FILL THE FORM</h1>
		</div>
   
      <!-- <div class="col-sm-10" id="content"> -->
      <form method="post" action="testcontroller.php" onsubmit="return allvalidation()">
         
              <div cla="from-group">
                <label>FIRSTNAME</label>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input type="text" name="firstname" class="form-control" id="fname" placeholder="first is required"/>
                </div>  
              </div><br><br/> 

              <div cla="from-group">
                <label>LASTNAME</label>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input type="text" name="lastname" class="form-control" id="lname" placeholder="first is required"/>
                </div>  
              </div><br><br/>

              <div class="from-group">
                <label>PHONENUMBER</label>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-mobile"></i>
                    </span>
                    <input type="text" name="phonenumber"  id="phone" class="form-control" placeholder="phone number is required"/>
                </div>  
              </div><br><br/>

              <div class="from-group">
                <label>EMIAL</label>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input type="text" name="email"  id="mail" class="form-control" placeholder="email is required"/>
                </div>  
              </div><br><br/>
              
              <div class="from-group">
                <label>COUNTRY</label>

              <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-flag"></i>
                  </span>
                  <select class="form-control" id="country" name="Country">
                    <option>Select country</option>
                    <?php
                      while($res=mysqli_fetch_assoc($country))  {?>

                      {
                        <option value="<?php echo $res['id']?>" ><?php echo $res['name']." ".$res['sortname']; ?></option>";
                      }
                    <?php }?>
                  </select>  
                </div>  
              </div><br><br/>
                  
              <div class="from-group">
                <label>STATE/PROVINCE</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-globe"></i>
                    </span>
                    <select class="form-control" id="state" name="state">
                      <option>STATE/PROVINCE</option>
                    </select>
                </div>
              </div><br><br />
           <!--  <div id="state"></div> -->
              <div class="from-group">
                <label>CITY</label>
                <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-road"></i>
                    </span>
                    <select class="form-control" name="city">
                      <option>city</option>
                    </select>
                </div>
              </div><br><br />

              <div class="from-group">
                  <label>POSTAL CODE</label>
                  <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </span>
                      <select class="form-control" name="postalcode">
                        <option>POSTALCODE</option>
                      </select>
                  </div>
              </div><br><br />

              <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Date</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </span>
                  <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text"/>
                  </div>  
              </div>
             
              <script>
                  $(document).ready(function(){
                    var date_input=$('input[name="date"]'); //our date input has the name "date"
                    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                    var options={
                      format: 'mm/dd/yyyy',
                      container: container,
                      todayHighlight: true,
                      autoclose: true,
                    };
                    date_input.datepicker(options);
                  })
              </script><br><br />


              <div class="form-group">
                <label >CONTACT ME</label>
                  <div class="checkbox" name="contactme">
        						<i class="fa fa-phone"></i>
                    <label><input type="checkbox" name="contactme_phone" value="phone">phone</label>
                  </div>
                  <div class="checkbox">
        						<i class="fa fa-envelope"></i>
                    <label><input type="checkbox" name="contactme_mail" value="email">email</label>
                  </div>
                  <div class="checkbox">
        						<i class="fa fa-plane"></i>
                    <label><input type="checkbox" name="contactme_post" value="post">post</label>
                  </div>
                </div>

                <div class="from-group">
                  <label>gender</label>
                  <div class="radio" name="optradio">
                    <i class="fa fa-male"></i>
                    <label ><input type="radio"  name="optradio" value="male">MALE</label>
                  </div>
                  <div class="radio">
                    <i class="fa fa-female"></i>
                    <label><input type="radio" name="optradio" value="female">FEMALE</label>
                  </div>
                </div><br><br/>

                <div class="from-group">
                  <label>OTHER NOTES</label>
                  <textarea class="form-control" rows="5" name="othernotes"></textarea>
                </div><br><br />

                <div class="robotic" id="pot">
                  <!-- <label>If you're human leave this blank:</label> -->
                  <input name="robotest" type="hidden" id="robotest" class="robotest" />
                </div>
        <div class="from-group">
          <button type="submit" name="submit" value="submit" class="btn btn-info">submit</button> 
        </div>
   </form>
  </div>

<div style="position: fixed; bottom: 0; height: 50px; background: grey; width: 100%">
  <?php   
      echo "<div class='row'>";
      echo "<span class='col-sm-4' style='color: #fff'>$res1[footername]</span>";
  
      while($footer=mysqli_fetch_assoc($resultfooter))
      {
        echo "<span style='color: #fff'>$footer[title]&nbsp;&nbsp;</span>";
      }
      echo "</div>";
  ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#country").change(function(){
      var id = $(this).val();
      // alert(id);
      $.ajax({
        type: 'GET',
        url: 'state.php',
        data:{
          state: id
        },
        success: function(data){
          $("#state").html(data);
        },

      });
    });
  });

</script>
</body>

</html>
