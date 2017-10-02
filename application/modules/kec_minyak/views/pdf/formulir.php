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
    <td rowspan="5" width="50%"><strong>Permohonan Surat Izin Depo Pangkalan Minyak</strong></td>
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
    <td><strong>: <?php echo $query['no_telp'] ?></strong></td>
  </tr>
</table>

<br/>
&nbsp;
<br/>
<table width="100%">
  <tr>
    <td width="100%">Dengan ini mengajukan permohonan kepada Bapak, sekiranya dapat mengeluarkan Surat 
Izin Tempat Usaha (SITU) atas usaha saya sebagai berikut :</td>
  </tr>
</table>
<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="30%"><strong>Nama Usaha/Perusahaan </strong></td>
    <td width="67%"><strong>: <?php echo $query['nama_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Jenis Usaha </strong></td>
    <td><strong>: <?php echo $query['jenis_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Ukuran Luas Tempat Usaha</strong></td>
    <td><strong>: <?php echo $query['ukuran_luas_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Lokasi Tempat Usaha</strong></td>
    <td><strong>: <?php echo $query['lokasi_usaha'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Status Bangunan Tempat Usaha </strong></td>
    <td><strong>: <?php echo $query['status_bangunan_tempat_usaha'] ?></strong></td>
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
    <td width="94%">Surat Permohonan beraterai 6000</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2.</td>
    <td>Fotocopy KTP</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3.</td>
    <td>Fotocopy Tanda Bukti Hak Atas Tanah</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4.</td>
    <td>Surat Pengantar dari kelurahan/desa</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5.</td>
    <td>Denah Lokasi</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>6.</td>
    <td>Pas Foto Berwarna 3 x 4 ( 3 (tiga) lembar)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>7.</td>
    <td>Fotocopy PBB</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>8.</td>
    <td>Rekomendasi dari Puskesmas</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>9.</td>
    <td>Gambar Bangunan</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>10.</td>
    <td>Fotocopy Surat Izin Usaha</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>11.</td>
    <td>Instalasi air, listrik dan telepon</td>
  </tr>
</table>

<br/>
&nbsp;
<br/>

<table width="100%">
  <tr>
    <td width="100%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Permohonan SITU ini kami buat dengan sebenarnya dan apabila di kemudian hari ternyata data/informasi dan keterangan tersebut tidak benar, maka kami menyatakan bersedia dibatalkan SITU yang telah kami miliki dan dituntut sesuai dengan ketentuan peraturan perundang-undangan.</td>
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


