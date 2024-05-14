
function openRegister() {
    document.getElementById("hiddenRegister").style.display="block";
}
function closeRegister() {
    document.getElementById("error1").innerHTML=""
    document.getElementById("error2").innerHTML=""
    document.getElementById("error3").innerHTML=""
    document.getElementById("error4").innerHTML=""
    document.getElementById("hiddenRegister").style.display="none";

}
function swapLogin(){
    document.getElementById("hiddenRegister").style.display="none";
    document.getElementById("hiddenLogin").style.display="block";
} 