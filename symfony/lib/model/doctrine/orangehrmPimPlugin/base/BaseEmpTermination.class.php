<?php

/**
 * BaseEmpTermination
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empNumber
 * @property integer $reasonId
 * @property date $date
 * @property string $note
 * @property Employee $Employee
 * @property Doctrine_Collection $TerminationReason
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method integer             getEmpNumber()         Returns the current record's "empNumber" value
 * @method integer             getReasonId()          Returns the current record's "reasonId" value
 * @method date                getDate()              Returns the current record's "date" value
 * @method string              getNote()              Returns the current record's "note" value
 * @method Employee            getEmployee()          Returns the current record's "Employee" value
 * @method Doctrine_Collection getTerminationReason() Returns the current record's "TerminationReason" collection
 * @method EmpTermination      setId()                Sets the current record's "id" value
 * @method EmpTermination      setEmpNumber()         Sets the current record's "empNumber" value
 * @method EmpTermination      setReasonId()          Sets the current record's "reasonId" value
 * @method EmpTermination      setDate()              Sets the current record's "date" value
 * @method EmpTermination      setNote()              Sets the current record's "note" value
 * @method EmpTermination      setEmployee()          Sets the current record's "Employee" value
 * @method EmpTermination      setTerminationReason() Sets the current record's "TerminationReason" collection
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpTermination extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_emp_termination');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('emp_number as empNumber', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('reason_id as reasonId', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('termination_date as date', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('note', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Employee', array(
             'local' => 'id',
             'foreign' => 'termination_id'));

        $this->hasMany('TerminationReason', array(
             'local' => 'reasonId',
             'foreign' => 'id'));
    }
}