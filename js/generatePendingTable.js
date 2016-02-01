$.ajax({
	url: '../php/dbfunctions.php',
	success: function(results){
		$('#pendingTable').html(results[0].APPLICANT_ID);
	}
});