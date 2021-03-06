<?php

/**
 * BaseDatFilacortada
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idfila
 * @property decimal $idreferencia
 * @property decimal $idproyecto
 * @property boolean $esraiz
 * @property ModEstructuracomp.datProyecto $ModEstructuracomp.datProyecto
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatFilacortada extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_filacortada');
        $this->hasColumn('idfila', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idreferencia', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idproyecto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('esraiz', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModEstructuracomp.datProyecto', array(
             'local' => 'idproyecto',
             'foreign' => 'idproyecto'));
    }
}