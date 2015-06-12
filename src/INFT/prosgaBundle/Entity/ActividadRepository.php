<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ActividadRepository extends EntityRepository
{

    public function findByActividadesAuditorias($auditoria_id)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
            SELECT a FROM prosgaBundle:Actividad a
             WHERE a.auditoria = :id');
        $consulta->setParameter('id', $auditoria_id);
        return $consulta->getResult();              
    }
    
}

?>