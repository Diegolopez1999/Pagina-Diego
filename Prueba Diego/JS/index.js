const formLogin = document.querySelector("#formLogin")
btnLogin.addEventListener('click', event =>{
    event.preventDefault()
    if(username.value == "" || pass.value == "") {
        alert("Completa todos los datos.")
        return false
    }
    const form = new FormData(formLogin)
    form.append("function", "login")
    fetch(data/procesar_login.php, {
        method: "POST",
        body: form
    })
    
})