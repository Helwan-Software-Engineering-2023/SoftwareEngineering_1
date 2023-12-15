function check() {
    let fields = Array.from(document.querySelectorAll(".inputs"));
    let user = document.querySelector(".one");
    let pass = document.querySelector(".two");
    let btn = document.querySelector(".three");
    for (let i = 0; i < fields.length; i++) {
        fields[i].addEventListener("keyup", () => {
            let count = 0;
            if (user.value == "") {
                fields[0].style.border = "3px solid red";
                document.getElementById("error_user").innerHTML = "enter a valid username";
            }
            else {
                fields[0].style.border = "3px solid green";
                document.getElementById("error_user").innerHTML = "";
                count += 1;
            }
            if (pass.value == "") {
                fields[1].style.border = "3px solid red";
                document.getElementById("error_pass").innerHTML = "enter your password";
            }
            else {
                fields[1].style.border = "3px solid green";
                document.getElementById("error_pass").innerHTML = "";
                count += 1;
            }
            if (count == 2) {
                btn.disabled = false;
            }
            else {
                btn.disabled = true;
            }
        })
    }
}
console.log("ahmed")
function finish() {
    document.getElementById("m1").style.display = "none";
    document.getElementById("btn").style.display = "none";
}
