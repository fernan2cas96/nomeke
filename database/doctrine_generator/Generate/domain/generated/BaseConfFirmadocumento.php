<?php

/**
 * BaseConfFirmadocumento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idfirmadocumento
 * @property decimal $iddocumentofirma
 * @property decimal $idtipofirma
 * @property decimal $idpersona
 * @property decimal $identidad
 * @property decimal $orden
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseConfFirmadocumento extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('conf_firmadocumento');
        $this->hasColumn('idfirmadocumento', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_rrhhmaestro.sec_firmadocumento_seq',
             ));
        $this->hasColumn('iddocumentofirma', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idtipofirma', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('identidad', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('orden', 'decimal', null, array(
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
        
    }
}