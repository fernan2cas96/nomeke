<?php

/**
 * BaseDatCamponumerico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcomponente
 * @property decimal $limiteinferior
 * @property decimal $limitesuperior
 * @property decimal $decimal
 * @property decimal $precision
 * @property decimal $negativo
 * @property ModMetadata.datComponente $ModMetadata.datComponente
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatCamponumerico extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_camponumerico');
        $this->hasColumn('idcomponente', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('limiteinferior', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('limitesuperior', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('decimal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('precision', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('negativo', 'decimal', null, array(
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
        $this->hasOne('ModMetadata.datComponente', array(
             'local' => 'idcomponente',
             'foreign' => 'idcomponente'));
    }
}