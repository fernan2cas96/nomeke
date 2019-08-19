<?php

/**
 * BaseDatMedio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idmedio
 * @property decimal $idtipomedio
 * @property decimal $idnommedio
 * @property decimal $cantidad
 * @property decimal $idestado
 * @property decimal $idproyecto
 * @property decimal $cantidadreal
 * @property _numeric $modificado
 * @property decimal $idicono
 * @property ModEstructuracomp.nomFilaestruc $ModEstructuracomp.nomFilaestruc
 * @property ModDatosmaestros.nomIndicador $ModDatosmaestros.nomIndicador
 * @property ModEstructuracomp.nomIcono $ModEstructuracomp.nomIcono
 * @property ModEstructuracomp.datProyecto $ModEstructuracomp.datProyecto
 * @property ModEstructuracomp.nomTipomedio $ModEstructuracomp.nomTipomedio
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatMedio extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_medio');
        $this->hasColumn('idmedio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idtipomedio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idnommedio', 'decimal', null, array(
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
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idestado', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idproyecto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('cantidadreal', 'decimal', null, array(
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
        $this->hasColumn('idicono', 'decimal', null, array(
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
        $this->hasOne('ModEstructuracomp.nomFilaestruc', array(
             'local' => 'idmedio',
             'foreign' => 'idfila'));

        $this->hasOne('ModDatosmaestros.nomIndicador', array(
             'local' => 'idnommedio',
             'foreign' => 'idindicador'));

        $this->hasOne('ModEstructuracomp.nomIcono', array(
             'local' => 'idicono',
             'foreign' => 'idicono'));

        $this->hasOne('ModEstructuracomp.datProyecto', array(
             'local' => 'idproyecto',
             'foreign' => 'idproyecto'));

        $this->hasOne('ModEstructuracomp.nomTipomedio', array(
             'local' => 'idtipomedio',
             'foreign' => 'idtipomedio'));
    }
}