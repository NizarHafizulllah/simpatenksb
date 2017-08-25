<script type="text/javascript">

$(document).ready(function(){


$('.tanggal').datepicker().on('changeDate', function(ev){
  $('.tanggal').datepicker('hide');
});

	 var dt = $("#imb").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets": 0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("kec_imb/get_data") ?>'
		 	});

		 
		 $("#imb_filter").css("display","none");  
	
	 
		 $("#btn_submit").click(function(){
		 	  // alert('hello');
		 	  

		 	  dt.column(1).search($("#nama_pemohon").val())
        dt.column(2).search($("#no_regis").val())
				 .draw();

				 return false;
		 });


		 $("#btn_reset").click(function(){
			$("#no_regis").val('');
      $("#nama_pemohon").val('');
			$("#btn_submit").click();
		 });


});
	

function printsurat(id){
        open('<?php echo site_url("$this->controller/formulir?"); ?>'+'id='+ id);
        }

function izin(id){
        open('<?php echo site_url("$this->controller/printsuratizin?"); ?>'+'id='+ id);
        }


function hapus(id){

var params = {
                life: 5000,
                horizontalEdge: 'top',
                verticalEdge: 'right',
                heading: 'Succes'
            };

BootstrapDialog.show({
            message : 'ANDA AKAN MENGHAPUS DATA IMB INI. ANDA YAKIN  ?  ',
            title: 'KONFIRMASI HAPUS DATA  IMB',
            draggable: true,
            buttons : [
              {
                label : 'YA',
                cssClass : 'btn-primary',
                hotkey: 13,
                action : function(dialogItself){


                  dialogItself.close();
                  $('#myPleaseWait').modal('show'); 
                  $.ajax({
                  	url : '<?php echo site_url("$this->controller/hapusdata") ?>',
                  	type : 'post',
                  	data : {id : id},
                  	dataType : 'json',
                  	success : function(obj) {
                  		$('#myPleaseWait').modal('hide'); 
                  		if(obj.error==false) {
                  				params.heading = 'Berhasil';
                          params.theme = 'lime';
                  
                          $.notific8(obj.message, params);
				                       
				                   

                  			$('#imb').DataTable().ajax.reload();		
                  		}
                  		else {
                  			params.heading = 'Gagal';
                          params.theme = 'ruby';
                  
                          $.notific8(obj.message, params);
                  		}
                  	}
                  });

                }
              },
              {
                label : 'TIDAK',
                cssClass : 'btn-danger',
                action: function(dialogItself){
                    dialogItself.close();
                }
              }
            ]
          });

}
 		 




</script>