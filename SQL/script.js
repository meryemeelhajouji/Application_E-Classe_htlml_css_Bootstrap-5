
function validation(){
 var name = document.getElementById('name').value;
 let email = document.getElementById('email').value;
 let password = document.getElementById('password').value;
 let conPassword = document.getElementById('Confirmpassword').value;

 if ( name == ""){

  document.getElementById('nameid').innerHTML=" ** Please fill the UserName field";
  document.getElementById('nameid').style.color="red";
  return false;
 } else{
  
  document.getElementById('nameid').innerHTML=" ** Validé";
  document.getElementById('nameid').style.color="#0dca4c";
  
 
 
 }
 if ((name.length <=2) || (name.length >= 20) ){
  document.getElementById('nameid').innerHTML =" ** user name should be between 2 to 20 characters ";
  document.getElementById('nameid').style.color="red";
  
  return false;
 }else{
  document.getElementById('nameid').innerHTML=" ** Validé";
  document.getElementById('nameid').style.color="#0dca4c";

 }


 if (email == "") {
  document.getElementById('emailid').innerHTML = " ** Enter Email ID"
  document.getElementById('emailid').style.color="red";
  return false;
}else if (email.indexOf('@') <= 0) {
  document.getElementById('emailid').innerHTML = " **  @ Invalid Position"
    document.getElementById('emailid').style.color="red";
  return false;
}else{
  document.getElementById('emailid').innerHTML=" ** Validé";
  document.getElementById('emailid').style.color="#0dca4c";
}


 if (password == "") {
  document.getElementById('passwordid').innerHTML=" ** Please fill the Password field";
  document.getElementById('passwordid').style.color="red";
  return false;
}else if ((password.length <=6)  ||  (password.length >=20)) {
  document.getElementById('passwordid').innerHTML =" ** user password should be between 6 to 20 characters "
  document.getElementById('passwordid').style.color="red";
  return false;
}else{
  document.getElementById('passwordid').innerHTML=" ** Validé";
  document.getElementById('passwordid').style.color="#0dca4c";
}


if (conPassword == "") {
  document.getElementById('Confirmpasswordid').innerHTML =" ** Enter ConfirmPassword"
  document.getElementById('Confirmpasswordid').style.color="red";
  return false;
}else if (password!= conPassword) {
  document.getElementById('Confirmpasswordid').innerHTML =" ** Password does'nt Match"
  document.getElementById('Confirmpasswordid').style.color="red";
  return false;
}else{
  document.getElementById('Confirmpasswordid').innerHTML=" ** Validé";
  document.getElementById('Confirmpasswordid').style.color="#0dca4c";
}







}