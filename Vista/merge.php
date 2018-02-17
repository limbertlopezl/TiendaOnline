<?php
session_start();
$res = json_decode(stripslashes($_POST['jsondata']), true);
echo $_POST['jsondata']."<br>";
/* get data */
$count_images = count($res['images']);
/* the background image is the first one */
$background 	= $res['images'][0]['src'];
$photo1 		= imagecreatefromjpeg($background);
$foto1W 		= imagesx($photo1);
$foto1H 		= imagesy($photo1);
$photoFrameW 	= $res['images'][0]['width'];
$photoFrameH 	= $res['images'][0]['height'];
$photoFrame 	= imagecreatetruecolor($photoFrameW,$photoFrameH);
imagecopyresampled($photoFrame, $photo1, 0, 0, 0, 0, $photoFrameW, $photoFrameH, $foto1W, $foto1H);

/* the other images */
for($i = 1; $i < $count_images; ++$i){
	$insert 		= $res['images'][$i]['src'];
	$photoFrame2Rotation = (180-$res['images'][$i]['rotation']) + 180;
	
	$photo2 		= imagecreatefrompng($insert);
	
	$foto2W 		= imagesx($photo2);
	$foto2H 		= imagesy($photo2);
	$photoFrame2W	= $res['images'][$i]['width'];
	$photoFrame2H 	= $res['images'][$i]['height'];

	$photoFrame2TOP = $res['images'][$i]['top'];
	$photoFrame2LEFT= $res['images'][$i]['left'];

	$photoFrame2 	= imagecreatetruecolor($photoFrame2W,$photoFrame2H);
	$trans_colour 	= imagecolorallocatealpha($photoFrame2, 0, 0, 0, 127);
	//$trans_colour = imagecolorallocatealpha($photoFrame2, 255, 255, 255, 270);
	imagefill($photoFrame2, 0, 0, $trans_colour);

	imagecopyresampled($photoFrame2, $photo2, 0, 0, 0, 0, $photoFrame2W, $photoFrame2H, $foto2W, $foto2H);
	
	$photoFrame2 	= imagerotate($photoFrame2,$photoFrame2Rotation,$trans_colour);
	/*after rotating calculate the difference of new height/width with the one before*/
	$extraTop		=(imagesy($photoFrame2)-$photoFrame2H)/2;
	$extraLeft		=(imagesx($photoFrame2)-$photoFrame2W)/2;

	imagecopy($photoFrame, $photoFrame2,$photoFrame2LEFT-$extraLeft, $photoFrame2TOP-$extraTop, 0, 0, imagesx($photoFrame2), imagesy($photoFrame2));	
}
// Set the content type header - in this case image/jpeg
//header('Content-type: image/jpeg');
 date_default_timezone_set("America/La_Paz");
            $fechaRegistro  = date("Y-m-d");
            $hora   = date("H:i:s");
            $anho   = date("Y");

$ruta=$_SESSION['RutaCatalogo'];
$dir=$ruta."Oferta".$fechaRegistro.".jpg";
imagepng($photoFrame,$dir); 
imagedestroy($photoFrame);
//echo '<img  src="prueba/prueba.jpg"/>';
$DirImg=base64_encode($dir); 
 header("Location: wizard_paso4.php?src=".$DirImg);      
 
?>
