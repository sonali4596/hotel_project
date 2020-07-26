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
		<link rel="stylesheet" href="css/order54.css" />
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
        <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
		<link rel="stylesheet" href="css/footer.css" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<title>Order</title>
		<link rel="icon" href="image/logo.png" />
	</head>
	<body>
		<div id="footer-div">
			<?php include("php/menu.php"); ?>
			<div class="Aa201812291926Au_">
				<div class="Aa201812291930Au_">
					<!--head part-->
					<div class="Aa201812291934Au_">
						<div class="Aa201812292047Ay_">
							<div class="Aa201812292052Ay_">
								<div class="Aa201812292233At_">
									<div class="Aa201812292233Ag_">
										<div class="Aa201812292234Ay_">
											<div class="Aa201812292234Ah_">
												<h1>Changing The Way of Hospitability</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="Aa201812292206Ar_">
									<div class="Aa201812292239Ay_">
										<div class="Aa201812292240At_">
											<form action="php/crn_login.php" enctype="application/x-www-form-urlencoded" method="post">
												<div class="Aa201812292228Au_">
													<div class="Aa201812292232At_">
														<label>Email/Phone</label><br/>
														<input type="text" name="email" class="Aa201812292231Au_" />
													</div>
													<div class="Aa201812292232At_">
														<label>CRN Code</label><br/>
														<input type="text" name="crn" class="Aa201812292231Au_" />
													</div>
													<div class="Aa201812301454At_">
														<button type="submit" name="submit">Submit</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="Aa201812292047At_">
							<div class="Aa201812292052Ay_">
								<div class="Aa201812292107At_">
									<img src="image/otherorder.png" height="500px" />
								</div>
							</div>
						</div>
					</div>
					<!--bottom-part-->
					<div class="Aa201812292119ah_">
                        <div class="Aa201812302050Ay_">
                            <div class="Aa201812302111Ag_">
                                <div class="Aa2018123020182100Ag_">
                                    <div class="Aa201812302109At_"></div>
                                    <div class="Aa201812302102Ag_">Our Features</div>
                                    <div class="Aa201812302109At_"></div>
                                </div>
                            </div>
                        </div>
						<div class="Aa201812301616Ag_">
							<div class="Aa201812301621Ag_">
								<div class="Aa201812301621Ag_">
									<div class="Aa201812301736Ag_">
										<div class="Aa201812301739At_">
											<div class="Aa201812301740Ay_">
												<div class="Aa201812301742At_">
													<div class="Aa201812301745Ag_">
														<div class="Aa201812302043Ay_"><img src="image/other/tray.png" /></div>
														<div class="Aa201812302041Ay_">High Quality Food</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Aa201812301739At_">
											<div class="Aa201812301740Ay_">
												<div class="Aa201812301742At_">
													<div class="Aa201812301745Ag_">
														<div><img src="image/other/dinner-table.png" /></div>
														<div class="Aa201812302041Ay_">Best Dining experience</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Aa201812301739At_">
											<div class="Aa201812301740Ay_">
												<div class="Aa201812301742At_">
													<div class="Aa201812301745Ag_">
														<div class="Aa201812302029Ag_"><img src="image/other/coins.png" height="70"/></div>
														<div class="Aa201812302041Ay_">At Fair Price</div>
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
		<script>
			$(document).ready(function(){
				$(".Aa201812292231Au_").focusin(function(){
					$(this).prev().prev().css({"top":"0px","font-size":"13px"})
				});
				$(".Aa201812292231Au_").focusout(function(){
					if($(this).val().trim().length==0){
					$(this).prev().prev().css({"top":"25px","font-size":"15px"})
					}
				});
			});
		</script>
	</body>
</html>