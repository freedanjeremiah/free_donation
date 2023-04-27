<?php
session_start();
require "Connection.php";
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kitchen Utensil Donation</title>

    <!-- Bootstrap Core CSS -->
    <link href="new/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="new/css/half-slider.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
		
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="MasterAdmin.php">Kitchen Utensil Donation</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
			   <ul class="nav navbar-nav">
					
                    <li><a href="distribution.php">Distribution</a> </li>
                    <li><a href="needers.php">Needers</a> </li>
                    <li><a href="donation_info.php">Donated Details</a> </li>
                    <li><a href="feedbacks_view.php">Feedbacks</a> </li>
                    <li><a href="contacts_view.php">Contactus Details</a> </li>
                        
                   
			       	
					
		 </ul>
		 <ul class="nav navbar-nav navbar-right">				
				
				<li><a href="logout.php" style='color:#fff;'>Logout</a></li>
		</ul>	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
	
  
<br><br>
    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h3 class="center" align="center" style="color:green;">Kitchen Donations Utensils Feedbacks</h3>
<hr>
		
<table class="table table-striped table-hover table-bordered">
				<thead class="thead-dark">
					<tr>
					<th>Feedback Id</th>
						<th>User Name</th>
						
						<th>Mobile</th>
						
						<th>Feedbacks</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
						$results = mysqli_query($con,"select * from feedbacks");
						while ($row=mysqli_fetch_array($results))
						{
							?>
							<tr>
								<td><?php echo $row['fid']; ?></td>
								
								<td><?php echo $row['username']; ?></td>
								
								<td><?php echo $row['mobile']; ?></td>
								<td><?php echo $row['feedbacks']; ?></td>
								
																								
							</tr>							
					<?php 
						}
					?>

				</tbody>
			</table>		
            </div>
        </div>

        <hr>

        <!-- Footer -->
       

    </div>
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="new/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="new/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>



<div><?php include_once("footer.php"); ?></div>
</body>
</html>
