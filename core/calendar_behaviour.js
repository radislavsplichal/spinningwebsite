$(document).ready(function(){
	
  
	
	
	    var newEventForm = document.getElementById("newEvent");
	    //console.log(newEventForm);
	
		//$("#form1").hide();
	
	
		//buttons
		$(".calendar__day").append ('<span class="fas fa-plus newEvent" style="align-self: center;"></span>');
		
		//forms
		//$(".calendar__day").append ( newEventForm);
				
		
		
		//events
		$(".calendar__day").click(function(e){
			if (e.target !== this)
			    return;
			$(this).prepend(newEventForm);
			//$("#form1").toggle(); 
		});
	
		//AJAX calls
		
		function showCustomer(str) {
			  var xhttp; 
			  if (str == "") {
			    document.getElementById("newEvent").innerHTML = "";
			    return;
			  }
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    document.getElementById("txtHint").innerHTML = this.responseText;
			    }
			  };
			  xhttp.open("GET", "getcustomer.php?q="+str, true);
			  xhttp.send();
			}
 
});