<?php

/**
 * This is the model class for table "purchase".
 *
 * The followings are the available columns in table 'purchase':
 * @property string $id
 * @property string $companyCode
 * @property string $purchaseBillNumber
 * @property string $amount
 * @property string $discount
 * @property string $billDate
 * @property string $entryDate
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property Company $companyCode0
 * @property PurchaseProducts[] $purchaseProducts
 */
class Purchase extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Purchase the static model class
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
		return 'purchase';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('companyCode', 'length', 'max'=>10),
			array('purchaseBillNumber', 'length', 'max'=>50),
			array('amount, discount', 'length', 'max'=>7),
			array('billDate, entryDate, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, companyCode, purchaseBillNumber, amount, discount, billDate, entryDate, remarks', 'safe', 'on'=>'search'),
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
			'companyCode0' => array(self::BELONGS_TO, 'Company', 'companyCode'),
			'purchaseProducts' => array(self::HAS_MANY, 'PurchaseProducts', 'purchaseId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'companyCode' => 'Company Code',
			'purchaseBillNumber' => 'Purchase Bill Number',
			'amount' => 'Amount',
			'discount' => 'Discount',
			'billDate' => 'Bill Date',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('companyCode',$this->companyCode,true);
		$criteria->compare('purchaseBillNumber',$this->purchaseBillNumber,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('billDate',$this->billDate,true);
		$criteria->compare('entryDate',$this->entryDate,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}