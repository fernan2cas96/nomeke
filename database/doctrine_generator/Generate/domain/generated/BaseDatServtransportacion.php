<?php

/**
 * BaseDatServtransportacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idservtransportacion
 * @property decimal $idpersona
 * @property decimal $idestructuratransportacion
 * @property date $fdesde
 * @property date $fhasta
 * @property ModPersona.datPersona $ModPersona.datPersona
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatServtransportacion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_servtransportacion');
        $this->hasColumn('idservtransportacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_servtransportacion_seq',
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idestructuratransportacion', 'decimal', null, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));
    }
}