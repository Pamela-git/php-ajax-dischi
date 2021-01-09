<?php
header('Content-type: application/json');
  $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
        ]
    ];

    // creare una variabile per salvare il parametro get
    $autore = $_GET['autore'];
    // creare un array vuoto per i risultati filtrati
    $res = [];
    // ciclare sull'array di dati
    for ($x=0;$x<count($database);$x++) {
        //salvare l'elemento x esimo singolo
        $disco = $database[$x];
        // se il parametro get corrisponde al value della select o non è stato ancora selezionato nulla, allora salvare nell'array tutto il database
        if ($autore === "" || $autore == null) {
          $res = $database;
          // altrimenti se il parametro get corrisponde alla proprietà author dell'elemento x esimo estratto prima,  allora pushare nell'array solo quel risultato
        } elseif ($disco['author'] === $autore) {
          $res[] = $disco;
        }
    }
    // visualizzare l'array dei risultati
    echo json_encode($res);
?>
