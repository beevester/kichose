<?php

namespace App\Controller\Opportunity;

use App\Entity\Opportunity;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OpportunityNotificationTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testCreateNotification()
    {
        $opportunity = $this->entityManager
            ->getRepository(Opportunity::class)
            ->findAll();
        ;
        $t = new OpportunityNotification();

    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
