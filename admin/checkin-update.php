<?php 
	session_start();
	if(!isset($_SESSION['loggedinakivoice']) && !isset($_SESSION['akivoiceid'])){
			
		header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/index.php'); 
			
		}
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

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
		<link rel="stylesheet" href="css/book528.css" />
        <link rel="icon" href="images/0ac1aa53-b1e7-440e-9412-f7c3d1b2b455.png" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <title>Akivoice</title>
    </head>
    <body class="invoicein2">
        <div id="Aa201809122135Br_">
            <div id="Aa201809122157Mr_">
				<?php include("main.php")?>
                                <!--main content-->
                <div class="Aa2018009122201Bs_" id="particles-js">
                    <div class="Aa201809140051Vy_">
						<!--remaining page will be starteed from here-->
						<div class="Aa20181003020Vn_">
							<div class="Aa201812281845Ar_">
								<div class="Aa201812281904Ag_">
									<h1>Check In</h1>
								</div>
								<div class="Aa201812281949Ay_">
									<div class="Aa201812281950Ay_">
										<div class="Aa201812281950Au_">
											<div class="Aa201812282009Au_">
												<form action="php/update-recep.php" enctype="application/x-www-form-urlencoded" method="post">
													<div class="Aa201812282011Au_">
														<div class="Aa201812282058Au_">
															<label style="display:none;">Payment Method</label><br/>
															<input type="checkbox" name="paid" required class="Aa201812282121Au_" style="width:20px;" value='<?php echo $id ?>'/><span style="color:#464444;">Amount Paid</span>
														</div>
                                                        <div class="Aa201812282058Au_">
															<label style="display:none;">Payment Method</label><br/>
															<input type="checkbox" name="checkin" required class="Aa201812282121Au_" style="width:20px;"/><span style="color:#464444;">Check In</span>
														</div>
														<div class="Aa201812282058At_">
															<button type="submit" name="submit">Update</button>
														</div>
													</div>
												</form>
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
			$(".Aa201812282121Au_").focusin(function(){
				
				$(this).prev().prev().css({"top":"6px","font-size":"13px"})
				
			});
			$(".Aa201812282121Au_").focusout(function(){
				if($(this).val().trim().length==0){
				$(this).prev().prev().css({"top":"25px","font-size":"15px"})
					};
			});
			$(document).ready(function(){
				function setTheName(){
					if($(".Aa201812282121Au_").val().trim().length!=0){
					$(".Aa201812282121Au_").prev().prev().css({"top":"6px","font-size":"13px"})
					}
				}
				setTheName()
			});
            date_set();
            setInterval(date_set,100000);
        </script>
    </body>
</html