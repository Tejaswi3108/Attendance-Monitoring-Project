function checkr(r)
{
	var s=r.value;
	var p=/[a-z]+/g;
			
	if(p.test(s))
	{
		alert("Invalid value");
		r.value=" ";
	}
}
		
function checkn(n)
{
	var s=n.value;
	var p=/[0-9]+/g;
			
	if(p.test(s))
	{
		alert("Invalid value");
		n.value=" ";
	}
}
