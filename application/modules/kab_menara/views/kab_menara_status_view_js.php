<script type="text/javascript">

		
$(document).ready(function(){

	var params = {
                life: 5000,
                horizontalEdge: 'top',
                verticalEdge: 'right',
                heading: 'Succes'
            };

            
  $("#tgl_verifikasi").val('<?php echo $tgl_verifikasi ?>');



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