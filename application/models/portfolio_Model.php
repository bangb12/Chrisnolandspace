<?php
    class portfolio_Model extends CI_Model{
        function __constract(){
            parent::__constract();
        }
        function updateFeatured($pname, $description, $fp){
            $id = 1;
            $home = 'http://localhost:8888/Chrisnolandspace/index.php/pages/home/';
            $data = array(
                'pname' => $pname,
                'description' => $description,
                'fp' => $fp
            );
            $this->db->where('id', $id);
            $this->db->set($data);
            $this->db->update('FeaturedProject');
            header("Location: $home");
        }
    }
?>