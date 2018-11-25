$(document).ready(function(){
	
  
	
	
	    var newEventForm = document.getElementById("form1");
	    console.log(newEventForm);
	
		//$("#form1").hide();
	
	
		//buttons
		$(".calendar__day").append ('<span class="fas fa-plus newEvent" style="align-self: center;"></span>');
		
		//forms
		//$(".calendar__day").append ( newEventForm);
				
		
		
		//events
		$(".calendar__day").click(function(){
			$(this).prepend(newEventForm);
			//$("#form1").toggle(); 
		});
	
 
});