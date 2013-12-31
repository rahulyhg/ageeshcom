<?php

/**
 * This is the model class for table "expenses".
 *
 * The followings are the available columns in table 'expenses':
 * @property string $id
 * @property string $expenseType
 * @property string $amount
 * @property string $remarks
 * @property string $entryDate
 *
 * The followings are the available model relations:
 * @property ExpenseTypes $expenseType0
 */
class Expenses extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Expenses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expenses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('expenseType', 'length', 'max'=>20),
			array('amount', 'length', 'max'=>7),
			array('remarks, entryDate', 'safe'),
			array('amount', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, expenseType, amount, remarks, entryDate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'expenseType0' => array(self::BELONGS_TO, 'ExpenseTypes', 'expenseType'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'expenseType' => 'Expense Type',
			'amount' => 'Amount',
			'remarks' => 'Remarks',
			'entryDate' => 'Entry Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('expenseType',$this->expenseType,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('entryDate',$this->entryDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}