function opnnav(){
    document.getElementById("msn").style.width = "250px";
}
function clsnav(){
    document.getElementById("msn").style.width = "0";
}
function search(x){
    x.style.background="rgb(244, 231, 207)";
}

function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var phone = document.getElementById('phone').value.trim();
    var address = document.getElementById('address').value.trim();

    if (name === '' || email === '' || phone === '' || address === '') {
        alert('Please fill in all required fields.');
        return false;
    }

    // Add more validation if needed

    return true;
}

