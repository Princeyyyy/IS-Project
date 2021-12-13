function myFunction() {
    var x = document.getElementById("spassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}