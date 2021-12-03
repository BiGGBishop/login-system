


 function validate()
   {
   var x=document.myForm.firstname.value;
   if(x=="")
   {
   alert("First name must be filled out");
   return false;
   }
   var s=document.myForm.secondname.value;
   if(s=="")
   {
   alert("second name must be filled out");
   return false;
   }
   var e=document.myForm.email.value;
  if(e=="")
    {
	alert("email must be filled out");
	return false;
	}
	
	var p=document.myForm.password.value;
	if(p=="")
	 {
	 alert("password must be filled out");
	 return false;
	 
	 }
	 var p=document.myForm.retype.value;
	if(p=="")
	 {
	 alert("Retype password must be filled out");
	 return false;
	 
	 }
	 
	 var pa=document.myForm.password.value;
	 var pass=document.myForm.retype.value;
	 if(pa!=pass)
	 {
	 alert("Password does not matched");
	 return false;
	 }
	 var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
  var s=document.myForm.sex.value;
	if(s=="")
	 {
	 alert("sex must be selected");
	 return false;
	 
	 } 
   }
