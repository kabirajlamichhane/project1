<?php
  include('navigation.php');
?>
<div>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
    		    <div class="row">
    				<div class="col-lg-12">
      					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
      					<ol class="breadcrumb">
      						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
      					</ol>
    				</div>
    			</div>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                PAGE MANAGER
                            </header>

                            <div class="panel-body">
                                <form method="post" action="mailsend.php">
                                    <div class="container">
                                        <div class="page-header">
                                            <h1>CONTACT US !!</h1>
                                        </div>

                                        <div cla="from-group">
                                            <label>NAME</label>
                    
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="text"  class="form-control" placeholder="name is required"/>
                                            </div>  
                                        </div><br><br/>   

                                        <div cla="from-group">
                                            <label>EMAIL</label>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="text"  class="form-control" placeholder="email is required"/>
                                            </div>  
                                        </div><br><br /> 


                                        <div cla="from-group">
                                            <label>PHONE</label>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                                <input type="text"  class="form-control" placeholder="phone is required"/>
                                            </div>  
                                        </div><br><br /> 

                                        <div cla="from-group">
                                            <label>MESSAGE</label>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-text-o"></i>
                                                </span>
                                                <textarea type="text"  class="form-control" placeholder="message is required" rows="5/">
                                                    
                                                </textarea>
                                            </div>  
                                        </div><br><br/> 

                                        <div  class="from-group">
                                            <button  type="submit" name="send" value="submit" class="btn btn-success">
                                                SUBMIT
                                            </button>
                                        </div>
                                    </div>                    
                                 </form>                              
                             </div>
                    </section>
                         
                </div>
            </div>
              <!-- Basic Forms & Horizontal Forms-->
        </section>
    </section>
      <!--main content end-->
</div>      