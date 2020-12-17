<?php
include './conexão.php';
 session_start();
 $var = $_POST['botao'];
 $nome = $_SESSION['login'];

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, '$var', $titlecolor);

header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);*/
 
   $im = imagecreatefromjpeg("certificado.jpg");

  // fundo branco e texto azul
  $textcolor = imagecolorallocate($im, 0, 0, 255);
  
  // escreve a string em cima na esquerda
  imagestring($im, 10, 200, 185, "Curso de", $textcolor);
  imagestring($im, 10, 200, 200, $var, $textcolor);
  imagestring($im, 10, 200, 250, $nome, $textcolor);
  imagestring($im, 10, 200, 300, "se formou em 2020/2", $textcolor);
  
  
  // envia a imagem
  header("Content-type: image/png");
  imagejpeg($im);
  
  imagedestroy();
?>

