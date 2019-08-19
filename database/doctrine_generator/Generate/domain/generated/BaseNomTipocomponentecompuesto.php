<?php

/**
 * BaseNomTipocomponentecompuesto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idtipocomponentecompuesto
 * @property string $denominacion
 * @property string $tabla
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomTipocomponentecompuesto extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_tipocomponentecompuesto');
        $this->hasColumn('idtipocomponentecompuesto', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_metadata.sec_tipocomponentecompuesto_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('tabla', 'string', null, array(
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