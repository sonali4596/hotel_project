<?php 
    session_start();
    if(isset($_GET['cdate']) && isset($_GET['codate'])){
        $checkindate=$_GET['cdate'];
        $checkoutdate=$_GET['codate'];
        $room=$_GET['room'];
    }
?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="sudhanshu ranjan" />
		<meta name="description" content="Hotel Booking" />
		<meta name="keywords" content="hotel in allahabad,best hotel in allahabad" />
		<link rel="stylesheet" href="css/menu365.css" />
		<link rel="stylesheet" href="css/footer45.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/payment.css" />
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
		<link rel="stylesheet" href="css/footer.css" />
		<title>Successful Payment</title>
		<link rel="icon" href="image/logo.png" />
        <link rel="stylesheet" href="css/successful.css" />
	</head>
	<body>
		<div id="footer-div">
			<?php include("php/menu.php"); ?>
			<div class="Aa201812242310At_">
				<div class="Aa201812242311An_">
					<div class="Aa201812242312Ay_">
						<div class="Aa201812261625Ay_">
							<div class="Aa201812261653Au_">
								<div class="Aa201812261709Ay_">
									<div class="Aa201812261714Au_">
										<!-- top heading-->
										<div class="Aa201812261716At_"><div><i class="fa fa-check"></i></div></div>
										<div class="Aa201812261750Ah_">
											<div class="Aa201812261756Ay_">
												<div class="Aa2019131203Ar_">
                                                    <h1>You've Paid</h1>
                                                </div>
                                                <div class="Aa2019131209At_">
                                                    <span><i class="fa fa-inr"></i></span>
                                                    <span>3000</span>
                                                </div>
                                                <div class="Aa2019131203Ar_" style="margin-top:30px;">
                                                    <h1>Room No : <?php echo $room ?></h1>
                                                </div>
                                                <div class="Aa201901031217Ah_">
                                                    <div class="Aa2019131221Ar_">
                                                        <div class="Aa2019131224Ag_">
                                                            <div class="Aa2019131226Ag_"><i class="fa fa-building-o"></i></div>
                                                        </div>
                                                        <div class="Aa2019131229Ar_">
                                                            <div class="Aa2019131230Ag_">
                                                                <h3>1 Person | 1 Room | 1 Night</h3>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                 <div class="Aa201901031244Ag_">
                                                    <div class="Aa201901031245Ag_">
                                                        <div class="Aa201901031247Ag_">
                                                            <div class="Aa201901031248Ag_">Check In Date</div>
                                                            <div class="Aa201901031248Ag_"><?php echo $checkindate ?></div>
                                                        </div>
                                                        <div class="Aa201901031247Ag_">
                                                            <div class="Aa201901031248Ag_">Check In Date</div>
                                                            <div class="Aa201901031248Ag_"><?php echo $checkoutdate ?></div>
                                                        </div>
                                                        <div class="Aa201901031252Ag_">
                                                            <a href="index.php"><button>Continue Browsing Our Website</button></a>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("php/footer.php") ?>
		
	</body>
</html>