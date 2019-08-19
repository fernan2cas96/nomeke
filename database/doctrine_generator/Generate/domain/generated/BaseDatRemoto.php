<?php

/**
 * BaseDatRemoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcomponente
 * @property string $campodenominacion
 * @property decimal $campoorigen
 * @property decimal $campodestino
 * @property ModMetadata.datCombo $ModMetadata.datCombo
 * @property ModMetadata.datRelacion $ModMetadata.datRelacion
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatRemoto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_remoto');
        $this->hasColumn('idcomponente', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('campodenominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('campoorigen', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('campodestino', 'decimal', null, array(
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
        $this->hasOne('ModMetadata.datCombo', array(
             'local' => 'idcomponente',
             'foreign' => 'idcomponente'));

        $this->hasOne('ModMetadata.datRelacion', array(
             'local' => 'campoorigen, campodestino',
             'foreign' => 'campoorigen, campodestino'));
    }
}