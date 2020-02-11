<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetenceRepository")
 */
class Competence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="competences")
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Domain")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domainId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CompetenceBelt")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competenceBeltId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Status")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statusId;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDomainId(): ?Domain
    {
        return $this->domainId;
    }

    public function setDomainId(?Domain $domainId): self
    {
        $this->domainId = $domainId;

        return $this;
    }

    public function getCompetenceBeltId(): ?CompetenceBelt
    {
        return $this->competenceBeltId;
    }

    public function setCompetenceBeltId(?CompetenceBelt $competenceBeltId): self
    {
        $this->competenceBeltId = $competenceBeltId;

        return $this;
    }

    public function getStatusId(): ?Status
    {
        return $this->statusId;
    }

    public function setStatusId(?Status $statusId): self
    {
        $this->statusId = $statusId;

        return $this;
    }
}
