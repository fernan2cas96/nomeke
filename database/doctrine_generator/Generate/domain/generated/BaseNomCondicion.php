<?php

/**
 * BaseNomCondicion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idnomcargo
 * @property decimal $idgrupocomplejidad
 * @property ModEstructuracomp.nomCargo $ModEstructuracomp.nomCargo
 * @property ModEstructuracomp.nomGrupocomplejidad $ModEstructuracomp.nomGrupocomplejidad
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomCondicion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_condicion');
        $this->hasColumn('idnomcargo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idgrupocomplejidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModEstructuracomp.nomCargo', array(
             'local' => 'idnomcargo',
             'foreign' => 'idnomcargo'));

        $this->hasOne('ModEstructuracomp.nomGrupocomplejidad', array(
             'local' => 'idgrupocomplejidad',
             'foreign' => 'idgrupocomplejidad'));
    }
}