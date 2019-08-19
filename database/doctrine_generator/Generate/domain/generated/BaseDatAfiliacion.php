<?php

/**
 * BaseDatAfiliacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idafiliacion
 * @property decimal $idpersona
 * @property decimal $idorganizacion
 * @property date $fdesde
 * @property date $fhasta
 * @property ModPersonaext.nomOrganizacion $ModPersonaext.nomOrganizacion
 * @property ModPersona.datPersona $ModPersona.datPersona
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatAfiliacion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_afiliacion');
        $this->hasColumn('idafiliacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_afiliacion_seq',
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idorganizacion', 'decimal', null, array(
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
        $this->hasOne('ModPersonaext.nomOrganizacion', array(
             'local' => 'idorganizacion',
             'foreign' => 'idorganizacion'));

        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));
    }
}