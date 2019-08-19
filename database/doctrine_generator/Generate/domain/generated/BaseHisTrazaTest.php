<?php

/**
 * BaseHisTrazaTest
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtraza_test
 * @property date $traza_test
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseHisTrazaTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('his_traza_test');
        $this->hasColumn('idtraza_test', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_traza.sec_traza_test_seq',
             ));
        $this->hasColumn('traza_test', 'date', null, array(
             'type' => 'date',
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