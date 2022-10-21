<?php

namespace App\DataFixtures;

use App\Entity\Agency;
use App\Entity\AgencyProvider;
use App\Entity\Provider;
use App\Entity\User;
use App\Entity\Vehicle;
use App\Repository\AgencyRepository;
use App\Repository\ProviderRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private const ROLE_ADMINISTRATOR = ["ROLE_ADMINISTRATOR"];
    private const ROLE_RH = ["ROLE_RH"];
    private const ROLE_CHIEF_AGENCY = ["ROLE_CHIEF_AGENCY"];
    private const ROLE_ADMINISTRATOR_AGENCY = ["ROLE_ADMINISTRATOR_AGENCY"];
    private const ROLE_ADMINISTRATOR_PROVIDER = ["ROLE_ADMINISTRATOR_PROVIDER"];
    private const ROLE_ADMINISTRATOR_COMMAND = ["ROLE_ADMINISTRATOR_COMMAND"];

    public function __construct(private AgencyRepository $agencyRepository, private ProviderRepository $providerRepository)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // 1 user + 1 agence
        $user = new User();
        $user->setUsername('jeremy.dufroy@flexifleet.fr');
        // mdp => jeremy123
        $user->setPassword('$2y$13$xDMlZf8DjqaPehI2lx2aHe64pb1WTJnaHvpPWACVYkGP75IWhaJwW');
        $user->setRoles(self::ROLE_ADMINISTRATOR);
        $user->setStatus("ok");
        $agency = new Agency();
        $agency->setLocation("Compiegne");
        $agency->setName("Compiegne Agency");

        $user->setAgency($agency);
        $agency->setAdmin($user);

        $manager->persist($user);
        $manager->persist($agency);
        $manager->flush();




        // 1 user + 1 agence
        $user = new User();
        $user->setUsername('killian.belet@flexifleet.fr');
        // mdp => killian123
        $user->setPassword('$2y$13$kOjSpilqd4f.kYvOkOWDi.sSUqssPjqZefEiR9QbEnppO4b7CQemO');
        $user->setRoles(self::ROLE_RH);
        $user->setStatus("ok");
        $agency = new Agency();
        $agency->setLocation("Beauvais");
        $agency->setName("Beauvais Agency");

        $user->setAgency($agency);
        $agency->setAdmin($user);

        $manager->persist($user);
        $manager->persist($agency);
        $manager->flush();




        // 1 user
        $user = new User();
        $user->setUsername('kylianne.aland@flexifleet.fr');
        $user->setStatus("ok");
        // mdp => kylianne123
        $user->setPassword('$2y$13$C9TPl1ksQ75K28hy37Ud3uq.hFeaRC0j1W4mdlFmhsW1uzBcUJugS');
        $user->setRoles(self::ROLE_CHIEF_AGENCY);
        $agency = $this->agencyRepository->findOneBy(array('location' => 'Compiegne'));
        $user->setAgency($agency);
        $manager->persist($user);
        $manager->flush();





        // 1 user
        $user = new User();
        $user->setUsername('alexis.rossignol@flexifleet.fr');
        $user->setStatus("ok");
        // mdp => alexis123
        $user->setPassword('$2y$13$tOqyAlaNH1hRwIvnH3zjNeBBo57l8cbYRMPQRToOUqBBXpnEr3SDS');
        $user->setRoles(self::ROLE_ADMINISTRATOR_AGENCY);
        $agency = $this->agencyRepository->findOneBy(array('location' => 'Compiegne'));
        $user->setAgency($agency);
        $manager->persist($user);
        $manager->flush();




        // 1 user
        $user = new User();
        $user->setUsername('jean.paul@flexifleet.fr');
        $user->setStatus("ok");
        // mdp => jean123
        $user->setPassword('$2y$13$HCuRRydB1/VxLmPpBB9raOv8oWOoZwiqHIZ4vQLVTbJMueXaF/CTS');
        $user->setRoles(self::ROLE_ADMINISTRATOR_PROVIDER);
        $agency = $this->agencyRepository->findOneBy(array('location' => 'Beauvais'));
        $user->setAgency($agency);
        $manager->persist($user);
        $manager->flush();




        // 1 user
        $user = new User();
        $user->setUsername('pierre.dupont@flexifleet.fr');
        $user->setStatus("ok");
        // mdp => pierre123
        $user->setPassword('$2y$13$FBr9C9kG.nHp6o0BLMp6KuuNXiVWA47B8os8UGDIZIquBRVyC.umW');
        $user->setRoles(self::ROLE_ADMINISTRATOR_COMMAND);
        $agency = $this->agencyRepository->findOneBy(array('location' => 'Beauvais'));
        $user->setAgency($agency);
        $manager->persist($user);
        $manager->flush();




        // 1 provider
        $provider = new Provider();
        $provider->setName('BMW Motorsport');
        $manager->persist($provider);
        $manager->flush();

        // 1 provider
        $provider = new Provider();
        $provider->setName('Audi');
        $manager->persist($provider);
        $manager->flush();



        // 1 Agency Provider
        $agencyProvider = new AgencyProvider();
        $agency = $this->agencyRepository->findOneBy(array('location' => 'Compiegne'));
        $agencyProvider->setAgency($agency);
        $providerId = $this->providerRepository->findOneBy(array('name' => 'BMW Motorsport'));
        $agencyProvider->setProvider($providerId);
        $manager->persist($agencyProvider);
        $manager->flush();

        // 1 Agency Provider
        $agencyProvider = new AgencyProvider();
        $agency = $this->agencyRepository->findOneBy(array('location' => 'Beauvais'));
        $agencyProvider->setAgency($agency);
        $providerId = $this->providerRepository->findOneBy(array('name' => 'Audi'));
        $agencyProvider->setProvider($providerId);
        $manager->persist($agencyProvider);
        $manager->flush();


        $bmw = $this->providerRepository->findOneBy(array('name' => 'BMW Motorsport'));
        $audi = $this->providerRepository->findOneBy(array('name' => 'Audi'));
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('BMW M1');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($bmw);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('BMW M2');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($bmw);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('BMW M3');
        $vehicle->setAvailable('N');
        $vehicle->setProvider($bmw);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('BMW M4');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($bmw);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('BMW M5');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($bmw);
        $manager->persist($vehicle);
        $manager->flush();


        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('A1');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($audi);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('A2');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($audi);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('A3');
        $vehicle->setAvailable('N');
        $vehicle->setProvider($audi);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('A4');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($audi);
        $manager->persist($vehicle);
        $manager->flush();
        // 1 Vehicule
        $vehicle = new Vehicle();
        $vehicle->setName('A5');
        $vehicle->setAvailable('Y');
        $vehicle->setProvider($audi);
        $manager->persist($vehicle);
        $manager->flush();

    }
}
