  $(document).ready(function() {
  	
  	function createBooking(){
     
        var formData = $(this).serialize();

        // AJAX call
        $.ajax({
            url: 'bookning_insert.php',
            method: 'POST',
            data: formData,
            success: function(response) {
                // Handle success response
                console.log(response);
                // You can do something with the response here, like showing a success message
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
                // You can display an error message or handle the error as needed
            }
            
    	  });

	}
	
	$('#booking-form').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission
        createBooking.call(this); // Ensure `this` refers to the form element
    });
  	
  });