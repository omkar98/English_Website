$(document).ready(function() {
	$('#tablesList').DataTable();
});
$(document).on("click", ".delete", function(e){
	e.preventDefault();
	var link = $(this).attr("href");
	bootbox.confirm("Are you sure you want to delete?", function(confirmed){
		if(confirmed){
			window.location.href = link;
		}
	});
});

$("#place_data").on("blur", ".update", function(){
	var id = $(this).data("id");
	var column_name = $(this).data("column");
	var value = $(this).text();
	$.ajax({
		url:base_url + "Backend/SentencesPlaces/place_update",
		method:'POST',
		data:{id:id, column_name:column_name,value:value},
		success:function(data){
			toastr.success("Place Name Updated Successfully");
		}
	}) 
});

$("#word_data").on("blur", ".update", function(){
	var id = $(this).data("id");
	var column_name = $(this).data("column");
	var value = $(this).text();
	$.ajax({
		url:base_url + "Backend/Words/update",
		method:'POST',
		data:{id:id, column_name:column_name,value:value},
		success:function(data){
			toastr.success("Word Updated Successfully");
		}
	}) 
});

$("#sentence_data").on("blur", ".update", function(){
	var id = $(this).data("id");
	var column_name = $(this).data("column");
	var value = $(this).text();
	$.ajax({
		url:base_url + "Backend/Sentences/update",
		method:'POST',
		data:{id:id, column_name:column_name,value:value},
		success:function(data){
			toastr.success("Sentence Updated Successfully");
		}
	}) 
});

