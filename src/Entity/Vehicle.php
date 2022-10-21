<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VehicleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    normalizationContext: ['groups' => ['vehicle:read']],
)]
#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups(["vehicle:read"])]
    private $id;

    #[ORM\Column(type: "text", nullable: true)]
    #[Groups(["vehicle:read"])]
    private $name;

    #[ORM\Column(type: "string", length: "1", nullable: true)]
    #[Groups(["vehicle:read"])]
    private $available;

    #[ORM\ManyToOne(targetEntity: Provider::class, inversedBy: "toVehicle")]
    #[Groups(["vehicle:read"])]
    private $provider;

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

    public function getAvailable(): ?string
    {
        return $this->available;
    }

    public function setAvailable(?string $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getProvider(): ?Provider
    {
        return $this->provider;
    }

    public function setProvider(?Provider $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

}
