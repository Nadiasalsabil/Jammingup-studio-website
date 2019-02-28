<?php

class Gallery
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }

    //Show Gallery

    public function showGallery()
    {
        $sql = "SELECT * FROM j_galery ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query;
    }

}
?>