<?php

/**
 * BaseDatFenotipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idfenotipo
 * @property decimal $idpersona
 * @property decimal $idcolorojos
 * @property decimal $idcolorpiel
 * @property decimal $idcolorpelo
 * @property decimal $pesocorporal
 * @property decimal $estatura
 * @property string $observaciones
 * @property decimal $idgruposanguineo
 * @property ModPersona.nomColorojos $ModPersona.nomColorojos
 * @property ModPersona.nomColorpelo $ModPersona.nomColorpelo
 * @property ModPersona.nomColorpiel $ModPersona.nomColorpiel
 * @property ModPersona.nomGruposanguineo $ModPersona.nomGruposanguineo
 * @property ModPersona.datPersona $ModPersona.datPersona
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatFenotipo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_fenotipo');
        $this->hasColumn('idfenotipo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_persona.sec_fenotipo_seq',
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idcolorojos', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idcolorpiel', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idcolorpelo', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('pesocorporal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('estatura', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('observaciones', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('idgruposanguineo', 'decimal', null, array(
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
        $this->hasOne('ModPersona.nomColorojos', array(
             'local' => 'idcolorojos',
             'foreign' => 'idcolorojos'));

        $this->hasOne('ModPersona.nomColorpelo', array(
             'local' => 'idcolorpelo',
             'foreign' => 'idcolorpelo'));

        $this->hasOne('ModPersona.nomColorpiel', array(
             'local' => 'idcolorpiel',
             'foreign' => 'idcolorpiel'));

        $this->hasOne('ModPersona.nomGruposanguineo', array(
             'local' => 'idgruposanguineo',
             'foreign' => 'idgruposanguineo'));

        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));
    }
}