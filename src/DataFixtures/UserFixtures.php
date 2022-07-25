<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->encoder = $userPasswordHasherInterface; 
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom('Diandy');
        $user->setPrenom('Thierry');
        $user->setEmail('tdiandy@hotmail.com');
        $user->setPassword($this->encoder->hashPassword($user, "pass"));
        $manager->persist($user);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
    public static function getGroups(): array{
        return ['group1'];
    }
}
