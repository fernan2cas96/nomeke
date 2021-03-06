<?php

/**
 * BaseNomFila
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idfila
 * @property decimal $idusuario
 * @property ModSeguridad.segUsuario $ModSeguridad.segUsuario
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomFila extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_fila');
        $this->hasColumn('idfila', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_seguridad.sec_fila_seq',
             ));
        $this->hasColumn('idusuario', 'decimal', null, array(
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
        $this->hasOne('ModSeguridad.segUsuario', array(
             'local' => 'idusuario',
             'foreign' => 'idusuario'));
    }
}