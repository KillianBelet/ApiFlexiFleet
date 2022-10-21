<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProviderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    normalizationContext: ['groups' => ['provider:read']],
)]
#[ORM\Entity(repositoryClass: ProviderRepository::class)]
class Provider
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups(["provider:read", "agency-provider:read", "vehicle:read"])]
    private $id;

    #[ORM\Column(type: "string", length: "255", nullable: true)]
    #[Groups(["provider:read", "agency-provider:read", "vehicle:read"])]
    private $name;

    #[ORM\OneToMany(targetEntity: AgencyProvider::class, mappedBy: "provider")]
    public $toAgencyProvider;

    #[ORM\OneToMany(targetEntity: Vehicle::class, mappedBy: "provider")]
    public $toVehicle;

    public function __construct()
    {
        $this->toAgencyProvider = new ArrayCollection();
        $this->toVehicle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $toAgencyProvider->setProvider($this);
        }

        return $this;
    }

    public function removeToAgencyProvider(AgencyProvider $toAgencyProvider): self
    {
        if ($this->toAgencyProvider->removeElement($toAgencyProvider)) {
            // set the owning side to null (unless already changed)
            if ($toAgencyProvider->getProvider() === $this) {
                $toAgencyProvider->setProvider(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vehicle>
     */
    public function getToVehicle(): Collection
    {
        return $this->toVehicle;
    }

    public function addToVehicle(Vehicle $toVehicle): self
    {
        if (!$this->toVehicle->contains($toVehicle)) {
            $this->toVehicle->add($toVehicle);
            $toVehicle->setProvider($this);
        }

        return $this;
    }

    public function removeToVehicle(Vehicle $toVehicle): self
    {
        if ($this->toVehicle->removeElement($toVehicle)) {
            // set the owning side to null (unless already changed)
            if ($toVehicle->getProvider() === $this) {
                $toVehicle->setProvider(null);
            }
        }

        return $this;
    }
}
