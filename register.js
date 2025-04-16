document.querySelector(".Signup_done").onclick = function () {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "" || pass === "") {
        alert("Please fill in username and password!");
    } else {
        localStorage.setItem("user", user);
        localStorage.setItem("pass", pass);
        alert("Registered successfully!");
        window.location.href = "index.html";
    }
};

document.getElementById("showPassword").onchange = function () {
    let passwordField = document.getElementById("password");
    passwordField.type = this.checked ? "text" : "password";
};