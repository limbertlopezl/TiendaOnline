<?php
$data = $_POST['image'];

if(preg_match('/data:image\/(gif|jpeg|png);base64,(.*)/i', $data, $matches))
{
    $imageType = $matches[1];
   
    $imageData = base64_decode($matches[2]);

    $image = imagecreatefromstring($imageData);
    $filename = md5($imageData) . '.jpg';

    if(imagepng($image, 'terminados/' . $filename))
    {
        echo json_encode(array('filename' => 'terminados/' . $filename));
    } else {
        throw new Exception('Could not save the file.');
    }
} else {
    throw new Exception('Invalid data URL.');
}
