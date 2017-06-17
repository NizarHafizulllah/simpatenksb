<script type="text/javascript">

$(document).ready(function(){

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
                       $('#nama_pemohon').val('');
                      $('#form_simpan').data('bootstrapValidator').resetForm(true);
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