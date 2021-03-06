<?php

/**
 * BaseDatCategoria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcategoria
 * @property decimal $idcategoriapersona
 * @property decimal $idpersona
 * @property date $fdesde
 * @property date $fhasta
 * @property decimal $principal
 * @property ModPersonaext.nomCategoriapersona $ModPersonaext.nomCategoriapersona
 * @property ModPersona.datPersona $ModPersona.datPersona
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatCategoria extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_categoria');
        $this->hasColumn('idcategoria', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_categoriap_seq',
             ));
        $this->hasColumn('idcategoriapersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('idpersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('fdesde', 'date', null, array(
             'type' => 'date',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
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
        $this->hasColumn('principal', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ModPersonaext.nomCategoriapersona', array(
             'local' => 'idcategoriapersona',
             'foreign' => 'idcategoriapersona'));

        $this->hasOne('ModPersona.datPersona', array(
             'local' => 'idpersona',
             'foreign' => 'idpersona'));
    }
}