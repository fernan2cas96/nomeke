<?php

/**
 * BaseAuxComplemento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcomplemento
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAuxComplemento extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('aux_complemento');
        $this->hasColumn('idcomplemento', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}