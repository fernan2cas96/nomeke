<?php

/**
 * BaseNomTipofirma
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtipofirma
 * @property string $denominacion
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomTipofirma extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_tipofirma');
        $this->hasColumn('idtipofirma', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_rrhhmaestro.sec_tipofirma_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
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