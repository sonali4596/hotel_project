<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/footer45.css" />
		<title>Hotel Kaveri</title>
		<link rel="icon" href="image/logo.png" />
		<link rel="stylesheet" href="css/menu365.css" />
		<link rel="stylesheet" href="css/home87.css" />
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="css/footer.css" />
	</head>
	<body>
			<div class="Aa20181207745Av_">
			<div class="Aa20181207746As_">
				
			</div>
				<div class="Aa20181207752Av_">
					<div class='Aa20181207756Aa_'>Welcome</div>
					<div class='Aa20181207756Ab_'>To</div>
					<div class='Aa20181207756Ac_'>Hotel Kaveri</div>
				</div>
				<div class="Aa201812131824Av_">
					<div class="Aa201812131842Av_">
						<div class='Aa201812132050Av_'>
							<div class="Aa201812132059Av_">
								<div class="Aa201812132108Av_">
									<input type="text" placeholder="Name" />
									<span><i class="fa fa-user"></i></span>
								</div>
							</div>
						</div>
						<div class='Aa201812132050Av_'>
							<div class="Aa201812132059Av_">
								<div class="Aa201812132108Av_ Aa201812132143Av_">
									<input type="tel" placeholder="No. of Person" />
									<span><i class="fa fa-group"></i></span>
								</div>
							</div>
						</div>
						<div class='Aa201812132050Av_'>
							<div class="Aa201812132059Av_">
								<div class="Aa201812132108Av_">
									<input type="tel" placeholder="From" />
									<span><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class='Aa201812132050Av_'>
						<div class="Aa201812132059Av_">
								<div class="Aa201812132108Av_">
									<input type="tel" placeholder="To" />
									<span><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class='Aa201812132050Av_'>
							<div class="Aa201812132059Av_">
								<div class="Aa201812132108Av_">
									<button>Check availability</button>
								</div>
							</div>
						</div>
						<div class='Aa201812132050Av_'>
							<div class="Aa201812132059Av_">
								<div class="Aa201812132108Av_">
									<div class="Aa201812132232Av_">Already have Booking? </div>
									<a class="Aa201812132232Aa_" href="#">Retrive </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<div id="footer-div">
			<?php include("php/menu.php"); ?>
			<div class="Aa20180712651Av_">
				<div class="Aa201812071941Av_"><h4 class="Aa201812081549Av_">Hotels Rooms</h4></div>
				<div class="Aa201812071952Av_">
					<div class="Aa20180945Av_">
						<div class="Aa201812081557Av_">
							<div class="Aa201812081903Av_">Delux</div>
							<div class="Aa201812081748Av_"><img src="image/slide/162061129.jpg" /> 
								<div class="Aa201812082151Av_">
									<div class="Aa201812082237Av_"><a href="booking.php"><button>Book</button></a></div>
								</div>
							</div>
							<div class="Aa2018121912Av_">s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever accident, sometimes on purpose (injected humour and the like).</div>
						</div>
						<div class="Aa201812081557Av_">
							<div class="Aa201812081903Av_">Supper Delux</div>
							<div class="Aa201812081748Av_"><img src="image/slide/167637585.jpg" /> 
								<div class="Aa201812082151Av_">
									<div class="Aa201812082237Av_"><a href="booking.php"><button>Book</button></a></div>
								</div>
							</div>
							<div class="Aa2018121912Av_">s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever accident, sometimes on purpose (injected humour and the like).</div>
							
						</div>
						<div class="Aa201812081557Av_">
						<div class="Aa201812081903Av_">Normal</div>
							<div class="Aa201812081748Av_"><img src="image/slide/167637143.jpg" /> 
								<div class="Aa201812082151Av_">
									<div class="Aa201812082237Av_"><a href="booking.php"><button>Book</button></a></div>
								</div>
							</div>
							<div class="Aa2018121912Av_">s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever accident, sometimes on purpose (injected humour and the like).</div>
						</div>
					</div>
				</div>
				<div class="Aa2018082205v_">
					<div class="Aa201812082206Ab_">
						<div class="Aa201812132010Av_">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<?php include("php/footer.php") ?>
		</div>
		<script type="text/javascript">
			
			function trans(){
				$(".Aa20181205006Av_,.Aa20181205006Aa_").css("background-color","transparent");
			$(".Aa201812052018029Av_ label>span,.Aa201812052018029Av_ label>span>a,.Aa201812052018016Av_ span").css('color',"white")
			$(".Aa201812052018016Av_ img").removeAttr("src");
			$(".Aa201812052018016Av_ img").attr("src","http://localhost/hotel/image/wlogo.png")
			}
			$(window).scroll(function(){
			if($(".Aa20181207746As_").outerHeight()<=window.pageYOffset){
			$(".Aa20181205006Av_,.Aa20181205006Aa_").css("background-color","transparent");
			$(".Aa20181205006Aa_").css("background-color","#ff4242");
			$(".Aa201812052018029Av_ label>span,.Aa201812052018029Av_ label>span>a,.Aa201812052018016Av_ span").css('color',"grey")
			$(".Aa201812052018016Av_ img").removeAttr("src");
			$(".Aa201812052018016Av_ img").attr("src","http://localhost/hotel/image/logo.png")
			}else{
			trans();
			}
			});
			
				trans()
			
			$(document).ready(function(){
				$(window).on("scroll",function(){
					if($(window).scrollTop()+$(".Aa20181207745Av_").outerHeight()-400>$(".Aa20180712651Av_").offset().top){
						$(".Aa201812081557Av_").css({"top":"0px","opacity":"1"});
					};
				});
			});
		</script>
	</body>
</html>