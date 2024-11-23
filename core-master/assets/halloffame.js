function score(timeString, scoreTriche) {
        // gestion si erreur
        if (typeof timeString !== 'string' || !timeString.includes(':')) {
            console.error('timeString invalide ou manquant:', timeString);
            return 0; 
        }

        // conversion du temps en string en entier (nombre de secondes)
        var parts = timeString.split(':');
        var hours = parseInt(parts[0], 10);
        var minutes = parseInt(parts[1], 10);
        var seconds = parseInt(parts[2], 10);
    
        var totalSeconds = hours * 3600 + minutes * 60 + seconds;
    
        // calcul du score
        var score = 1000 - totalSeconds;

        if (scoreTriche === false){
            score = score *2;
        } // score bonifié si le joeur ne triche pas
    
        return score;
    }
    



// Fonction pour envoyer dans le PHP le temps et le score et les afficher dans le hall of fame il faudra modifier avce le vrai nom des colonnes dans la BDD
    function envoyerTemps(timePast, result) {
        fetch('/getTime', {  
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: "temps=" +encodeURIComponent(timePast)+ '&score=' + encodeURIComponent(result),
        })
        .then(response => response.text())
        .then(data => {
            console.log('Réponse du serveur PHP : ' + data);
        })
        .catch(error => {
            console.error("Erreur lors de l'envoi des données : ", error);
        });
    }




// gestion du temps
var start = Date.now();
var timePast; 

// Fonction pour afficher un timer et pour stocker le temps écoulé (dans timePast)
function afficherTimePast() {
        
        var now = Date.now();
        var diff = now - start;
        var hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        var mins = Math.floor((diff / (1000 * 60)) % 60);
        var sec = Math.floor((diff / 1000) % 60);
    
        timePast = `${hours.toString().padStart(2, '0')}:${mins.toString().padStart(2, '0')}:${sec.toString().padStart(2, '0')}`;
        var divTimePast = document.getElementById('timePast');
        
        
        document.getElementById('timePast').textContent ="Bonjour tu joues depuis " + timePast;
    
    // actualisation du temps toutes les secondes
    setTimeout(afficherTimePast, 1000);

    // mise à jour du score
    var result = score(timePast, scoreTriche);
}
