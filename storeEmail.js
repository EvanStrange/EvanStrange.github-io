function storeEmail(name, email, body) {
    var xhttp; 
    var name = document.getElementById('name_field').value;
    var email = document.getElementById('email_field').value;
    var body = document.getElementById('message_field').value;
   
    var nameData = String(name);
    var emailData = String(email);
    var bodyData = String(body);

    console.log(nameData);
    console.log(emailData);
    console.log(bodyData);

    var data = new FormData();
    data.append('name', nameData);
    data.append('email', emailData);
    data.append('body', bodyData);

    var xhttp = new XMLHttpRequest;
                
    xhttp.open("POST", "storeEmail.php", true);
    xhttp.onload = function () {
        console.log(this.responseText);
    };
    xhttp.send(data);
  }
  