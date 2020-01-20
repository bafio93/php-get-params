<?php
// Recupero la parola censurata da GET:
$bad = $_GET['bad'];
echo "<p>La parola censurata è: <em>".$bad."</em>...</p>";
// Genero il testo:
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
// Genero un array che contiene le parole dentro il testo:
$text_array = explode(" ",$text);
// Trova la posizione della parola:
$pos_bad = array_search($bad,$text_array);
// PROBLEMA DEL CODICE: SE LA PAROLA CENSURATA NON VIENE DEFINITA BENE, VIENE CENSURATA LA PRIMA...
// Inseriamo di conseguenza un if:
if (($pos_bad != 0) or ($bad == $text_array[0])) {
    // Sostituisco alla parola censurata una stringa:
    $text_array[$pos_bad] = "***";
    // Ricompongo l'array testo:
    $text = implode(" ",$text_array);
    echo $text;
} else  {
    echo "<p>Hai inserito una parola da censurare <strong>non valida</strong>!<br>(Controlla di avere messo le virgole e tutto il resto...)</p>";
    echo $text;
}

 ?>
