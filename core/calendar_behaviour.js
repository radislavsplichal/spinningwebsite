$(document).ready(function(){
		
	    var a;
		$('.menu__item').click(function(e){
				a = $(this).attr('id');
				a = a.concat('-content');
				console.log(a);
				$('main').empty();
				
				var content = $.get('content/'.a.concat('.php'));
				
				
				console.log(content);
				$('main').append(content);
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
	    $("#instructor-content").submit(function(event) {

	      /* stop form from submitting normally */
	      event.preventDefault();

	      /* get the action attribute from the <form action=""> element */
	      var $form = $( this ),
	          url = $form.attr( 'action' );

	      /* Send the data using post with element id name and name2*/
	      var posting = $.post( url, { name: $('#ins-name').val(), surname: $('#ins-surname').val(), bio: $('#ins-bio').val() } );

	      /* Alerts the results */
	      posting.done(function( data ) {
	        alert('success');
	      });
	    });
	    
	    
	    
	 // Variable to hold request
	    var request;

	    // Bind to the submit event of our form
	    $("#foo").submit(function(event){

	        // Prevent default posting of form - put here to work in case of errors
	        event.preventDefault();

	        // Abort any pending request
	        if (request) {
	            request.abort();
	        }
	        // setup some local variables
	        var $form = $(this);

	        // Let's select and cache all the fields
	        var $inputs = $form.find("input, select, button, textarea");

	        // Serialize the data in the form
	        var serializedData = $form.serialize();

	        // Let's disable the inputs for the duration of the Ajax request.
	        // Note: we disable elements AFTER the form data has been serialized.
	        // Disabled form elements will not be serialized.
	        $inputs.prop("disabled", true);

	        // Fire off the request to /form.php
	        request = $.ajax({
	            url: "/form.php",
	            type: "post",
	            data: serializedData
	        });

	        // Callback handler that will be called on success
	        request.done(function (response, textStatus, jqXHR){
	            // Log a message to the console
	            console.log("Hooray, it worked!");
	        });

	        // Callback handler that will be called on failure
	        request.fail(function (jqXHR, textStatus, errorThrown){
	            // Log the error to the console
	            console.error(
	                "The following error occurred: "+
	                textStatus, errorThrown
	            );
	        });

	        // Callback handler that will be called regardless
	        // if the request failed or succeeded
	        request.always(function () {
	            // Reenable the inputs
	            $inputs.prop("disabled", false);
	        });

	    });
 
});