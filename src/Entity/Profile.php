<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfileRepository::class)
 */
class Profile
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
    private $professional_profile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skill;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="profile")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfessionalProfile(): ?string
    {
        return $this->professional_profile;
    }

    public function setProfessionalProfile(string $professional_profile): self
    {
        $this->professional_profile = $professional_profile;

        return $this;
    }

    public function getSkill(): ?string
    {
        return $this->skill;
    }

    public function setSkill(string $skill): self
    {
        $this->skill = $skill;

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
     * @return Profile
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}
