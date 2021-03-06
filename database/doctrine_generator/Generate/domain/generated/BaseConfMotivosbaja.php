<?php

/**
 * BaseConfMotivosbaja
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idconfmotivobaja
 * @property decimal $idmotivobaja
 * @property string $motivoreporte
 * @property ModFuerzatrabajo.nomMotivobaja $ModFuerzatrabajo.nomMotivobaja
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseConfMotivosbaja extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('conf_motivosbaja');
        $this->hasColumn('idconfmotivobaja', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_fuerzatrabajo.sec_confmotivosbaja_seq',
             ));
        $this->hasColumn('idmotivobaja', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('motivoreporte', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModFuerzatrabajo.nomMotivobaja', array(
             'local' => 'idmotivobaja',
             'foreign' => 'idmotivobaja'));
    }
}