<?php

namespace MyMovies\Domain;

class Movie 
{
    /**
     * Article id.
     *
     * @var integer
     */
    private $id;

    /**
     * Article title.
     *
     * @var string
     */
    private $title;

    /**
     * Article content.
     *
     * @var string
     */
    private $descriptionCourt;
    private $descriptionLong;
    private $director;
    private $year;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescriptionCourt() {
        return $this->descriptionCourt;
    }

    public function setDescriptionCourt($descriptionCourt) {
        $this->descriptionCourt = $descriptionCourt;
    }
    
    public function getDescriptionLong() {
        return $this->descriptionLong;
    }

    public function setDescriptionLong($descriptionLong) {
        $this->descriptionLong = $descriptionLong;
    }
    
    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }
    
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }
}