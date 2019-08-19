<?php

/**
 * BaseSegChequeointegridad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $hash
 * @property string $uri
 * @property date $fecha
 * @property time $hora
 * @property decimal $id
 * @property string $paquete
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSegChequeointegridad extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('seg_chequeointegridad');
        $this->hasColumn('hash', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('uri', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('hora', 'time', null, array(
             'type' => 'time',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('id', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_seguridad.sec_chequeointegridad_seq',
             ));
        $this->hasColumn('paquete', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}