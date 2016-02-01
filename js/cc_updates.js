$(document).ready(function(){
	$('#addPost').hide();
	$('#addPost').show(500);
	$('#editPost').hide();
	$('#removePost').hide();

	
	$('#aPost').click(function(){
		$('#editPost').hide(500);
		$('#removePost').hide(500);
		$('#addPost').show(500);
	});
	
	$('#ePost').click(function(){
		$('#addPost').hide(500);
		$('#removePost').hide(500);
		$('#editPost').show(500);
	});
	
	$('#rPost').click(function(){
		$('#addPost').hide(500);
		$('#editPost').hide(500);
		$('#removePost').show(500);
	});
});
