<?php
class Library
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }

    //show message
    public function showMessage()
    {
        $sql = "SELECT * FROM project_client ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query;
    }

    //add Message
    public function addMessage($id, $nama, $hp, $perusahaan, $email, $jenis, $pesan)
    {
        $sql = "INSERT INTO project_client (id, nama, no_hp, instansi, email, jenis, pesan) VALUES('$id', '$nama', '$hp', '$perusahaan', '$email', '$jenis', '$pesan')";
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