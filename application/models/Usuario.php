<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Williams
 */
class Usuario extends CI_Model{
    
    public function login($rut, $clave){
        $this->db->where("rut",$rut);
        $this->db->where("clave",$clave);
        return $this->db->get("usuario")->result();
        
    }
    
    public function login2($rut,$clave){
        $this->db->select("*");
        $this->db->from("usuario");
        $this->db->where("rut",$rut);
        $this->db->where("clave",$clave);
         return $this->db->get()->result();
    }
}
