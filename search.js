function search(){
    var x =document.getElementById("nazwa").value;
    y="http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/bronie.php#"+x;
    document.getElementById(x).style.border = "5px solid #eed3fe";
    window.location.href=y;
    //document.getElementById(x).style.borderRadius = "20px";
}
function search_2(){
    var x =document.getElementById("nazwa").value;
    y="http://localhost/moje%20pliki/projekt/wiki-enter-the-gungeon/itemy.php#"+x;
    document.getElementById(x).style.border = "5px solid #eed3fe";
    window.location.href=y;
    //document.getElementById(x).style.borderRadius = "20px";
}