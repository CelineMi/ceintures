<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeekRepository")
 */
class Week
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @return mixed
     */
    public function getWeekStart()
    {
        return $this->weekStart;
    }

    /**
     * @param mixed $weekStart
     */
    public function setWeekStart($weekStart): void
    {
        $this->weekStart = $weekStart;
    }

    /**
     * @ORM\Column(type="datetime")
     */
    private $weekStart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $weekEnd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
