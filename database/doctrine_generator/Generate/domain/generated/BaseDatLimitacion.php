<?php

/**
 * BaseDatLimitacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idlimitacion
 * @property decimal $idpersona
 * @property decimal $idcausa
 * @property date $fdesde
 * @property date $fhasta
 * @property date $fregistro
 * @property decimal $idsituacionlaboral
 * @property ModPersonaext.nomCausalimitacion $ModPersonaext.nomCausalimitacion
 * @property ModPersona.datPersona $ModPersona.datPersona
 * @property ModPersona.datSituacionlaboral $ModPersona.datSituacionlaboral
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatLimitacion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_limitacion');
        $this->hasColumn('idlimitacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_limitacion_seq',
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idcausa', 'decimal', null, array(
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
        $this->hasColumn('fregistro', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
        $this->hasColumn('idsituacionlaboral', 'decimal', null, array(
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
        $this->hasOne('ModPersonaext.nomCausalimitacion', array(
             'local' => 'idcausa',
             'foreign' => 'idcausalimitacion'));

        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));

        $this->hasOne('ModPersona.datSituacionlaboral', array(
             'local' => 'idsituacionlaboral',
             'foreign' => 'idsituacionlaboralp'));
    }
}