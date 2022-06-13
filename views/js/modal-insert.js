/*
Author: Yann Trottier
File  : views/js/modal-insert.js
Desc. : On button click, request URL using ajax. Inserts server response into empty
		modal <div></div>. Displays modal window.
*/

var toURL = '';

function onSuccess(data, status) {
	$("#myModal .modal-content").html(data);
}

function onError(data, status) {
	alert("POST request failed");
}

$('a.btn').click(function(e){
	  e.preventDefault();
	  toURL = $(this).attr("tohref");
	  $('#myModal .modal-content').load(toURL, function() {
	  $('#myModal').modal();
	  });
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