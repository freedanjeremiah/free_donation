<?php
session_start();
require_once "Connection.php";
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
$results = mysqli_query($con,"select * from needers");
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
                <a class="navbar-brand" href="MasterUser.php">Kitchen Utensil Donation</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
			   <ul class="nav navbar-nav">
					<li>
                        <a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="needers_view.php">Needers</a>
                    </li>                   					
					
					<li>
                        <a href="feedbacks.php">Feedbacks</a>
                    </li>
		 </ul>
		 <ul class="nav navbar-nav navbar-right">				
				
				<li><a href="logout.php" style='color:#fff;'>Logout</a></li>
				<li style='color:#fff;'><span></span></li>
		</ul>	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
	
  
<br><br><br>
    <!-- Page Content -->
   <div class="container-fluid">
	
		<div class="row">

		
			
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading text-center" style="background-color:#000;color:yellow;"><h3>Utensil Donation Details</h3></div>
					<div class="panel-body"> 
						
						
						<table class="table table-striped table-hover table-bordered">
				<thead class="thead-dark">
					<tr style="Background-color:#000;color:#fff;">
						<th>Needers Id</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>About</th>
						
						
				
						
					</tr>
				</thead>
				<tbody>
					<?php 
						
						while ($row=mysqli_fetch_array($results))
						{
							?>
							<tr>
								<td><?php echo $row[0]; ?></td>
								<td><?php echo $row[1]; ?></td>
								<td><?php echo $row[2]; ?></td>
								<td><?php echo $row[3]; ?></td>
								<td><?php echo $row[4]; ?></td>
								<td><?php echo $row[5]; ?></td>
								<td><?php echo $row[6]; ?></td>
								
				
								
								
							</tr>							
					<?php 
						}
					?>

				</tbody>
			</table>
					
					
				</div>
			</div>
			
		</div>
	</div>
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
