<?php

/**
 * BaseNomIndicador
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idindicador
 * @property decimal $idpadre
 * @property decimal $idarbol
 * @property decimal $ordenizq
 * @property decimal $ordender
 * @property decimal $idpais
 * @property decimal $idumedida
 * @property decimal $idformato
 * @property decimal $idnaturaleza
 * @property decimal $idtabla
 * @property decimal $idtablageneral
 * @property string $codigo
 * @property string $numeropieza
 * @property string $denominacion
 * @property string $descripcion
 * @property decimal $estado
 * @property decimal $nivel
 * @property string $arridtablas
 * @property string $arridtablasgenerales
 * @property decimal $version
 * @property decimal $idespecialidad
 * @property decimal $tipo
 * @property date $fechainicio
 * @property date $fechafin
 * @property decimal $activo
 * @property ltree $parentpath
 * @property ModDatosmaestros.nomEspecialidad $ModDatosmaestros.nomEspecialidad
 * @property ModDatosmaestros.datFormato $ModDatosmaestros.datFormato
 * @property ModDatosmaestros.nomIndicador $ModDatosmaestros.nomIndicador
 * @property ModDatosmaestros.nomNaturaleza $ModDatosmaestros.nomNaturaleza
 * @property ModDatosmaestros.nomPais $ModDatosmaestros.nomPais
 * @property ModDatosmaestros.nomUnidadmedida $ModDatosmaestros.nomUnidadmedida
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomIndicador extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_indicador');
        $this->hasColumn('idindicador', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_indicador_seq',
             ));
        $this->hasColumn('idpadre', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idarbol', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('ordenizq', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('ordender', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idpais', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idumedida', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idformato', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idnaturaleza', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idtabla', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(-1)',
             'primary' => false,
             ));
        $this->hasColumn('idtablageneral', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '(-1)',
             'primary' => false,
             ));
        $this->hasColumn('codigo', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('numeropieza', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
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
        $this->hasColumn('estado', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('nivel', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('arridtablas', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('arridtablasgenerales', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('version', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idespecialidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('tipo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('fechainicio', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fechafin', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('activo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('parentpath', 'ltree', null, array(
             'type' => 'ltree',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomEspecialidad', array(
             'local' => 'idespecialidad',
             'foreign' => 'idespecialidad'));

        $this->hasOne('ModDatosmaestros.datFormato', array(
             'local' => 'idformato',
             'foreign' => 'idformato'));

        $this->hasOne('ModDatosmaestros.nomIndicador', array(
             'local' => 'idpadre',
             'foreign' => 'idindicador'));

        $this->hasOne('ModDatosmaestros.nomNaturaleza', array(
             'local' => 'idnaturaleza',
             'foreign' => 'idnaturaleza'));

        $this->hasOne('ModDatosmaestros.nomPais', array(
             'local' => 'idpais',
             'foreign' => 'idpais'));

        $this->hasOne('ModDatosmaestros.nomUnidadmedida', array(
             'local' => 'idumedida',
             'foreign' => 'idunidadmedida'));
    }
}