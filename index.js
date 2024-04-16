// Sélection de toutes les opinions
const opinions = document.querySelectorAll('.opinion');

// Fonction pour déplacer l'effet d'agrandissement du texte
function scrollOpinions() {
    // Récupération de l'index de l'opinion au centre
    const centerIndex = Math.floor(opinions.length / 2);

    // Parcours de toutes les opinions
    opinions.forEach((opinion, index) => {
        const textElement = opinion.querySelector('.opinion-text');
        // Si l'opinion est au centre, lui appliquer la classe 'centered', sinon la retirer
        if (index === centerIndex) {
            textElement.classList.add('centered');
        } else {
            textElement.classList.remove('centered');
        }
    });
}

// Défilement automatique des opinions toutes les 3 secondes (3000 ms)
setInterval(scrollOpinions, 3000);
