<?php

/**
 * BaseDatApariencia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idusuario
 * @property string $accesosdirectos
 * @property string $fondo
 * @property decimal $idapariencia
 * @property string $iniciosrapidos
 * @property string $iniciosautomaticos
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatApariencia extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_apariencia');
        $this->hasColumn('idusuario', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('accesosdirectos', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fondo', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idapariencia', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_portal.sec_apariencia_seq',
             ));
        $this->hasColumn('iniciosrapidos', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('iniciosautomaticos', 'string', null, array(
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