<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Model\ParcelOrderInterface;

/**
 * ParcelOrderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParcelOrderRepository extends \Doctrine\ORM\EntityRepository
{
	public function delete(ParcelOrderInterface $parcelorder) 
	{
		$em = $this->getEntityManager();
		$em->remove($parcelorder);
		$em->flush();
	}
	public function save(ParcelOrderInterface $parcelorder) 
	{
		$em = $this->getEntityManager();
		$em->persist($parcelorder);
		$em->flush();
	}
}
