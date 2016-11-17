 $(document).ready(function() { 
		$("#execute").bind("click", function() {
			var dateString = $("#date").val();
			var date = new Date(dateString);
			$("#dateObject").text(date.toString());
		});
	});
	
 
 function validate_required()
{
	
  
     var flag=true;
	 var namePattern = /^[A-Za-z]{3,25}$/;

if( !namePattern.test(document.frm1.f_name.value))
{
alert("Enter valid First name"); flag=false;
}
if( !namePattern.test(document.frm1.m_name.value))
{
alert("Enter valid Middle name"); flag=false;
}
if( !namePattern.test(document.frm1.l_name.value))
{
alert("Enter valid Last name"); flag=false;

}
 var addr = document.getElementById ("add").value;

  if(addr==null || addr=="")
{
alert("Enter valid Address"); flag=false;

}
  var dob = document.getElementById ("dob").value;

  if(dob==null || dob=="")
{
alert("Date Of Birth cannot be empty"); flag=false;

}
 
 var phno = document.getElementById ("ph_no").value;

  if(phno==null || phno=="")
    {
     alert("phone no should not be null"); flag=false;
     }
  else
    {
    
     if(isNaN(phno))
      {
      
       alert("phone num must be numeric");
       flag=false;
      }
	}
 var num = document.getElementById ("mb_no").value;

  if(num==null || num=="")
    {
     alert("mobile no should not be null"); flag=false;
     }
  else
    {
    
     if(isNaN(num))
      {
      
       alert("mobile num must be numeric");
       flag=false;
      }
	   else
    {
     if( (num.length!=10 ))
       {
         alert("mobile num must be of 10 digit");
         flag=false;
        }
     }
	}
	 var e_val = document.getElementById('email').value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(e_val)) 
	{
    alert('Please provide a valid email address'); flag=false;
    
    
	 }
    var per = document.getElementById ("per").value;

  if(per==null || per=="")
    {
     alert("percentage should not be null"); flag=false;
     }
  else
    {
    
     if(isNaN(phno))
      {
      
       alert("percentage must be numeric");
       flag=false;
      }
	}
    
var age = document.getElementById ("age").value;

  if(age==null || age=="")
    {
     alert("age should not be null"); flag=false;
     }
  else
    {
    
     if(isNaN(age))
      {
      
       alert("age must be numeric");
       flag=false;
      }
    else
    {
     if( !(age > 10 && age < 80))
       {
         alert("age must be between 11 to 79");
         flag=false;
        }
     }
     }
	
var city = document.getElementById("city").value;
if( city==null || city=="")
  {
    alert("city name is null");
    flag=false;
  }
else
{
    var pat1= /^[a-zA-Z]{3,10}$/;
  //  if(pat1.test(city)==false)   
   if ( !(city.length > 2 && city.length < 10))
     {
     alert("city name must between 4-10 characters");
     flag=false;
  }
}


if(flag==false)

    return false;
  else
    return true;
}