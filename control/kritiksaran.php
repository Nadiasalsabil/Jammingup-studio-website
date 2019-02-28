<?php

class Kritik

{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }

    //show kritik dan saran

    public function showKritiksaran()
    {
        $sql        = "SELECT * FROM kritiksaran ORDER BY id DESC";
        $query      = $this->db->query($sql);
        return $query;

        
    }

    //add Kritik dan Saran
    public function addKritiksaran($id,$ks,$nama,$email)
    {
        $sql = "INSERT INTO kritiksaran (id, kritik_saran, nama, email) VALUES ('$id', '$ks', '$nama', '$email')";
        $query = $this->db->query($sql);
            if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
}


?>