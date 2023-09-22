let form = document.getElementById('login-form')

form.addEventListener('submit', async (event) => {
    event.preventDefault(); // Empêcher la soumission du formulaire par défaut

    let formData = new FormData(form);

    let requestOptions = {
        method: 'POST',
        body: formData,
    };

    let request = await fetch('../dataController.php?login', requestOptions)
    let response = await request.json()
    if (response['success']) {
        window.location.href = "../index.php";
    }else {
        let error = response['errors'];
        let errorContainer = document.getElementById('error-container');

        // Supprime les anciennes erreurs s'il y en a
        while (errorContainer.firstChild) {
            errorContainer.removeChild(errorContainer.firstChild);
        }
        
        let errorParagraph = document.createElement('p');
        errorParagraph.textContent = error;
        errorContainer.appendChild(errorParagraph);
    }
});