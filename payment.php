<?php 
    session_start();
    
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
		<title>Book Room</title>
		<link rel="icon" href="image/logo.png" />
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
										<div class="Aa201812261716At_"><h1>Your Booking For 1 Night</h1></div>
										<div class="Aa201812261750Ah_">
											<div class="Aa201812261756Ay_">
												<div class="A201812261822At_">
													<span>Guest Details</span>
												</div>
												<div class="Aa201812261831Ay_">
													<form method="post" enctype="application/x-www-form-urlencoded" class="Aa2019131120Ar_">
														<div class="Aa201812261837Ay_">
															<div class="Aa201812261840At_">
																<label>Name</label><br/>
																<input type="text" name="name" required class="Aa201812262158At_"/>
															</div>
															<div class="Aa201812261840At_">
																<label>Mobile Number</label><br/>
																<input type="text" name="mobile" required class="Aa201812262158At_"/>
															</div>
															<div class="Aa201812261840At_">
																<label>Email</label><br/>
																<input type="text" name="email" required class="Aa201812262158At_"/>
															</div>
														</div>
													</form>
												</div>
												<div class="Aa201812262218Ay_">
													<span>Payment Details</span>
												</div>
												<div class="Aa2018122620182242Ar_">
													<div class="Aa201812262259Ar_">
														<div class="Aa201812262311Ae_">
															<div class="Aa201812262312Fg_">
																<div class="Aa201812262314Ar_">
																<i class="Aa201812262311Ay_ fa fa-arrow-left"></i>
																	<label>Wed 26 December 2018</label>
																</div>
																<div class="Aa201812262314Ar_">
																	<div class="Aa201812262334Au_">
																		<span>Checkin Time : 12:30Am</span>
																	</div>
																</div>
															</div>
															<div class="Aa201812262312Fg_">
																<div class="Aa201812262314Ar_">
																<i class="Aa201812262311Ay_ fa fa-arrow-right"></i>
																	<label>Wed 27 December 2018</label>
																</div>
																<div class="Aa201812262314Ar_">
																	<div class="Aa201812262334Au_">
																		<span>CheckOut Time : 11:30Am</span>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="Aa201812262218Ay_">
													<div class="Aa201812262340Au_">
														<div class="Aa201812262352Ay_">
															<div class="Aa20181227000Ay_">
																<i class="fa fa-group"></i>
																<span>1 Normal Room, 01 Guest, 1 Night</span>
																<a href="booking.php"><button>Edit</button></a>
															</div>
														</div>
													</div>
												</div>
												<div class="Aa201812270055Au_">
													<div class="Aa20181227057At_">
														<div class="Aa20181227058Au_">
															<div class="Aa20181227058Au_">
																<div class="Aa20181227101Ae_">
																	<div class="Aa20181227102Au_">
																		<div class="Aa20181227104Au_">
																			<div class="Aa20181227105Ay_">
																				<div class="Aa20181227102Au_" >
																					<div class="Aa20181227107Ay_">Booking Amount</div>
																					<div class="Aa20181227107Ay_">GST(18%)</div>
																					<div class="Aa20181227107Ay_">Coupon Discount</div>
																					<div class="Aa20181227107Ay_">Payable Amount</div>
																				</div>
																			</div>
																			<div class="Aa20181227105Ay_">
																				<div class="Aa20181227102Au_">
																					<div class="Aa20181227107Ay_"><i class="fa fa-inr"></i> 3000 x 1 Room</div>
																					<div class="Aa20181227107Ay_"></div>
																					<div class="Aa20181227107Ay_">HAAPYNEWYEAR</div>
																					<div class="Aa20181227107Ay_"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="Aa20181227101Aa_">
																	<div class="Aa20181227102Au_">
																		<div class="Aa20181227107At_"><i class="fa fa-inr"></i> 3000</div>
																		<div class="Aa20181227107At_"><i class="fa fa-inr"></i> 540</div>
																		<div class="Aa20181227107At_">&#45; <i class="fa fa-inr"></i> 540</div>
																		<div class="Aa20181227107At_"><i class="fa fa-inr"></i> 3000</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="Aa20181227034At_">
													<div class="Aa20181227035Au_">
														<button class="Aa20191021118Ar_"><i class="fa fa-long-arrow-right"></i> Pay Now</button>
														<button class="Aa20191021118At_"><i class="fa fa-long-arrow-right"></i> Pay At Hotel</button>
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
				$(".Aa201812262158At_").focusin(function(){
					$(this).prev().prev().css({"top":"16px","font-size":"13px","background-color":"white"});
				});
				$(".Aa201812262158At_").focusout(function(){
					if($(this).val().trim().length==0){
					$(this).prev().prev().css({"top":"38px","font-size":"15px","background-color":"transparent"});
					}
				});
                $(".Aa20191021118Ar_").click(function(){
                    $(".Aa2019131120Ar_").attr("action","php/book.php?amount=3000&pay=paid");
                    $(".Aa2019131120Ar_").submit();
                    
                });
                $(".Aa20191021118At_").click(function(){
                    $(".Aa2019131120Ar_").attr("action","php/book.php?amount=3000&pay=Pay At hotel");
                    $(".Aa2019131120Ar_").submit();
                    
                });
			});
		</script>
	</body>
</html>