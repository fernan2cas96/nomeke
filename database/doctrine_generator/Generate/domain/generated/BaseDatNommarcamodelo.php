<?php

/**
 * BaseDatNommarcamodelo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idmarca
 * @property decimal $idmodelo
 * @property decimal $idnaturaleza
 * @property ModDatosmaestros.nomMarca $ModDatosmaestros.nomMarca
 * @property ModDatosmaestros.nomModelo $ModDatosmaestros.nomModelo
 * @property ModDatosmaestros.nomNaturaleza $ModDatosmaestros.nomNaturaleza
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatNommarcamodelo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_nommarcamodelo');
        $this->hasColumn('idmarca', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idmodelo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idnaturaleza', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModDatosmaestros.nomMarca', array(
             'local' => 'idmarca',
             'foreign' => 'idmarca'));

        $this->hasOne('ModDatosmaestros.nomModelo', array(
             'local' => 'idmodelo',
             'foreign' => 'idmodelo'));

        $this->hasOne('ModDatosmaestros.nomNaturaleza', array(
             'local' => 'idnaturaleza',
             'foreign' => 'idnaturaleza'));
    }
}