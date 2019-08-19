<?php

/**
 * BaseDatExpresionmatematica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idexpresionmatematica
 * @property string $denominacion
 * @property string $expresionamostrar
 * @property string $expresionacalcular
 * @property string $expresionmostrarconformato
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatExpresionmatematica extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_expresionmatematica');
        $this->hasColumn('idexpresionmatematica', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_utiles.sec_expresionmatematica_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('expresionamostrar', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('expresionacalcular', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('expresionmostrarconformato', 'string', null, array(
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