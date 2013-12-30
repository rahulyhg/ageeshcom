<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property string $code
 * @property string $name
 * @property string $address
 * @property string $tin
 * @property string $telephone
 * @property string $cusType
 * @property string $status
 * @property string $pendingAmount
 * @property string $remarks
 * @property string $routeCode
 *
 * The followings are the available model relations:
 * @property Routes $routeCode0
 * @property PurchaseReturn[] $purchaseReturns
 * @property Receipts[] $receipts
 * @property Sale[] $sales
 */
class Customers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Customers the static model class
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
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code', 'length', 'max'=>10),
			array('name', 'length', 'max'=>250),
			array('tin, telephone', 'length', 'max'=>25),
			array('cusType', 'length', 'max'=>1),
			array('status', 'length', 'max'=>9),
			array('pendingAmount', 'length', 'max'=>7),
			array('routeCode', 'length', 'max'=>20),
			array('address, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('code, name, address, tin, telephone, cusType, status, pendingAmount, remarks, routeCode', 'safe', 'on'=>'search'),
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
			'routeCode0' => array(self::BELONGS_TO, 'Routes', 'routeCode'),
			'purchaseReturns' => array(self::HAS_MANY, 'PurchaseReturn', 'customerCode'),
			'receipts' => array(self::HAS_MANY, 'Receipts', 'customerCode'),
			'sales' => array(self::HAS_MANY, 'Sale', 'customerCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'code' => 'Code',
			'name' => 'Name',
			'address' => 'Address',
			'tin' => 'Tin',
			'telephone' => 'Telephone',
			'cusType' => 'Cus Type',
			'status' => 'Status',
			'pendingAmount' => 'Pending Amount',
			'remarks' => 'Remarks',
			'routeCode' => 'Route Code',
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

		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tin',$this->tin,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('cusType',$this->cusType,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('pendingAmount',$this->pendingAmount,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('routeCode',$this->routeCode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}