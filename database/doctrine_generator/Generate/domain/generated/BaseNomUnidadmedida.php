<?php

/**
 * BaseNomUnidadmedida
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idunidadmedida
 * @property string $denominacionunidadmedida
 * @property string $abreviaturaunidadmedida
 * @property string $descripcionunidadmedida
 * @property decimal $idmagnitud
 * @property date $fechainicio
 * @property date $fechafin
 * @property string $uriunidadmedida
 * @property decimal $decimales
 * @property ModDatosmaestros.nomMagnitud $ModDatosmaestros.nomMagnitud
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomUnidadmedida extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_unidadmedida');
        $this->hasColumn('idunidadmedida', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_nomunidadmedida_seq',
             ));
        $this->hasColumn('denominacionunidadmedida', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('abreviaturaunidadmedida', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('descripcionunidadmedida', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idmagnitud', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('fechainicio', 'date', null, array(
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
        $this->hasColumn('uriunidadmedida', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('decimales', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.nomMagnitud', array(
             'local' => 'idmagnitud',
             'foreign' => 'idmagnitud'));
    }
}