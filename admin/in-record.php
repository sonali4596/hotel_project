<?php 
	session_start();
	if(!isset($_SESSION['loggedinakivoice']) && !isset($_SESSION['akivoiceid'])){
			
		header('location: http://'.$_SERVER['HTTP_HOST'].'/menu/akivoice/index.php'); 
			
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
        <link  rel="stylesheet" href="soft.css" />
		<link rel="stylesheet" href="css/in-record.css" />
        <link rel="icon" href="images/0ac1aa53-b1e7-440e-9412-f7c3d1b2b455.png" />
        <title>Akivoice</title>
    </head>
    <body class="invoicein">
        <div id="Aa201809122135Br_">
            <div id="Aa201809122157Mr_">
				<?php include("main.php")?>
                                <!--main content-->
                <div class="Aa2018009122201Bs_" id="particles-js">
                    <div class="Aa201809140051Vy_">
                     	<!--start from here-->
						<div class="Aa201812291856Au_">
							<div class="Aa201812291858Ar_">
								<div class="Aa201812291904Au_">
								
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
            date_set();
            setInterval(date_set,100000);
			
        </script>
    </body>
</html