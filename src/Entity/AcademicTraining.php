<?php

namespace App\Entity;

use App\Repository\AcademicTrainingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AcademicTrainingRepository::class)
 */
class AcademicTraining
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
    private $degree;

    /**
     * @ORM\Column(type="date")
     */
    private $start_date;

    /**
     * @ORM\Column(type="date")
     */
    private $final_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $study_place;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="academic")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

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

    public function setFinalDate(\DateTimeInterface $final_date): self
    {
        $this->final_date = $final_date;

        return $this;
    }

    public function getStudyPlace(): ?string
    {
        return $this->study_place;
    }

    public function setStudyPlace(string $study_place): self
    {
        $this->study_place = $study_place;

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
     * @return AcademicTraining
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}
