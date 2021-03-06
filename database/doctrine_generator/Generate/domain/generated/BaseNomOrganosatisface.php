<?php

/**
 * BaseNomOrganosatisface
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idorganosatisface
 * @property string $denominacion
 * @property string $descripcion
 * @property string $color
 * @property string $uriorganosatisface
 * @property decimal $ordenizq
 * @property decimal $ordender
 * @property decimal $idarbol
 * @property decimal $idpadre
 * @property decimal $nivelarbol
 * @property decimal $estado
 * @property ModDatosmaestros.nomOrganosatisface $ModDatosmaestros.nomOrganosatisface
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomOrganosatisface extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_organosatisface');
        $this->hasColumn('idorganosatisface', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_organosatisface_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
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
        $this->hasColumn('color', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('uriorganosatisface', 'string', null, array(
             'type' => 'string',
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
        $this->hasColumn('idarbol', 'decimal', null, array(
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
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('nivelarbol', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('estado', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '1',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomOrganosatisface', array(
             'local' => 'idpadre',
             'foreign' => 'idorganosatisface'));
    }
}