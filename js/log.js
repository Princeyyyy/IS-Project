function myFunction() {
    var x = document.getElementById("lpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}