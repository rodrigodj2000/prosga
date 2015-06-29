<?php

namespace INFT\prosgaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TiposIncidenciasRepository extends EntityRepository
{

    public function findByIncidenciasMesxTipoIncidencia($id)
    {
        /*
        select month(i.fecha), sum(i.valor) / count(month(i.fecha))
        from tiposincidencias ti
                                inner join incidencias i on (ti.id = i.tipoincidencia_id)
        where ti.id = 1
        group by month(i.fecha)
        order by month(i.fecha)        
        */
        
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('
            SELECT i.fecha, i.valor FROM prosgaBundle:Incidencias i
            JOIN i.tipoIncidencia ti                
            WHERE ti.id = :id');
        
        $consulta->setParameter('id', $id);
        
        return $consulta->getResult();              
    }
    
}

?>