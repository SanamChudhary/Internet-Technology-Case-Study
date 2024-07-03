function validateForm() {
    const firstName = document.getElementById("firstname").value;
    const lastName = document.getElementById("lastName").value;
    const email = document.getElementById("email").value;
    const contactNumber = document.getElementById("contactNumber").value;
    const address = document.getElementById("address").value;
    const gender = document.getElementById("gender").value;

    if (firstName == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (lastName == "") {
        alert("Last Name must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (contactNumber == "") {
        alert("Contact Number must be filled out");
        return false;
    }
    if (address == "") {
        alert("Address must be filled out");
        return false;
    }
    if (gender == "") {
        alert("Gender must be selected");
        return false;
    }
    return true;
}