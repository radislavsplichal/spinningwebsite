$(document).ready(function(){
		
	var a;
		$('.menu__item').click(function(e){
				a = $(this).attr('id');
				console.log(a);
				$('main').empty();
				var content = document.getElementById(a);
				
				$(this).append(content);
		});
	
	
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
		
		 /* attach a submit handler to the form */
	    $("#formoid").submit(function(event) {

	      /* stop form from submitting normally */
	      event.preventDefault();

	      /* get the action attribute from the <form action=""> element */
	      var $form = $( this ),
	          url = $form.attr( 'action' );

	      /* Send the data using post with element id name and name2*/
	      var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );

	      /* Alerts the results */
	      posting.done(function( data ) {
	        alert('success');
	      });
	    });
 
});