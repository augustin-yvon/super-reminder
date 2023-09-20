document.getElementById('register-form').addEventListener('submit', function (e) {
    e.preventDefault(); // Empêcher la soumission du formulaire par défaut
    
    // Récupérer les valeurs des champs de formulaire
    let login = document.getElementById('login').value;
    let firstname = document.getElementById('firstname').value;
    let lastname = document.getElementById('lastname').value;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
    
    // Créer un objet FormData pour les données du formulaire
    let formData = new FormData();
    formData.append('login', login);
    formData.append('firstname', firstname);
    formData.append('lastname', lastname);
    formData.append('password', password);
    formData.append('confirm_password', confirm_password);

    // Configuration de la requête Fetch
    let requestOptions = {
        method: 'POST',
        body: formData,
    };

    // Envoyer les données au serveur via Fetch
    fetch('../dataController.php?register', requestOptions)
        .then(function (response) {
            if (response.ok) {
                alert('Inscription réussit !');
            } else {
                console.error('Erreur de requête : ' + response.status);
            }
        })
        .catch(function (error) {
            console.error('Erreur : ' + error);
        });
});