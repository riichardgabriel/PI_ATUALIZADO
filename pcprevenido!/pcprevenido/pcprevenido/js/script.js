document.querySelector('form').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmpassword').value;

    if (password !== confirmPassword) {
        alert("As senhas não coincidem.");
        event.preventDefault();
    }
});


