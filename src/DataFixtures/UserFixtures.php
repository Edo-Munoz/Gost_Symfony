<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * Utilisateurs de test. Mot de passe de TOUS les comptes : "password".
 */
class UserFixtures extends Fixture
{
    public const ADMIN_REFERENCE = 'user-admin';
    public const MODERATOR_REFERENCE = 'user-moderator';
    public const USER_REFERENCE = 'user-simple';
    public const RANDOM_USER_REFERENCE = 'user-random-';
    public const RANDOM_USER_COUNT = 10;

    protected Generator $faker;

    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        $this->createUser($manager, 'admin@gost.test', 'Admin', ['ROLE_ADMIN'], false, self::ADMIN_REFERENCE);
        $this->createUser($manager, 'moderator@gost.test', 'Moderateur', ['ROLE_MODERATOR'], false, self::MODERATOR_REFERENCE);
        $this->createUser($manager, 'user@gost.test', 'Joueur', ['ROLE_USER'], false, self::USER_REFERENCE);
        $this->createUser($manager, 'banned@gost.test', 'Banni', ['ROLE_USER'], true, 'user-banned');

        for ($i = 0; $i < self::RANDOM_USER_COUNT; ++$i) {
            $this->createUser(
                $manager,
                $this->faker->unique()->safeEmail(),
                $this->faker->unique()->userName(),
                ['ROLE_USER'],
                false,
                self::RANDOM_USER_REFERENCE.$i
            );
        }

        $manager->flush();
    }

    private function createUser(ObjectManager $manager, string $email, string $username, array $roles, bool $banned, string $reference): void
    {
        $user = new User();
        $user->setEmail($email)
            ->setUsername($username)
            ->setRoles($roles)
            ->setIsBanned($banned)
            ->setCreatedAt($this->faker->dateTimeBetween('-1 year', 'now'))
        ;
        $user->setPassword($this->passwordHasher->hashPassword($user, 'password'));

        $manager->persist($user);
        $this->addReference($reference, $user);
    }
}
