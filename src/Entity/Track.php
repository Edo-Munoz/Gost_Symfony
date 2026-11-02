<?php

namespace App\Entity;

use App\Repository\TrackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TrackRepository::class)]
class Track
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_APPROVED = 'approved';

    public const YOUTUBE_REGEX = '~^https?://(www\.|m\.)?(youtube\.com/(watch\?(.*&)?v=|embed/|shorts/)|youtu\.be/)[A-Za-z0-9_-]{11}~';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre ne peut pas être vide.')]
    #[Assert\Length(max: 255, maxMessage: 'Le titre doit faire au plus 255 caractères.')]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom du jeu ne peut pas être vide.')]
    #[Assert\Length(max: 255, maxMessage: 'Le nom du jeu doit faire au plus 255 caractères.')]
    private ?string $gameName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: 'Le nom du compositeur doit faire au plus 255 caractères.')]
    private ?string $composer = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le lien YouTube ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: 'Le lien doit faire au plus 255 caractères.')]
    #[Assert\Regex(pattern: self::YOUTUBE_REGEX, message: "Ce lien n'est pas un lien YouTube valide (ex : https://www.youtube.com/watch?v=XXXXXXXXXXX).")]
    private ?string $youtubeUrl = null;

    #[ORM\Column(length: 255, options: ['default' => 'pending'])]
    private ?string $status = self::STATUS_PENDING;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'addedTracks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $addedBy = null;

    /**
     * @var Collection<int, Playlist>
     */
    #[ORM\ManyToMany(targetEntity: Playlist::class, mappedBy: 'tracks')]
    private Collection $playlists;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'likedTracks')]
    private Collection $likedByUsers;

    public function __construct()
    {
        $this->playlists = new ArrayCollection();
        $this->likedByUsers = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getGameName(): ?string
    {
        return $this->gameName;
    }

    public function setGameName(string $gameName): static
    {
        $this->gameName = $gameName;

        return $this;
    }

    public function getComposer(): ?string
    {
        return $this->composer;
    }

    public function setComposer(?string $composer): static
    {
        $this->composer = $composer;

        return $this;
    }

    public function getYoutubeUrl(): ?string
    {
        return $this->youtubeUrl;
    }

    public function setYoutubeUrl(string $youtubeUrl): static
    {
        $this->youtubeUrl = $youtubeUrl;

        return $this;
    }

    public function getYoutubeId(): ?string
    {
        if (preg_match('~(?:youtube\.com/(?:watch\?(?:.*&)?v=|embed/|shorts/)|youtu\.be/)([A-Za-z0-9_-]{11})~', (string) $this->youtubeUrl, $matches)) {
            return $matches[1];
        }

        return null;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function isApproved(): bool
    {
        return self::STATUS_APPROVED === $this->status;
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

    public function getAddedBy(): ?User
    {
        return $this->addedBy;
    }

    public function setAddedBy(?User $addedBy): static
    {
        $this->addedBy = $addedBy;

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
            $playlist->addTrack($this);
        }

        return $this;
    }

    public function removePlaylist(Playlist $playlist): static
    {
        if ($this->playlists->removeElement($playlist)) {
            $playlist->removeTrack($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getLikedByUsers(): Collection
    {
        return $this->likedByUsers;
    }

    public function addLikedByUser(User $likedByUser): static
    {
        if (!$this->likedByUsers->contains($likedByUser)) {
            $this->likedByUsers->add($likedByUser);
            $likedByUser->addLikedTrack($this);
        }

        return $this;
    }

    public function removeLikedByUser(User $likedByUser): static
    {
        if ($this->likedByUsers->removeElement($likedByUser)) {
            $likedByUser->removeLikedTrack($this);
        }

        return $this;
    }
}
