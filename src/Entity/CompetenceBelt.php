<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetenceBeltRepository")
 */
class CompetenceBelt
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
    private $color;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SubDomain", mappedBy="belt", orphanRemoval=true)
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

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
            $subDomain->setBelt($this);
        }

        return $this;
    }

    public function removeSubDomain(SubDomain $subDomain): self
    {
        if ($this->subDomains->contains($subDomain)) {
            $this->subDomains->removeElement($subDomain);
            // set the owning side to null (unless already changed)
            if ($subDomain->getBelt() === $this) {
                $subDomain->setBelt(null);
            }
        }

        return $this;
    }
}
