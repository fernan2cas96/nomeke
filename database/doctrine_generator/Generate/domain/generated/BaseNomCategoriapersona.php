<?php

/**
 * BaseNomCategoriapersona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property decimal $idcategoriapersona
 * @property string $denominacion
 * @property date $fdesde
 * @property date $fhasta
 * @property decimal $idpadre
 * @property string $alia
 * @property decimal $gestion
 * @property string $abreviatura
 * @property ModPersonaext.nomCategoriapersona $ModPersonaext.nomCategoriapersona
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseNomCategoriapersona extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nom_categoriapersona');
        $this->hasColumn('idcategoriapersona', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'mod_personaext.sec_categoriapersona_seq',
             ));
        $this->hasColumn('denominacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
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
        $this->hasColumn('idpadre', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('alia', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('gestion', 'decimal', null, array(
             'type' => 'decimal',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '1',
             'primary' => false,
             ));
        $this->hasColumn('abreviatura', 'string', null, array(
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
        $this->hasOne('ModPersonaext.nomCategoriapersona', array(
             'local' => 'idpadre',
             'foreign' => 'idcategoriapersona'));
    }
}