<?php

namespace MoteurRechercheBundle\Repository;

/**
 * LaboratoireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LaboratoireRepository extends \Doctrine\ORM\EntityRepository
{
	public function getListeLaboratoire(){
		$queryBuider = $this->createQueryBuilder('l');
		$queryBuider ->where("l.nomLaboratoire != '' ")
			->orderBy('l.nomLaboratoire', 'ASC');
		return $queryBuider->getQuery()->getResult();	
	}

}
