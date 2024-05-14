function openLogin() {
    document.getElementById("hiddenLogin").style.display="block";
}
function closeLogin() {
    document.getElementById("error5").innerHTML=""
    document.getElementById("error6").innerHTML=""
    document.getElementById("hiddenLogin").style.display="none"; 
}
function swapRegister(){
    document.getElementById("hiddenLogin").style.display="none";
    document.getElementById("hiddenRegister").style.display="block";
} 