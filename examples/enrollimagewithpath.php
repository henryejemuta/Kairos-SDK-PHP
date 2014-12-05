<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<h2>Enrolling an Image Using a File Path</h2>
<i>This example enrolls the following image</i><br />
<img src="images/sample.jpg" />
<?php

//* * * * include the wrapper class
include('../Kairos.php');
include('helper.php');

//* * * * sample api credentials (works for example)
$app_id  = 'e2a8eaa7';
$api_key = '4092e4a45070bca728644e9285f084b4';

//* * * * create a new instance and authenticate
$Kairos  = new Kairos($app_id, $api_key);

/*
 In this example, we enroll a
 subject into a gallery using a
 path to an image file. */
$gallery_id = 'gallery1';
$subject_id = 'liz';
$image_path = 'images/sample.jpg';
$response = $Kairos->enrollImageWithPath($image_path, $gallery_id, $subject_id);

echo '<br /><b>Response:</b><br />';
echo '<div class="text-left" style="padding:10px;border:1px solid rgba(51, 51, 51, 0.08);background-color: rgba(204, 204, 204, 0.26);"><br />';
echo format_json($response, true);
echo '</div>';

?>
</body>
</html>