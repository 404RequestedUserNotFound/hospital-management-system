
function validateform()
{
var firstname=document.myform.firstname.value;
var lastname=document.myform.lastname.value;
var checkin=document.myform.checkin.value;
var checkout=document.myform.checkout.value;
var roomno=document.myform.roomno.value;
var phone=document.myform.phone.value;
var roomtype=document.myform.roomtype.value;





if (firstname==="" || lastname===""|| checkin==="" || checkout===""|| roomno==="" || phone===""|| roomtype==="")
{
  alert("Please fillup all the boxes of room book form!");
  return false;
}
else
{
	return true;
}

}
