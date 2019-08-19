<?php

/**
 * BaseNomMotivobaja
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idmotivobaja
 * @property string $denominacion
 * @property string $descripcion
 * @property date $fdesde
 * @property date $fhasta
 * @property decimal $idpadre
 * @property decimal $bandera
 * @property decimal $gestion
 * @property ModFuerzatrabajo.nomMotivobaja $ModFuerzatrabajo.nomMotivobaja
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomMotivobaja extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_motivobaja');
        $this->hasColumn('idmotivobaja', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_fuerzatrabajo.sec_motivobaja_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => 'Sin descripción.',
             'primary' => false,
             ));
        $this->hasColumn('fdesde', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
        $this->hasColumn('fhasta', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idpadre', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('bandera', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('gestion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModFuerzatrabajo.nomMotivobaja', array(
             'local' => 'idpadre',
             'foreign' => 'idmotivobaja'));
    }
}