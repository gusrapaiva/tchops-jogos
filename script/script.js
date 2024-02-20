window.onload = function()
{
    let registro = document.getElementById('register');
    let login = document.getElementById('login');

    let form = document.getElementsByClassName('next');

    let titulo = document.getElementById('titulo');


    registro.onclick = function()
    {
        form[0].style.display = "none";
        form[1].style.display = "block";

        titulo.innerHTML = "Registre-se"
    }

    login.onclick = function()
    {
        form[1].style.display = "none";
        form[0].style.display = "block";

        titulo.innerHTML = "Login"
    }

}



