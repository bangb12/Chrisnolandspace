<?php
    class portfolioModel extends CI_Model{
        function updateFeatured($data){
            $id = 1;
            $this->db->where('id', $id);
            $this->db->update('FeaturedProject', $data);
        }
    }
?>