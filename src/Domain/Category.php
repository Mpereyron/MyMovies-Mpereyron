<?php

namespace MyMovies\Domain;

class Category 
{
    /**
     * Identifiant.
     *
     * @var integer
     */
    private $id;

   
    private $name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $name->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}