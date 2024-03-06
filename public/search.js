const searchInput = document.getElementById('search-input');

searchInput.addEventListener('input', function() {
    const query = searchInput.value.trim(); // Récupère la valeur saisie sans les espaces avant et après

    // Si la valeur de la requête est vide, ne rien faire
    if (!query) {
        return;
    }

    // Envoie une requête AJAX au point de terminaison de recherche avec la valeur de la requête
    fetch(`/search?query=${query}`)
        .then(response => response.json())
        .then(data => {
            // Traiter les résultats
            const programmesByCategorie = data.programmesByCategorie;
            const packsByNom = data.packsByNom;
            const packsByType = data.packsByType;

            // Exemple : Afficher les programmes par catégorie
            console.log(programmesByCategorie);

            // Exemple : Afficher les packs par nom
            console.log(packsByNom);

            // Exemple : Afficher les packs par type
            console.log(packsByType);

            // Faites ce que vous voulez avec les résultats (par exemple, mettre à jour l'interface utilisateur)
        })
        .catch(error => {
            // Gérer les erreurs
            console.error(error);
        });
});
