<?php

/**
 * BaseNomNivelestructural
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idnivelestructural
 * @property date $fechaini
 * @property date $fechafin
 * @property decimal $concepto
 * @property decimal $raiz
 * @property decimal $idconceptoestructural
 * @property decimal $idconceptonivel
 * @property decimal $idtiponivelestructural
 * @property string $uri
 * @property ModDatosmaestros.nomConceptoestructural $ModDatosmaestros.nomConceptoestructural
 * @property ModDatosmaestros.nomConceptonivel $ModDatosmaestros.nomConceptonivel
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomNivelestructural extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_nivelestructural');
        $this->hasColumn('idnivelestructural', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_nomnivelestructural_seq',
             ));
        $this->hasColumn('fechaini', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
        $this->hasColumn('fechafin', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('concepto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('raiz', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idconceptoestructural', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idconceptonivel', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idtiponivelestructural', 'decimal', null, array(
             'type' => 'decimal',
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomConceptoestructural', array(
             'local' => 'idconceptoestructural',
             'foreign' => 'idconceptoestructural'));

        $this->hasOne('ModDatosmaestros.nomConceptonivel', array(
             'local' => 'idconceptonivel',
             'foreign' => 'idconceptonivel'));
    }
}