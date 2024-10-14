//Update confirmation
document.addEventListener('DOMContentLoaded', function () {
    const updateButton = document.getElementById('updateBtn');
    const updateForm = document.getElementById('updateForm');

    updateButton.addEventListener('click', function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to update the account?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, Update!',
            cancelButtonText: 'Cancel',
            buttonsStyling: false, // Disable default SweetAlert2 button styling
            didRender: () => {
              const confirmButton = Swal.getConfirmButton();
              const cancelButton = Swal.getCancelButton();
          
              // Apply styles directly using JavaScript
              confirmButton.style.backgroundColor = '#004880'; 
              confirmButton.style.color = 'white';
              confirmButton.style.width = '450px';
              confirmButton.style.border = 'none';
              confirmButton.style.borderRadius = '5px';
              confirmButton.style.padding = '10px';
              confirmButton.style.fontWeight = 'bold';
              confirmButton.style.fontSize = 'medium';
              confirmButton.style.cursor = 'pointer';
    
              // Apply styles directly using JavaScript
              cancelButton.style.backgroundColor = 'red'; 
              cancelButton.style.color = 'white';
              cancelButton.style.width = '450px';
              cancelButton.style.border = 'none';
              cancelButton.style.borderRadius = '5px';
              cancelButton.style.padding = '10px';
              cancelButton.style.fontWeight = 'bold';
              cancelButton.style.fontSize = 'medium';
              cancelButton.style.cursor = 'pointer'
              cancelButton.style.marginTop = '10px';
            },
        }).then((result) => {
            if (result.isConfirmed) {
                updateForm.submit(); // Submit form if confirmed
            }
        });
    });
});

//Logout confirmation
document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.getElementById('logoutBtn');

    logoutButton.addEventListener('click', function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to logout?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Logout!',
            cancelButtonText: 'Cancel',
            didRender: () => {
                const confirmButton = Swal.getConfirmButton();
                const cancelButton = Swal.getCancelButton();
            
                // Apply styles directly using JavaScript
                confirmButton.style.backgroundColor = '#004880'; 
                confirmButton.style.color = 'white';
                confirmButton.style.width = '450px';
                confirmButton.style.border = 'none';
                confirmButton.style.borderRadius = '5px';
                confirmButton.style.padding = '10px';
                confirmButton.style.fontWeight = 'bold';
                confirmButton.style.fontSize = 'medium';
                confirmButton.style.cursor = 'pointer';
      
                // Apply styles directly using JavaScript
                cancelButton.style.backgroundColor = 'red'; 
                cancelButton.style.color = 'white';
                cancelButton.style.width = '450px';
                cancelButton.style.border = 'none';
                cancelButton.style.borderRadius = '5px';
                cancelButton.style.padding = '10px';
                cancelButton.style.fontWeight = 'bold';
                cancelButton.style.fontSize = 'medium';
                cancelButton.style.cursor = 'pointer'
                cancelButton.style.marginTop = '10px';
              },
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php'; // Redirect to logout.php on confirmation
            }
        });
    });
});