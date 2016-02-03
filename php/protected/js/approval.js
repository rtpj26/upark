$(document).ready(function(){
	$.ajax({
		url: '../ajax_service.php',
		type: 'POST'
		action: 'selectPendingUsers',
		data:{
			json: jsonData
		},
		success: function (response){
				var trHTML = '';
				$.each(response, function(i, item){
					trHTML += '<tbody><tr><td>' + item.ADS_ID + '</td>
								<td>' + item.APPLICANT_FNAME + '</td>
								<td>' + item.STATUS_DESCRIPTION + '</td></tr></tbody>';
				});
				$('#pendingTable').append(trHTML);
			}
	});
});
