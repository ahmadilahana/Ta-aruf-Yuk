<?php

require_once 'koneksi.php';

class Read extends Koneksi
{
    public function rAkun()
    {
        try {
            $sql = "SELECT * FROM akun";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_array();
            return $stmt;
        } catch (PDOException $e) {
            echo 'Masalah read Akun:' . $e->getMessage();
        }
    }
    public function rAkunsignup($email)
    {
        try {
            $sql = "SELECT * FROM akun where email='$email'";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_data();
            return $stmt;
        } catch (PDOException $e) {
            echo 'Masalah read Akun:' . $e->getMessage();
        }
    }
    public function rProfile($id)
    {
        try {
            $sql = "SELECT * FROM akun a, biodata_diri b, gm_diri c where a.id_user='$id' AND a.id_user=b.id_user AND a.id_user=c.id_user";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_data();
            return $stmt;
        } catch (PDOException $e) {
            echo 'Masalah read Profile:' . $e->getMessage();
        }
    }
    public function rIdPekerjaan()
    {
        try {
            $sql = "SELECT id_pekerjaan FROM rw_pekerjaan";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_array();
            return $stmt;
        } catch (PDOException $e) {
            echo 'Masalah read id pekerjaan:' . $e->getMessage();
        }
    }
    public function rIdPendidikan()
    {
        try {
            $sql = "SELECT id_pendidikan FROM rw_pendidikan";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_array();
            return $stmt;
        } catch (PDOException $e) {
            echo 'Masalah read id pekerjaan:' . $e->getMessage();
        }
    }
    public function rPekerjaan($id)
    {
        try {
            $sql = "SELECT * FROM rw_pekerjaan where id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_array();
            return $stmt;
        } catch (PDOException $e) {
            return 'Masalah read Pekerjaan: ' . $e->getMessage();
        }
    }
    public function rPendidikan($id)
    {
        try {
            $sql = "SELECT * FROM rw_pendidikan where id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_array();
            return $stmt;
        } catch (PDOException $e) {
            return 'Masalah read Pendidikan: ' . $e->getMessage();
        }
    }
    public function rMinat($id)
    {
        try {
            $sql = "SELECT * FROM minat where id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_data();
            return $stmt;
        } catch (PDOException $e) {
            return 'Masalah read Pendidikan: ' . $e->getMessage();
        }
    }
    public function rUser($id)
    {
        try {
            $sql = "SELECT jns_kel FROM biodata_diri where id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->get_data();
            $jns_kel = $stmt['jns_kel'];
            if ($jns_kel == 'P') {
                $sql1 =  "SELECT * FROM biodata_diri a, akun b where a.jns_kel='$jns_kel' and a.id_user=b.id_user";
                $stmt1 = $this->prepare($sql1);
                $stmt1 = $this->get_array();
            } else {
                $sql1 =  "SELECT * FROM biodata_diri a, akun b where a.jns_kel='$jns_kel' and a.id_user=b.id_user";
                $stmt1 = $this->prepare($sql1);
                $stmt1 = $this->get_array();
            }
            return $stmt1;
        } catch (PDOException $e) {
            return 'Masalah read Pendidikan: ' . $e->getMessage();
        }
    }
}
// $read = new Read;
// print_r($read->rProfile(3));
