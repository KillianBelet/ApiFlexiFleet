<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    normalizationContext: ['groups' => ['user:read']],
)]
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups(["user:read", "agency:read", "agency-provider:read"])]
    private $id;

    #[ORM\Column(type: "string", length: "255", nullable: true)]
    #[Groups(["user:read", "agency:read", "agency-provider:read"])]
    private $username;

    #[ORM\Column(type: "string", length: "255", nullable: true)]
    private $password;

    #[ORM\Column(type: "text", nullable: true)]
    #[Groups(["user:read"])]
    private $token;

    #[ORM\Column(type: "string", length: "2")]
    #[Groups(["user:read"])]
    private $status;

    #[ORM\Column(type: 'json')]
    #[Groups(["user:read"])]
    private $roles = [];

    #[ORM\OneToMany(targetEntity: Agency::class, mappedBy: "admin")]
    public $toAgency;

    #[ORM\ManyToOne(targetEntity: Agency::class, inversedBy: "toUser")]
    #[Groups(["user:read"])]
    private $agency;



    public function __construct()
    {
        $this->toAgency = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return Collection<int, Agency>
     */
    public function getToAgency(): Collection
    {
        return $this->toAgency;
    }

    public function addToAgency(Agency $toAgency): self
    {
        if (!$this->toAgency->contains($toAgency)) {
            $this->toAgency->add($toAgency);
            $toAgency->setAdmin($this);
        }

        return $this;
    }

    public function removeToAgency(Agency $toAgency): self
    {
        if ($this->toAgency->removeElement($toAgency)) {
            // set the owning side to null (unless already changed)
            if ($toAgency->getAdmin() === $this) {
                $toAgency->setAdmin(null);
            }
        }

        return $this;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
