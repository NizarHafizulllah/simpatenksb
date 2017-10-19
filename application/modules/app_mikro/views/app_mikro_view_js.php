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
		        "ajax": '<?php echo site_url("$this->controller/get_data") ?>'
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
	



 		 




</script>