<?php


Class Mix_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        //$this->load->library('encrypt');

 	}
	function login($user, $pass){
	
		$this -> db -> where('usr_name',$user);
		$query = $this -> db -> get('users')->result();
	

		if(count($query)!=0){
			if(password_verify($pass, $query[0]->usr_pass)) {
				return $query[0];
			}
			else{
				return false;
			}				
		}
		else{
			return false;
		}
	}

/*
		function login($user, $pass){
		$this -> db -> where('usr_name',$user);
		$query = $this -> db -> get('users')->result();

		if(count($query)!=0){
			if(password_verify($pass, $query[0]->usr_pass)) {
				return $query[0];
			}else{
				return false;
			} 			
		}
		else{
			return false;
		}
	}

*/

 	function getnamebyid($id){
 		$this->db->where('usr_id',$id);
 		$query = $this->db->get('admin')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function getAllAdmins(){
 		$this->db->order_by("usr_id","asec");
 		$query = $this->db->get('admin')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}

	function inserttext($obj){
				
		$data= array(
				'story_name'	    =>	 $obj['textHeading'],
				'first_paragraph'	    =>	 $obj['firstParagraph'],
				// 'second_paragraph'	    =>	 $obj['secondParagraph'],
				// 'third_paragraph'	    =>	 $obj['thirdParagraph'],


		);
	
		$query = $this -> db -> insert('90days_table',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function insertTopHeading($obj){
				
		$data= array(
				'top_heading_one'	    =>	 $obj['webTopHeadingOne'],
				'top_heading_two'	    =>	 $obj['webTopHeadingTwo'],


		);
	
		$query = $this -> db -> insert('website_content_top',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function insertContact($obj){
				
		$data= array(
				'contact_heading_one'	    =>	 $obj['contactHeadingOne'],
				'contact_heading_two'	    =>	 $obj['contactHeadingTwo'],
				'contact_number'	    	=>	 $obj['contactNumber'],
				'contact_email'	    		=>	 $obj['contactEmail'],


		);
	
		$query = $this -> db -> insert('contact',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}	
	
	function insertMidHeading($obj){
				
		$data= array(
				'mid_heading_one'	    =>	 $obj['midSectionOne'],
				'mid_heading_two'	    =>	 $obj['midSectionTwo'],


		);
	
		$query = $this -> db -> insert('website_content_middle',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function insertFooterInfo($obj){
				
		$data= array(
				'copyright_info'	    =>	 $obj['copyrightinfo'],
				'developer_info'	    =>	 $obj['developerInfo'],
				'developer_contact'	    =>	 $obj['developerContact'],


		);
	
		$query = $this -> db -> insert('footer',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}


	function insertAdmininfo($obj){
				
		$data= array(
				'usr_name'	    	=>	 $obj['adminName'],
				'usr_add'	    	=>	 $obj['adminAddress'],
				'usr_reg_date'		=>	 $obj['regDate'],
				'usr_phone'	    	=>	 $obj['adminPhone'],
				'usr_pass'			=>	password_hash($obj['adminPass'], PASSWORD_DEFAULT),
				// 'usr_pass'	   		=>	 $this->encrypt->encode($obj['adminPass']),
				


		);
	
		$query = $this -> db -> insert('users',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}


	// 	function addUser($obj){
				
	// 	$usr = array(
	// 	'usr_name'		=>	$obj['name'],
	// 	'usr_fname'		=>	$obj['fname'],
	// 	'usr_lname'		=>	$obj['lname'],
	// 	'usr_pass'		=>	password_hash($obj['password'], PASSWORD_DEFAULT),
	// 	'usr_dob'		=>	date("Y-m-d", strtotime($obj['dob'])),
	// 	'usr_email'		=>	$obj['email'],
	// 	'usr_phone'		=>	$obj['phone'],
	// 	'usr_user_type'	=>	$obj['userType'], 
	// 	'usr_add'		=>	$obj['address'],
	// 	'usr_pic'		=>	$obj['pic'],
	// 	'usr_status'	=>	(isset($obj['block']) ? $obj['block']:'L')
	// 	);
		
	// 	$query = $this -> db -> insert('users',$usr);
	
	// 	if($query == 1){
	// 		return $this->db->insert_id();
	// 	}
	// 	else{
	// 		return false;
	// 	}
	// }
	
	
	function insertRhyme($obj){
				
		$data= array(
				'rhyme_name'	    		=>	 $obj['rhymeHeading'],
				'rhyme_writerName'	   		=>	 $obj['rhymeWriter'],
				'rhyme_full'	   			=>	 $obj['rhymefull'],
				// 'rhyme_1st_line'	    	=>	 $obj['rhymeFirstline'],
				// 'rhyme_2nd_line'	    	=>	 $obj['rhymeSecondline'],
				// 'rhyme_3rd_line'	    	=>	 $obj['rhymeThirdline'],
				// 'rhyme_4th_line'	    	=>	 $obj['rhymeFourthline'],
				// 'rhyme_5th_line'	    	=>	 $obj['rhymeFifthline'],
				// 'rhyme_6th_line'	    	=>	 $obj['rhymeSixthline'],
				// 'rhyme_7th_line'	    	=>	 $obj['rhymeSeventhline'],
				// 'rhyme_8th_line'	    	=>	 $obj['rhymeEighthline'],
				// 'rhyme_9th_line'	    	=>	 $obj['rhymeNinethline'],
				// 'rhyme_10th_line'	    	=>	 $obj['rhymeTenthline'],
				// 'rhyme_11th_line'	   		=>	 $obj['rhymeEleventhline'],
				// 'rhyme_12th_line'	    	=>	 $obj['rhymeTwelvethline'],
				// 'rhyme_13th_line'	   	    =>	 $obj['rhymeThirteenthline'],
				// 'rhyme_14th_line'	   		=>	 $obj['rhymeFourteenthline'],
				// 'rhyme_15th_line'	    	=>	 $obj['rhymeFifteenthline'],

				// 'rhyme_16th_line'	    	=>	 $obj['rhymeSixTline'],
				// 'rhyme_17th_line'	    	=>	 $obj['rhymeSvnTline'],
				// 'rhyme_18th_line'	    	=>	 $obj['rhymeEgtTline'],
				// 'rhyme_19th_line'	    	=>	 $obj['rhymeNineTline'],
				// 'rhyme_20th_line'	    	=>	 $obj['rhymeTwnTline'],
				// 'rhyme_21st_line'	    	=>	 $obj['rhymeTwnFirstTline'],
				// 'rhyme_22nd_line'	    	=>	 $obj['rhymeTwnSecTline'],
				// 'rhyme_23rd_line'	    	=>	 $obj['rhymeTwnTrdTline'],
				// 'rhyme_24th_line'	    	=>	 $obj['rhymeTwnFurTline'],
				// 'rhyme_25th_line'	    	=>	 $obj['rhymeTwnFifTline'],
				// 'rhyme_26th_line'	   		=>	 $obj['rhymeTwnSixTline'],
				// 'rhyme_27th_line'	    	=>	 $obj['rhymeTwnSevTline'],
				// 'rhyme_28th_line'	   	    =>	 $obj['rhymeTwnEgtTline'],
				// 'rhyme_29th_line'	   		=>	 $obj['rhymeTwnNineTline'],
				// 'rhyme_30th_line'	    	=>	 $obj['rhymeThirtyline'],

		);
	
		$query = $this -> db -> insert('90rhyme',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}	
	function checkAdmin($obj){
		$this->db->where('usr_name', $obj['admname']);
		$query = $this->db->get('admin')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
	
	function searchAdmins($obj){		
	$query = $this -> db -> get('admin')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function searchCustomers($obj){		
	$this->db->order_by("customer_reg_date","desc");
		$query = $this -> db -> get('customer')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function deleteStoryById($id){
		$this->db->where('id', $id);
		$query=$this->db->delete('90days_table');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteRhymeById($id){
		$this->db->where('rhyme_id', $id);
		$query=$this->db->delete('90rhyme');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteImageById($id){
		$this->db->where('image_id', $id);
		$query=$this->db->delete('photogallery');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteAdminById($id){
		$this->db->where('usr_id', $id);
		$query=$this->db->delete('users');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteTopHeadingById($id){
		$this->db->where('webtopHeading_id', $id);
		$query=$this->db->delete('website_content_top');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function deleteMidHeadingById($id){
		$this->db->where('web_mid_content_id', $id);
		$query=$this->db->delete('website_content_middle');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteContactById($id){
		$this->db->where('contact_id', $id);
		$query=$this->db->delete('contact');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteFooterById($id){
		$this->db->where('footer_id', $id);
		$query=$this->db->delete('footer');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}	

	function deleteCus($id){
		$this->db->where('customer_id', $id);
		$query=$this->db->delete('customer');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function getAdminById($id){
		$this->db->where('usr_id', $id);
		$query = $this->db->get('admin')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	function getTopContentdata(){

 		$query = $this->db->get('website_content_top')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	
	function getMidContentdata(){

 		$query = $this->db->get('website_content_middle')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	function getContactdata(){

 		$query = $this->db->get('contact')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	} 
	function getFooterData(){

 		$query = $this->db->get('footer')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	} 			
	function updateAdmin($obj){
		
		$data= array(

			'usr_name'	    =>	 $obj['admname'],
			//'usr_add'	    =>	 $obj['admadd'],
			'usr_email'	    =>	 $obj['admemail'],
			'usr_phone'	    =>	 $obj['admphone'],
		);
	
	   	$this->db->where('usr_id', $obj['hidEx1']);
	   	$query=$this->db->update('admin', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}

	function getdata(){

 		$query = $this->db->get('90days_table')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	
	function getAdminInfodata(){

 		$query = $this->db->get('users')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	} 	
 	function getImage(){

 		$query = $this->db->get('photogallery')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	
	function getRhyme(){

 		$query = $this->db->get('90rhyme')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}  
	function getPhoto(){

 		$query = $this->db->get('photogallery')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}  	
 	function insertGallery($obj){
				
		$data= array(
				'gallery_img'	    =>	 $obj['galleryimages'],
			    'gallery_desc'		=>	 $obj['gallerydes'],
		);
		$query = $this -> db -> insert('photogallery',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}			
}