<?php

/**
 * This is the model class for table "sale".
 *
 * The followings are the available columns in table 'sale':
 * @property string $billNo
 * @property string $customerCode
 * @property string $billAmount
 * @property string $discount
 * @property string $amount
 * @property string $entryDate
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property Receipts[] $receipts
 * @property Customers $customerCode0
 * @property SaleProducts[] $saleProducts
 */
class Sale extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sale the static model class
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
		return 'sale';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerCode', 'length', 'max'=>10),
			array('billAmount, discount, amount', 'length', 'max'=>7),
			array('entryDate, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('billNo, customerCode, billAmount, discount, amount, entryDate, remarks', 'safe', 'on'=>'search'),
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
			'receipts' => array(self::HAS_MANY, 'Receipts', 'billNo'),
			'customerCode0' => array(self::BELONGS_TO, 'Customers', 'customerCode'),
			'saleProducts' => array(self::HAS_MANY, 'SaleProducts', 'billNo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'billNo' => 'Bill No',
			'customerCode' => 'Customer Code',
			'billAmount' => 'Bill Amount',
			'discount' => 'Discount',
			'amount' => 'Amount',
			'entryDate' => 'Entry Date',
			'remarks' => 'Remarks',
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

		$criteria->compare('billNo',$this->billNo,true);
		$criteria->compare('customerCode',$this->customerCode,true);
		$criteria->compare('billAmount',$this->billAmount,true);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('entryDate',$this->entryDate,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}