<?php

/**
 * BaseNomCampocontable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcampo
 * @property string $nombre
 * @property decimal $idclasificador
 * @property decimal $tipo
 * @property string $referencia
 * @property decimal $idsubsistema
 * @property decimal $idestructuracomun
 * @property string $ruta
 * @property ModDatosmaestros.nomClasificador $ModDatosmaestros.nomClasificador
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomCampocontable extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_campocontable');
        $this->hasColumn('idcampo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_nomcamposactuales_seq',
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idclasificador', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('tipo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('referencia', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idsubsistema', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idestructuracomun', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('ruta', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => 'NULL::character varying',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomClasificador', array(
             'local' => 'idclasificador',
             'foreign' => 'idclasificador'));
    }
}