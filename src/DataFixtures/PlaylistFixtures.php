<?php

namespace App\DataFixtures;

use App\Entity\Playlist;
use App\Entity\Track;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PlaylistFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var User $user */
        $user = $this->getReference(UserFixtures::USER_REFERENCE, User::class);

        $approvedTracks = [];
        for ($i = 0; $i < TrackFixtures::getTrackCount(); ++$i) {
            /** @var Track $track */
            $track = $this->getReference(TrackFixtures::TRACK_REFERENCE.$i, Track::class);
            if ($track->isApproved()) {
                $approvedTracks[] = $track;
            }
        }

        $playlist = new Playlist();
        $playlist->setName('Mes classiques')->setUser($user);
        foreach (array_slice($approvedTracks, 0, 4) as $track) {
            $playlist->addTrack($track);
        }
        $manager->persist($playlist);

        $playlist = new Playlist();
        $playlist->setName('Pour travailler')->setUser($user);
        foreach (array_slice($approvedTracks, 4, 3) as $track) {
            $playlist->addTrack($track);
        }
        $manager->persist($playlist);

        foreach (array_slice($approvedTracks, 0, 3) as $track) {
            $user->addLikedTrack($track);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class, TrackFixtures::class];
    }
}
