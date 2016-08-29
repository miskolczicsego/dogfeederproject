<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Regex("/^[a-zA-ZőŐáÁÚúŰűÓóÜüÉé]{1}[^0-9<>{}$&@#;,.():_!%=+\|\^\\\/\[\]]+$/")
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Regex("/^[a-zA-ZőŐáÁÚúŰűÓóÜüÉé]{1}[^0-9<>{}$&@#;,.():_!%=+\|\^\\\/\[\]]+$/")
     */
    protected $lastname;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Regex("/^[a-zA-ZőŐáÁÚúŰűÓóÜüÉé]{1}[a-zA-Z0-9őŐáÁÚúŰűÓóÜüÉé \/\\\.-]+$/")
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=6)
     *
     */
    protected $genre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex("/^[a-zA-ZőŐáÁÚúŰűÓóÜüÉé]{1}[a-zA-Z0-9őŐáÁÚúŰűÓóÜüÉé \/\\\.-,;:]+$/")
     */
    protected $comment;

    /**
     * @ORM\Column(type="date")
     */
    protected $regdate;



    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @param $firstname
     * @return mixed
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $lastname
     * @return mixed
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $city
     * @return mixed
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $regdate
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;
    }

    /**
     *
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * @param $address
     * @return mixed
     */
    public function setAddress($address)
    {
        $this->address=$address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $genre
     * @return mixed
     */
    public function setGenre($genre)
    {
       $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param $comment
     * @return mixed
     */
    public function setComment($comment)
    {
       $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }
}