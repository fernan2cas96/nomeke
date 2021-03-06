<?php

/**
 * BaseDatSubordinacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idsubordinacion
 * @property decimal $idpadre
 * @property decimal $idhijo
 * @property decimal $idnomsubordinacion
 * @property ltree $parent_path
 * @property ModEstructuracomp.nomFilaestruc $ModEstructuracomp.nomFilaestruc
 * @property ModEstructuracomp.nomFilaestruc $ModEstructuracomp.nomFilaestruc_2
 * @property ModEstructuracomp.nomSubordinacion $ModEstructuracomp.nomSubordinacion
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSubordinacion extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_subordinacion');
        $this->hasColumn('idsubordinacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_estructuracomp.sec_datsubordinacion_seq',
             ));
        $this->hasColumn('idpadre', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idhijo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idnomsubordinacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('parent_path', 'ltree', null, array(
             'type' => 'ltree',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModEstructuracomp.nomFilaestruc', array(
             'local' => 'idhijo',
             'foreign' => 'idfila'));

        $this->hasOne('ModEstructuracomp.nomFilaestruc as ModEstructuracomp.nomFilaestruc_2', array(
             'local' => 'idpadre',
             'foreign' => 'idfila'));

        $this->hasOne('ModEstructuracomp.nomSubordinacion', array(
             'local' => 'idnomsubordinacion',
             'foreign' => 'idnomsubordinacion'));
    }
}