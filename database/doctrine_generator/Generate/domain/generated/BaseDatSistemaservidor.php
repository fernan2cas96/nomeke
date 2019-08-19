<?php

/**
 * BaseDatSistemaservidor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idbd
 * @property decimal $idsistema
 * @property decimal $idesquema
 * @property decimal $idservidor
 * @property decimal $idgestor
 * @property ModSeguridad.datBd $ModSeguridad.datBd
 * @property ModSeguridad.datEsquema $ModSeguridad.datEsquema
 * @property ModSeguridad.datGestor $ModSeguridad.datGestor
 * @property ModSeguridad.datServidor $ModSeguridad.datServidor
 * @property ModSeguridad.datSistema $ModSeguridad.datSistema
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSistemaservidor extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_sistemaservidor');
        $this->hasColumn('idbd', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idsistema', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idesquema', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idservidor', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
        $this->hasColumn('idgestor', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModSeguridad.datBd', array(
             'local' => 'idbd',
             'foreign' => 'idbd'));

        $this->hasOne('ModSeguridad.datEsquema', array(
             'local' => 'idesquema',
             'foreign' => 'idesquema'));

        $this->hasOne('ModSeguridad.datGestor', array(
             'local' => 'idgestor',
             'foreign' => 'idgestor'));

        $this->hasOne('ModSeguridad.datServidor', array(
             'local' => 'idservidor',
             'foreign' => 'idservidor'));

        $this->hasOne('ModSeguridad.datSistema', array(
             'local' => 'idsistema',
             'foreign' => 'idsistema'));
    }
}