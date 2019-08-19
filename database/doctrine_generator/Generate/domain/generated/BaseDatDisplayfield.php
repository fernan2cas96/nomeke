<?php

/**
 * BaseDatDisplayfield
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtabla
 * @property decimal $idcampo
 * @property ModMetadata.datCampo $ModMetadata.datCampo
 * @property ModMetadata.datTabla $ModMetadata.datTabla
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatDisplayfield extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_displayfield');
        $this->hasColumn('idtabla', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idcampo', 'decimal', null, array(
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
        $this->hasOne('ModMetadata.datCampo', array(
             'local' => 'idcampo',
             'foreign' => 'idcampo'));

        $this->hasOne('ModMetadata.datTabla', array(
             'local' => 'idtabla',
             'foreign' => 'idtabla'));
    }
}