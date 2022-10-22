<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    
    function __construct() {
        parent::__construct();        
        $this->table_name = 'users';
        $this->table_id = 'id';        
    }
    
    public function validate($where=array())
    {
        $query = $this->db->get_where($this->table_name,$where)->row();
        if(isset($query->id)){
            return $query->id;
        }else{
            return 0;
        }
    }
    
    public function GetById($id)
    {
        $this->db->where($this->table_id,$id);
        $result = $this->db->get($this->table_name)->row_array();
        return $result;
    }
    
    public function GetAll()
    {        
        $rdata = array();
        
        $this->db->from($this->table_name);
        $this->db->order_by("added_on", "desc");
        $query = $this->db->get(); 
        return $query->result_array();
    }
    
    
    public function Search($where)
    {        
        $orWhere = '';
        if(array_key_exists('status',$where))
        {                        
            if(!empty($where['status'])){
                $orWhere .= 'status = "'.$where['status'].'"';
            }              
            unset($where['status']);
        }        
        
        $this->db->where($where);
            
        if($orWhere!=''){
            $this->db->where($orWhere);
        }
        $this->db->order_by($this->table_id, 'DESC');
        $results =  $this->db->get($this->table_name)->result();
        
        return $results;
        
    }
    
    public function Save($data,$id=0)
    {        
        if($id==0){
            $this->db->insert($this->table_name, $data);
            $id = $this->db->insert_id();
        }else{
            $this->db->where($this->table_id, $id);
            $this->db->update($this->table_name, $data);
        }
        return $id;
    }
    
    
    public function Delete($id){        
        
        $this->db->where($this->table_id,$user_id);
        if($this->db->delete($this->table_name))
        {
            return true;
        }else{
            return false;
        }   
    }

}
?>