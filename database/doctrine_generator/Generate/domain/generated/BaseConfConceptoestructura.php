<?php

/**
 * BaseConfConceptoestructura
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idconfiguracion
 * @property string $denominacion
 * @property decimal $idestructura
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseConfConceptoestructura extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('conf_conceptoestructura');
        $this->hasColumn('idconfiguracion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaproyecto.sec_conceptoestructura_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idestructura', 'decimal', null, array(
             'type' => 'decimal',
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