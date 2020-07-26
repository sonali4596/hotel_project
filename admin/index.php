<?php 
	session_start();
	if(isset($_SESSION['loggedinakivoice']) && isset($_SESSION['akivoiceid'])){
			
		header('location: http://'.$_SERVER['HTTP_HOST'].'/hotel/admin/admin.php'); 
			
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
        <link rel="icon" href="images/0ac1aa53-b1e7-440e-9412-f7c3d1b2b455.png" />
        <title>Admin</title>
    </head>
    <body>
        <div id="Aa201809122135Br_">
            <div id="Aa201809122157Mr_">
				<?php include("main.php")?>
                                <!--main content-->
                <div class="Aa2018009122201Bs_" id="particles-js" style="width:100%;margin-left:0px;">
                    <div class="Aa201809140051Vy_" style='min-height:700px;'>
                        <div class="Aa201809140133DT_">
                        	<div class="Aa2018091420Mt_">
								<div class="Aa201809191424Mv_"><button>Sign In</button></div>
								<?php 
								if(isset($_SESSION['error1'])){
										echo "<div style='text-align:center;color:red;'>".$_SESSION['error1']."</div>";
										if(basename($_SERVER['PHP_SELF'])!= $_SESSION['error1']){
												unset($_SESSION['error1']);
												}
									}
								?>
								<form enctype="application/x-www-form-urlencoded" method="post" action="php/signin.php">
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-user"></i></div><div class="Aa201809191527Ms_"><input type="text" required name='email' placeholder="Email Address"/></div></div>
									</div>
									
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-key"></i></div><div class="Aa201809191527Ms_"><input type="text" required name='password' placeholder="Passwords"/></div></div>
									</div>
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><button class="Aa201809191608Mt_" type="submit" name="submitin">Submit</button></div>
									</div>
								</form>
								<div class="Aa201809191615Mt_"><a href="#">Forgot password</a></div>
							</div>
                        </div>
                        <div class="Aa201809140133DT_">
                        	<div class="Aa2018091420Mt_">
								<div class="Aa201809191424Mv_"><button>Sign Up</button></div>
								<?php 
								if(isset($_SESSION['error'])){
										echo "<div style='text-align:center;color:red;'>".$_SESSION['error']."</div>";
										if(basename($_SERVER['PHP_SELF'])!= $_SESSION['adv_email']){
												unset($_SESSION['error']);
												}
									}
								?>
								<form enctype="application/x-www-form-urlencoded" method="post" action="php/singup.php">
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-user"></i></div><div class="Aa201809191527Ms_"><input type="text" required name='name' placeholder="Full Name"/></div></div>
									</div>
                                    
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-address-book"></i></div><div class="Aa201809191527Ms_"><input type="text" required name='email' placeholder="Email Address"/></div></div>
									</div>
                                    
                                    <div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-phone"></i></div><div class="Aa201809191527Ms_"><input type="text" required name='phone' placeholder="Mobile No."/></div></div>
									</div>
                                    
                                    <div class="Aa201909191536Mt_">
                                        <div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-code-fork"></i></div><div class="Aa201809191527Ms_"><select type="text" required name='roll' style="border: 1px solid red;width: 84%;height: 40px;color:grey;font-size:16px;">
                                            <option value="receptionist">Receptionist</option>    
                                            <option value="bellboy">Bell Boy</option>    
                                            <option value="chef">Chef</option>       
                                        </select></div></div>
									</div>
                                    
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><div class="Aa201809191527Mt_"><i class="fa fa-key"></i></div><div class="Aa201809191527Ms_"><input type="text" required name='pwd' placeholder="Passwords"/></div></div>
									</div>
                                    
									<div class="Aa201909191536Mt_">
									<div class="Aa201809191536Mt_"><button class="Aa201809191608Mt_" type="submit" name="submitup">Submit</button></div>
									</div>
								</form>
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
</html>