<?php 
	session_start();
	if(!isset($_SESSION['loggedinakivoice']) && !isset($_SESSION['akivoiceid'])){
			
		header('location: http://'.$_SERVER['HTTP_HOST'].'/menu/akivoice/index.php'); 
			
		}
    include("php/connect.php");
    date_default_timezone_set("Asia/Kolkata");
    $date=date("d-m-Y");
    $get_the_data=mysqli_query($db,"SELECT `name`, `mobile`, `email`, `checkin_date`, `checkout_date`, `pay`, `room` FROM `room` WHERE `checkin_date`='$date'");
$name=$mobile=$email=$checkin_date=$checkOutDate=$pay=$room=array();
while($fetch=mysqli_fetch_assoc($get_the_data)){
$name[]=$fetch['name'];
$mobile[]=$fetch['mobile'];
$email[]=$fetch['email'];
$checkin_date[]=$fetch['checkin_date'];
$checkOutDate[]=$fetch['checkout_date'];
$pay[]=$fetch['pay'];
$room[]=$fetch['room'];
}
$count=count($name);

?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="sudhanshu ranjan" />
        <meta name="application-name" content="software for gst invoice" />
        <meta name="description" content="software for gst " />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <link  rel="stylesheet" href="soft528.css" />
		<link rel="stylesheet" href="css/admim654.css" />
        <link rel="icon" href="images/0ac1aa53-b1e7-440e-9412-f7c3d1b2b455.png" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <title>Admin</title>
    </head>
    <body class="invoicein">
        <div id="Aa201809122135Br_">
            <div id="Aa201809122157Mr_">
				<?php include("main.php")?>
                                <!--main content-->
                <div class="Aa2018009122201Bs_" id="particles-js">
                    <div class="Aa201809140051Vy_">
						<!--start from here-->
                      	<div class="Aa201812271828Au_">
							<div class="Aa201812271909Ah_">
								<div class="Aa201812272001Au_">
									<div class="Aa201812272011Ar_">Booking</div>
									<div class="Aa201812282018009Ar_">
										<div class="Aa20181228047At_">
											<div class="Aa20181228047At_">
												<div class="Aa20181228050At_"><input type="radio" value="Today" name="day" class="Aa201812281841Ah_" /><span>Today's Booking</span></div>
												<div class="Aa20181228050At_"><input type="radio" value="Yesterday" name="day" /><span>Yesterday's Booking</span></div>
												<div class="Aa20181228050At_"><input type="radio" value="custom" name="day" /><span>Select Month</span></div>
											</div>
										</div>
									</div>
									<div class="Aa2018281720Au_">
										<div class="Aa201812281739Ay_">
											<div class="Aa201812281746Ai_"><span>From</span><input type="date" class="Aa201812281750Ar_" /></div>
											<div class="Aa201812281746Ai_"><span>To</span><input type="date" class="Aa201812281750Ar_" /></div>
										</div>
									</div>
									<div class="Aa201812272055AI_">
										<div class="Aa201812272056AU_">
											<div class="Aa201812272108Ai_">
												<div class="Aa201812272155Ay_">
													<div class="Aa201812272201Ai_">Client Name</div>
													<div class="Aa201812272201Ai_">Client Email</div>
													<div class="Aa201812272201Ai_">Client Phone No.</div>
													<div class="Aa201812272201Ai_">CheckIn Date</div>
													<div class="Aa201812272201Ai_">CheckOut Date</div>
													<div class="Aa201812272201Ai_">Room No.</div>
													<div class="Aa201812272201Ai_">Payment Details</div>
												</div>
                                                
                                                <?php 
                                                for($i=0 ;$i<$count;$i++){
												echo "<div class='Aa201812272155Ay_'>
													<div class='Aa201812272201At_'>$name[$i]</div>
													<div class='Aa201812272201At_'>$email[$i]</div>
													<div class='Aa201812272201At_'>$mobile[$i]</div>
													<div class='Aa201812272201At_'>$checkin_date[$i]</div>
													<div class='Aa201812272201At_'>$checkOutDate[$i]</div>
													<div class='Aa201812272201At_'>$room[$i]</div>
													<div class='Aa201812272201At_'>$pay[$i]</div>
												</div>";
                                                }
                                                ?>
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
		 <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" ></script>
		  <script>
		  		particlesJS.load('particles-js','partic.json',function(){
					console.log('particles.json loaded...')
				});
		  </script>
        <script type="text/javascript">
            function time_set(){
                var d = new Date();
                var n = d.getHours();
                var x =d.getMinutes();
                var y =d.getSeconds();
                $(".Aa201809130125Bt_").html(n+" : "+x+" : "+y);
            }
            time_set();
            setInterval(time_set,1000);
            function date_set(){
                var d = new Date();
                var n = d.getDate();
                var x =d.getMonth()+1;
                var y =d.getFullYear();
                $(".Aa201809130125Bs_").html(n+" : "+x+" : "+y);
            }
			$(".Aa20181228050At_ input").click(function(){
				if($(this).val()=="custom"){
					$(".Aa2018281720Au_").show();
				}else{
					$(".Aa2018281720Au_").hide();
				}
			});
			$(".Aa201812281841Ah_").click();
            date_set();
            setInterval(date_set,100000);
        </script>
    </body>
</html