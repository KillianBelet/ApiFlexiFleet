<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgencyProviderRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    normalizationContext: ['groups' => ['agency-provider:read']],
)]
#[ORM\Entity(repositoryClass: AgencyProviderRepository::class)]
class AgencyProvider
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups(["agency-provider:read"])]
    private $id;

    #[ORM\ManyToOne(targetEntity: Agency::class, inversedBy: "toAgencyProvider")]
    #[Groups(["agency-provider:read"])]
    private $agency;

    #[ORM\ManyToOne(targetEntity: Provider::class, inversedBy: "toAgencyProvider")]
    #[Groups(["agency-provider:read"])]
    private $provider;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAgency(): ?Agency
    {
        return $this->agency;
    }

    public function setAgency(?Agency $agency): self
    {
        $this->agency = $agency;

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
