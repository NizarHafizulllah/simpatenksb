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
    <td><div align="center" class="style17" style="font-size:17px;"><b><u>SURAT IZIN TEMPAT USAHA</u></b></div></td>
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
    <td width="82%"><div align="justify" style="font-size: 9px;">Surat permohonan dari Saudara, tanggal <?php echo $d_surat.' Bulan '.$m_surat.' Tahun '.$y_surat; ?> yang bermaksud untuk memperoleh/mendaftar ulang/memperpanjang Surat Izin Tempat Usaha;</div></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;


<table width="100%">
  <tr>
    <td width="16%" ><div align="left" style="font-size: 9px;"><strong>Menimbang</strong></div></td>
    <td width="2%">:</td>
    <td width="82%"><div align="justify" style="font-size: 9px;">bahwa permohonan untuk memperoleh/mendaftar ulang/memperpanjang Surat Izin Tempat Usaha tersebut di atas telah memenuhi syarat untuk dikabulkan; </div> </td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%">
  <tr>
    <td width="16%"><div align="left" style="font-size: 9px;"><strong>Mengingat</strong></div></td>
    <td width="2%">:</td>
    <td width="2%"><div align="left" style="font-size: 9px;">1.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Undang-Undang No 69 Tahun 1958 tentang Pembentukan Daerah-Daerah Tigkat I Bali,Nusa Tenggara Barat, dan Nusa Tenggara Timur;</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">2.</div> </td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Undang-Undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah sebagaimana telah diubah beberapa kali, terakhir dengan Undang-Undang Nomor 12 Tahun 2008 tentang Perubahan Kedua atas Undang-Undang Nomor 32 tentang Pemerintahan Daerah;</div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">3. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Undang-Undang Nomor 30 Tahun 2003 tentang Pembentukan Kabupaten Sumbawa Barat di Provinsi Nusa Tenggara Barat; </div></td>
  </tr>
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">4. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Pemerintah Nomor 25 Tahun 2000 tentang Kewenangan Pemerintah dan Kewenangan Propinsi sebagai Daerah Otonom;</div></td>
  </tr>
  <tr>
    <td width="16%" >&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">5. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Daerah Kabupaten Sumbawa Barat Nomor <?php echo $profil_kecamatan['no_perda_pembentukan'] ?> Tahun <?php echo $profil_kecamatan['tahun_pembentukan'] ?> tentang Pembentukan Kecamatan <?php echo $query['nm_kecamatan'] ?>.;</div></td>
  </tr>
  <tr>
    <td width="16%" >&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="2%"><div align="left" style="font-size: 9px;">6. </div></td>
    <td width="80%"><div align="justify" style="font-size: 9px;">Peraturan Bupati Sumbawa Barat Nomor 14 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Bupati kepada Camat untuk melaksanakan Urusan Pemerintahan Daerah;</div></td>
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
    <td width="82%" colspan="2"><div align="justif" style="font-size: 9px;"> Memberikan/memperpanjang Surat Rekomendasi Tempat Usaha. kepada :  <?php echo $query['nama_pemohon'] ?> </div> </td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;

<table width="100%">
  <tr>
    <td colspan="2" width="100%">Dengan ketentuan-ketentuan sebagai berikut :</td>
  </tr>
  <tr>
    <td width="3%">1. </td>
    <td width="97%">Ikut serta menjaga ketertiban, keamanan, ketenteraman umum.</td>
  </tr>
  <tr>
    <td width="3%">2. </td>
    <td width="97%">Memelihara kebersihan tempat usaha dan lingkungan.</td>
  </tr>
  <tr>
    <td width="3%">3. </td>
    <td width="97%">Menaati ketentuan/petunjuk yang ada hubungan dengan kegiatan usahanya.</td>
  </tr>
  <tr>
    <td width="3%">4. </td>
    <td width="97%">Membayar pajak dan retribusi daerah yang berkenaan dengan usaha yang dilakukan.</td>
  </tr>
  <tr>
    <td width="3%">5. </td>
    <td width="97%">Menyediakan racun api dan peralatan lainnya di tempat usaha untuk mencegah kebakaran.</td>
  </tr>
  <tr>
    <td width="3%">6. </td>
    <td width="97%">Surat Izin Tempat Usaha ini bukan merupakan surat jaminan mutlak bagi perusahaan/pengusaha apabila dikemudian hari ternyata perusahaan/pengusaha mempunyai sengketa mengenai tempat dan/atau usahanya, maka izin yang diberikan dapat dicabut kembali.</td>
  </tr>
  <tr>
    <td width="3%">7. </td>
    <td width="97%">Surat Izin Tempat Usaha ini berlaku selama perusahaan/usaha masih berjalan, dan untuk kepentingan pengawasan/pengendalian terhadap perusahaan tersebut dapat dilakukan pendaftaran ulang setiap 5 (lima) tahun sekali terhitung sejak tanggal ditetapkan sampai dengan....,…… 20... Atas permohonan yang bersangkutan serta terpenuhinya syarat-syarat yang berlaku.</td>
  </tr>
</table>


<br/>&nbsp;
<br/>&nbsp;
<br/>&nbsp;
<br/>&nbsp;

<br/>&nbsp;
<br/>&nbsp;

<br/>&nbsp;
<br/>&nbsp;

<table width="100%">
  <tr>
    <td width="60%">&nbsp;</td>
    <td width="40%"><strong>Ditetapkan di <?php echo $query['nm_kecamatan'] ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Pada tanggal <?php echo $dv_surat.' '.$mv_surat.' '.$yv_surat; ?></strong></td>
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


