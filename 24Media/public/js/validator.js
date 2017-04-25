

Parsley.addAsyncValidator(
  'validate', function (response) {

       var jsonResponse = JSON.parse(response.responseText); 
       var status = jsonResponse["status"];
       var message = jsonResponse["message"];
       var requestId = jsonResponse["requestId"];

if(status == false){

	alert('false');

var requestId = $('#email').parsley();

requestId.addError(requestId, {message: "Request has already been made using Email", updateClass:true});

return response.status === 404;

}

if(status == true){

	alert('true');
return response.status === 200;

}

  }, '/validateEmail'
);
