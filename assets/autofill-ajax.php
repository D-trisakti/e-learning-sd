<?php
$guru = $_GET['guru'];
$sql = $this->db->query("SELECT *FROM USER WHERE nama = '$guru'");
$nama = $result_array($sql);
$data = array(
    'mapel' => $nama['mapel']
);
echo json_encode($data);
?>