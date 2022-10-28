$(document).ready(function(){
	$('#fetchRequest').click(function(e)){
		e.preventDefault();
		$.ajax({
			method:"post",
			url:"fetchHackathonRequest.php",
			data: $('.container').serialize(),
			dataType: "html",
			success:function(response){
				
			}
		})
	}
})