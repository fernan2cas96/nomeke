<?php

/**
 * BaseDatSeleccionmultiple
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcomponentecompuesto
 * @property decimal $idtabladetalle
 * @property decimal $idtablacompuesta
 * @property ModMetadata.datComponentecompuesto $ModMetadata.datComponentecompuesto
 * @property ModMetadata.datTabla $ModMetadata.datTabla
 * @property ModMetadata.datTabla $ModMetadata.datTabla_3
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSeleccionmultiple extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_seleccionmultiple');
        $this->hasColumn('idcomponentecompuesto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idtabladetalle', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idtablacompuesta', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModMetadata.datComponentecompuesto', array(
             'local' => 'idcomponentecompuesto',
             'foreign' => 'idcomponentecompuesto'));

        $this->hasOne('ModMetadata.datTabla', array(
             'local' => 'idtablacompuesta',
             'foreign' => 'idtabla'));

        $this->hasOne('ModMetadata.datTabla as ModMetadata.datTabla_3', array(
             'local' => 'idtabladetalle',
             'foreign' => 'idtabla'));
    }
}