    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/client/vk.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

<!--Form Section
===============================-->
<form action="application-process.php" method="post" enctype="multipart/form-data">
<div class="space"></div>
<div class="container">
	<div class="row">
		<img class="img-career" src="img/client/vectorkey.png">
        <div class="space"></div>

		<div class="col-md-8">
			<div class="box">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>*First Name</label>
							<input type="text" name="apply_first_name" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group">
							<label>*Email</label>
							<input type="email" name="apply_email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label>*Phone Number</label>
							<input type="text" name="apply_phone_number" class="form-control" placeholder="0801-xxxx-xxxx">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>*Last Name</label>
							<input type="text" name="apply_last_name" class="form-control" placeholder="Last Name">
						</div>
					</div>	
				</div>
	
				<div class="row">
					<div class="col-md-7">
						<div class="form-group">
            	        	<label>*Address</label>
            	            <textarea class="form-control" name="apply_address" rows="5" placeholder="Address" required></textarea>
            	        </div>
					</div>
				</div>
	
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>*City</label>
							<input type="text" name="apply_city" class="form-control" placeholder="Your City">
						</div>
						<div class="form-group">
							<label>*Resume</label>
							<input type="file" name="apply_resume">
						</div>	
						<div class="form-group">
							<label>*Position</label>
							<input type="text" name="apply_position" value="<?php echo $_POST['position'];?>" readonly>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input class="form-control btn btn-info" type="submit" name="send_application" value="Send Application">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<div class="space"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>