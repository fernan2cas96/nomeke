<?php

/**
 * BaseSegRestricclaveacceso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idrestricclaveacceso
 * @property integer $diascaducidad
 * @property boolean $numerica
 * @property boolean $alfabetica
 * @property boolean $signo
 * @property integer $minimocaracter
 * @property integer $historico
 * @property boolean $mayuscula
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSegRestricclaveacceso extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('seg_restricclaveacceso');
        $this->hasColumn('idrestricclaveacceso', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_seguridad.sec_restricclaveacceso_seq',
             ));
        $this->hasColumn('diascaducidad', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('numerica', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('alfabetica', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => false,
             'primary' => false,
             ));
        $this->hasColumn('signo', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => false,
             'primary' => false,
             ));
        $this->hasColumn('minimocaracter', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('historico', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('mayuscula', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => false,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}