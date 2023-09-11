$(document).ready(function() {
     // Define the email address
     const email = document.getElementById("Subemail").innerHTML;
     // Find the position of the "@" symbol
     const atIndex = email.indexOf('@');

     if (atIndex !== -1) {
         // Extract the username and domain
         const subusername = email.substring(0, 3); // first 3 letter of the email
         const username = email.substring(3, atIndex).split(''); // remaining of the letters before '@'
         const domain = email.substring(atIndex + 1);  // "gmail.com"
         
         // Modify the elements in the username array
         username.forEach((element, index, arr) => {
            // replace letters to '*'
            arr[index] = '*';
         });
         const revealedEmail = subusername + username + domain;
         const cleanedEmail = revealedEmail.replace(/,/g, '');
         // Display the encrypted email address
         const emailElement = document.getElementById("email");
         emailElement.innerHTML = cleanedEmail;
     } else {
         console.log("Invalid email format");
     }
});