
function validateform()
{
var firstname=document.myform.firstname.value;
var lastname=document.myform.lastname.value;
var staffdesignation=document.myform.staffdesignation.value;
var staffpresentaddress=document.myform.staffpresentaddress.value;
var staffpermanentaddress=document.myform.staffpermanentaddress.value;
var stafftime=document.myform.stafftime.value;
var phone=document.myform.phone.value;




if (firstname==="" || lastname===""|| staffdesignation===""|| staffpresentaddress===""|| staffpermanentaddress===""|| stafftime===""|| phone==="")
{
  alert("Please fillup all the boxes!");
  return false;
}
else
{
	return true;
}

}
