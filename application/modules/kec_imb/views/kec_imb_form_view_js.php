<script type="text/javascript">

$(document).ready(function(){

	var params = {
                life: 5000,
                horizontalEdge: 'top',
                verticalEdge: 'right',
                heading: 'Succes'
            };

            
  $("#tgl_verifikasi").val('<?php echo $tgl_verifikasi ?>');
  $("#tgl_surat").val('<?php echo $tgl_surat ?>');

	

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
                       	$('#nama_pemohon').val('');
  						$('#no_regis').val('');
  						$('#alamat').val('');
  						$('#nama_petugas_verifikasi').val('');
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