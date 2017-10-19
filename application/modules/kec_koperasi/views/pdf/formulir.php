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
    <td rowspan="5" width="10%"><strong>Perihal</strong></td>
    <td rowspan="5" width="2%"><strong>:</strong></td>
    <td rowspan="5" width="45%"><strong>Permohonan Surat Rekomendasi Izin Pendirian Koperasi</strong></td>
     <td rowspan="5%" width="5%"></td>
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
    <td width="3%">&nbsp;</td>
    <td width="25%"><strong>Nama (sesuai KTP)</strong></td>
    <td width="72%"><strong>: <?php echo $query['nama_pemohon'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Tempat/Tanggal Lahir </strong></td>
    <td><strong>: <?php $tgl_lahir = flipdate($query['tgl_lahir']); echo $query['tempat_lahir'].', '.$tgl_lahir ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Pekerjaan</strong></td>
    <td><strong>: <?php echo $query['pekerjaan'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Alamat</strong></td>
    <td><strong>: <?php echo $query['alamat'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>No.Telp / HP</strong></td>
    <td><strong>: <?php echo $query['no_tlp'] ?></strong></td>
  </tr>
</table>

<br/>
&nbsp;
<br/>
<table width="100%">
  <tr>
    <td width="100%">Dengan ini mengajukan permohonan kepada Bapak, sekiranya dapat mengeluarkan Surat Rekomendasi Izin Pendirian Koperasi atas usaha saya sebagai berikut :</td>
  </tr>
</table>
<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="30%"><strong>Nama Koperasi</strong></td>
    <td width="67%"><strong>: <?php echo $query['merek_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Jenis Koperasi</strong></td>
    <td><strong>: <?php echo $query['jenis_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Ukuran Luas</strong></td>
    <td><strong>: <?php echo $query['ukuran_luas_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Lokasi</strong></td>
    <td><strong>: <?php echo $query['alamat_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Status Bangunan Tempat Usaha </strong></td>
    <td><strong>: <?php echo $query['status_bangunan'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Nomor NPWPD  </strong></td>
    <td><strong>: <?php echo $query['npwpd'] ?></strong></td>
  </tr>
</table>

<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="100%">Sebagai pertimbangan dari Bapak, berikut saya lampirkan syarat-syarat sebagai berikut :</td>
  </tr>
</table>
<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="3%">1.</td>
    <td width="94%">Surat Permohonan bermatrai 6000</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2.</td>
    <td>Memiliki AD / ART</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3.</td>
    <td>Foto Copy Akte Notaris</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4.</td>
    <td>Rekomendasi dari Lurah/ Kepala Desa </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5.</td>
    <td>Memiliki Program Kerja yang Jelas</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>6.</td>
    <td>Daftar Susunan Pengurus lengkap dan alamatnya</td>
  </tr>
  <tr>
</table>

<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="100%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Permohonan ini kami buat dengan sebenarnya dan apabila di kemudian hari ternyata data/informasi dan keterangan tersebut tidak benar, maka kami menyatakan bersedia dibatalkan dan dituntut sesuai dengan ketentuan peraturan perundang-undangan.</td>
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
    <td><strong>Pemilik / Pengurus / Penanggungjawab Usaha *)</strong></td>
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


