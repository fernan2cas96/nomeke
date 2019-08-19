<?php

/**
 * BaseSegBloqueo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idbloqueo
 * @property date $fecha
 * @property time $hora
 * @property integer $intento
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSegBloqueo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('seg_bloqueo');
        $this->hasColumn('idbloqueo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_seguridad.sec_bloqueo_seq',
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
        $this->hasColumn('hora', 'time', null, array(
             'type' => 'time',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('intento', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}