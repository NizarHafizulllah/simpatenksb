<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
 <style type="text/css">
<!--
.style2 {font-size: 24px}
.style3 {font-size: 16px}
.style5 {font-size: 12px}
.style6 {font-size: 10px}
-->
 </style>
</head>

<body>

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

<table width="100%" border="0" cellpadding="3">
  
  <tr>
    <td width="23%" align="center"><img src="<?php echo base_url()."assets/img/ksb.png" ?>" width="50" height="60" align="right" /></td>
    <td width="54%" align="center" valign="middle"><p><span class="judul" style="font-size: 12px;"><span class="style3">PEMERINTAH KABUPATEN <?php echo $query['kabupaten']; ?></span><br />
          <span class="style2">KECAMATAN <?php echo $query['nm_kecamatan']; ?></span></span></p>
      </td>
    <td width="23%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><hr /></td>
  </tr>

</table>
<table width="100%" border="0">
  <tr>
    <td width="17%">Nomor Registrasi</td>
    <td width="83%">: <?php echo $query['no_regis']; ?></td>
  </tr>
  <tr>
    <td>Nama Pemohon</td>
    <td>: <?php echo $query['nama_pemohon']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>: <?php echo $query['alamat']; ?></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td height="39" align="center" valign="middle"><p align="center" class="judul style5"><u>DOKUMEN PERSYARATAN IMB</u></p></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="68%"><strong>Syarat Umum</strong></td>
    <td width="11%"><strong>Ada</strong></td>
    <td width="21%"><strong>Tidak</strong></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="3%">1.</td>
    <td width="62%">Formulir PIMB (1 asli, 2 fotokopi) </td>
    <?php if ($query['pimb']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>

    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2.</td>
    <td>Fotokopi KTP Pemilik ( 3 rangkap)</td>
    <?php if ($query['ktp']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3.</td>
    <td>Pasphoto warna ukuran 3x4&nbsp; (3 (tiga) lembar)</td>
    <?php if ($query['foto']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4.</td>
    <td>Fotokopi Sertifikat Tanah / SKGR Camat (3 (tiga)  rangkap) </td>
    <?php if ($query['sertifikat_tanah']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5.</td>
    <td>Fotokopi PBB (3 (tiga) rangkap) </td>
    <?php if ($query['pbb']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>6.</td>
    <td>BAP / Rekomendasi UPTD TARCIP setempat&nbsp; (3 (tiga) rangkap) </td>
    <?php if ($query['bap']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>7.</td>
    <td>Penelitian tanah/sondir untuk ruko 3 (tiga) lantai</td>
    <?php if ($query['penelitian_tanah']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>8.</td>
    <td>Surat Persetujuan Sempada Tanah</td>
    <?php if ($query['setuju_sempada_tanah']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>9.</td>
    <td>Rekomendasi Dinas Perhubungan dan Infokom Kab.Sumbawa Barat (untuk IMB Tower) </td>
    <?php if ($query['rekom_dishub']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%" border="0">
  <tr>
    <td width="68%">persyaratan teknis:</td>
    <td width="11%">&nbsp;</td>
    <td width="21%">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="3%">1.</td>
    <td width="62%">Gambar rencana bangunan &amp; site plan (3 (tiga)  rangkap) </td>
    <?php if ($query['tek_gamabar_rencana']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>2.</td>
    <td>Instalasi air, listrik dan telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <?php if ($query['tek_instalasi_air']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>3.</td>
    <td>Penelitian tanah/sondir untuk ruko 3(tiga) lantai</td>
    <?php if ($query['tek_penelitian_tanah']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>4.</td>
    <td>Sistem pengamanan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <?php if ($query['tek_pengaman']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>5.</td>
    <td>Sistem drainase dan persampahan</td>
    <?php if ($query['sistem_drainase']=='ada') { ?>

      <td width="11%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
   <?php }else { ?>
      <td width="11%"><img src="<?php echo base_url()."assets/img/uncheck.png" ?>" width="10" height="10" align="right" /></td>
    <td width="21%"><img src="<?php echo base_url()."assets/img/checked.png" ?>" width="10" height="10" align="right" /></td>

    <?php } ?>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%" border="0">
  <tr>
    <td width="56%">&nbsp;</td>
    <td width="44%"><p><strong>Petugas  Verifikasi,</strong></p></td>
  </tr>
</table>
<br/>&nbsp;
<br/>&nbsp;
<table width="100%" style="font-size: 8px;">
  <tr>
    <td width="31%">&nbsp;</td>
    <td width="66%"><table width="100%" border="1">
      <tr>
        <td width="21%" height="30" valign="middle"><div align="center" class="style6">Hari</div></td>
        <td width="25%" valign="middle"><div align="center" class="style6">Tanggal</div></td>
        <td colspan="2" width="54%" valign="middle"><div align="center" class="style6">Petugas</div></td>
      </tr>
      <tr>
        <td height="33" valign="middle" align="center"><span class="style6"><?php echo $hari; ?></span></td>
        <td valign="middle" align="center"><span class="style6"><?php echo flipdate($query['tgl_verifikasi']); ?></span></td>
        <td width="27%" valign="middle"><span class="style6"> Nama : <?php echo $query['nama_petugas_verifikasi']; ?></span></td>
        <td width="27%" valign="middle"><span class="style6"> Paraf : </span></td>
      </tr>
    </table></td>
    <td width="3%">&nbsp;</td>
  </tr>
</table>
<br/>
</body>

</html>


