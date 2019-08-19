<?php

/**
 * BaseNomTipobloqueo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtipobloqueo
 * @property string $tipobloqueo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomTipobloqueo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_tipobloqueo');
        $this->hasColumn('idtipobloqueo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_traza.sec_tipobloqueo_seq',
             ));
        $this->hasColumn('tipobloqueo', 'string', null, array(
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