<?php

require_once 'koneksi.php';

class Insert extends Koneksi
{
    public function iAkun($id, $email, $pass,$nama, $jns_kel, $tgl_lahir){
        try {
            $sql2 = "INSERT INTO `akun` values ('$id', '$email', '$pass', '$nama')";
            $stmt2 = $this->prepare($sql2);
            $stmt2 = $this->execute();
            $sql1 = "INSERT INTO biodata_diri (id_bio, id_user, jns_kel, tgl_lahir) VALUES ('$id', '$id', '$jns_kel', '$tgl_lahir')";
            $stmt1 = $this->prepare($sql1);
            $stmt1 = $this->execute();
            $sql = "INSERT INTO gm_diri (id_gm_diri, id_user) VALUES ('$id', '$id')";
            $stmt = $this->prepare($sql);
            $stmt = $this->execute();
            $sql3 = "INSERT INTO minat (id_minat, id_user) VALUES ('$id', '$id')";
            $stmt3 = $this->prepare($sql3);
            $stmt3 = $this->execute();
            // return $sql2;
            // return $sql1;
        } catch (PDOException $e) {
            return 'Masalah Insert akun dan biodata:' . $e->getMessage();
        }
    }
    public function iPekerjaan($id,$nm_perusahaan,$jabatan,$periode){
        require_once 'read.php';
        $read = new Read;
        for ($i=0; $i < count($nm_perusahaan); $i++) {
            $dataR = $read->rIdPekerjaan();
            $id_kerja = 1;
            // print_r($dataR);
            for ($j = 0; $j <= count($dataR); $j++) {
                if ($id_kerja == $dataR[$j]['id_pekerjaan']) {
                    // echo 'ada';
                    $id_kerja++;
                } else {
                    // echo 'tidak ada';
                    break;
                }
            }
            try {
                $sql = "INSERT INTO rw_pekerjaan VALUES('$id_kerja','$id','$nm_perusahaan[$i]','$jabatan[$i]','$periode[$i]')";
                $stmt = $this->prepare($sql);
                $stmt = $this->execute();
            } catch (PDOException $e) {
                return "Masalah Insert pekerjaan: " . $e->getMessage();
            }   
        }
    }
    public function iPendidikan($id,$nm_sekolah,$jurusan,$th_ajaran){
        // return "hello";
        require_once 'read.php';
        $read = new Read;
        for ($i=0; $i < count($nm_sekolah); $i++) {
            $dataR = $read->rIdPendidikan();
            $id_pend = 1;
            for ($j = 0; $j <= count($dataR); $j++) {
                if ($id_pend == $dataR[$j]['id_pendidikan']) {
                    // echo 'ada';
                    $id_pend++;
                } else {
                    break;
                }
            }
            try {
                $sql = "INSERT INTO rw_pendidikan VALUES ('$id_pend','$id','$nm_sekolah[$i]','$jurusan[$i]','$th_ajaran[$i]')";
                $stmt = $this->prepare($sql);
                $stmt = $this->execute();
                // return $sqel;
            } catch (PDOException $e) {
                return "Masalah Insert pendidikan: ". $e->getMessage();
            }
        }
    }
}

?>