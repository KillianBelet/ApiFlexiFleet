<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgencyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    normalizationContext: ['groups' => ['agency:read']],
)]
#[ORM\Entity(repositoryClass: AgencyRepository::class)]
class Agency
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups(["agency:read", "agency-provider:read", "user:read"])]
    private $id;

    #[ORM\Column(type: "text", nullable: true)]
    #[Groups(["agency:read", "agency-provider:read", "user:read"])]
    private $location;

    #[ORM\Column(type: "text", nullable: true)]
    #[Groups(["agency:read", "agency-provider:read", "user:read"])]
    private $name;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "toAgency")]
    #[Groups(["agency:read", "agency-provider:read"])]
    private $admin;

    #[ORM\OneToMany(targetEntity: User::class, mappedBy: "agency")]
    public $toUser;

    #[ORM\OneToMany(targetEntity: AgencyProvider::class, mappedBy: "agency")]
    public $toAgencyProvider;

    public function __construct()
    {
        $this->toUser = new ArrayCollection();
        $this->toAgencyProvider = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAdmin(): ?User
    {
        return $this->admin;
    }

    public function setAdmin(?User $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getToUser(): Collection
    {
        return $this->toUser;
    }

    public function addToUser(User $toUser): self
    {
        if (!$this->toUser->contains($toUser)) {
            $this->toUser->add($toUser);
            $toUser->setAgency($this);
        }

        return $this;
    }

    public function removeToUser(User $toUser): self
    {
        if ($this->toUser->removeElement($toUser)) {
            // set the owning side to null (unless already changed)
            if ($toUser->getAgency() === $this) {
                $toUser->setAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AgencyProvider>
     */
    public function getToAgencyProvider(): Collection
    {
        return $this->toAgencyProvider;
    }

    public function addToAgencyProvider(AgencyProvider $toAgencyProvider): self
    {
        if (!$this->toAgencyProvider->contains($toAgencyProvider)) {
            $this->toAgencyProvider->add($toAgencyProvider);
            $toAgencyProvider->setAgency($this);
        }

        return $this;
    }

    public function removeToAgencyProvider(AgencyProvider $toAgencyProvider): self
    {
        if ($this->toAgencyProvider->removeElement($toAgencyProvider)) {
            // set the owning side to null (unless already changed)
            if ($toAgencyProvider->getAgency() === $this) {
                $toAgencyProvider->setAgency(null);
            }
        }

        return $this;
    }

}
