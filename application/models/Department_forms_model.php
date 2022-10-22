<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Department_forms_model extends CI_Model {
    
    function __construct(){        
        $this->table_name = 'department_form';
        $this->table_id = 'id';        
    }
    
    public function GetAll()
    {        
        
        $rdata = array();
        
        $this->db->from($this->table_name);
//        $this->db->order_by("added_on", "desc");
        $query = $this->db->get(); 
        return $query->result();
    }
    
        public function GetById($id)
    {
        $this->db->where($this->table_id,$id);
        $result = $this->db->get($this->table_name)->row();
        return $result;
    }
    
    public function GetApprovedForms() {
        $result = $this->db->get_where($this->table_name,array('status'=>'approve'))->result();
        return $result;
    }
    public function GetDispprovedForms() {
        $result = $this->db->get_where($this->table_name,array('status'=>'disapprove'))->result();
        return $result;
    }
    
    public function GetAllAssociatedArray($key)
    {        
        $results = $this->db->get($this->table_name)->result();
        $results = parse_object_to_associated_array($key, $results);
        return $results;
    }
    
    public function GetByName($name)
    {        
        $result = $this->db->get_where($this->table_name,array('name'=>$name))->row();
        return $result;
    }
    
    public function Search($where)
    {        
        $orWhere = '';
        if(array_key_exists('status',$where))
        {                        
            if(!empty($where['status'])){
                $orWhere .= 'status = "'.$where['status'].'"';
            }              
            //$orWhere .= 'address_line_1 like "%'.$where['filter'].'%" or ';
            //$orWhere .= 'city  like "%'.$where['filter'].'%" or ';            
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
        
        $this->db->where($this->table_id,$id);
        if($this->db->delete($this->table_name))
        {
            return true;
        }else{
            return false;
        }   
    }
    
    public function DeleteForm($data){        
        
        $this->db->where($data);
        if($this->db->delete($this->table_name))
        {
            return true;
        }else{
            return false;
        }   
    }
}
?>