<?php

/**
 * BaseNomGruposubgrupohoja
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idgruposubgrupo
 * @property decimal $porcientorecuperacion
 * @property decimal $vidautil
 * @property decimal $tasafiscalmin
 * @property decimal $tasafiscalmax
 * @property ModDatosmaestros.nomGruposubgrupo $ModDatosmaestros.nomGruposubgrupo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomGruposubgrupohoja extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_gruposubgrupohoja');
        $this->hasColumn('idgruposubgrupo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('porcientorecuperacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('vidautil', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('tasafiscalmin', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('tasafiscalmax', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomGruposubgrupo', array(
             'local' => 'idgruposubgrupo',
             'foreign' => 'idgruposubgrupo'));
    }
}