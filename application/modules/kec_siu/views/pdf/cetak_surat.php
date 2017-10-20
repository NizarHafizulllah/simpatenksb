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
    <td width="10%" rowspan="3"><img src="<?php echo base_url('assets/img/ksb.png') ?>" height="75" width="75"></td>
    <td width="80%" style="text-align: center"><div style="font-size: 15px; "><strong>PEMERINTAH KABUPATEN <?php echo $query['kabupaten'] ?></strong></div></td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: center"><div style="font-size: 27px; "><strong>KECAMATAN <?php echo $query['nm_kecamatan'] ?></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: center; font-style: italic;"><?php echo isset($profil_kecamatan['alamat_kecamatan'])?$profil_kecamatan['alamat_kecamatan']:''; ?></td>
  </tr>
</table>

<hr/>





<table width="100%">
  <tr>
    <td><div align="center" class="style17" style="font-size:12px;"><b><u>SURAT IZIN USAHA</u></b></div></td>
  </tr>
</table>

<table width="100%">
  <tr>
    <td><div align="center" style="font-size:10px"><strong>NOMOR  : <?php echo $query['no_register']; ?></strong></div></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;

<table width="100%">
  <tr>
    <td><div align="center" style="font-size: 12px;"><strong>CAMAT <?php echo $query['nm_kecamatan'] ?></strong> </div></td>
  </tr>
</table>

<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td width="16%" height="27"><div align="left" style="font-size: 9px;"><strong>Membaca</strong></div></td>
    <td width="2%">:</td>
    <td width="82%"><div align="justify" style="font-size: 9px;">Surat permohonan dari Saudara, tanggal <?php echo $d_surat.' Bulan '.$m_surat.' Tahun '.$y_surat; ?> yang bermaksud untuk memperoleh/mendaftar ulang/memperpanjang Surat Rekomendasi Izin Kerja Praktek Tenaga Kesehatan;</div></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;


<table width="100%">
  <tr>
    <td width="16%" ><div align="left" style="font-size: 9px;"><strong>Menimbang</strong></div></td>
    <td width="2%">:</td>
    <td width="82%"><div align="justify" style="font-size: 9px;">bahwa permohonan tersebut diatas telah dilakukan pemeriksaan dan memenuhi syarat-syarat sesuai peraturan dan ketentuan yang berlaku, maka permohonan yang bersangkutan telah dapat diberikan Surat Rekomendasi Izin Kerja Praktek Tenaga Kesehatan; </div> </td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td width="16%"><div align="left" style="font-size: 9px;"><strong>Mengingat</strong></div></td>
    <td width="2%">:</td>
    <td width="2%"><div align="left" style="font-size: 9px;">1.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">2.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Undang-Undang Nomor 30 Tahun 2003 tentang Pembentukan Kabupaten Sumbawa Barat di Provinsi Nusa Tenggara Barat;</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">3. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Daerah Kabupaten Sumbawa Barat Nomor <?php echo $profil_kecamatan['no_perda_pembentukan'] ?> Tahun <?php echo $profil_kecamatan['tahun_pembentukan'] ?> tentang Pembentukan Kecamatan <?php echo $query['nm_kecamatan'] ?>.; </div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">4. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Bupati Sumbawa Barat Nomor 44 Tahun 2013 tentang Uraian Tugas Pelayanan Adminitrasi Terpadu Kecamatan di Kabupaten Sumbawa Barat;</div></td>
  </tr>
  <tr>
    <td width="16%" >&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">5. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Bupati Sumbawa Barat Nomor 45 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non-Perizinan di Kecamatan Se-Kabupaten Sumbawa Barat;</div></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td><div align="center" style="font-size: 9px"><strong>MEMUTUSKAN</strong></div></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td width="16%"><div align="left" style="font-size: 9px;"><strong>Menetapkan</strong></div></td>
    <td width="2%"><strong>:</strong></td>
    <td width="82%" colspan="2"><div align="justif" style="font-size: 9px;"> Memberikan/memperpanjang Surat Rekomendasi Izin Kerja Praktek Tenaga Kesehatan. kepada :   </div> </td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td width="22%"><div align="justif" style="font-size: 9px;"> Nama   </div> </td>
    <td width="70%"><div align="justif" style="font-size: 9px;">: <?php echo $query['nama_pemohon'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Kewarganegaraan   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['negara_pemohon'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> No. KTP   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['nik_pemohon'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Alamat   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['alamat'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> NPWPD   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['npwpd'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Alamat Usaha   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['lokasi_usaha'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Merk Usaha   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['nama_usaha'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Klasifikasi Perushaan   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['klasifikasi_usaha'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Jenis Usaha   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['jenis_usaha'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Retribusi per-tahun Fisikal </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['retribusi_perthn_f'] ?></div></td>
  </tr>
</table>


<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td width="60%">&nbsp;</td>
    <td width="40%"><strong>Ditetapkan di <?php echo $query['nm_kecamatan'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Pada tanggal <?php echo $d_surat.' '.$m_surat.' '.$y_surat; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>a.n BUPATI SUMBAWA BARAT</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Camat <?php echo $query['nm_kecamatan'] ?></strong></td>
  </tr>
  <tr>
    <td height="71">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong><u><?php echo $query['nama_camat'] ?></u></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>NIP. <?php echo $query['nip_camat'] ?></strong></td>
  </tr>
</table>

</body>

</html>


