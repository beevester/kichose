<?php

namespace App\EventListener;

use App\Controller\Opportunity\OpportunityNotification;
use App\Entity\Opportunity;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class OpportunitySubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postRemove,
            Events::postUpdate,
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->sendNotification('persist', $args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
//        $this->logActivity('remove', $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
//        $this->logActivity('update', $args);
    }

    private function sendNotification(string $action, LifecycleEventArgs $args)
    {
        $opportunity = $args->getObject();

        $notify = new OpportunityNotification();

        if (!$opportunity instanceof Opportunity) {
            return;
        }

        $notify->createNotification($opportunity);
    }
}
