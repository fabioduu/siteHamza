const form = document.querySelector('form');

function emailSend(){
	Email.send({
    Host : "smtp.elasticemail.com",
    Username : "fabiodljunior@gmail.com",
    Password : "D5509C0EC3C902EE11156AB5E365C067C128",
    To : 'fabiodljunior@gmail.com',
    From : "fabiodljunior@gmail.com",
    Subject : "This is the subject",
    Body : "messageBody"
}).then(
  message => {
  	if(message=='OK'){
  		swal("Secussful", "You clicked the button!", "success");
  	}
  	else{
  		swal("Error", "You clicked the button!", "error");
  	}
  }
);
}