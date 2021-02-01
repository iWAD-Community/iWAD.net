console.log("It works")
$(document).ready(function(){
    $(".btn").click(function (event){
        
        console.log("clicked Button")
    var email = $('#email').val()
    if (email.length > 5 && email.includes('@') && email.includes('.')){
        console.log("Email valid")
    }
    else{
        event.preventDefault()
        alert("email not Valid")
    }
    }) 
})
