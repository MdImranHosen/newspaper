<?php
/**
* Post Class....
*/
class Post{
	private $db;
	private $fm;

	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

 	public function getNewsPostInsert($data, $file, $wods_limit){

	 if (empty($data['newsTitle']) || empty($data['c_date']) || empty($data['details_news']) ) {
       $msg = '<div class="alert alert-warning" role="alert">
                  Field must not be Empty!
                 </div>';
              return $msg;
	 }else{

        $newsTitle    = $this->fm->validation($data['newsTitle']);
        $catId        = $this->fm->validation($data['catId']);
        $author       = $this->fm->validation($data['author']);
        $c_date       = $this->fm->validation($data['c_date']);
        $details_news = $this->fm->validationText($data['details_news']);
        $optradio     = $this->fm->validation($data['optradio']);


        $newsTitle    = mysqli_real_escape_string($this->db->link, $newsTitle);
        $author       = mysqli_real_escape_string($this->db->link, $author);
        $c_date       = mysqli_real_escape_string($this->db->link, $c_date);
        $details_news = mysqli_real_escape_string($this->db->link, $details_news);
        $optradio     = mysqli_real_escape_string($this->db->link, $optradio);

        $date=date("Y/m/d");

        
        $words = explode(' ', $newsTitle);
        $newtitle = implode(' ', array_slice($words, 0, $wods_limit));

        $urltitle=preg_replace('/[^a-z0-9]/i',' ', $newtitle);

        $newurltitle=str_replace(" ","-",$newtitle);
        $url=$date.'/'.$newurltitle.'.html';


        $permitted    = array('png', 'jpg', 'jpeg', 'gif');
        $file_name    = $file['newsImage']['name'];
        $file_size    = $file['newsImage']['size'];
        $file_temp    = $file['newsImage']['tmp_name'];

        $div          = explode('.', $file_name);
        $image_ext    = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$image_ext;
        $upload_image = "upload/post/".$unique_image;

       if(empty($file_name)){
        $msg = '<div class="alert alert-warning" role="alert">
                  অবশ্যই ছবির ফিল্ড টি পূরণ  করতে হবে !
                 </div>';
              return $msg;
       }elseif($file_size > 2097152){
         $msg = '<div class="alert alert-danger" role="alert">
               Image Size Should be less then 2 MB !
             </div>';
           return $msg;
	  }elseif(in_array($image_ext, $permitted) === false){
        $msg = '<div class="alert alert-danger" role="alert">
                 You can uploads only:-'.implode(', ', $permitted).'</div>';
              return $msg;
	  }else{
      $moveFile = "../".$upload_image;
	  	move_uploaded_file($file_temp, $moveFile);
	  	$sql = "INSERT INTO tbl_news_post(newsTitle,catId,author,c_date,newsImage,details_news,optradio,url) VALUES('$newsTitle','$catId','$author','$c_date','$upload_image','$details_news','$optradio','$url')";
	  	$result = $this->db->insert($sql);
	  	if ($result) {
	  		$msg = '<div class="alert alert-success" role="alert">
               Data Inserted Successfully!
             </div>';
           return $msg;
	  	}else{
          $msg = '<div class="alert alert-danger" role="alert">
               Data Not Inserted!
             </div>';
           return $msg;
	  	}
	  }


     }
	}


	public function getNews_list(){
		$sql = "SELECT n.*, c.category FROM tbl_news_post AS n, category AS c WHERE n.catId = c.catId ORDER BY n.id DESC";
		$result = $this->db->select($sql);
		return $result;
	}

	public function newsListToDelete($id){
		$sql = "DELETE FROM tbl_news_post WHERE id = '$id'";
		$result = $this->db->delete($sql);
		if ($result) {
	  		$msg = '<div class="alert alert-success" role="alert">
               Data Deleted Successfully!
             </div>';
           return $msg;
	  	}else{
          $msg = '<div class="alert alert-danger" role="alert">
               Data Not Deleted!
             </div>';
           return $msg;
	  	}
	}

	public function getNewsResultall($id){
		$sql = "SELECT * FROM tbl_news_post WHERE id = '$id'";
		$result = $this->db->select($sql);
		return $result;
	}

	public function getNewsPostUpdate($data, $file, $id){

		    $editnewsTitle     = $this->fm->validation($data['editnewsTitle']);
        $editCatId         = $this->fm->validation($data['editCatId']);
        $author            = $this->fm->validation($data['author']);
        $edit_details_news = $this->fm->validationText($data['edit_details_news']);
        $edit_optradio     = $this->fm->validation($data['edit_optradio']);


        $editnewsTitle     = mysqli_real_escape_string($this->db->link, $editnewsTitle);
        $editCatId         = mysqli_real_escape_string($this->db->link, $editCatId);
        $author            = mysqli_real_escape_string($this->db->link, $author);
        $edit_details_news = mysqli_real_escape_string($this->db->link, $edit_details_news);
        $edit_optradio     = mysqli_real_escape_string($this->db->link, $edit_optradio);


        $permitted    = array('png', 'jpg', 'jpeg', 'gif');
        $file_name    = $file['editnewsImage']['name'];
        $file_size    = $file['editnewsImage']['size'];
        $file_temp    = $file['editnewsImage']['tmp_name'];

        $div          = explode('.', $file_name);
        $image_ext    = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$image_ext;
        $upload_image = "upload/post/".$unique_image;
        
        #Update image input query....start.....

    if(!empty($file_name)){

     if($file_size > 2097152){
         $msg = '<div class="alert alert-danger" role="alert">
               Image Size Should be less then 2 MB !
             </div>';
           return $msg;
	  }elseif(in_array($image_ext, $permitted) === false){
        $msg = '<div class="alert alert-danger" role="alert">
                 You can uploads only:-'.implode(', ', $permitted).'</div>';
              return $msg;
	  }else{
      $moveFile = "../".$upload_image;
      move_uploaded_file($file_temp, $moveFile);

	  	$sqlUpdate = "UPDATE tbl_news_post 
	  	                       SET 
                           newsTitle    = '$editnewsTitle',
                           catId        = '$editCatId',
                           author       = '$author',
                           newsImage    = '$upload_image',
                           details_news = '$edit_details_news',
                           optradio     = '$edit_optradio'
                               WHERE id = '$id'";

	  	$result = $this->db->update($sqlUpdate);
	  	if ($result) {
	  		$msg = '<div class="alert alert-success" role="alert">
               Data Inserted Successfully!
             </div>';
           return $msg;
	  	}else{
          $msg = '<div class="alert alert-danger" role="alert">
               Data Not Inserted!
             </div>';
           return $msg;
	  	}
	}
	 }else{

	  	$sqlUpdate = "UPDATE tbl_news_post 
	  	                       SET 
                           newsTitle    = '$editnewsTitle',
                           catId        = '$editCatId',
                           author       = '$author',
                           details_news = '$edit_details_news',
                           optradio     = '$edit_optradio'
                               WHERE id = '$id'";

	  	$result = $this->db->update($sqlUpdate);
	  	if ($result) {
	  		$msg = '<div class="alert alert-success" role="alert">
               Data Inserted Successfully!
             </div>';
           return $msg;
	  	}else{
          $msg = '<div class="alert alert-danger" role="alert">
               Data Not Inserted!
             </div>';
           return $msg;
	  	}
	 }
	}
	
}