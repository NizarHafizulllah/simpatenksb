<script type="text/javascript">

$(document).ready(function(){

$('.tanggal').datepicker().on('changeDate', function(ev){
  $('.tanggal').datepicker('hide');
});

	var params = {
                life: 5000,
                horizontalEdge: 'top',
                verticalEdge: 'right',
                heading: 'Succes'
            };

            

	

$("#simpan").click(function(){
 console.log('tests');
 // alert();

    $.ajax({
        url:'<?php echo site_url("$this->controller/simpan"); ?>',
        data : $('#form_simpan').serialize(),
        type : 'post',
        dataType : 'json',
        success : function(obj){

            console.log(obj.error);

            if(obj.error == false) { // berhasil 

                // alert('hooooo.. error false');
                	params.heading = 'Berhasil';
                	params.theme = 'lime';
                	
                	$.notific8(obj.message, params);
                       	$('#nik_pemohon').val('');
  						$('#nama_pemohon').val('');
  						$('#tempat_lahir').val('');
  						$('#tgl_lahir').val('');
  						$('#pekerjaan').val('');
                        $('#alamat').val('');
                        $('#no_telp').val('');
                        $('#negara_pemohon').val('');
                        $('#nama_usaha').val('');
                        $('#jenis_usaha').val('');
                        $('#ukuran_luas_usaha').val('');
                        $('#lokasi_usaha').val('');
                        $('#status_bangunan_tempat_usaha').val('');
                        $('#npwpd').val('');
                        $('#klasifikasi_usaha').val('');
                        $('#tgl_register').val('');
                        $('#no_register').val('');
                        $('#nama_petugas_verifikasi').val('');
                        $('#nama_camat').val('');
                        $('#nip_camat').val('');
                        $('#tgl_verifikasi').val('');

            }
            else {
                 params.heading = 'Gagal';
                	params.theme = 'ruby';
                	
                	$.notific8(obj.message, params);
            }
        }
    });

    return false;
});




$("#update").click(function(){
 console.log('tests');
 // alert();

    $.ajax({
        url:'<?php echo site_url("$this->controller/update"); ?>',
        data : $('#form_update').serialize(),
        type : 'post',
        dataType : 'json',
        success : function(obj){

            console.log(obj.error);

            if(obj.error == false) { // berhasil 

                // alert('hooooo.. error false');
                	params.heading = 'Berhasil';
                	params.theme = 'lime';
                	
                	$.notific8(obj.message, params);
                       	
            }
            else {
                 params.heading = 'Gagal';
                	params.theme = 'ruby';
                	
                	$.notific8(obj.message, params);
            }
        }
    });

    return false;
});

	
});
	 
</script>