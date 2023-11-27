function Redirect(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username && password) {
        location.href = "/index.html";
    }
}