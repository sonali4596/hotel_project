<div class="Aa201812052018004Av_">
	<div class="Aa20181205006Av_">
		<div class="Aa201812052018016Av_"><img src="http://localhost/hotel/image/logo.png" height="70px;" /><span>Hotel Kaveri</span></div>
		<div class="Aa201812052018029Av_">
			<label><img src="http://localhost/hotel/image/app.png" height="60px" class='Aa2018125130Av_'/><span>Download App</span></label>
			<label>
                <?php
			if(isset($_SESSION['login'])){
                $name=$_SESSION['name'];
                echo "<span>$name</span>";
            }else{
                 echo "<span><a href='signup.php?signin=1'>Sign In</a> &nbsp; || &nbsp; <a href='signup.php'> Sign Up</a></span>";
            }
            
            ?>
            
            </label>
			<label><img src="http://localhost/hotel/image/2456.png" height="40px" class='Aa2018125130Aa_'/><span>9455601060</span></label>
		</div>
	</div>
	<div class="Aa20181205006Aa_">
		<div class="Aa20181205155Af_">
			<label><a href="http://localhost/hotel/" class='Aa20181207648Av_'>Home</a></label>
			<label><a href="#" class='Aa20181207648Av_'>Wedding Venue</a></label>
			<label><a href="#" class='Aa20181207648Av_'>Confrence Venue</a></label>
			<label><a href="#" class='Aa20181207648Av_'>Holiday Package</a></label>
			<label><a href="#" class='Aa20181207648Av_'>About US</a></label>
           
           
            <?php
			if(isset($_SESSION['login'])){
                $name=$_SESSION['name'];
                echo "<i class='Aa20191220192235Ag_'>
                <i class='fa fa-gear' style='float:right;color:white;margin-right:30px;cursor:pointer'></i>
                 <div class='Aa20191022202Ag_'>
                    <div class='Aa2019122238Ag_'>
                        <div>Profile</div>
                        <div>Booking</div>
                        <div>Order</div>
                        <div><a href='#'>Logout</a></div>
                    </div>
                </div>
            </i>
            <label class='Aa20181207935Av_'><span>$name</span></label>
                ";
            }else{
                 echo "<label class='Aa20181207935Av_'><span><a href='signup.php?signin=1'>Sign In</a> &nbsp; || &nbsp; <a href='signup.php'> Sign Up</a></span></label>";
            }
            
            ?>
            
		</div>
	</div>
</div>
<script>
	$(window).scroll(function(){
		if($(".Aa20181205006Av_").outerHeight()<=window.pageYOffset){
			$(".Aa20181205006Av_").hide();
			$(".Aa20181207935Av_").show();
			$(".Aa20181205006Aa_").addClass("sticky");
			$(".Aa20181205006Aa_").removeClass("release");
		}else{
			$(".Aa20181205006Av_").show();
			$(".Aa20181207935Av_").hide();
			$(".Aa20181205006Aa_").addClass("release");
			$(".Aa20181205006Aa_").removeClass("sticky");
		}
	});
</script>