function validatePassword() {
    const passwordInput = document.getElementById("password");
    const password = passwordInput.value;
    const passwordPattern = /^(?=.*[a-zA-Z]).{6,}$/;
    if (!passwordPattern.test(password)) {
        alert("Password must contain at least one letter and be at least 6 characters long");
        return false;
    }
    return true;
}