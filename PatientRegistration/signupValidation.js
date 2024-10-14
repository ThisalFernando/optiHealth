//Check data availability in fields
function emptySubmit(){
    let fname = document.getElementById("fName").value;
    let dob = document.getElementById("dob").value;
    let gender = document.getElementById("gender").value;
    let ms = document.getElementById("ms").value;
    let tel = document.getElementById("tel").value;
    let email = document.getElementById("email").value;
    let pwd = document.getElementById("pwd").value;


    if(fname=="" && dob == "" && gender == "" && ms == "" && tel == "" && email == "" && pwd == ""){
        Swal.fire({
            title: 'WARNING!',
            text: "No any data you have inserted",
            icon: 'warning',
            confirmButtonText: 'OK',
            buttonsStyling: false, // Disable default SweetAlert2 button styling
            didRender: () => {
              const confirmButton = Swal.getConfirmButton();
          
              // Apply styles directly using JavaScript
              confirmButton.style.backgroundColor = '#004880'; // Green color
              confirmButton.style.color = 'white';
              confirmButton.style.width = '450px';
              confirmButton.style.border = 'none';
              confirmButton.style.borderRadius = '5px';
              confirmButton.style.padding = '10px';
              confirmButton.style.fontWeight = 'bold';
              confirmButton.style.fontSize = 'medium';
              confirmButton.style.cursor = 'pointer';
            },
          });
        return false;
    }
}

//confirm reset request
function confirmReset(){
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to clear the data?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, Clear it!',
            cancelButtonText: 'No, Keep it',
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
          })
          .then((result) => {
            if (result.isConfirmed) {
              // Reset the form if the user confirms
              document.getElementById('registerForm').reset();
              Swal.fire({
                title: 'Reset!',
                text: 'The form has been reset.',
                icon: 'success',
                confirmButtonText:'OK',
                buttonsStyling: false, // Disable default SweetAlert2 button styling
                didRender: () => {
                    const confirmButton = Swal.getConfirmButton();
          
                    // Apply styles directly using JavaScript
                    confirmButton.style.backgroundColor = '#004880'; // Green color
                    confirmButton.style.color = 'white';
                    confirmButton.style.width = '450px';
                    confirmButton.style.border = 'none';
                    confirmButton.style.borderRadius = '5px';
                    confirmButton.style.padding = '10px';
                    confirmButton.style.fontWeight = 'bold';
                    confirmButton.style.fontSize = 'medium';
                    confirmButton.style.cursor = 'pointer';
                    },
                });
            }
        });
    }   

//confirm submit request
function submitvalidate(form){
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to sign up?",
        icon: 'question',
        buttons: true,
        dangerMode: true,
        buttonsStyling: false, // Disable default SweetAlert2 button styling
        didRender: () => {
          const confirmButton = Swal.getConfirmButton();
      
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
        },
      })
      .then((isOkey) =>{
        if(isOkey){
            form.submit();
        }
      });
      return false;
}