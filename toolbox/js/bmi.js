function calc()
{
	var wt = document.bmi.wg.value;
	var ht = document.bmi.ht.value;
	
	//var op=document.bmi.opt1.value;
	
	// //SI value
	 var h = ht/100;
	 var si = Math.round((wt/(h*h))*100)/100;
	// document.bmi.si.value = si;
	
	// //US value
	// var lb = wt*2.2;
	// var ic = ht*0.39;
	// var us = Math.round((703*(lb/(ic * ic)))*100)/100;
	// document.bmi.us.value = us;
	
	// //UK value
	// var uk = Math.round((6.35*si)*100)/100;
	// document.bmi.uk.value = uk;
	
	//If value is not given for weight
	if(wt=="")
	{
		alert("Enter the value for weight");
	}

	//If weight is less than 10
	else if(wt<=10)
	{
		//document.bmi.si.value = 0;
		//document.bmi.us.value = 0;
		//document.bmi.uk.value = 0;
		alert("Weight should be greater than 10kgs");
	}
	
	//If weight is pounds and less than 22lbs
	// else if(op=="pounds" && wt<=22)
	// {
	// 	//document.bmi.si.value = 0;
	// 	//document.bmi.us.value = 0;
	// 	//document.bmi.uk.value = 0;
	// 	alert("Weight should be greater than 22lbs");
	// }
	
	//If given height is less than 33cms
	else if(ht<33)
	{
		//document.bmi.si.value = 0;
		//document.bmi.us.value = 0;
		//document.bmi.uk.value = 0;
		alert("Height should be taller than 33cms");
	}
	// else if(op=="pounds")
	// {
	// 	//document.bmi.si.value=Math.round((si/2.2)*100)/100;
	// 	//document.bmi.us.value=Math.round((us/2.2)*100)/100;
	// 	//document.bmi.uk.value=Math.round((uk/2.2)*100)/100;
	// }
	var result = document.getElementById('resultStuff');
	var toggleResult = document.getElementById('bmi_right');
	document.getElementById('starvation').style.fontWeight = 300;
	document.getElementById('underweight').style.fontWeight = 300;
	document.getElementById('normal').style.fontWeight = 300;
	document.getElementById('overweight').style.fontWeight = 300;
	document.getElementById('obese').style.fontWeight = 300;
	
	if(si<15)
	{
		toggleResult.style.display ="inline";
		document.getElementById('starvation').style.fontWeight = 700;
		result.innerHTML= si;
	}
	else if(si>=15 && si<19)
	{
		toggleResult.style.display ="inline";
		document.getElementById('underweight').style.fontWeight = 700;
		result.innerHTML= si;
	}
	else if(si>=19 && si<=25)
	{	
		toggleResult.style.display ="inline";
		document.getElementById('normal').style.fontWeight = 700;
		result.innerHTML= si;	
	}
	else if(si>25 && si<=30)
	{
		toggleResult.style.display ="inline";
		document.getElementById('overweight').style.fontWeight = 700;
		result.innerHTML= si;
	}
	else if(si>30)
	{
		toggleResult.style.display ="inline";
		document.getElementById('obese').style.fontWeight = 700;
		result.innerHTML= si;
	}
}


function conv(aa)//Height conversion
{
	var ft=0, inc=0, ht=0;
	if(aa==1 || aa==2)
	{
		ft = document.bmi.opt2.value;
		inc = document.bmi.opt3.value;
		var ss = ft*12;
		var tot = ss+parseInt(inc);
       	var val= tot*2.54;
		document.bmi.ht.value = Math.round(val);
	}

	else{
		ht = document.bmi.ht.value;
		if(ht!="")
		{
			var cm=Math.round(ht/2.54);
			var div=parseInt(cm/12);
			var md=cm%12;
			//document.bmi.opt2.value=div;
			//document.bmi.opt3.value=md;
		}
         }

}


function unit()  //Weight conversion
{
	var pp=document.bmi.opt1.value;
	var ww = document.bmi.wg.value;
	
	//Kilogram to pounds
	if(pp=="pounds")	
	{
		document.bmi.wg.value = Math.round((ww*2.2)*100)/100;
	}

	//Pounds to kilograms
	else
	{
		document.bmi.wg.value=Math.round(ww/2.2);
	}
}

