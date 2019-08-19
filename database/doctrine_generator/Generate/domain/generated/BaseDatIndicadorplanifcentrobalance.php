<?php

/**
 * BaseDatIndicadorplanifcentrobalance
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idindicadorcentrobalance
 * @property decimal $idindicador
 * @property decimal $identidaddatosnomenclador
 * @property ModDatosmaestros.nomIndicadorplanif $ModDatosmaestros.nomIndicadorplanif
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatIndicadorplanifcentrobalance extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_indicadorplanifcentrobalance');
        $this->hasColumn('idindicadorcentrobalance', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_datosmaestros.sec_indicadorplanifcentrobalance_seq',
             ));
        $this->hasColumn('idindicador', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('identidaddatosnomenclador', 'decimal', null, array(
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
        $this->hasOne('ModDatosmaestros.nomIndicadorplanif', array(
             'local' => 'idindicador',
             'foreign' => 'idindicador'));
    }
}