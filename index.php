
<?php

    include __DIR__. '/movie.php';

    $movie1 = new Movie ('The Truman Show','Drammatico/Sci-fi',103
    ,1998);

    echo '<div>';
    echo '<h2>'.$movie1 -> name.'</h2>';
    echo '<h3>'.$movie1 -> genre.'</h3>';
    echo '<h4>'.'Durata '.$movie1 -> duration.' m'.'</h4>';
    echo '<h4>'.'Anno '.$movie1 -> year.'</h4>';
    echo '</div>';

    echo '<h3>'.$movie1 -> inDuration().'</h3>';

    /* var_dump($movie1); */

    $movie2 = new Movie ('Le ali della libertà','Drammatico/Giallo',142
    ,1994);

    echo '<div>';
    echo '<h2>'.$movie2 -> name.'</h2>';
    echo '<h3>'.$movie2 -> genre.'</h3>';
    echo '<h4>'.'Durata '.$movie2 -> duration.' m'.'</h4>';
    echo '<h4>'.'Anno '.$movie2 -> year.'</h4>';
    echo '</div>';

    echo '<h3>'.$movie2 -> inDuration().'</h3>';

    /* var_dump($movie2); */

    $movie3 = new Movie ('Interstellar','Sci-fi/Avventura',209
    ,2014);

    echo '<div>';
    echo '<h2>'.$movie3 -> name.'</h2>';
    echo '<h3>'.$movie3 -> genre.'</h3>';
    echo '<h4>'.'Durata '.$movie3 -> duration.' m'.'</h4>';
    echo '<h4>'.'Anno '.$movie3 -> year.'</h4>';
    echo '</div>';

    echo '<h3>'.$movie3 -> inDuration().'</h3>';

    /* var_dump($movie3); */

?>