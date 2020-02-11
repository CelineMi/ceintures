<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BehaviorRepository")
 */
class Behavior
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
    private $greenCross;

    /**
     * @ORM\Column(type="integer")
     */
    private $blackCross;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="behaviors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Week")
     * @ORM\JoinColumn(nullable=false)
     */
    private $weekId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\BehaviorBelt")
     * @ORM\JoinColumn(nullable=false)
     */
    private $behaviorBeltId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Diplome")
     * @ORM\JoinColumn(nullable=false)
     */
    private $diplomeId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGreenCross(): ?int
    {
        return $this->greenCross;
    }

    public function setGreenCross(int $greenCross): self
    {
        $this->greenCross = $greenCross;

        return $this;
    }

    public function getBlackCross(): ?int
    {
        return $this->blackCross;
    }

    public function setBlackCross(int $blackCross): self
    {
        $this->blackCross = $blackCross;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getWeekId(): ?Week
    {
        return $this->weekId;
    }

    public function setWeekId(?Week $weekId): self
    {
        $this->weekId = $weekId;

        return $this;
    }

    public function getBehaviorBeltId(): ?BehaviorBelt
    {
        return $this->behaviorBeltId;
    }

    public function setBehaviorBeltId(?BehaviorBelt $behaviorBeltId): self
    {
        $this->behaviorBeltId = $behaviorBeltId;

        return $this;
    }

    public function getDiplomeId(): ?Diplome
    {
        return $this->diplomeId;
    }

    public function setDiplomeId(?Diplome $diplomeId): self
    {
        $this->diplomeId = $diplomeId;

        return $this;
    }
}
