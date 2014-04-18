/**
	Autor: Viken Patel
	Script: Form Validation
**/ 

function validate(n, msg){
	
	if(n.val().length < 3 || n.val() ==' '){
		alert(msg); //Alert Message to user
		n.focus(); //Focus on same input
		return false;		
	}
	else if(n.val() !=""){
		var regUrlstr = /http:|https:|www.|ftp:|<script/;
		urladdress = n.val();
		var matchstr = urladdress.search(regUrlstr);
		
		if (matchstr != -1){
			alert("Opps! Web Address or script is now allowed");
			n.val('');
			n.focus();
			return false;	
		}
		return true;
	}
	
	else{
		return true;
	}
}

function validateselect(n, msg){
	
	if(n.val() =='-1'){
		alert(msg);
		n.focus();
		return false;		
	}
	else{
		return true;
	}
}

function validateEmail(n, msg){  
        
		if(n.val()==""){
			alert(msg);
			n.focus();
			return false;
		}
		else if(n.val()!="")
		{
			
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

			var address = n.val();

			if(reg.test(address) == false) {

			alert('Invalid Email Address');

			n.focus();

			return false;
			}
			return true;
			
		}
		else{
			return true;
		}	  
    } 
	
function validateNumber(n, msg){
		
	if(n.val() ==''){
		alert(msg);
		n.focus();
		return false;		
	}
	else if(n.val() != '')
	{
		re=/^[0-9()+ ]+$/;
		if(!re.test(n.val())){
		alert("Please Enter Valid Phone Number");
		n.focus();
		return false;
		}
		return true;
	}
	else{
		return true;
	}
}


function urlcheck(n, msg){
	
	var regUrlstr = /http:|https:|www.|ftp:|<script/;
	
	if(n.val() !=""){
		urladdress = n.val();
		var matchstr = urladdress.search(regUrlstr);
		
		if (matchstr != -1){
			alert(msg);
			n.val('');
			n.focus();
			return false;	
		}
		return true;
	}
	else{
		return true;
	}
}