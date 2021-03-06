<?php

/**
 * BaseDatInterrupcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idinterrupcion
 * @property decimal $idmotivointerrupcion
 * @property date $fdesde
 * @property date $fhasta
 * @property decimal $horas
 * @property string $observacion
 * @property decimal $idestructura
 * @property ModFuerzatrabajo.nomMotivointerrupcion $ModFuerzatrabajo.nomMotivointerrupcion
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatInterrupcion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_interrupcion');
        $this->hasColumn('idinterrupcion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_fuerzatrabajo.sec_interrupcion_seq',
             ));
        $this->hasColumn('idmotivointerrupcion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
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
        $this->hasColumn('horas', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('observacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idestructura', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModFuerzatrabajo.nomMotivointerrupcion', array(
             'local' => 'idmotivointerrupcion',
             'foreign' => 'idmotivointerrupcion'));
    }
}