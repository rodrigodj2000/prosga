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
            SELECT SUBSTRING(i.fecha, 6, 2) as mes, SUM(i.valor) as sumatoria, COUNT(i.id) as cantidad
            FROM prosgaBundle:Incidencias i
            JOIN i.tipoIncidencia ti                
            WHERE ti.id = :id
            group by mes
            order by mes');
        
        $consulta->setParameter('id', $id);
        
        return $consulta->getResult();              
    }
    
}

?>