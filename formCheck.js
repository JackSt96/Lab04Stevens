function Validate(form){
  var valid = true;
  //get the number of items to order
  var coffee = form.coffee.value;
  var latte = form.latte.value;
  var scone = form.scone.value;

  //get the user info and shipping selection
  var username = form.username.value;
  var password = form.password.value;
  var shipping = form.sMethod.value;

  if(isNaN(coffee) || isNaN(latte) || isNaN(scone) || coffee < 0 || latte < 0 || scone < 0){
    valid = false;
    alert("please select valid product quantities");
  }

  if(coffee+scone+latte === 0){
    valid = false;
  }
  //this code adapted from http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
  var checkEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(!checkEmail.test(username)){
    valid = false;
    alert("Please enter a valid email address in the username field");
  }

  if(password === ""){
    valid = false;
    alert("Please enter a password");
  }
  return valid;
}
