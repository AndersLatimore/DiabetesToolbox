function calc()
{
	var wt = document.bmi.wg.value;
	var ht = document.bmi.ht.value;
	var h = ht/100;
	var si = Math.round((wt/(h*h))*100)/100;
	
	//If value is not given for weight
	if(wt=="")
	{
		alert("Enter the value for weight");
	}

	//If weight is less than 10
	else if(wt<=10)
	{
		setTimeout(function(){window.location.href = "bmi.php"}, 3000);
		alert("Weight should be greater than 10kgs");
	}
	
	//If given height is less than 33cms
	else if(ht<33)
	{
		setTimeout(function(){window.location.href = "bmi.php"}, 3000);
		alert("Height should be taller than 33cms");
	}
	var result = document.getElementById('resultStuff');
	var toggleResult = document.getElementById('bmi_right');
	//var numpad = document.getElementById('keypad');
	document.getElementById('starvation').style.fontWeight = 300;
	document.getElementById('underweight').style.fontWeight = 300;
	document.getElementById('normal').style.fontWeight = 300;
	document.getElementById('overweight').style.fontWeight = 300;
	document.getElementById('obese').style.fontWeight = 300;
	
	if(si<15)
	{
		toggleResult.style.display ="inline";
		//numpad.style.display = "none";
		document.getElementById('starvation').style.fontWeight = 700;
		result.innerHTML= si;
	}
	else if(si>=15 && si<19)
	{
		toggleResult.style.display ="inline";
		//numpad.style.display = "none";
		document.getElementById('underweight').style.fontWeight = 700;
		result.innerHTML= si;
	}
	else if(si>=19 && si<=25)
	{	
		toggleResult.style.display ="inline";
		//numpad.style.display = "none";
		document.getElementById('normal').style.fontWeight = 700;
		result.innerHTML= si;	
	}
	else if(si>25 && si<=30)
	{
		toggleResult.style.display ="inline";
		//numpad.style.display = "none";
		document.getElementById('overweight').style.fontWeight = 700;
		result.innerHTML= si;
	}
	else if(si>30)
	{
		toggleResult.style.display ="inline";
		//numpad.style.display = "none";
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
var toggleInput = 0;
function printNumber(val){
	var pVal = parseInt(val);
	if(toggleInput === 0){
		document.getElementById('fWeight').value += pVal;	
	}
	else{
		document.getElementById('fHeight').value += pVal;
	}
}
function toggleFocus(type){
	if(type === 'w'){
		toggleInput = 0;
		document.getElementById('fWeight').readOnly = false;
		document.getElementById('fWeight').focus();
		document.getElementById('fHeight').readOnly = true;
		document.getElementById('okay').value = 'Height';
	}
	else if(type === 'h'){
		toggleInput = 1;
		
		document.getElementById('fHeight').readOnly = false;
		document.getElementById('fHeight').focus();
		document.getElementById('fWeight').readOnly = true; 
		document.getElementById('okay').value = 'Weight';
	}
	else if(type === 'b'){
		if(toggleInput === 0){ 
			toggleFocus('h');
		}
		else if(toggleInput === 1){
			toggleFocus('w');
		}
	}
}
function backspaceAtCursor()
  {
    var field;
    if(toggleInput === 0){ field = document.getElementById('fWeight'); }
    else { field = document.getElementById('fHeight'); }

    if(field.selectionStart)
    {
      var startPos = field.selectionStart;
      var endPos = field.selectionEnd;

      if(field.selectionStart == field.selectionEnd)
      {
        field.value = field.value.substring(0, startPos - 1) + field.value.substring(endPos, field.value.length);

        field.focus(); 
        field.setSelectionRange(startPos - 1, startPos - 1); 
      }
      else
      {
        field.value = field.value.substring(0, startPos) + field.value.substring(endPos, field.value.length);

        field.focus(); 
        field.setSelectionRange(startPos, startPos); 
      }
    }
  }