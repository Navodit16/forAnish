document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        // event.preventDefault(); // Prevents the default form submission behavior

        const firstName = document.getElementById("name").value;
        // const lastName = document.getElementById("lastName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const mobileNumber = document.getElementById("phone").value;
        const address = document.getElementById("address").value;

        const nameRegex = /^[a-zA-Z]{5,}$/;
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const mobileRegex = /^\d{10}$/;

        if (!nameRegex.test(firstName)) {
            alert("Name should only contain alphabets and should have a minimum length of 5 characters.");
            return false;
        }

        // if (!nameRegex.test(lastName)) {
        //     alert("Last Name should only contain alphabets and should have a minimum length of 5 characters.");
        //     return false;
        // }

        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        if (!mobileRegex.test(mobileNumber)) {
            alert("Mobile Number should contain 10 digits only.");
            return false;
        }

        if (!passwordRegex.test(password)) {
            alert("Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special symbol.");
            return false;
        }

        

        if (address.trim() === "") {
            alert("Address cannot be empty.");
            return false;
        }

        alert("Validation successful.");
        // return true;
    });
});