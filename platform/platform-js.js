document.getElementById('client-btn').addEventListener("click", ()=>{
    document.getElementById('client-fields').style.display = 'block'
    document.getElementById('company-fields').style.display = 'none'
    document.getElementById('account-type').value='client'
    document.getElementById('client-btn').classList.add('btn-active')
    document.getElementById('company-btn').classList.remove('btn-active')
})
document.getElementById('company-btn').addEventListener("click", ()=>{
    document.getElementById('client-fields').style.display = 'none'
    document.getElementById('company-fields').style.display = 'block'
    document.getElementById('account-type').value='company'
    document.getElementById('client-btn').classList.remove('btn-active')
    document.getElementById('company-btn').classList.add('btn-active')
})

var emailError=false
var usernameError=false
var passwordError=false
var principalValidation=false

function emailvalidation(input, error){
    var clientemail=input
    var email_error=$(error)
    $.ajax({
        type:'POST',
        url:'email-validation.php',
        data:{ email:clientemail},
        dataType: 'json',
        success:function(response){
            if(response.success==false)
            {
                email_error.show()
                emailError=true
            }
            else{
                email_error.hide()
                emailError=false
            }
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error Status:", status);
            console.log("AJAX Error:", error);
            console.log("AJAX Response Text:", xhr.responseText);
            alert("A apărut o eroare verificare. Detalii în consolă.");
        }
    })
}

function usernamevalitation(input, error){
    var username_error=$(error)
    $.ajax({
        type:'POST',
        url:'username-validation.php',
        data:{username:input},
        dataType:'json',
        success:function(response){
            
            if(response.success==false){
                username_error.show()
                usernameError=true
            }
            else{
                username_error.hide()
                usernameError=false
            }
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error Status:", status);
            console.log("AJAX Error:", error);
            console.log("AJAX Response Text:", xhr.responseText);
            alert("A apărut o eroare verificare. Detalii în consolă.");
        }
    })
}

function passwordvalidation(pass, confirmpass, error){
    var password_error=$(error)
    if(pass!=confirmpass)
    {
        password_error.show()
        passwordError=true
    }
    else{
        password_error.hide()
        passwordError=false
    }
}



$(document).ready(function(){

    $("#client-email-input").on("change", function(e){
        e.preventDefault
        var email=$("#client-email-input").val()
        var email_error=$("#email-error")
        emailvalidation(email, email_error)
    })
    $("#username-input").on("change", function(e){
        e.preventDefault
        var username=$("#username-input").val()
        var username_error=$("#username-error")
        usernamevalitation(username, username_error)
    })

    $("#client-confirm-password-input").on("input", function(e){
        e.preventDefault
        var pass=$("#client-password-input").val()
        var confpass=$("#client-confirm-password-input").val()
        var passerorr=$("#password-error")
        passwordvalidation(pass, confpass, passerorr)
    })

    $("#client-fields").on("submit", function(e){
        e.preventDefault();

        if(usernameError==false && emailError===false && passwordError==false)
        {
            var clientname=$("#name-input").val()
            var clientsurname=$("#surname-input").val()
            var clientage=$("#age-input").val()
            var clientusername=$("#username-input").val()
            var clientemail=$("#client-email-input").val()
            var clientpassword=$("#client-password-input").val()
            $.ajax({
                type: "POST",
                url: "register-client.php",
                data:{
                    username:clientusername,
                    email:clientemail,
                    password:clientpassword,
                    name:clientname,
                    surname:clientsurname,
                    age:clientage,
                },
                dataType:"json",
                success:function(response){
                    console.log("adaugat cu succes")
                },
                error: function (xhr, status, error) {
                        console.log("AJAX Error Status:", status);
                        console.log("AJAX Error:", error);
                        console.log("AJAX Response Text:", xhr.responseText);
                        alert("A apărut o eroare la sortare. Detalii în consolă.");
                }
                
            })
            $("#final-error").hide()

        }
        else{
            $("#final-error").show()

        }
    });
    
    $("#company-email-input").on("change", function(e){
        e.preventDefault
        var email=$("#company-email-input").val()
        var email_error=$("#company-email-error")
        console.log(email_error)
        emailvalidation(email, email_error)
    })

    $("#company-fields").on("submit", function(e){
        e.preventDefault();
        var companyname=$("#companyname-input").val()
        var cui=$("#CUI-input").val()
        var companyemail=$("#company-email-input").val()
        var password=$("#company-password-input").val()
        $.ajax({
            type:"POST",
            url:"register-company.php",
            data:{
                companyname: companyname,
                cui:cui,
                email:companyemail,
                password:password,
            },
            dataType:"json",
            success:function(response){
                console.log("companie adaugata cu succes")
            }, 
            error: function (xhr, status, error) {
                console.log("AJAX Error Status:", status)
                console.log("AJAX Error:", error)
                console.log("AJAX Response Text:", xhr.responseText)
                alert("A apărut o eroare la sortare. Detalii în consolă.")
            }
        })

    });
})

