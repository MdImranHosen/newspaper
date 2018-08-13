<?php
/**
* Format class
*/
class Format{

public function textShorten($text, $limit = 200){
  $text = $text. " ";
  $text = substr($text, 0, $limit);
  $text = substr($text, 0, strrpos($text, ' '));
  $text = $text."...<span style='color:#d083cf'>বিস্তারিত</span>";
  return $text;
 }

 public function textMqShorten($text, $limit = 60){
  $text = $text. " ";
  $text = substr($text, 0, $limit);
  $text = substr($text, 0, strrpos($text, ' '));
  $text = $text."...";
  return $text;
 }

public function validation($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }

 public function validationText($data){
  $data = trim($data);
  $data = stripcslashes($data);
  #$data = htmlspecialchars($data);
  return $data;
 }

 public function title(){
  $path = $_SERVER['SCRIPT_FILENAME'];
  $title = basename($path, '.php');
  if ($title == 'index') {
    echo "PDL News in Bangladesh";
  }elseif($title == 'user-terms-and-conditions' ){
    echo "PDL User Comment Terms and Conditions";
  }elseif($title == ''){
      echo "PDL News in Bangladesh";
  }
  return $title = ucwords($title);
 }	

}