function btn(){
    var u = document.getElementById("email").value;
    var p = document.getElementById("pass").value;
    if(u=="dhruv1395" && p=="1395"){
        alert("Login successfull!👍");
        window.location.assign("file:///D:/framset/frameset.html");
         } 
        
     else{
        alert("⚠️ wrong username or password.");
        
    }
}
function opnnav(){
    document.getElementById("msn").style.width = "250px";
}
function clsnav(){
    document.getElementById("msn").style.width = "0";
}
function search(x){
    x.style.background="rgb(244, 231, 207)";
}
