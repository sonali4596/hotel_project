<?php 
    session_start();
    if(isset($_GET['signin'])){
        
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Akitstee Technologies Private Limited" />
		<meta  name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/menu25.css" />
		<link rel="stylesheet" href="css/footer45.css" />
		<link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="image/logo.png" />
		<link rel="stylesheet" href="css/signup85.css" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<div id="footer-div">
			<?php include("php/menu.php"); ?>
			<div class="Aa201812131514Av_">
				<div class="Aa201812131637Av_">
					<div class="Aa201812131713Av_">
						<div class="Aa2014812131734Av_">
							<div class="Aa201812132239Av_">
								<div class="Aa201812132306Av_">
									<div class="Aa201812132307Av_">
										<div class="Aa12132315Ab_"><img src="image/signnext.jpg" height="500" /></div>
										<div class="Aa201812141633Av_">
											<div class="Aa201812141654Av_">
												<div class="Aa201812141702Av_">
													<div class="Aa201812141703Av_"><button><i class="fa fa-google"></i> Login With Gmail</button></div>
													<div class="Aa201812141703Av_"><button><i class="fa fa-facebook"></i> Login with Facebook</button></div>
												</div>
											</div>
										</div>
									</div>
									<div class="Aa201812132307Av_">
										<div class="Aa201812141727Av_">
											<div class="Aa201812141741Av_ active">
												<div class="Aa201812141744Av_">
													<h3>SIGN UP</h3>
													<div class="Aa201812141811Av_">
														<div class="Aa2018121420181812Av_">
															<form action="php/signup.php" enctype="application/x-www-form-urlencoded" method="post" >
																<div class="Aa201812141827Av_">
																	<label>Name</label><br/>
																	<input type="text" name="name" required>
																</div>
																<div class="Aa201812141827Av_">
																	<label>Email</label><br/>
																	<input type="email" name="email" required>
																</div>
																<div class="Aa201812141827Av_">
																	<label>Phone</label><br/>
																	<input type="tel" name="phone" required>
																</div>
																<div class="Aa201812141827Av_">
																	<label>Password</label><br/>
																	<input type="password" name="pwd">
																</div>
																<div class="Aa201812141926Av_">
																	<button name="submit" type="submit">SIGN UP</button>
																</div>
															</form>
															<div class="Aa201812142113Av_">
																Already Have Account ? <a  class="Aa201812142124Av_" id="Aa2019111501Ar_">SIGN IN</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="Aa201812141741Av_">
												<h3>SIGN IN</h3>
												<div class="Aa201812141811Av_">
													<div class="Aa2018121420181812Av_">
														<form action="#" enctype="application/x-www-form-urlencoded" >
															<div class="Aa201812141827Av_">
																<label>Email</label><br/>
																<input type="email" name="name">
															</div>
															<div class="Aa201812141827Av_">
																<label>Password</label><br/>
																<input type="password" name="name">
																<a class="Aa201812142139Av_" href="#">Forgot Password</a>
															</div>
															<div class="Aa201812141926Av_ Aa201812142200Av_">
																<button>SIGN IN</button>
															</div>
														</form>
														<div class="Aa201812142113Av_">
															Don't Have Account ? <a class="Aa201812142124Av_">SIGN UP</a>
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
		<script>
			$(document).ready(function(){
				$(".Aa201812141827Av_ input").click(function(){
					$(this).prev().prev().css({"top":"0px","font-size":"15px"})
				});
				$(".Aa201812142124Av_").click(function(){
					if($(this).parent().parent().parent().parent().parent().hasClass("active")){
						$(".Aa201812141741Av_").css("top","-475px");
						$(".Aa201812141741Av_").eq(0).removeClass("active");
					}else{
						$(".Aa201812141741Av_").css("top","20px");
						$(".Aa201812141741Av_").eq(0).addClass("active");
					}
				});
                <?php 
                    if(isset($_GET['signin'])){
                        if($_GET['signin']=="1"){
                            
                            echo "$('#Aa2019111501Ar_').click()";
                        }
                    }
                ?>
			}); 
             
		</script>
	</body>
</html>