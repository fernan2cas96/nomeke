<?php

/**
 * BaseDatControlado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcontrolado
 * @property decimal $idcargo
 * @property decimal $idcontrolador
 * @property decimal $idarea
 * @property ModRrhhmaestro.datControlador $ModRrhhmaestro.datControlador
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatControlado extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_controlado');
        $this->hasColumn('idcontrolado', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_rrhhmaestro.sec_controlado_seq',
             ));
        $this->hasColumn('idcargo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idcontrolador', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idarea', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModRrhhmaestro.datControlador', array(
             'local' => 'idcontrolador',
             'foreign' => 'idcontrolador'));
    }
}