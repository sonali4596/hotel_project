<?php 
session_start();
	include('../fpdf/fpdf.php');
	include('../php/connect.php');

if(isset($_GET['invoice'])){
    $invoice_id=isset($_GET['invoice'])?$_GET['invoice']:null;
	$get_the_data=mysqli_query($dbseft,"SELECT `name`, `email`, `gst`, `addres`, `pincode`, `service`, `fees`, `date` FROM `invoice` WHERE `icsn`='$invoice_id'");
	$fetch=mysqli_fetch_assoc($get_the_data);
	$name=$fetch['name'];
	$email=$fetch['email'];
	$gst=$fetch['gst'];
	$addres=$fetch['addres'];
	$pincode=$fetch['pincode'];
	$service=$fetch['service'];
	$fees=$fetch['fees'];
	$date=$fetch['date'];
	$name_operator=$_SESSION['akiname'];
}

$calculated_gst=$fees;

function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise ;
}


$total_amount_paid_in_words=getIndianCurrency($fees);


$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(190,10,'Invoice',0,1,'C');
$pdf->Cell(190,10,'Akitstee.Com',0,1,'C');
//$pdf->Image("../images/logo.png",10,5,50,30,"PNG");
$pdf->Cell(190,10,' ',0,1,'C');

$pdf->SetFont('Arial','B',13);

$pdf->Cell(100,10,'Narendra Santosh Legal Associates LLP',0,0,'L');
$pdf->Cell(90,10,'INVOICE',0,1,'R');

$pdf->SetFont('Arial','',13);

$pdf->Cell(100,5,'FM-1/1 krishnakunj Apartment',0,0,'L');
$pdf->Cell(90,5,'Date of Payment :   '.$date,0,1,'R');

$pdf->Cell(100,5,'34 Hasting road near Circuit House ',0,0,'L');
$pdf->Cell(90,5,'Invoice Id :     '.$invoice_id,0,1,'R');

$pdf->Cell(100,5,'Civil Lines Allahabad',0,0,'L');
$pdf->Cell(90,5,'',0,1,'R');

$pdf->Cell(100,5,'Uttar Pradesh 211001',0,1,'L');
$pdf->Cell(100,5,'Tel No : 0532-269-5981',0,1,'L');
$pdf->Cell(100,10,'',0,1,'L');

$pdf->SetFont('Arial','B',13);
$pdf->Cell(100,5,'LLPIN NO.',0,1,'L');

$pdf->SetFont('Arial','',13);
$pdf->Cell(100,5,'AAN-2917',0,1,'L');

$pdf->Cell(100,10,'',0,1,'L');

$pdf->Cell(100,10,'',0,1,'L');

$pdf->SetFont('Arial','B',15);

$pdf->Cell(130,8,'Description',1,0,'C');
$pdf->Cell(60,8,'Amount',1,1,'C');

$pdf->SetFont('Arial','',11);

$pdf->Cell(130,8,$service,1,0,'L');
$pdf->Cell(60,8,$fees,1,1,'R');

$pdf->SetFont('Arial','B',11);

$pdf->Cell(130,8,'Total Amount Paid',1,0,'R');

$pdf->SetFont('Arial','',11);
$pdf->Cell(60,8,'INR  '.$fees,1,1,'R');

$pdf->Cell(40,8,'Completed By',1,0,'L');
$pdf->Cell(150,8,$name_operator,1,1,'C');

$pdf->Cell(100,10,'',0,1,'L');
$pdf->Cell(60,8,'Total Amount Paid In Words',0,1,'L');
$pdf->Cell(60,8,$total_amount_paid_in_words,0,1,'L');

$pdf->Cell(60,8,'',0,1,'L');

$pdf->SetFont('Arial','B',13);
$pdf->Cell(60,5,'Billing To',0,1,'L');

$pdf->SetFont('Arial','',11);
$pdf->Cell(60,5,$name,0,1,'L');

$pdf->Cell(100,8,'',0,1,'L');

$pdf->SetFont('Arial','B',13);
$pdf->Cell(60,8,'Billing Address',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell(60,5,$addres,0,1,'L');
//$pdf->Cell(60,5,$client_address2,0,1,'L');

$pdf->Cell(100,10,'',0,1,'L');

//$pdf->Image("../images/authorized_signatory.jpg",165,220,30,20,"JPG");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,5,'Authorized Signatory',0,1,'R');

$pdf->output();
?>