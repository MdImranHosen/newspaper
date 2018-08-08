<?php
/**
* Socail Media class
*/
class Socail{
	private $db;
  private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function socail_view(){
		$sql = "SELECT * FROM pdl_social ORDER BY social_Id LIMIT 1";
		$result = $this->db->select($sql);
		return $result;
	}

	public function getSocail_meia_Site($data){
       $so_id  = $data['so_id'];
       $pdl_fb = $this->fm->validation($data['pdl_fb']);
       $pdl_tw = $this->fm->validation($data['pdl_tw']);
       $pdl_gp = $this->fm->validation($data['pdl_gp']);
       $pdl_yt = $this->fm->validation($data['pdl_yt']);
       $pdl_ps = $this->fm->validation($data['pdl_ps']);

       $pdl_fb = mysqli_real_escape_string($this->db->link, $pdl_fb);
       $pdl_tw = mysqli_real_escape_string($this->db->link, $pdl_tw);
       $pdl_gp = mysqli_real_escape_string($this->db->link, $pdl_gp);
       $pdl_yt = mysqli_real_escape_string($this->db->link, $pdl_yt);
       $pdl_ps = mysqli_real_escape_string($this->db->link, $pdl_ps);

       if (empty($pdl_fb) || empty($pdl_tw) || empty($pdl_gp) || empty($pdl_yt) || empty($pdl_ps)) {
       		$msg = '<div class="alert alert-danger" role="alert" >
                   Field Must not be Empty!
       		      </div>';
       		   return $msg;
       	}elseif(!filter_var($pdl_fb, FILTER_VALIDATE_URL) !== false){
          $msg = '<div class="alert alert-danger" role="alert">
                  Facebook url is not Validate !
                 </div>';
               return $msg;
       	}elseif(!filter_var($pdl_tw, FILTER_VALIDATE_URL) !== false){
          $msg = '<div class="alert alert-danger" role="alert">
                  Twitter url is not Validate !
                 </div>';
               return $msg;
       	}elseif(!filter_var($pdl_gp, FILTER_VALIDATE_URL) !== false){
          $msg = '<div class="alert alert-danger" role="alert">
                  Google Plus url is not Validate !
                 </div>';
               return $msg;
       	}elseif(!filter_var($pdl_yt, FILTER_VALIDATE_URL) !== false){
          $msg = '<div class="alert alert-danger" role="alert">
                  YouTube url is not Validate !
                 </div>';
               return $msg;
       	}elseif(!filter_var($pdl_ps, FILTER_VALIDATE_URL) !== false){
          $msg = '<div class="alert alert-danger" role="alert">
                  Printerst url is not Validate !
                 </div>';
               return $msg;
       	}else{
           
          $sql_view = "SELECT * FROM pdl_social WHERE pdl_fb = '$pdl_fb' && pdl_tw = '$pdl_tw' && pdl_gp = '$pdl_gp' && pdl_yt = '$pdl_yt' && pdl_ps = '$pdl_ps'";
          $result_check = $this->db->select($sql_view);
          if ($result_check != false) {
          	$msg = '<div class="alert alert-info" role="alert">
                  Socail Media url is not Change !
                 </div>';
               return $msg;
          }else{
          $sql = "UPDATE pdl_social 
                    SET
                   pdl_fb = '$pdl_fb',
                   pdl_tw = '$pdl_tw',
                   pdl_gp = '$pdl_gp',
                   pdl_yt = '$pdl_yt',
                   pdl_ps = '$pdl_ps'
                   WHERE social_Id = '$so_id'";
           $result = $this->db->update($sql);
           if ($result) {
           	$msg = '<div class="alert alert-success" role="alert">
                  Socail Media Url Update Successfully!
                 </div>';
               return $msg;
           }else{
           	$msg = '<div class="alert alert-danger" role="alert">
                  Socail Media Url not Updated!
                 </div>';
               return $msg;
           }
           }
       	}
       }
}
