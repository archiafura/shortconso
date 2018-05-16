<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 16/05/2018
 * Time: 14:16
 */

namespace App\Entity;


class Professionnels
{
protected $name;
protected $catégorie;
protected $siret;


    /**
     * @return mixed
     */
    public function getname()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCatégorie()
    {
        return $this->catégorie;
    }

    /**
     * @param mixed $catégorie
     */
    public function setCatégorie($catégorie): void
    {
        $this->catégorie = $catégorie;
    }

    /**
     * @return mixed
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @param mixed $siret
     */
    public function setSiret($siret): void
    {
        $this->siret = $siret;
    }

}