<?php

/**
 * BaseDatEstadosalud
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idestadosalud
 * @property decimal $idpersona
 * @property decimal $estadosalud
 * @property decimal $idaptitudfisica
 * @property string $limitacion
 * @property ModPersonaext.nomAptitudfisica $ModPersonaext.nomAptitudfisica
 * @property ModPersona.datPersona $ModPersona.datPersona
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatEstadosalud extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_estadosalud');
        $this->hasColumn('idestadosalud', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_estadosalud_seq',
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('estadosalud', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
        $this->hasColumn('idaptitudfisica', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('limitacion', 'string', null, array(
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
        $this->hasOne('ModPersonaext.nomAptitudfisica', array(
             'local' => 'idaptitudfisica',
             'foreign' => 'idaptitudfisica'));

        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));
    }
}