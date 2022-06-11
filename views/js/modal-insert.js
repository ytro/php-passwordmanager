/*
Author: Yann Trottier
Desc. : On button click, request URL using ajax. Inserts server response into empty
		modal <div></div>. Displays modal window.
*/

var toURL = '';

function onSuccess(data, status) {
	$("#myModal").html(data);
}

function onError(data, status) {
	alert("POST request failed");
}

$('a.btn').click(function(e){
	  e.preventDefault();
	  toURL = $(this).attr("tohref");
	  $('#myModal').load(toURL);
	  $('#myModal').modal();
});

function sendRequest() {
	var formData = $("#commentForm").serialize();
	  $.ajax({
		type: "POST",
		url: toURL,
		cache: false,
		data: formData,
		success: onSuccess,
		error: onError
	  });
}