<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
/**
* Meta_title class...
*/
class Meta_title{
	
 private $db;
 private $fm;
	
 public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
 // pdl news title tab use...
 public function getTitleNewsDetails($detaisId){
 	$sql = "SELECT * FROM tbl_news_post WHERE id = '$detaisId'";
 	$result = $this->db->select($sql);
 	return $result;
 }
 //pdl news title tab category use..
 public function getCategoryNews($catId){
 	$sql = "SELECT * FROM category WHERE catId = '$catId'";
 	$result = $this->db->select($sql);
 	return $result;
 }
 //pdl news meta tags keywords tbl_news post from ....
 public function getMetaTagsDetails($detaisId){
 	$sql = "SELECT * FROM tbl_news_post WHERE id = '$detaisId'";
 	$result = $this->db->select($sql);
 	return $result;
 }
}