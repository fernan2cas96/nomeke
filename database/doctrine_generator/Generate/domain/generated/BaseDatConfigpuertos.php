<?php

/**
 * BaseDatConfigpuertos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idconfigpuertos
 * @property integer $idpadrefijo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatConfigpuertos extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_configpuertos');
        $this->hasColumn('idconfigpuertos', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_estructuracomp.dat_configpuertos_idconfigpuertos_seq',
             ));
        $this->hasColumn('idpadrefijo', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
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