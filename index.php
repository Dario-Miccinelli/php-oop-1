<?php

include_once __DIR__ . './classi/movie.php';



$movie0 = new Movie('Her', 2013, 'Fantascienza / Romantico', 'https://m.media-amazon.com/images/M/MV5BMjA1Nzk0OTM2OF5BMl5BanBnXkFtZTgwNjU2NjEwMDE@._V1_FMjpg_UX1000_.jpg');
var_dump($movie0);

$movie1 = new Movie('Interstellar', 2014, 'Fantascienza', 'https://m.media-amazon.com/images/I/A1JVqNMI7UL._SL1500_.jpg');
var_dump($movie1);

$movie2 = new Movie('Lost in space', 2018, 'Fantascienza', 'https://resizing.flixster.com/GR9Ng2YYzyWn945sfqQrDO4Xgz8=/ems.cHJkLWVtcy1hc3NldHMvdHZzZXJpZXMvUlRUVjI4MDUwNy53ZWJw');
var_dump($movie2);


?>