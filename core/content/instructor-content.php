<?php ?>
<section id="instructorPage">
    		<form id="instructor-content" action="operations/saveInstructor.php" method="post">
    			<h2>Add a new instructor</h2>
    			<input id="ins-name" type="text" name="name">
    			<input id="ins-surname" type="text" name="surname">
    			<textarea id="ins-bio" name="bio" placeholder="Enter your bio here..."></textarea>
    		    <button type="submit">Submit</button> 
    		</form>
</section>
<<script type="text/javascript">
<!--

//-->


//AJAX calls

/* attach a submit handler to the form */
$('#instructor-content').submit(function(e) {

 /* stop form from submitting normally */
 e.preventDefault();

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
</script>
