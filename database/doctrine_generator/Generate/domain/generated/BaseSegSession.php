<?php

/**
 * BaseSegSession
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idsession
 * @property string $sessionid
 * @property string $session
 * @property string $usuario
 * @property string $ip
 * @property decimal $idrol
 * @property decimal $idusuario
 * @property decimal $identidad
 * @property boolean $eliminar
 * @property date $fecha
 * @property time $hora
 * @property ModSeguridad.datEntidadusuariorol $ModSeguridad.datEntidadusuariorol
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSegSession extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('seg_session');
        $this->hasColumn('idsession', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_seguridad.sec_session_seq',
             ));
        $this->hasColumn('sessionid', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('session', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('usuario', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('ip', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idrol', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idusuario', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('identidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('eliminar', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => false,
             'primary' => false,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('hora', 'time', null, array(
             'type' => 'time',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModSeguridad.datEntidadusuariorol', array(
             'local' => 'idrol, idusuario, identidad',
             'foreign' => 'idrol, idusuario, identidad'));
    }
}