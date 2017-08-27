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
    <td><div align="center" class="style17" style="font-size:12px;"><b><u>IZIN MENDIRKAN BANGUNAN</u></b></div></td>
  </tr>
</table>

<table width="100%">
  <tr>
    <td><div align="center" style="font-size:10px"><strong>NOMOR  : <?php echo $query['no_regis']; ?></strong></div></td>
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
    <td width="2%"><div align="left" style="font-size: 9px;">1.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Surat Sdr/Sdri : <?php echo $query['nama_pemohon'] ?> tentang permohonan Izin Mendirikan Bangunan (IMB) tanggal <?php echo flipdate($query['tgl_surat']) ?> dan sesuai dengan rekomendasi Kepala Desa/Lurah Nomor : <?php echo $query['no_rekom_desa'] ?>, tanggal <?php echo flipdate($query['tgl_rekom_desa']) ?>, untuk mendirikan bangunan <?php echo $query['nama_bangunan'] ?> di atas sebidang tanah yang terletak di <?php echo $query['letak_tanah'] ?> berdasarkan Surat Keterangan Ganti Rugi (SKGR) Nomor : <?php echo $query['no_skgr'] ?>, tanggal <?php echo flipdate($query['tgl_skgr']) ?>; </div></td>
  </tr>
  <tr>
    <td width="16%" height="37">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">2.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Rekomendasi Teknis Izin Mendirikan Bangunan Nomor : <?php echo $query['no_rekom_uptd'] ?>, tanggal <?php echo flipdate($query['tgl_rekom_uptd']) ?> dari UPTD Tata Ruang dan Cipta Karya kabupaten Siak; </div></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;


<table width="100%">
  <tr>
    <td width="16%" ><div align="left" style="font-size: 9px;"><strong>Menimbang</strong></div></td>
    <td width="2%">:</td>
    <td width="82%"><div align="justify" style="font-size: 9px;">bahwa permohonan tersebut diatas telah dilakukan pemeriksaan dan memenuhi syarat-syarat sesuai peraturan dan ketentuan yang berlaku, maka permohonan yang bersangkutan telah dapat diberikan Izin Mendirikan Bangunan; </div> </td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td width="16%"><div align="left" style="font-size: 9px;"><strong>Mengingat</strong></div></td>
    <td width="2%">:</td>
    <td width="2%"><div align="left" style="font-size: 9px;">1.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah;</div></td>
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
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Bupati Sumbawa Barat Nomor 14 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Bupati kepada Camat untuk melaksanakan Urusan Pemerintahan Daerah;</div></td>
  </tr>
  <tr>
    <td width="16%" >&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">5. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Bupati Sumbawa Barat Nomor 44 Tahun 2013 tentang Uraian Tugas Pelayanan Adminitrasi Terpadu Kecamatan di Kabupaten Sumbawa Barat;</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">6. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Bupati Sumbawa Barat Nomor 45 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non-Perizinan di Kecamatan Se-Kabupaten Sumbawa Barat;</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">7. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Daerah Kabupaten Sumbawa Barat Nomor …. Tahun …. tentang Retribusi Izin Mendirikan Bangunan;</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">8. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Daerah Kabupaten Sumbawa Barat Nomor …..Tahun …… tentang Izin Mendirikan Bangunan;</div></td>
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
    <td width="32%"><div align="justif" style="font-size: 9px;"> Memberikan Izin kepada   </div> </td>
    <td width="50%"><div align="justif" style="font-size: 9px;">: <?php echo $query['nama_pemohon'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Pekerjaan   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['pekerjaan_pemohon'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Untuk mendirikan bangunan    </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['nama_bangunan'] ?></div></td>
  </tr>
  <tr>
    <td><div align="left" style="font-size: 9px;">&nbsp;</div></td>
    <td>&nbsp;</td>
    <td><div align="justif" style="font-size: 9px;"> Di atas sebidang tanah yang terletak di   </div> </td>
    <td><div align="justif" style="font-size: 9px;">: <?php echo $query['letak_tanah'] ?></div></td>
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


