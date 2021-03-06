<?php

/**
 * BaseNomComplejidadtramite
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $id_complejidadtramite
 * @property string $nombre
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomComplejidadtramite extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_complejidadtramite');
        $this->hasColumn('id_complejidadtramite', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_sigesco.sec_id_complejidadtramite_seq',
             ));
        $this->hasColumn('nombre', 'string', null, array(
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