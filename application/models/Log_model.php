<?php 
class Log_model extends CI_Model {
 
	function __construct()
	 {
	 	parent::__construct();
	 }
 
         
         /*
          * Check if page exists.
          * Its selects all rows with the matched page_segment (page URI)
          * Then counts them, if nothing is returned it returns false
          */
        function check_if_page_exsists($page) {
            $this->db->select('page_id')
                    ->from('general_pages')
                    ->where('page_segment', $page);
            $query = $this->db->get()->result_array();
            
            if($query)
            {
                return $query[0]['page_id'];
            }else{
                return FALSE;
            }
        }
        
        //Function to insert new page_segment, returns the segment_id
        function insert_new_page($page){
            $insert = array(
                'page_segment' => $page
            );
            $this->db->trans_start();
            $this->db->insert('general_pages',$insert);
            $insert_id = $this->db->insert_id();
            $this->db->trans_complete();
            
          return $insert_id;
        }
        
        //The function to log the user activity
        function log_user_activity($user_id, $page_fk, $session_id){
            $insert = array(
                'ula_page_fk' => $page_fk,
                'ula_user_fk' => $user_id,
                'ula_session_id' => $session_id
            );
            
            $this->db->insert('user_log_activity', $insert);
            return TRUE;
        }
}
