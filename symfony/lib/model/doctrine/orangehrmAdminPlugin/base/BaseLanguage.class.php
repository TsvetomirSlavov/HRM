<?php

/**
 * BaseLanguage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $name
 * @property Doctrine_Collection $EmployeeLanguage
 * 
 * @method string              getId()               Returns the current record's "id" value
 * @method string              getName()             Returns the current record's "name" value
 * @method Doctrine_Collection getEmployeeLanguage() Returns the current record's "EmployeeLanguage" collection
 * @method Language            setId()               Sets the current record's "id" value
 * @method Language            setName()             Sets the current record's "name" value
 * @method Language            setEmployeeLanguage() Sets the current record's "EmployeeLanguage" collection
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLanguage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_language');
        $this->hasColumn('id', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'autoincrement' => true,
             'length' => 13,
             ));
        $this->hasColumn('name', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('EmployeeLanguage', array(
             'local' => 'id',
             'foreign' => 'lang_id'));
    }
}