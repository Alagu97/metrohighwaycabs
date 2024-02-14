document.addEventListener('DOMContentLoaded', function () {
console.log('script loaded');
    const tabsHomeForm = document.getElementById('tabs-home-form');
    const tabsProfileForm = document.getElementById('tabs-profile-form');

    // Function to handle form submissions
    function handleFormSubmit(form, action) {
        const formData = new FormData(form);

        // Perform AJAX request to the server
        fetch('server_script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Handle the server response
            console.log(data);

            // Implement logic to update UI or show messages based on the response
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Event listener for "tabs-home" form submission
    tabsHomeForm.addEventListener('submit', function (event) {
        event.preventDefault();
        handleFormSubmit(tabsHomeForm, 'insertOrUpdate'); // You can pass an action parameter
    });

    // Event listener for "tabs-profile" form submission
    tabsProfileForm.addEventListener('submit', function (event) {
        event.preventDefault();
        handleFormSubmit(tabsProfileForm, 'insertOrUpdate'); // You can pass an action parameter
    });

    // Function to handle delete operation
    function handleDelete(id) {
        // Perform AJAX request to the server
        fetch('server_script.php?action=delete&id=' + id, {
            method: 'GET',
        })
        .then(response => response.json())
        .then(data => {
            // Handle the server response
            console.log(data);

            // Implement logic to update UI or show messages based on the response
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Example: Call delete function on button click
    const deleteButton = document.getElementById('deleteButton');
    deleteButton.addEventListener('click', function () {
        const itemIdToDelete = 123; // Replace with the actual ID you want to delete
        handleDelete(itemIdToDelete);
    });

    // Function to handle view operation
    function handleView() {
        // Perform AJAX request to the server
        fetch('server_script.php?action=view', {
            method: 'GET',
        })
        .then(response => response.json())
        .then(data => {
            // Handle the server response
            console.log(data);

            // Implement logic to update UI with the retrieved data
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Example: Call view function on page load
    handleView();
});

  var nav = document.querySelector("header");
window.addEventListener("scroll",function(event){
    if(this.window.scrollY >=200){
     
        nav.style.transition ='all';
        nav.style.transitionDuration = '0.7s';
        nav.style.transformStyle ='ease-in';
        nav.style.position ='fixed';

        
    }
    else{
        
          nav.style.transition ='all';
        nav.style.transitionDuration = '0.7s';
        nav.style.transformStyle ='ease-in';
        nav.style.position ='relative';
       
         
        
    }
});

