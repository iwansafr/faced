<?php

require "FaceDetector.php";


use svay\FaceDetector;


$faceDetect = new FaceDetector();
$faceDetect->faceDetect($_FILES['image']['tmp_name']);
// $faceDetect->toJpeg();
// $faceDetect->cropFaceToJpeg();
// print_r($faceDetect->getFace());
// print_r($faceDetect->canvas());

require 'compare-images.php';
$compare = new compareImages();
print_r($compare->compare($_FILES['image']['tmp_name'],$_FILES['image2']['tmp_name']));

