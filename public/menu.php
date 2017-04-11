
<?php
  
  
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM country ORDER BY country_name";
  $result=mysqli_query($conn,$sql);
   // print_r($result);die;


?>




<!DOCTYPE html>
<html>
<head>
  <title>for meanu page</title>
  <script src="static/js/jquery-3.1.1.min.js"></script>
<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="static/css/datepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="static/script/validation.js"></script>
      
   
     
      
     
      


  
<body>
  <div class="container">
   
        
      
      <div class="col-sm-10" id="content">
    <form method="post" action="controller.php">
      <div class="form-group">
        <label>first name</label>
        <input type="text" name="firstname" id="fname" class="form-control" placeholder="enter first name">
      </div>  

      <div class="form-group">
        <label>last name</label>
        <input type="text" name="lastname" id="lname" class="form-control" placeholder="last name">
      </div>

      <div class="form-group">
        <label>phone number</label>
        <input type="text" name="phonenumber" id="phone" class="form-control" placeholder="phonenumber">
      </div>

      <div class="form-group">
        <label>email</label>
        <input type="text" name="email" id="mail" class="form-control" placeholder="email" ">
      </div>

      <div class="from-group">
        <label>ADDRESS</label>
        <select class="form-control" name="address">
          <option>ADDRESS1</option>
          <option>ADDRESS2</option>
        </select>
      </div><br><br/>

      
      <div class="from-group">
      <label>COUNTRY</label>
      <select class="form-control" name="Country">
      <?php
        while($res=mysqli_fetch_assoc($result)) {?>
        {
          <option ><?php echo $res['country_name']." ".$res['country_code']; ?></option>";
        }
      <?php }?>
      </select>     
      </div><br><br />
      
      <div class="from-group">
        <label>STATE/PROVINCE</label>
        <select class="form-control" name="state">
          <option>STATE/PROVINCE</option>
        </select>
      </div><br><br />

      <div class="from-group">
        <label>CITY</label>
        <select class="form-control" name="city">
          <option>CITY</option>
        </select>
      </div><br><br />


      <div class="from-group">
        <label>POSTAL CODE</label>
        <select class="form-control" name="postelcode">
          <option>POSTAL CODE</option>
        </select> 
      </div><br><br>

      <div class="form-group"> <!-- Date input -->
            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
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
        <div class="checkbox">
            <label><input type="checkbox" name="contactme" value="">phone</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="contactme" value="">email</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="contactme" value="">post</label>
        </div>
      </div>

      <div class="from-group">
      <label>gender</label>
      <div class="radio">
        <label ><input type="radio" name="optradio">MALE</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio">FEMALE</label>
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
      
    </div>
  </div>
</form>
</body>
</html>