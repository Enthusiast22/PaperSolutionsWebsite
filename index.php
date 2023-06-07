<?php
require_once"dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Index</title>

     <link href="style.css" rel="stylesheet">

    <link href="css/responsive/responsive.css" rel="stylesheet">
<script src="jquery.min.js"></script>
	<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();
aler(query);		   
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchinput.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                          
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      }); 

$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });	  
 });  
 </script>  
</head>

<body>
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

   <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">PAPER SOLUTIONS</a>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    
                                </li>
                                
                            </ul>
                             <div class="dorne-signin-btn">
							   <?php
							   if(isset($_SESSION['login']))
							   {
								   ?><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              
								<a class="nav-link" href="mycart.php">My Cart</a>
								<a class="nav-link" href="category.php">Category</a>
                              
                                    <a class="nav-link" href="logout.php">Logout</a>
                                    
                                    
                               
								   
								   <?php
							   }
								   else
								   {
									   ?>
									   <a href="ragister.php">Login</a>
                                       <a href="signup.php">Admin</a>
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								<a class="nav-link" href="category.php">Category</a>
                              
								   <?php
								   }
							   
							   ?>
                                
                            </div>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
     <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                
                    

   

		 	
</div>
</div>
<div id="countryList" style="background-color:yellow"></div>	

                </div>
            </div>
        </div>
       
        
    </section>
    <!-- <div class="section-heading dark text-center" style="margin-top:7rem;">
                    <p style="font-size:30px"></p>
                        <span></span>
                        <h4></h4>
                        
                    </div>


    <section style="display:flex; justify-content: center;
  align-content: center;">
    <div class="card mb-3" style="width: 18rem; margin:3rem; padding:4rem;">
  <div class="card-body">
  <a href="#en" target="_blank">
    <h5 class="card-title">Engineering</h5>
    
    </a>
  </div>
</div>
<div class="card mb-3" style="width: 18rem; margin:3rem; padding:4rem;">
  <div class="card-body">
  <a href="#en" target="_blank">
    <h5 class="card-title">Pharmacy</h5>
    
    </a>
  </div>
</div> <div class="card mb-3" style="width: 18rem; margin:3rem; padding:3.7rem;">
  <div class="card-body">
  <a href="#en" target="_blank">
    <h5 class="card-title">Management</h5>
    
    </a>
  </div>
</div>
    </section> -->
    

    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                    <p style="font-size:30px;">Latest Solutions</p>
                        <span style="background-color:yellow"></span>
                        <h4></h4>
                        
                    </div>
                </div>
            </div>

            <div class="row" id="en">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='engineering'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <div class="single-features-area">
                            <a href="view_detail.php?id=<?=$itemid?>">
                            <img src="img/qp.jpg" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 
                                 <p><?=$category?>
                                 <?=$branch?>
                                 <?=$subject?> 
                                 <?=$Title?>
                                 <?=$year?></p>
                               
                                   <h5><?=$price?>/-</h5></br>
								     </div>
                                
								<?php //for($i=1;$i<=$item_rating;$i++) :  ?>

								<!-- <i class="fa fa-star" style="color:red" aria-hidden="true"></i> -->
                               <?php // endfor; ?>
                                    
                            </div></a>
                        </div>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='pharmacy'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="img/qp.jpg" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                                <p>
                                <?=$category?>
                                 <?=$branch?>
                                 <?=$subject?>
                                 <?=$Title?>
                                  <?=$year?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php //for($i=1;$i<=$item_rating;$i++) :  ?>

								<!-- <i class="fa fa-star" style="color:red" aria-hidden="true"></i> -->
                               <?php  //endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='management'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="img/qp.jpg" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
                                <p>
                                <?=$category?>
                                 <?=$branch?>
                                 <?=$subject?> 
                                 <?=$Title?>
                                 <?=$year?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php //for($i=1;$i<=$item_rating;$i++) :  ?>

								<!-- <i class="fa fa-star" style="color:red" aria-hidden="true"></i> -->
                               <?php  //endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			
			<!-- <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                      -->
					 <?php
					//  $result=select("select * from items where category='Cleaninghousehold'");
					//  while($r=mysqli_fetch_array($result))
					//  {
					// 	 extract($r);
					 ?>
                        <!-- <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                          
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div> -->
                                
								
								<!-- <i class="fa fa-star" style="color:red" aria-hidden="true"></i> 
                               <?php  //endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					//  }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			
        </div>
    </section>
     -->

    <!-- ***** Clients Area Start ***** -->
    

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made by Akanksha Jadhav</a>

                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>