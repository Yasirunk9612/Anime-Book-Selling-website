let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

document.querySelector('#user-btn').onclick = () =>{
    account-box.classList.toggle('active');
} 

function showAlert(message, type) {
    let alertDiv = document.createElement('div');
    alertDiv.classList.add('alert');
    alertDiv.classList.add(type === 'success' ? 'alert-success' : 'alert-error');
    alertDiv.textContent = message;
    document.body.appendChild(alertDiv);

    setTimeout(() => {
        alertDiv.remove();
    }, 5000); // Remove the alert after 5 seconds
}

// Example of calling the function from PHP code
if (window.location.search.includes('msg=')) {
    const urlParams = new URLSearchParams(window.location.search);
    const message = urlParams.get('msg');
    const type = urlParams.get('type'); // 'success' or 'error'
    showAlert(message, type);
}