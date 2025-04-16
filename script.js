document.querySelector("button").onclick = function () {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    let username = localStorage.getItem("user");
    let password = localStorage.getItem("pass");

    if (user === "" || pass === "") {
        alert("Please enter both username and password.");
    } else if (user === username && pass === password) {
        alert("Login successful!");
        setTimeout(() => {
            window.location.href = "mainpage.html";
        }, 3000);
    } else {
        alert("Incorrect username or password.");
    }
};

document.getElementById("showPassword").onchange = function () {
    let passField = document.getElementById("password");
    passField.type = this.checked ? "text" : "password";
};