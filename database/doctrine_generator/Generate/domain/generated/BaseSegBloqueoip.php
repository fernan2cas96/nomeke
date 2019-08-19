<?php

/**
 * BaseSegBloqueoip
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idbloqueo
 * @property string $ip
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSegBloqueoip extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('seg_bloqueoip');
        $this->hasColumn('idbloqueo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('ip', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}