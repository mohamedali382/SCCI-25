let uname = document.getElementById("uname");
let email = document.getElementById("email");
let subjectInput = document.getElementById("UserWorkshop");
let messageInput = document.getElementById('message');

let form = document.getElementById('form');
let email_error = document.getElementById('email_error');
let name_error = document.getElementById('name_error');
let subject_error = document.getElementById('subject_error');
let message_error = document.getElementById('message_error');

form.addEventListener('submit', (e) => {
    let formIsValid = true;

    name_error.innerHTML = '';
    email_error.innerHTML = '';
    subject_error.innerHTML = '';
    message_error.innerHTML = '';

    if (uname.value.trim() === '') {
        e.preventDefault();
        name_error.innerHTML = 'Name is required';
        formIsValid = false;
    }

    let emailCheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
    if (email.value.trim() === '') {
        e.preventDefault();
        email_error.innerHTML = 'Email is required';
        formIsValid = false;
    } else if (!email.value.match(emailCheck)) {
        e.preventDefault();
        email_error.innerHTML = 'Please enter a valid email';
        formIsValid = false;
    }
    if (subjectInput.value.trim() === '') {
        e.preventDefault();
        subject_error.innerHTML = 'Workshop is required';
        formIsValid = false;
    }
    if (messageInput.value.trim() === '') {
        e.preventDefault();
        message_error.innerHTML = 'Message is required';
        formIsValid = false;
    }

    if (!formIsValid) {
        e.preventDefault(); 
}});
document.addEventListener('DOMContentLoaded', function () {
    const notification = document.getElementById('notification');
    if (notification) {
        notification.style.display = 'block'; 
        setTimeout(() => {
            notification.style.display = 'none'; 
        }, 3000);
    }
});
 