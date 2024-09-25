<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {
	public function read(){
        return $this->db->table('dvg_users')->get_all();
    }
    public function create($dvg_last_name, $dvg_first_name, $dvg_email, $dvg_gender, $dvg_address){
        $userdata = array(
            'dvg_last_name' => $dvg_last_name, 'dvg_first_name' => $dvg_first_name, 'dvg_email' => $dvg_email, 'dvg_gender' => $dvg_gender, 'dvg_address' => $dvg_address 
        );
        return $this->db->table('dvg_users')->insert($userdata);
    }
    public function get_one($id){
        return $this->db->table('dvg_users')->where('id', $id)->get();
    }
    public function update($dvg_last_name, $dvg_first_name, $dvg_email, $dvg_gender, $dvg_address, $id){
        $userdata = array(
            'dvg_last_name' => $dvg_last_name, 'dvg_first_name' => $dvg_first_name, 'dvg_email' => $dvg_email, 'dvg_gender' => $dvg_gender, 'dvg_address' => $dvg_address 
        );
        return $this->db->table('dvg_users')->where('id', $id)->update($userdata);
    }
    public function delete($id){
        return $this->db->table('dvg_users')->where('id', $id)->delete();
    }
}
?>
