<?php


    class Movie
    {
        public $title;
        public $urlImg;
        public $year;   
        public $genre;

        //Funzione contruct (riempimento dinamico)
        function __construct($_title, $_year, $_genre, $_urlImg)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->urlImg = $_urlImg;
        }
    }

?>