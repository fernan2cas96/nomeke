<?php

/**
 * BaseNomIndicadorplanif
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idindicador
 * @property decimal $nivelplanif
 * @property decimal $precio
 * @property decimal $idaprobacion
 * @property decimal $flete
 * @property decimal $contingencia
 * @property decimal $precioventa
 * @property decimal $balanceable
 * @property decimal $cobertura
 * @property decimal $margencomercial
 * @property decimal $preciodivisa
 * @property decimal $seguro
 * @property decimal $plandirecto
 * @property ModDatosmaestros.nomIndicador $ModDatosmaestros.nomIndicador
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomIndicadorplanif extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_indicadorplanif');
        $this->hasColumn('idindicador', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('nivelplanif', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('precio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idaprobacion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('flete', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('contingencia', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('precioventa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('balanceable', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('cobertura', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('margencomercial', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('preciodivisa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('seguro', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('plandirecto', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.nomIndicador', array(
             'local' => 'idindicador',
             'foreign' => 'idindicador'));
    }
}