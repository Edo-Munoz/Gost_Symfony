<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'Un compte existe déjà avec cet email.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotBlank(message: "L'email ne peut pas être vide.")]
    #[Assert\Email(message: "Cet email n'est pas valide.")]
    #[Assert\Length(max: 180, maxMessage: "L'email doit faire au plus 180 caractères.")]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom d'utilisateur ne peut pas être vide.")]
    #[Assert\Length(min: 3, max: 50, minMessage: "Le nom d'utilisateur doit faire au minimum 3 caractères.", maxMessage: "Le nom d'utilisateur doit faire au plus 50 caractères.")]
    private ?string $username = null;

    #[ORM\Column(options: ['default' => false])]
    private bool $isBanned = false;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    /**
     * @var Collection<int, Track>
     */
    #[ORM\OneToMany(targetEntity: Track::class, mappedBy: 'addedBy')]
    private Collection $addedTracks;

    /**
     * @var Collection<int, Playlist>
     */
    #[ORM\OneToMany(targetEntity: Playlist::class, mappedBy: 'user')]
    private Collection $playlists;

    /**
     * Table pivot User_Liked_Tracks
     *
     * @var Collection<int, Track>
     */
    #[ORM\ManyToMany(targetEntity: Track::class, inversedBy: 'likedByUsers')]
    #[ORM\JoinTable(name: 'user_liked_tracks')]
    private Collection $likedTracks;

    public function __construct()
    {
        $this->addedTracks = new ArrayCollection();
        $this->playlists = new ArrayCollection();
        $this->likedTracks = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_values(array_unique($roles));
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function __serialize(): array
    {
        $data = (array) $this;
        $data["\0" . self::class . "\0password"] = hash('crc32c', $this->password);

        return $data;
    }

    #[\Deprecated]
    public function eraseCredentials(): void
    {
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function isBanned(): bool
    {
        return $this->isBanned;
    }

    public function setIsBanned(bool $isBanned): static
    {
        $this->isBanned = $isBanned;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, Track>
     */
    public function getAddedTracks(): Collection
    {
        return $this->addedTracks;
    }

    public function addAddedTrack(Track $addedTrack): static
    {
        if (!$this->addedTracks->contains($addedTrack)) {
            $this->addedTracks->add($addedTrack);
            $addedTrack->setAddedBy($this);
        }

        return $this;
    }

    public function removeAddedTrack(Track $addedTrack): static
    {
        if ($this->addedTracks->removeElement($addedTrack)) {

            if ($addedTrack->getAddedBy() === $this) {
                $addedTrack->setAddedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Playlist>
     */
    public function getPlaylists(): Collection
    {
        return $this->playlists;
    }

    public function addPlaylist(Playlist $playlist): static
    {
        if (!$this->playlists->contains($playlist)) {
            $this->playlists->add($playlist);
            $playlist->setUser($this);
        }

        return $this;
    }

    public function removePlaylist(Playlist $playlist): static
    {
        if ($this->playlists->removeElement($playlist)) {
            
            if ($playlist->getUser() === $this) {
                $playlist->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Track>
     */
    public function getLikedTracks(): Collection
    {
        return $this->likedTracks;
    }

    public function addLikedTrack(Track $likedTrack): static
    {
        if (!$this->likedTracks->contains($likedTrack)) {
            $this->likedTracks->add($likedTrack);
        }

        return $this;
    }

    public function removeLikedTrack(Track $likedTrack): static
    {
        $this->likedTracks->removeElement($likedTrack);

        return $this;
    }
}
