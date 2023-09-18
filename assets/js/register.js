document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('register-form').addEventListener('submit', function (e) {
        e.preventDefault(); // Empêcher la soumission du formulaire par défaut
        
        // Récupérer les valeurs des champs de formulaire
        let login = document.getElementById('login').value;
        let firstname = document.getElementById('firstname').value;
        let lastname = document.getElementById('lastname').value;
        let password = document.getElementById('password').value;
        let confirm_password = document.getElementById('confirm_password').value;
        
        const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passwordPattern.test(password)) {
            alert("Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.");
            return;
        }
        
        // Créer un objet FormData pour les données du formulaire
        let formData = new FormData();
        formData.append('login', login);
        formData.append('firstname', firstname);
        formData.append('lastname', lastname);
        formData.append('password', password);
    
        // Configuration de la requête Fetch
        let requestOptions = {
            method: 'POST',
            body: formData,
        };
    
        // Envoyer les données au serveur via Fetch
        fetch('../Controller/register.php', requestOptions)
            .then(function (response) {
                if (response.ok) {
                    alert('Profil modifié avec succès !');
                } else {
                    console.error('Erreur de requête : ' + response.status);
                }
            })
            .catch(function (error) {
                console.error('Erreur : ' + error);
            });
    });
})