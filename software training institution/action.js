//login page action
function log(){
var power=document.getElementById("pwd").value;
    if (power=="nirmal") {
    window.location.assign("home.html");
    }
    else{ 
    alert("pwd worng");
    }
    }
      
//home page action   
function np1(){
onclick=window.location.assign("courses.html");
}
        
function pp1(){
onclick=window.location.assign("loginpage.html");
}

//course page action
function pp2(){
onclick=window.location.assign("home.html");
}

function np2(){
onclick=window.location.assign("contact.html");
}

//contact page action
function pp3(){
onclick=window.location.assign("courses.html");
}

function np3(){
onclick=window.location.assign("book.html");
}
