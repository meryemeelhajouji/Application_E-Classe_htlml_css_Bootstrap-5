function valideStudent(){
    var name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let Enrollnb = document.getElementById('Enrollnb').value;
    let date = document.getElementById('date').value;
    const mailformat = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*$/

    const ajexphone =/^\+?(0|(212))[657]\d{8}$/
    if ( name == ""){
   
     document.getElementById('nameid').innerHTML=" ** Please fill the UserName field";
     document.getElementById('nameid').style.color="red";
     return false;
    } else if ((name.length <=2) || (name.length >= 20) ){
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
    
   }else if (!email.match(mailformat)) {
     document.getElementById('emailid').innerHTML = " **Format  Invalid"
       document.getElementById('emailid').style.color="red";
     return false;
   }else{
     document.getElementById('emailid').innerHTML=" ** Validé";
     document.getElementById('emailid').style.color="#0dca4c";
   }
   
   
    if (phone == "") {
     document.getElementById('phoneid').innerHTML=" ** Please fill the phone field";
     document.getElementById('phoneid').style.color="red";
     return false;
   }else if (!phone.match(ajexphone)) {
     document.getElementById('phoneid').innerHTML =" ** Not a valid Phone Number"
     document.getElementById('phoneid').style.color="red";
     return false;
   }else{
     document.getElementById('phoneid').innerHTML=" ** Validé";
     document.getElementById('phoneid').style.color="#0dca4c";
   }

   if (Enrollnb == "") {
    document.getElementById('EnrollnbId').innerHTML=" ** Please fill Enroll Number  field";
    document.getElementById('EnrollnbId').style.color="red";
    return false;
  }else{
    document.getElementById('EnrollnbId').innerHTML=" ** Validé";
    document.getElementById('EnrollnbId').style.color="#0dca4c";
  }
   

  if (date == "") {
    document.getElementById('dateId').innerHTML=" ** Please fill date  field";
    document.getElementById('dateId').style.color="red";
    return false;
  }else{
    document.getElementById('dateId').innerHTML=" ** Validé";
    document.getElementById('dateId').style.color="#0dca4c";
  }
   
 
   
   
   
   
   
   
   
   }