<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
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
    private $work_experience;

    /**
     * @ORM\Column(type="date")
     */
    private $start_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $final_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="experience")
     */
    private $user;

    /**
     * Experience constructor.
     */


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkExperience(): ?string
    {
        return $this->work_experience;
    }

    public function setWorkExperience(string $work_experience): self
    {
        $this->work_experience = $work_experience;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getFinalDate(): ?\DateTimeInterface
    {
        return $this->final_date;
    }

    public function setFinalDate(?\DateTimeInterface $final_date): self
    {
        $this->final_date = $final_date;

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
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }


}
