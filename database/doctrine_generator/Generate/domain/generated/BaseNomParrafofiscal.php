<?php

/**
 * BaseNomParrafofiscal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idparrafofiscal
 * @property decimal $idpadre
 * @property decimal $ordenizq
 * @property decimal $ordender
 * @property string $descripcion
 * @property string $codigo
 * @property decimal $idformato
 * @property decimal $tasaparrafo
 * @property string $fechainicio
 * @property string $fechafin
 * @property string $referencia
 * @property decimal $nivel
 * @property ModDatosmaestros.datFormato $ModDatosmaestros.datFormato
 * @property ModDatosmaestros.nomParrafofiscal $ModDatosmaestros.nomParrafofiscal
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomParrafofiscal extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_parrafofiscal');
        $this->hasColumn('idparrafofiscal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_idparrafofiscal_seq',
             ));
        $this->hasColumn('idpadre', 'decimal', null, array(
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
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('ordender', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
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
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idformato', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('tasaparrafo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fechainicio', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fechafin', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('referencia', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('nivel', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.datFormato', array(
             'local' => 'idformato',
             'foreign' => 'idformato'));

        $this->hasOne('ModDatosmaestros.nomParrafofiscal', array(
             'local' => 'idpadre',
             'foreign' => 'idparrafofiscal'));
    }
}