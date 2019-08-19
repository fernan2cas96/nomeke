<?php

/**
 * BaseDatPedido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idpedido
 * @property decimal $idtipoperiodo
 * @property decimal $idestructura
 * @property date $fpedido
 * @property ModFuerzatrabajo.nomTipoperiodo $ModFuerzatrabajo.nomTipoperiodo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatPedido extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_pedido');
        $this->hasColumn('idpedido', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_fuerzatrabajo.sec_pedido_seq',
             ));
        $this->hasColumn('idtipoperiodo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idestructura', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('fpedido', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModFuerzatrabajo.nomTipoperiodo', array(
             'local' => 'idtipoperiodo',
             'foreign' => 'idtipoperiodo'));
    }
}