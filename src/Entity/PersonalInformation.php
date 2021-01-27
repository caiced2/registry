<?php

namespace App\Entity;

use App\Repository\PersonalInformationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonalInformationRepository::class)
 */
class PersonalInformation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $second_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $second_surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birth_place;

    /**
     * @ORM\Column(type="date")
     */
    private $birth_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $identification_card;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city_residence;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="personal")
     */
    private $user;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getSecondName(): ?string
    {
        return $this->second_name;
    }

    public function setSecondName(?string $second_name): self
    {
        $this->second_name = $second_name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSecondSurname(): ?string
    {
        return $this->second_surname;
    }

    public function setSecondSurname(?string $second_surname): self
    {
        $this->second_surname = $second_surname;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birth_place;
    }

    public function setBirthPlace(string $birth_place): self
    {
        $this->birth_place = $birth_place;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getIdentificationCard(): ?int
    {
        return $this->identification_card;
    }

    public function setIdentificationCard(int $identification_card): self
    {
        $this->identification_card = $identification_card;

        return $this;
    }

    public function getDirection1(): ?string
    {
        return $this->direction1;
    }

    public function setDirection1(string $direction1): self
    {
        $this->direction1 = $direction1;

        return $this;
    }

    public function getDirection2(): ?string
    {
        return $this->direction2;
    }

    public function setDirection2(?string $direction2): self
    {
        $this->direction2 = $direction2;

        return $this;
    }

    public function getTelephone1(): ?int
    {
        return $this->telephone1;
    }

    public function setTelephone1(int $telephone1): self
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    public function getTelephone2(): ?int
    {
        return $this->telephone2;
    }

    public function setTelephone2(?int $telephone2): self
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCityResidence(): ?string
    {
        return $this->city_residence;
    }

    public function setCityResidence(string $city_residence): self
    {
        $this->city_residence = $city_residence;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return PersonalInformation
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}
