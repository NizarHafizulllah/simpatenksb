<script type="text/javascript">




$("#konfirm_password").click(function(){
 console.log('tests');

 $('#edit').modal('hide');
    $.ajax({
        url:'<?php echo site_url("$this->controller/simpan"); ?>',
        data : $('#form_konfirm').serialize(),
        type : 'post',
        dataType : 'json',
        success : function(obj){

            console.log(obj.error);

            if(obj.error == false) { // berhasil 

                // alert('hooooo.. error false');
                     BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: obj.message
                             
                        });   
                      $('#form_konfirm').data('bootstrapValidator').resetForm(true);
                      
            }
            else {
                 BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_DANGER,
                            title: 'Error',
                            message: obj.message 
                             
                        }); 
            }
        }
    });

    return false;
});

     


    $("#simpan").click(function(){
 console.log('tests');

    $.ajax({
        url:'<?php echo site_url("$this->controller/konfirm_password"); ?>',
        data : $('#form_simpan').serialize(),
        type : 'post',
        dataType : 'json',
        success : function(jsonData){

            console.log(jsonData.error);

            if(jsonData.error == false) { // berhasil 

                $('#edit').modal('show');
                $('#span_nama').html(jsonData.data_edit.nama);
                $('#span_email').html(jsonData.data_edit.email);
                $('#status_nama').html(jsonData.data_edit.status_nama);
                $('#status_alamat').html(jsonData.data_edit.status_alamat);
                $('#status_no_hp').html(jsonData.data_edit.status_no_hp);
                $('#status_email').html(jsonData.data_edit.status_email);
                $('#status_password').html(jsonData.data_edit.status_password);
                $('#span_no_hp').html(jsonData.data_edit.no_hp);
                $('#span_alamat').html(jsonData.data_edit.alamat);
                    
            }
            else {

                $('#coba').html(jsonData.message);
                 // alert(jsonData.data_asli.nama);
                 $('#error').modal('show');
            }
        }
    });

    return false;
});
</script>