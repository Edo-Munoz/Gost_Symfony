<?php

namespace App\DataFixtures;

use App\Entity\Track;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class TrackFixtures extends Fixture implements DependentFixtureInterface
{
    public const TRACK_REFERENCE = 'track-';

    private const TRACKS = [
    ['Dire, Dire Docks', 'Super Mario 64', 'Koji Kondo', 'https://www.youtube.com/watch?v=Zqa2mgjbOIM'],
    ['Gerudo Valley', 'The Legend of Zelda: Ocarina of Time', 'Koji Kondo', 'https://www.youtube.com/watch?v=0hEYvdMoF2g'],
    ['To Zanarkand', 'Final Fantasy X', 'Nobuo Uematsu', 'https://www.youtube.com/watch?v=6fp81GzKarQ'],
    ["Aerith's Theme", 'Final Fantasy VII', 'Nobuo Uematsu', 'https://www.youtube.com/watch?v=iqMbmkUpihA'],
    ['Megalovania', 'Undertale', 'Toby Fox', 'https://www.youtube.com/watch?v=0FCvzsVlXpQ'],
    ['Green Hill Zone', 'Sonic the Hedgehog', 'Masato Nakamura', 'https://www.youtube.com/watch?v=G-i8HYi1QH0'],
    ['Corridors of Time', 'Chrono Trigger', 'Yasunori Mitsuda', 'https://www.youtube.com/watch?v=BH0E76oozIc'],
    ['Bloody Tears', "Castlevania II: Simon's Quest", 'Kenichi Matsubara', 'https://www.youtube.com/watch?v=u-sEcZ43aL8'],
    ['Dragonborn', 'The Elder Scrolls V: Skyrim', 'Jeremy Soule', 'https://www.youtube.com/watch?v=813-3iL5OsE'],
    ['Still Alive', 'Portal', 'Jonathan Coulton', 'https://www.youtube.com/watch?v=Y6ljFaKRTrI'],
    ['Sweden', 'Minecraft', 'C418', 'https://www.youtube.com/watch?v=l-8Ecrlq5fw'],
    ['Mystery Chiptune', 'Jeu inconnu', null, 'https://www.youtube.com/watch?v=sTrKiEE2gD4'],
    ];

    protected Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        foreach (self::TRACKS as $index => [$title, $game, $composer, $url]) {
            
            $status = (3 === $index % 4) ? Track::STATUS_PENDING : Track::STATUS_APPROVED;

            $track = new Track();
            $track->setTitle($title)
                ->setGameName($game)
                ->setComposer($composer)
                ->setYoutubeUrl($url)
                ->setStatus($status)
                ->setCreatedAt($this->faker->dateTimeBetween('-6 months', 'now'))
                ->setAddedBy($this->getReference(
                    UserFixtures::RANDOM_USER_REFERENCE.$this->faker->numberBetween(0, UserFixtures::RANDOM_USER_COUNT - 1),
                    User::class
                ))
            ;

            $manager->persist($track);
            $this->addReference(self::TRACK_REFERENCE.$index, $track);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }

    public static function getTrackCount(): int
    {
        return count(self::TRACKS);
    }
}
