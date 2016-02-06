$(document).ready(function(){
	var userTable = $('#userTable');
	var approval = $('.approval');

	$.ajax({
		type: 'GET',
		url: 'protected/ajax_service.php',
		data:{
			action: 'getActiveUser',			
		},
		success: function(data){
			$.each(data, function(i, dataSet){
				userTable.append("<tbody>");
				userTable.append("<td>" + dataSet.ADS_ID  + "</td>" + 
					"<td>" + dataSet.APPLICANT_FNAME + "</td>" + 
					"<td><button data-id='" + dataSet.ADS_ID + "' class='btn btn-default edit'>Edit</button></td>" +
					"<td><button data-id='" + dataSet.ADS_ID + "' class='btn btn-default delete'>Delete</button></td>");
				userTable.append("</tbody>");
			});
		}

	});


});
