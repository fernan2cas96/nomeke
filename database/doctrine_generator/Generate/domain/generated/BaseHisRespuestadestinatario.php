<?php

/**
 * BaseHisRespuestadestinatario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idrespuestadestinatario
 * @property decimal $idrespuestatarea
 * @property string $destinatario
 * @property string $observacion
 * @property timestamp $fecha
 * @property decimal $exito
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseHisRespuestadestinatario extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('his_respuestadestinatario');
        $this->hasColumn('idrespuestadestinatario', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'sequence' => 'mod_notificaciones.sec_respuestadestinatario_seq',
             ));
        $this->hasColumn('idrespuestatarea', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('destinatario', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('observacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fecha', 'timestamp', null, array(
             'type' => 'timestamp',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('exito', 'decimal', null, array(
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
        
    }
}