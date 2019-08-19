<?php

/**
 * BaseNomMarcamodelo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $denominacion
 * @property decimal $idmarcamodelo
 * @property decimal $idpadre
 * @property decimal $idnaturaleza
 * @property decimal $estado
 * @property ModDatosmaestros.nomMarcamodelo $ModDatosmaestros.nomMarcamodelo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomMarcamodelo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_marcamodelo');
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idmarcamodelo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idpadre', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.nomMarcamodelo', array(
             'local' => 'idpadre',
             'foreign' => 'idpadre'));
    }
}