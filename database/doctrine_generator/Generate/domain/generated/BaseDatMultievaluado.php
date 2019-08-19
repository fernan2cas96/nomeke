<?php

/**
 * BaseDatMultievaluado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $valor
 * @property string $denominacion
 * @property decimal $idcampo
 * @property ModReccomplejas2.datCampo $ModReccomplejas2.datCampo
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatMultievaluado extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_multievaluado');
        $this->hasColumn('valor', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idcampo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModReccomplejas2.datCampo', array(
             'local' => 'idcampo',
             'foreign' => 'idcampo'));
    }
}