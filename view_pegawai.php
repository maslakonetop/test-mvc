<?php
    class view_pegawai{
        function lihat($data){
            echo $data['nama'];
            echo "<br />";
            echo $data['nik'];
        }
    }
?>