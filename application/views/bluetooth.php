<!DOCTYPE html>
<html>
<head>
    <title>Affichage des données Bluetooth</title>
</head>
<body>
    <h1>Affichage des données Bluetooth</h1>

    <div id="dataContainer"></div>

    <script>
        // Fonction pour récupérer les données depuis le serveur PHP
        function getData() {
            // Effectuer une requête AJAX pour récupérer les données
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Les données ont été reçues avec succès
                    var data = xhr.responseText;

                    // Afficher les données dans la page
                    document.getElementById('dataContainer').innerHTML = data;
                }
            };
            xhr.open('GET', '<?php echo base_url("bluetooth/receiveData"); ?>', true);
            xhr.send();
        }

        // Actualiser les données toutes les 5 secondes
        setInterval(getData, 5000);

        // Appeler la fonction getData pour afficher les données au chargement de la page
        getData();
    </script>
</body>
</html>