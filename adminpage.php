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
     <title>adminpage</title>

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
<nav class="navbar navbar-expand-lg bg-body-tertiary " style="background-color:black;">
  <div class="container-md">
    <a class="navbar-brand" href="logout.php"><p style="color:white; font-size:20px; margin:1rem;">Logout</p></a>
  </div>
</nav>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Get Solution</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="subject" value="<?php if(isset($_GET['subject'])){echo $_GET['subject'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <div class="container text-center">
                                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                                    <div class="col"><label for="">Name</label>
                                                   </div>
                                                    <div class="col"><label for="">Email</label>
                                                    </div>
                                                    <div class="col"><label for="">College</label>
                                                    </div>
                                                    <div class="col"><label for="">Subject</label>
                                                    </div>
                                                </div>
                                                </div>
                                <?php 
                                   
                                    if(isset($_GET['subject']))
                                    {
                                        $stud_id = $_GET['subject'];

                                        $result =select("SELECT * FROM teachers WHERE subject='$stud_id' ");
                                        while($r=mysqli_fetch_array($result))

                                        {extract($r);
                                        ?>


                                                <div class="container text-center">
                                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                                                    <div class="col">
                                                    <p class="form-control"><?= $name?></p></div>
                                                    <div class="col">
                                                    <p class="form-control"><?= $email?></p></div>
                                                    <div class="col">
                                                    <p class="form-control"><?= $college?></p></div>
                                                    <div class="col">
                                                    <p class="form-control"><?= $subject?></p></div>
                                                    <br>
                                                    <!-- <button class="btn btn-primary form-control" style="width: 200px; margin-left:11rem; margin-bottom:1rem;">Send Request</button> -->
                                                   </div>
                                                    
                                                </div>
                                                </div>
                                            
                                        
                                                <!-- <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <p class="form-control"><?= $itemid?></p>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Class</label>
                                                    <input type="text" value="<?= $Title?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone No</label>
                                                    <input type="text" value="<?= $price?>" class="form-control">
                                                </div> -->
                                                <?php
                                            }}
                                        
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class="sectionps" style="padding:3rem;">
    
    
    <script>
$(function() {

    // $('#login-form-link').click(function(e) {
	// 	$("#login-form").delay(100).fadeIn(100);
 	// 	$("#register-form").fadeOut(100);
	// 	$('#register-form-link').removeClass('active');
	// 	$(this).addClass('active');
	// 	e.preventDefault();                
	// });
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>

<div class="card-header text-center">
                        <h4>Add New Solutions</h4>
                    </div>
<form id="register-form"  method="post" role="form" style="display: flex; padding:3rem;">
        <div class="container text-center">
        <div class="row">
            <div class="col order-last">
           
            <select class="category" id="category" aria-label="Default select example">
            <option selected>Select category</option>
            <option value="1">Engineering</option>
            <option value="2">Pharmacy</option>
            <option value="3">Management</option>
            </select>
            </div>
            <div class="col">
            <input type="text" name="branch" id="branch" tabindex="1" class="form-control" placeholder="Department" value="">
            </div>
            <div class="col order-first">
            <input type="text" name="subject" id="subject" tabindex="1" class="form-control" placeholder="Subject" value="">
            </div><br>

        </div>
        </div>
        <div class="container text-center">
        <div class="row">
            <div class="col order-last">
            <input type="text" name="title" id="title" tabindex="1" class="form-control" placeholder="Semester and month" value="">
            </div>
            <div class="col">
            <input type="number" name="year" id="year" tabindex="1" class="form-control" placeholder="Year" value="">
            </div><br>
            <div class="col order-first">
            <input type="text" name="sol" id="sol" tabindex="1" class="form-control" placeholder="File name" value="">
            </div><br>
            <div style="justify-content:centre; align-content:centre;">
                <button btn btn-primary form-control> <input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Add Now"></button>
            </div>
        </div>
        </div>
</form>
            <!--<div class="form-group">
                <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
            </div>
            <div class="form-group">
                <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
            </div>
            <div class="form-group">
                <input type="text" name="mobile" id="password" tabindex="2" class="form-control" placeholder="Mobile">
            </div>
            <div class="form-group">
                <input type="password" name="password" id="confirm-password" tabindex="2" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                    </div>
                </div>
            </div>-->
        

        <?php
if(isset($_REQUEST['register']))
	 {
        $category = stripslashes($_REQUEST['category']);    // removes backslashes
        // $email = mysqli_real_escape_string($con, $email);
        $branch = stripslashes($_REQUEST['branch']);
        //$password = mysqli_real_escape_string($con, $password);
        $subject = stripslashes($_REQUEST['subject']);
        $title = stripslashes($_REQUEST['title']);
        $year = stripslashes($_REQUEST['year']);
        $sol = stripslashes($_REQUEST['sol']);
    

		extract($_REQUEST);
	 $query="INSERT INTO `items`(`category`, `branch`, `subject`, `title`,`year`,`sol`)
	            values('$category','$branch','$subject','$title','$year','$sol')";
				$n=iud($query);
	 if($n==1)
	{
		echo"<script>alert('Added');
		 window.location='adminpage.php';
		 </script>";
	}
	else
	{
	echo"<script>alert('Something Wrong');
		 window.location='adminpage.php';
		 </script>";
	
	}
	}
	
?>




</section>

















    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Now, we can check the output



Thanks for reading... -->
