<?php

/**
 * BaseDatCargo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcargo
 * @property decimal $idpreparacion
 * @property decimal $idespecialidadpreparacion
 * @property decimal $idsalario
 * @property decimal $idnomcargo
 * @property decimal $cantidad
 * @property decimal $cantidadreal
 * @property decimal $idproyecto
 * @property decimal $idestado
 * @property _numeric $modificado
 * @property decimal $idespecialidadempleo
 * @property decimal $temporal
 * @property decimal $directo
 * @property decimal $idtipoescala
 * @property decimal $idsector
 * @property decimal $decisorio
 * @property decimal $idnivelcargo
 * @property decimal $idfacultado
 * @property ModEstructuracomp.nomSector $ModEstructuracomp.nomSector
 * @property ModEstructuracomp.nomNivelcargo $ModEstructuracomp.nomNivelcargo
 * @property ModEstructuracomp.nomCargofacultado $ModEstructuracomp.nomCargofacultado
 * @property ModEstructuracomp.nomFilaestruc $ModEstructuracomp.nomFilaestruc
 * @property ModEstructuracomp.nomCargo $ModEstructuracomp.nomCargo
 * @property ModEstructuracomp.nomPreparacion $ModEstructuracomp.nomPreparacion
 * @property ModEstructuracomp.datProyecto $ModEstructuracomp.datProyecto
 * @property ModEstructuracomp.nomSalario $ModEstructuracomp.nomSalario
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatCargo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_cargo');
        $this->hasColumn('idcargo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idpreparacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idespecialidadpreparacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idsalario', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idnomcargo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('cantidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('cantidadreal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idproyecto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idestado', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('modificado', '_numeric', null, array(
             'type' => '_numeric',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '\'{0}\'::numeric[]',
             'primary' => false,
             ));
        $this->hasColumn('idespecialidadempleo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('temporal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('directo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('idtipoescala', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idsector', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('decisorio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idnivelcargo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idfacultado', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModEstructuracomp.nomSector', array(
             'local' => 'idsector',
             'foreign' => 'idsector'));

        $this->hasOne('ModEstructuracomp.nomNivelcargo', array(
             'local' => 'idnivelcargo',
             'foreign' => 'idnivelcargo'));

        $this->hasOne('ModEstructuracomp.nomCargofacultado', array(
             'local' => 'idfacultado',
             'foreign' => 'idcargofacultado'));

        $this->hasOne('ModEstructuracomp.nomFilaestruc', array(
             'local' => 'idcargo',
             'foreign' => 'idfila'));

        $this->hasOne('ModEstructuracomp.nomCargo', array(
             'local' => 'idnomcargo',
             'foreign' => 'idnomcargo'));

        $this->hasOne('ModEstructuracomp.nomPreparacion', array(
             'local' => 'idpreparacion',
             'foreign' => 'idpreparacion'));

        $this->hasOne('ModEstructuracomp.datProyecto', array(
             'local' => 'idproyecto',
             'foreign' => 'idproyecto'));

        $this->hasOne('ModEstructuracomp.nomSalario', array(
             'local' => 'idsalario',
             'foreign' => 'idsalario'));
    }
}