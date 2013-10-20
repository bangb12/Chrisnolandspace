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
        function addProject($pname, $description, $limage, $simage, $ldescription, $imagealt){
            $portfolio = 'http://localhost:8888/Chrisnolandspace/index.php/pages/portfolio/';
            $data = array(
                'pname' => $pname,
                'description' => $description,
                'limage' => $limage,
                'simage' => $simage,
                'ldescription' => $ldescription,
                'imagealt' => $imagealt
            );
            $this->db->set($data);
            $this->db->insert('Projects');
            header("Location: $portfolio");
        }
        function loadDetails($id){
            $this->db->where('id', $id);
            $data = $this->db->get('Projects');            
            return $data->result();
        }
    }
?>