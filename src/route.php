<?php
$p =  $_GET['p'];

switch ($p) {
    case 'data':
        require_once "datakeluarga.html";
        break;
    case 'laporan_kelahiran':
        require_once "laporankelahiran.html";
        break;
    case 'laporan_kematian':
        require_once "laporankematian.html";
        break;
    case 'surat_pengajuan':
        require_once "suratpengajuan.html";
        break;
    case 'pindah_alamat':
        require_once "pindahalamat.html";
        break;
    case 'bantuan':
        require_once "bantuan.html";
        break;
    default:
        require_once "dashboard.html";
        break;

}

?>