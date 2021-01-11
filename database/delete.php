<?php

require_once 'koneksi.php';

class Delete extends Koneksi
{

    public function dPekerjaan($id_pekerjaan,$id){
        try {
            $sql = "DELETE FROM `rw_pekerjaan` WHERE `id_pekerjaan` = '$id_pekerjaan' AND `id_user` = '$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->execute();
        } catch (PDOException $e) {
            return 'Masalah delete Pekerjaan: ' . $e->getMessage();
        }
    }
    public function dPendidikan($id_pend,$id){
        try {
            $sql = "DELETE FROM `rw_pendidikan` WHERE `id_pendidikan` = '$id_pend' AND `id_user` = '$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->execute();
        } catch (PDOException $e) {
            return 'Masalah delete Pendidikan: ' . $e->getMessage();
        }
    }

}
?>