$(document).ready(function(){
	var pendingTable = $('#pendingTable');
	var approval = $('.approval');

	$.ajax({
		type: 'GET',
		url: 'protected/ajax_service.php',
		data:{
			action: 'getPendingUser',			
		},
		success: function(data){
			$.each(data, function(i, dataSet){
				pendingTable.append("<tbody>");
				pendingTable.append("<td>" + dataSet.ADS_ID  + "</td>" + 
					"<td>" + dataSet.APPLICANT_FNAME + "</td>" + 
					"<td>" + dataSet.STATUS_DESCRIPTION + "</td>" + 
					"<td><button data-id='" + dataSet.ADS_ID + "' class='btn btn-default approval'>Approve</button></td>" +
					"<td><button data-id='" + dataSet.ADS_ID + "' class='btn btn-default delete'>Delete</button></td>");
				pendingTable.append("</tbody>");
			});
		}

	});


	pendingTable.delegate('.approval', "click", function(){
		console.log("approve clicked");
		var ads_id = $(this).attr('data-id');
		console.log(ads_id);
		$.ajax({
			type: 'POST',
			url: 'protected/ajax_service.php',
			data:{
				action: 'updatePendingUser',
				ADS_ID: ads_id,
			},
			success: function(data){
				console.log("user status updated");
			}
		});
	});

});
