 $(document).ready(function(){
	$("#suggest").keyup(function(){
		$.get("suggest.php", {searchq: $(this).val()}, function(data){
			$("datalist").empty();
			$("datalist").html(data);
		});
	});
});

