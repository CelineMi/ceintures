<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DomainRepository")
 */
class Domain
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
     * @ORM\OneToMany(targetEntity="App\Entity\SubDomain", mappedBy="domain", orphanRemoval=true)
     */
    private $subDomains;

    public function __construct()
    {
        $this->subDomains = new ArrayCollection();
    }

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

    /**
     * @return Collection|SubDomain[]
     */
    public function getSubDomains(): Collection
    {
        return $this->subDomains;
    }

    public function addSubDomain(SubDomain $subDomain): self
    {
        if (!$this->subDomains->contains($subDomain)) {
            $this->subDomains[] = $subDomain;
            $subDomain->setDomain($this);
        }

        return $this;
    }

    public function removeSubDomain(SubDomain $subDomain): self
    {
        if ($this->subDomains->contains($subDomain)) {
            $this->subDomains->removeElement($subDomain);
            // set the owning side to null (unless already changed)
            if ($subDomain->getDomain() === $this) {
                $subDomain->setDomain(null);
            }
        }

        return $this;
    }
}
