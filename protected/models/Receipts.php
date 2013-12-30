<?php

/**
 * This is the model class for table "receipts".
 *
 * The followings are the available columns in table 'receipts':
 * @property string $receiptsNo
 * @property string $customerCode
 * @property string $amount
 * @property string $billNo
 * @property string $paymentType
 * @property string $billDate
 * @property string $entryDate
 * @property string $remarks
 * @property string $unitPrice
 * @property integer $purchaseReturn
 *
 * The followings are the available model relations:
 * @property Customers $customerCode0
 * @property Sale $billNo0
 */
class Receipts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Receipts the static model class
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
		return 'receipts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('purchaseReturn', 'numerical', 'integerOnly'=>true),
			array('customerCode', 'length', 'max'=>10),
			array('amount, unitPrice', 'length', 'max'=>7),
			array('billNo', 'length', 'max'=>20),
			array('paymentType', 'length', 'max'=>6),
			array('billDate, entryDate, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('receiptsNo, customerCode, amount, billNo, paymentType, billDate, entryDate, remarks, unitPrice, purchaseReturn', 'safe', 'on'=>'search'),
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
			'customerCode0' => array(self::BELONGS_TO, 'Customers', 'customerCode'),
			'billNo0' => array(self::BELONGS_TO, 'Sale', 'billNo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'receiptsNo' => 'Receipts No',
			'customerCode' => 'Customer Code',
			'amount' => 'Amount',
			'billNo' => 'Bill No',
			'paymentType' => 'Payment Type',
			'billDate' => 'Bill Date',
			'entryDate' => 'Entry Date',
			'remarks' => 'Remarks',
			'unitPrice' => 'Unit Price',
			'purchaseReturn' => 'Purchase Return',
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

		$criteria->compare('receiptsNo',$this->receiptsNo,true);
		$criteria->compare('customerCode',$this->customerCode,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('billNo',$this->billNo,true);
		$criteria->compare('paymentType',$this->paymentType,true);
		$criteria->compare('billDate',$this->billDate,true);
		$criteria->compare('entryDate',$this->entryDate,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('unitPrice',$this->unitPrice,true);
		$criteria->compare('purchaseReturn',$this->purchaseReturn);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}