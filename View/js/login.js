
function validateform()
{
var username=document.myform.username.value;
var password=document.myform.password.value;




if (username==="" || password==="")
{
  alert("Please fillup all the boxes to login!");
  return false;
}
else
{
	return true;
}

}
