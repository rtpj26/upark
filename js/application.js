$(document).ready(function(){
	$('#l1').show(500);
	$('#l2').hide();
	$('#l3').hide();
	$('#l1_content_4_other').hide();
	
	$('#l1_content_1').on("click", function(){
		$('#l3').hide();
		$('#l2').show(500);
		$('#l2_1').show(500);
		$('#l2_2').hide();
		$('#l1_content_4_other').hide();
		$('#l2_content_1_1').prop('checked', false);
		$('#l2_content_1_2').prop('checked', false);
		$('#l2_content_2_1').prop('checked', false);
		$('#l2_content_2_2').prop('checked', false);
		$('#l2_content_2_3').prop('checked', false);
		$('#l1_content_4_other').prop("required", false);

	});
	
	$('#l1_content_2').on("click", function(){
		$('#l3').hide();
		$('#l2_1').hide();
		$('#l1_content_4_other').hide();
		$('#l2').show(700);
		$('#l2_2').show(700);
		
		$('#l2_content_1_1').prop('checked', false);
		$('#l2_content_1_2').prop('checked', false);
		$('#l2_content_2_1').prop('checked', false);
		$('#l2_content_2_2').prop('checked', false);
		$('#l2_content_2_3').prop('checked', false);
		$('#l1_content_4_other').prop("required", false);
	});
	
	$('#l2_content_1_1').on("click", function(){
		$('#l3').show(500);
		$('#l1_content_4_other').hide();
		$('#l1_content_4_other').prop("required", false);
	});
	
	$('#l2_content_1_2').on("click", function(){
		$('#l3').show(500);
		$('#l1_content_4_other').hide();
		$('#l1_content_4_other').prop("required", false);
	});
	
	$('#l1_content_3').on("click", function(){
		$('#l2').hide();
		$('#l3').hide();
		$('#l1_content_4_other').hide();
		$('#l2_content_1').prop('checked', false);
		$('#l2_content_2').prop('checked', false);
		$('#l3_content_1').prop('checked', false);
		$('#l1_content_4_other').prop("required", false);
	});

	$('#l1_content_4').on("click", function(){
		$('#l2').hide();
		$('#l3').hide();
		$('#l1_content_4_other').show(500);
		$('#l1_content_4_other').prop('required', true);
	});
	
});	