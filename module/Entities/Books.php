<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="books", uniqueConstraints={@ORM\UniqueConstraint(name="title", columns={"title"})})})
 * @ORM\Entity
 */
class Books
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var int|null
     *
     * @ORM\Column(name="isActive", type="integer", nullable=true)
     */
    private $isactive = 'yes';

    /**
     * @return int
     */
    function getId(){
        return $this->id;
    }

    /**
     * @return string|null
     */
    function getTitle(){
        return $this->title;
    }

    /**
     * @return string|null
     */
    function getDescription(){
        return $this->description;
    }

    /**
     * @return float|null
     */
    function getPrice(){
        return $this->price;
    }

    /**
     * @return int|string|null
     */
    function  getIsActive(){
        return $this->isactive;
    }

    /**
     * @param $title
     * @return $this
     */
    function setTitle($title){
        $this->title=$title;
        return $this;
    }

    /**
     * @param $description
     * @return $this
     */
    function setDescription($description){
        $this->description=$description;
        return $this;
    }

    /**
     * @param $price
     * @return mixed
     */
    function setPrice($price){
        return $this->price=$price;
    }

    /**
     * @param $isActive
     * @return $this
     */
    function  setIsActive($isActive){
        $this->isactive=$isActive;
        return $this;
    }
}
