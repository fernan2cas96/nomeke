<?php

/**
 * BaseDatProyectorol
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idproyectorol
 * @property decimal $idproyectoconcepto
 * @property decimal $idrol
 * @property decimal $activo
 * @property decimal $obligatorio
 * @property decimal $add
 * @property decimal $mod
 * @property decimal $del
 * @property ModPersonaproyecto.datProyectoconcepto $ModPersonaproyecto.datProyectoconcepto
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatProyectorol extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_proyectorol');
        $this->hasColumn('idproyectorol', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaproyecto.sec_proyectorol_seq',
             ));
        $this->hasColumn('idproyectoconcepto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idrol', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('activo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('obligatorio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('add', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('mod', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('del', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModPersonaproyecto.datProyectoconcepto', array(
             'local' => 'idproyectoconcepto',
             'foreign' => 'idproyectoconcepto'));
    }
}