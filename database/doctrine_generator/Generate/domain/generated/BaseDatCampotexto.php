<?php

/**
 * BaseDatCampotexto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcomponente
 * @property decimal $idexpresionregular
 * @property ModMetadata.datComponente $ModMetadata.datComponente
 * @property ModMetadata.nomExpresionregular $ModMetadata.nomExpresionregular
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatCampotexto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_campotexto');
        $this->hasColumn('idcomponente', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idexpresionregular', 'decimal', null, array(
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

        $this->hasOne('ModMetadata.nomExpresionregular', array(
             'local' => 'idexpresionregular',
             'foreign' => 'idexpresionregular'));
    }
}