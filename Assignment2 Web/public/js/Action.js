var full = document.getElementById("full")
var uname = document.getElementById("usr")
var email = document.getElementById("mail")
var pass = document.getElementById("pass")
var cpass = document.getElementById("cpass")
var num = document.getElementById("num")
var address = document.getElementById("adrs")
var date = document.getElementById("dte")
var image = document.getElementById("img")
var reqfull = document.getElementById("req1")
var requname= document.getElementById("req2")
var reqemail = document.getElementById("req3")
var reqpass = document.getElementById("req4")
var reqcpass = document.getElementById("req5")
var reqnum = document.getElementById("req6")
var reqaddress = document.getElementById("req7")
var reqdate = document.getElementById("req8")
var reqimage = document.getElementById("req10")
var match = document.getElementById("match")
var weak = document.getElementById("weak")
var formula = document.getElementById("formula")
var submit = document.getElementById("sub")
var form = document.getElementById("frm")

let inputs = [full,uname,email,pass,cpass,num,address,date,image]
let requireds = [reqfull,requname,reqemail,reqpass,reqcpass,reqnum,reqaddress,reqdate,reqimage]

match.style.display = "none"
formula.style.display = "none"
weak.style.display = "none"
for (let i = 0; i < requireds.length; i++) {
    requireds[i].style.display = "none";    
}

function checkInputs(){
    for (let i = 0; i < requireds.length; i++) {
        requireds[i].style.display = "none";    
    }

    for (let i = 0; i < inputs.length; i++) {
        inputs[i].style.outline = "none";    
    }

    var count = 0;
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value == "") {
            inputs[i].style.outline = "2px solid red"
            requireds[i].style.display = "block"
            count++;
        }
    }
    if(count == 0){
        return true
    }else{
        return false
    }
}

function validation(){
    var count = 0
    match.style.display = "none"
    formula.style.display = "none"
    weak.style.display = "none"
    const emailregex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    const passwordregex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/
    const emailresult = emailregex.test(email.value)
    const passwordresult = passwordregex.test(pass.value)

    if(emailresult === false && email.value != "")
    {
        email.style.outline = "2px solid red"
        formula.style.display = "block"
        count++
    }
    if(passwordresult === false && pass.value != "")
    {
        pass.style.outline = "2px solid red"
        weak.style.display = "block"
        count++
    }
    if(pass.value != cpass.value){
        cpass.style.outline = "2px solid red"
        match.style.display = "block"
        count++
    }
    if(count == 0){
        return true
    }else{
        return false
    }
}

submit.addEventListener("click",(e) =>{
    e.preventDefault()
    if(checkInputs() && validation()){
        form.submit()
    }
})