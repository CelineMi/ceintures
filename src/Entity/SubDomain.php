<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubDomainRepository")
 */
class SubDomain
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Domain", inversedBy="subDomains")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domain;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CompetenceBelt", inversedBy="subDomains")
     * @ORM\JoinColumn(nullable=false)
     */
    private $belt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDomain(): ?Domain
    {
        return $this->domain;
    }

    public function setDomain(?Domain $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getBelt(): ?CompetenceBelt
    {
        return $this->belt;
    }

    public function setBelt(?CompetenceBelt $belt): self
    {
        $this->belt = $belt;

        return $this;
    }
}
