
function validateform()
{
var firstname=document.myform.firstname.value;
var lastname=document.myform.lastname.value;
var designation=document.myform.designation.value;
var salary=document.myform.salary.value;




if (firstname==="" || lastname===""|| designation===""|| salary==="")
{
  alert("Please fillup all the boxes of entry sallary!");
  return false;
}
else
{
	return true;
}

}
