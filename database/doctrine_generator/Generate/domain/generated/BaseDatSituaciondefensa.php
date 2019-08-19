<?php

/**
 * BaseDatSituaciondefensa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idasignaciondefensa
 * @property decimal $idcargodefensa
 * @property date $fhasta
 * @property date $fdesde
 * @property decimal $idsituaciondefensa
 * @property decimal $idpersona
 * @property ModPersonaext.nomAsignaciondefensa $ModPersonaext.nomAsignaciondefensa
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSituaciondefensa extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_situaciondefensa');
        $this->hasColumn('idasignaciondefensa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idcargodefensa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fhasta', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fdesde', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idsituaciondefensa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_situaciondefensa_seq',
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
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
        $this->hasOne('ModPersonaext.nomAsignaciondefensa', array(
             'local' => 'idasignaciondefensa',
             'foreign' => 'idasignaciondefensa'));
    }
}