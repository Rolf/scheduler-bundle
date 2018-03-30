<?php

namespace Goksagun\SchedulerBundle\Repository;
use Goksagun\SchedulerBundle\Entity\ScheduledTask;

/**
 * ScheduledTaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ScheduledTaskRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param ScheduledTask $scheduledTask
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(ScheduledTask $scheduledTask)
    {
        $this->getEntityManager()->persist($scheduledTask);
        $this->getEntityManager()->flush();
    }
}