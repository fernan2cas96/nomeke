<?php

/**
 * BaseNomConcepto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idconcepto
 * @property string $denominacion
 * @property string $descripcion
 * @property decimal $orden
 * @property decimal $idpadre
 * @property decimal $grafica
 * @property decimal $idicono
 * @property decimal $tipo
 * @property string $propiedades
 * @property string $iconcls
 * @property string $codigo
 * @property string $cmpempleado
 * @property decimal $lft
 * @property decimal $rgt
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomConcepto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_concepto');
        $this->hasColumn('idconcepto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaproyecto.sec_concepto_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('orden', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idpadre', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('grafica', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idicono', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('tipo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('propiedades', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '{}',
             'primary' => false,
             ));
        $this->hasColumn('iconcls', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('codigo', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '{}',
             'primary' => false,
             ));
        $this->hasColumn('cmpempleado', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('lft', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('rgt', 'decimal', null, array(
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
        
    }
}