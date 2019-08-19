<?php

/**
 * BaseDatServicioEstrutura
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $id_servicio_estrutura
 * @property decimal $id_servicio
 * @property decimal $id_estructura
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatServicioEstrutura extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_servicio_estrutura');
        $this->hasColumn('id_servicio_estrutura', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_sigesco.sec_id_servicio_estructura_seq',
             ));
        $this->hasColumn('id_servicio', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('id_estructura', 'decimal', null, array(
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