<?php
 include("model_pegawai.php");
 include("view_pegawai.php");
 
class controller_pegawai{
function index(){
   $data['nama']= model_pegawai->getNama();
   $data['nik']= model_pegawai->getNik();
   view_pegawai->lihat($data);
  }
 }
?>