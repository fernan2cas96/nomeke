<?php

/**
 * BaseNomImagenindicador
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idimagen
 * @property blob $imagen
 * @property string $checksum
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomImagenindicador extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_imagenindicador');
        $this->hasColumn('idimagen', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('imagen', 'blob', null, array(
             'type' => 'blob',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('checksum', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}