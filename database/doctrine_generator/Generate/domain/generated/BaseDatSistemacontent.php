<?php

/**
 * BaseDatSistemacontent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcontenido
 * @property string $texto
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSistemacontent extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_sistemacontent');
        $this->hasColumn('idcontenido', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('texto', 'string', null, array(
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