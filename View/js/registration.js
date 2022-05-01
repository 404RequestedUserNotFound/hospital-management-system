
function validateform()
{
var firstname=document.myform.firstname.value;
var middlename=document.myform.middlename.value;
var lastname=document.myform.lastname.value;
var gender=document.myform.gender.value;
var religion=document.myform.religion.value;
var birthdaycheck=document.myform.birthdaycheck.value;
var preadd=document.myform.preadd.value;
var peradd=document.myform.peradd.value;
var phone=document.myform.phone.value;
var email=document.myform.email.value;
var website=document.myform.website.value;
var uname=document.myform.uname.value;
var passwords=document.myform.passwords.value;
var confirmpass=document.myform.confirmpass.value;






if (firstname==="" || middlename===""|| lastname===""|| gender===""|| religion===""|| birthdaycheck===""|| preadd==="" || peradd===""|| phone===""|| email===""|| website===""|| uname===""|| passwords===""|| confirmpass==="")
{
  alert("Please fillup all the boxes of registration form!");
  return false;
}
else
{
	return true;
}

}
