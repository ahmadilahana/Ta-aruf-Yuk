<?php

require_once 'koneksi.php';

class Update extends Koneksi
{
    public function uBiodata($id,$jns_kel,$tmp_lahir,$tgl_lahir,$almt_skr,$kota_skr,$prov_skr,$almt_asl,$kota_asl,$prov_asl,$suku,$gol_darah,$nm_ayah,$nm_ibu,$stat_nikah,$lam_surat,$foto_ktp,$no_hp,$sosmed){
        try {
            $sql = "UPDATE biodata_diri SET jns_kel='$jns_kel', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', alamat_skr='$almt_skr', kota_skr='$kota_skr', provinsi_skr='$prov_skr', alamat_asl='$almt_asl', kota_asl='$kota_asl', provinsi_asl='$prov_asl', suku='$suku', gol_darah='$gol_darah', nm_ayah='$nm_ayah', nm_ibu='$nm_ibu', stat_nikah='$stat_nikah', lam_surat='$lam_surat', foto_ktp='$foto_ktp', no_hp='$no_hp', sosmed='$sosmed' WHERE id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->execute();
            // return $sql2;
            // return $sql1;
        } catch (PDOException $e) {
            return 'Masalah Update uBiodata:' . $e->getMessage();
        }
    }
    public function uGamDiri($id,$b_fisik,$w_kulit,$t_rambut,$w_rambut,$w_mata,$c_fisik,$t_badan,$b_badan,$s_tubuh){
        try {
            $sql = "UPDATE gm_diri SET b_fisik='$b_fisik', w_kulit='$w_kulit', t_rambut='$t_rambut', w_rambut='$w_rambut', w_mata='$w_mata', c_fisik='$c_fisik', t_badan='$t_badan', b_badan='$b_badan', s_tubuh='$s_tubuh' WHERE id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->execute();
        } catch (PDOException $e) {
            return 'Masalah Update uGamDiri: '. $e->getMessage();
        } 
    }
    public function uPekerjaan($id_pekerjaan,$id,$nm_perusahaan,$jabatan,$periode){
        try {
            for ($i=0; $i < count($id_pekerjaan); $i++) {
                $sql = "UPDATE rw_pekerjaan set nm_perusahaan='$nm_perusahaan[$i]', jabatan='$jabatan[$i]', periode='$periode[$i]' where id_pekerjaan='$id_pekerjaan[$i]' and id_user='$id'";
                $stmt = $this->prepare($sql);
                $stmt = $this->execute();
            }
        } catch (PDOException $e) {
            echo 'Masalah Update Pekerjaan: '. $e->getMessage();
        }
    }
    public function uPendidikan($id_pend,$id,$nm_sekolah,$jurusan,$th_ajaran){
        try {
            for ($i=0; $i < count($id_pend); $i++) {
                $sql = "UPDATE rw_pendidikan set nm_sekolah='$nm_sekolah[$i]', jurusan='$jurusan[$i]', th_ajaran='$th_ajaran[$i]' where id_pendidikan='$id_pend[$i]' and id_user='$id'";
                $stmt = $this->prepare($sql);
                $stmt = $this->execute();
            }
        } catch (PDOException $e) {
            echo 'Masalah Update Pekerjaan: '. $e->getMessage();
        }
    }
    public function uMinat($id,$hobi,$film,$buku,$musik,$olahraga,$jawab1,$jawab2,$jawab3){
        try {
            $sql = "UPDATE minat set hobi='$hobi', film='$film', buku='$buku', musik='$musik', olahraga='$olahraga', jawab1='$jawab1', jawab2='$jawab2', jawab3='$jawab3' where id_user='$id'";
            $stmt = $this->prepare($sql);
            $stmt = $this->execute();
        } catch (PDOException $e) {
            echo 'Masalah Update Minat; '. $e->getMessage();
        }
    }
}

?>