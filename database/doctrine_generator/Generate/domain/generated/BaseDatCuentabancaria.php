<?php

/**
 * BaseDatCuentabancaria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcuentabancaria
 * @property string $numerocuenta
 * @property string $descripcion
 * @property date $fdesde
 * @property date $fhasta
 * @property decimal $idtipocuentabancaria
 * @property decimal $idpersona
 * @property decimal $idbanco
 * @property decimal $idmoneda
 * @property decimal $idtipoacreditacionsalario
 * @property decimal $codtipoid
 * @property ModPersona.datPersona $ModPersona.datPersona
 * @property ModPersonaext.nomTipoacreditacionsalario $ModPersonaext.nomTipoacreditacionsalario
 * @property ModPersonaext.nomTipocuentabancaria $ModPersonaext.nomTipocuentabancaria
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatCuentabancaria extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_cuentabancaria');
        $this->hasColumn('idcuentabancaria', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_cuentabancaria_seq',
             ));
        $this->hasColumn('numerocuenta', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('fdesde', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'now()',
             'primary' => false,
             ));
        $this->hasColumn('fhasta', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idtipocuentabancaria', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idbanco', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idmoneda', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idtipoacreditacionsalario', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('codtipoid', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));

        $this->hasOne('ModPersonaext.nomTipoacreditacionsalario', array(
             'local' => 'idtipoacreditacionsalario',
             'foreign' => 'idtipoacreditacionsalario'));

        $this->hasOne('ModPersonaext.nomTipocuentabancaria', array(
             'local' => 'idtipocuentabancaria',
             'foreign' => 'idtipocuentabancaria'));
    }
}