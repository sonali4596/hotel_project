<div class="Aa201809122337Ct_">
<div class="Aa201809130003Mt_">
    <img src="images/0ac1aa53-b1e7-440e-9412-f7c3d1b2b455.png" height="40" alt="Akivoice" class="Aa201809130008Mg_" /><span class="Aa201809130136My_">Akivoice</span><i class="fa fa-trademark Aa204809201635Mt_"></i>
</div>
<div class="Aa201809130017Mt_">
    <div class="Aa2101809130020Mt_">
        <?php 
		if(isset($_SESSION['loggedinakivoice']) && isset($_SESSION['akivoiceid'])){
			
		echo "<div class=Aa21809130037My_'>".$_SESSION['akiname']."<i class='fa fa-caret-down'></i></div>"; 
			
		}
		?>
    </div>
    <div class="Aa2101809130020Mt_" style="min-width:6%"><i class="fa fa-bell Aa20180913104Mt_"></i></div>
    <div class="Aa2101809130020Mt_"><div class="Aa21809130037My_ Aa201809130125Bt_"></div></div>
    <div class="Aa2101809130020Mt_"><div class="Aa21809130037My_ Aa201809130125Bs_"></div></div>
</div>
<div class="Aa2018091237mt_"><i class="fa fa-caret-right Aa201809211239MT_"></i></div>
</div>
<!--element goes here-->
	<?php 
		if(isset($_SESSION['loggedinakivoice']) && isset($_SESSION['akivoiceid'])){
include("php/walter/admin.php");
        }
?>
<!--end of element-->
<script>
	$(".Aa201809211239MT_").click(function(){
		if($(".Aa201809211239MT_").hasClass("fa-caret-right")){
		$(".Aa201809122200Br_").css({"width":"30%","position":"absolute","z-index":"1"})
		$(".Aa201809211249Mt_").css({"position":"absolute"})
		$(".Aa2018091237mt_").css({"margin-left":"29.5%","z-index":"1"})
		$(".Aa201809211239MT_").removeClass("fa-caret-right");
		$(".Aa201809211239MT_").addClass("fa-caret-left");
		}else{
			$(".Aa201809122200Br_").css({"width":"0","position":"absolute","z-index":"1"})
		$(".Aa201809211249Mt_").css({"position":"relative"})
		$(".Aa2018091237mt_").css({"margin-left":"0","z-index":"1"})
		$(".Aa201809211239MT_").removeClass("fa-caret-left");
		$(".Aa201809211239MT_").addClass("fa-caret-right");
		}
	});
</script>