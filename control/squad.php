<?php
class Library
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }
    //CRUD J-Article    
     //show
    public function showArt()
    {
        $sql = "SELECT * FROM j_user";
        $query = $this->db->query($sql);
        return $query;
    }
}
?>