
function validateform()
{
var firstname=document.myform.firstname.value;
var lastname=document.myform.lastname.value;
var doctortime=document.myform.doctortime.value;
var doctorroom=document.myform.doctorroom.value;
var phone=document.myform.phone.value;






if (firstname==="" || lastname===""|| doctortime==="" || doctorroom===""|| phone==="")
{
  alert("Please fillup all the boxes of add doctor form!");
  return false;
}
else
{
	return true;
}

}
