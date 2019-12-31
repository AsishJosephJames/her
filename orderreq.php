<?php
include('conn.php');
if($_SESSION["id"]==session_id())
{
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>H-Er</title>
<!--

Template 2095 Level

http://www.tooplate.com/view/2095-level

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                            <label style="color:#ee5057;font-size:50px">H-Er</label> 
                                
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  
                                  <li class="nav-item">
                                    <a class="nav-link" href="logout.php">LOGOUT</a>
                                  </li>
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
         


 



<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $_SESSION["uname"];?></h1></div>
    	</div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

     </hr><br>

               
          <ul class="list-group">
            <li class="list-group-item text-muted">Details</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $_SESSION["fname"];?></strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $_SESSION["add1"];?></strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $_SESSION["add2"];?></strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><?php echo $_SESSION["phno"];?></strong></li>
          </ul> 
          
          
         
               
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Requests</a></li>
               
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
			      <form class="form" action="orderreqphp.php" method="post" id="registrationForm">
				 
				  <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Price In Rupees </h4></label>
                              <input type="number" class="form-control" name="price" id="last_name" placeholder="price" required >
							  <input type="text" class="form-control" name="oid" value="<?php echo $_GET['oid']; ?>" id="last_name" hidden  >
							  <input type="text" class="form-control" name="uid" value="<?php echo $_SESSION["uid"];?>" id="last_name" hidden >
							  <input type="text" class="form-control" name="skid" value="<?php echo $_GET['skid'];?>" id="last_name" hidden  >
                          </div>
                      </div>
                      
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>select payment mode</h4></label>
                              
							   <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="pmode" id="adult">
                                                <option value="COD">COD</option>
												<option value="UPI">UPI</option>
												<option value="ONLINE BANKING">ONLINE BANKING</option>
                                               
                                            </select>
                                           
                                        </div>
                          </div>
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Enter <strong>UPI</strong> (If payment mode is UPI) / <strong>Bank Details</strong> (If payment mode is Online Banking) </h4></label>
                              <input type="text" class="form-control" name="upi" id="last_name" placeholder="UPI / Bank Details" >
							  
                          </div>
						   <div class="col-xs-6">
                              <label for="first_name"><h4>select Delivery mode</h4></label>
                              
							   <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="dmode" id="adult">
                                                <option value="Spot Delivery">Spot Delivery</option>
												<option value="No Delivery">No Delivery</option>
												
                                               
                                            </select>
                                           
                                        </div>
                          </div>
                      </div>
          
                      
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Submit</button>
								</div>
                      </div>
              	</form>
              	</form>
              
             </div><!--/tab-pane-->
         
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
            
            
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
                    

</body>
</html>
<?php
}
else
{
  header('Location: index.php');
}
  
  ?>
