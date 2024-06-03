<?php
$pildid = array(
    'banner/b4.jpg',
    'banner/b10.jpg',
    'banner/b17.jpg',
    'banner/b18.jpg',
    // Add more image paths as needed
);

// Get a random key from the $images array
$randomKey = array_rand($pildid, 1);

// Get the random image path
$randomImage = $pildid[$randomKey];

// Set the maximum width and height for the image
$maxWidth = 530;
$maxHeight = 280;

?>