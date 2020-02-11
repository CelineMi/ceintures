<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Competence", mappedBy="userId")
     */
    private $competences;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Behavior", mappedBy="userId", orphanRemoval=true)
     */
    private $behaviors;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->behaviors = new ArrayCollection();
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection|Competence[]
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(Competence $competence): self
    {
        if (!$this->competences->contains($competence)) {
            $this->competences[] = $competence;
            $competence->setUserId($this);
        }

        return $this;
    }

    public function removeCompetence(Competence $competence): self
    {
        if ($this->competences->contains($competence)) {
            $this->competences->removeElement($competence);
            // set the owning side to null (unless already changed)
            if ($competence->getUserId() === $this) {
                $competence->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Behavior[]
     */
    public function getBehaviors(): Collection
    {
        return $this->behaviors;
    }

    public function addBehavior(Behavior $behavior): self
    {
        if (!$this->behaviors->contains($behavior)) {
            $this->behaviors[] = $behavior;
            $behavior->setUserId($this);
        }

        return $this;
    }

    public function removeBehavior(Behavior $behavior): self
    {
        if ($this->behaviors->contains($behavior)) {
            $this->behaviors->removeElement($behavior);
            // set the owning side to null (unless already changed)
            if ($behavior->getUserId() === $this) {
                $behavior->setUserId(null);
            }
        }

        return $this;
    }
}
