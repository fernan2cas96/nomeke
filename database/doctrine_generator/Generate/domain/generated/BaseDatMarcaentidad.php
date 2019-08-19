<?php

/**
 * BaseDatMarcaentidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idmarcaentidad
 * @property decimal $idestructuracomun
 * @property decimal $idmarca
 * @property ModDatosmaestros.nomMarca $ModDatosmaestros.nomMarca
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatMarcaentidad extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_marcaentidad');
        $this->hasColumn('idmarcaentidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_datmarcaentidad_seq',
             ));
        $this->hasColumn('idestructuracomun', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idmarca', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.nomMarca', array(
             'local' => 'idmarca',
             'foreign' => 'idmarca'));
    }
}