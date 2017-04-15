<script type="text/javascript">

$(document).ready(function(){


$('#form_simpan').bootstrapValidator({
                message: 'This value is not valid', 
                feedbackIcons: { 
                    valid: 'glyphicon glyphicon-ok', 
                    invalid: 'glyphicon glyphicon-remove', 
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nama: {
                        validators: {
                            notEmpty: {
                                message : 'Nama tidak boleh kosong' 
                            }
                        }
                    },
                    no_hp: {
                        validators: {
                            notEmpty: {
                                message : 'No. Hp tidak boleh kosong' 
                            }
                        }
                    },

                    alamat: {
                        validators: {
                            notEmpty: {
                                message : 'Alamat tidak boleh kosong' 
                            }
                        }
                    },
                    p1: {
                        validators: {
                            notEmpty: {
                                message : 'Password tidak boleh kosong' 
                            },
                            stringLength: {
                                min: 6, 
                                message: 'Panjang minimal 6 karakter'
                            }
                        }
                    },
                    p2: {
                        validators: {
                            notEmpty: {
                                message: 'tidak boleh kosong'
                            },
                            identical: {
                                field: 'p1',
                                message: 'passwod yang anda masukkan tidak sesuai'
                            }
                        }
                    },

                    username: {
                        validators: {
                            notEmpty: {
                                message : 'Username tidak boleh kosong'    
                            },
                            
                            remote: {
                                type: 'POST',
                                url: "<?php echo site_url($this->controller.'/cekUsername'); ?>",
                                message: 'Username Ini Telah Terpakai Oleh Pengguna Lain',
                                delay: 200
                            }
                        }
                    } 

                    
                }
                
            });





        $('#reset').click(function() {
            $('#form_simpan').data('bootstrapValidator').resetForm(true);
        });



$("#simpan").click(function(){
 console.log('tests');

    $.ajax({
        url:'<?php echo site_url("$this->controller/simpan"); ?>',
        data : $('#form_simpan').serialize(),
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
                      $('#form_data').data('bootstrapValidator').resetForm(true);
                      
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



$("#update").click(function(){ 
    $.ajax({
        url:'<?php echo site_url("$this->controller/update"); ?>',
        data : $('#form_update').serialize(),
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
                     // $('#form_data').data('bootstrapValidator').resetForm(true);
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







});
</script>