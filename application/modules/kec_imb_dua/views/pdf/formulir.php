<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
 <style type="text/css">
<!--
.style17 {
	font-size: 24px;
	font-weight: bold;
}
-->
 </style>
</head>

<body>

<p>
  <!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
  
  
  <style>
* {
  font-size:10px;
}
.judul {
  font-size:12px;
  font-weight:bold;
   text-align:center;
}

#gambar {
  width:50px;
  position:fixed;
  top:10px;
  float:left;
}

#kop {
  text-align:center;
}
</style>
  
  <?php $userdata = $this->session->userdata('admin_login'); 
?>



<table width="100%">
  <tr>
    <td rowspan="5" width="65%"><strong>Perihal   : Permohonan Izin Mendirikan Bangunan (IMB)</strong></td>
    <td width="35%"><?php echo $query['nm_kecamatan'] ?>, <?php echo $d_surat.' '.$m_surat.' '.$y_surat; ?> </td>
  </tr>
  <tr>
    <td>Kepada Yth.</td>
  </tr>
  <tr>
    <td>Bapak Camat <?php echo $query['nm_kecamatan'] ?></td>
  </tr>
  <tr>
    <td>di</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tempat</td>
  </tr>
</table>

<br/>
&nbsp;
<br/>


<table width="100%">
  <tr>
    <td width="100%">Yang bertanda tangan di bawah ini :</td>
  </tr>
</table>

<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="25%"><strong>Nama (sesuai KTP)</strong></td>
    <td width="72%"><strong>: <?php echo $query['nama_pemohon'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Tempat/Tanggal Lahir </strong></td>
    <td><strong>: <?php $tgl_lahir = flipdate($query['tgl_lahir_pemohon']); echo $query['tempat_lahir_pemohon'].', '.$tgl_lahir ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Pekerjaan</strong></td>
    <td><strong>: <?php echo $query['pekerjaan_pemohon'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Alamat</strong></td>
    <td><strong>: <?php echo $query['alamat'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>No.Telp / HP</strong></td>
    <td><strong>: <?php echo $query['no_telp_pemohon'] ?></strong></td>
  </tr>
</table>

<br/>
&nbsp;
<br/>
<table width="100%">
  <tr>
    <td width="100%">Dengan ini mengajukan permohonan untuk memperoleh Izin Mendirikan Bangunan, sebagai bahan pertimbangan, bersama ini saya lampirkan syarat-syarat sebagai berikut :</td>
  </tr>
</table>
<br/>
&nbsp;
<br/>


<table width="100%">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="3%">1.</td>
    <td width="94%">Formulir PIMB (1 asli, 2 fotokopi)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2.</td>
    <td>Fotokopi KTP Pemilik ( 3 rangkap)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3.</td>
    <td>Pasphoto warna ukuran 3x4  (3 (tiga) lembar)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4.</td>
    <td>Fotokopi Sertifikat Tanah / SKGR Camat (3 (tiga) rangkap)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5.</td>
    <td>Fotokopi PBB (3 (tiga) rangkap)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>6.</td>
    <td>BAP / Rekomendasi UPTD TARCIP setempat  (3 (tiga) rangkap)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>7.</td>
    <td>Penelitian tanah/sondir untuk ruko 3(tiga) lantai</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>8.</td>
    <td>Surat Persetujuan Sempada Tanah</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>9.</td>
    <td>Rekomendasi Dinas Perhubungan dan Infokom Kab.Sumbawa Barat (untuk IMB Tower)</td>
  </tr>
</table>

<br/>
&nbsp;
<br/>
<table width="100%">
  <tr>
    <td width="100%">serta memenuhi persyaratan teknis sebagai berikut :</td>
  </tr>
</table>
<br/>
&nbsp;
<br/>


<table width="100%">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="3%">1.</td>
    <td width="94%">Gambar rencana bangunan & site plan (3 (tiga) rangkap)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2.</td>
    <td>Instalasi air, listrik dan telepon</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3.</td>
    <td>Penelitian tanah/sondir untuk ruko 3(tiga) lantai</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4.</td>
    <td>Sistem pengamanan</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5.</td>
    <td>Sistem drainase dan persampahan</td>
  </tr>
</table>


<br/>
&nbsp;
<br/>
<table width="100%">
  <tr>
    <td width="100%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Permohonan ini kami buat dengan sebenarnya dan apabila di kemudian hari ternyata data/informasi dan keterangan tersebut tidak benar, maka kami menyatakan bersedia dibatalkan IMB yang telah kami miliki dan dituntut sesuai dengan ketentuan peraturan perundang-undangan.</td>
  </tr>
</table>
<br/>
&nbsp;
<br/>

<table width="100%">
<tr>
    <td width="4%">&nbsp;</td>
    <td width="48%">&nbsp;</td>
    <td width="48%"><strong><?php echo $query['nm_kecamatan'].', '.$d_surat.' '.$m_surat.' '.$y_surat; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Pemilik / Pengurus / Penanggungjawab *)</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>*) Coret yang tidak perlu</strong></td>
    <td><strong><?php echo $query['nama_pemohon'] ?></strong></td>
  </tr>
</table>



</body>

</html>


