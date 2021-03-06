<?php

/**
 * BaseDatEscalacualitativa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idescalacualitativa
 * @property decimal $idescala
 * @property decimal $idvalorcualitativo
 * @property decimal $peso
 * @property ModRrhhmaestro.confEscala $ModRrhhmaestro.confEscala
 * @property ModRrhhmaestro.nomValorcualitativo $ModRrhhmaestro.nomValorcualitativo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatEscalacualitativa extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_escalacualitativa');
        $this->hasColumn('idescalacualitativa', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_rrhhmaestro.sec_escalacualitativa_seq',
             ));
        $this->hasColumn('idescala', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idvalorcualitativo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('peso', 'decimal', null, array(
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
        $this->hasOne('ModRrhhmaestro.confEscala', array(
             'local' => 'idescala',
             'foreign' => 'idescala'));

        $this->hasOne('ModRrhhmaestro.nomValorcualitativo', array(
             'local' => 'idvalorcualitativo',
             'foreign' => 'idvalorcualitativo'));
    }
}