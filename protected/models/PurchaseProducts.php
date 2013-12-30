<?php

/**
 * This is the model class for table "purchase_products".
 *
 * The followings are the available columns in table 'purchase_products':
 * @property string $id
 * @property string $purchaseId
 * @property string $companyCode
 * @property string $productCode
 * @property integer $productQuantity
 * @property string $amount
 * @property string $taxAmount
 * @property string $unitPrice
 * @property string $discount
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property Purchase $purchase
 * @property Company $companyCode0
 * @property Products $productCode0
 */
class PurchaseProducts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseProducts the static model class
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
		return 'purchase_products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productQuantity', 'numerical', 'integerOnly'=>true),
			array('purchaseId', 'length', 'max'=>20),
			array('companyCode, productCode', 'length', 'max'=>10),
			array('amount, taxAmount, unitPrice, discount', 'length', 'max'=>7),
			array('remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, purchaseId, companyCode, productCode, productQuantity, amount, taxAmount, unitPrice, discount, remarks', 'safe', 'on'=>'search'),
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
			'purchase' => array(self::BELONGS_TO, 'Purchase', 'purchaseId'),
			'companyCode0' => array(self::BELONGS_TO, 'Company', 'companyCode'),
			'productCode0' => array(self::BELONGS_TO, 'Products', 'productCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'purchaseId' => 'Purchase',
			'companyCode' => 'Company Code',
			'productCode' => 'Product Code',
			'productQuantity' => 'Product Quantity',
			'amount' => 'Amount',
			'taxAmount' => 'Tax Amount',
			'unitPrice' => 'Unit Price',
			'discount' => 'Discount',
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
		$criteria->compare('purchaseId',$this->purchaseId,true);
		$criteria->compare('companyCode',$this->companyCode,true);
		$criteria->compare('productCode',$this->productCode,true);
		$criteria->compare('productQuantity',$this->productQuantity);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('taxAmount',$this->taxAmount,true);
		$criteria->compare('unitPrice',$this->unitPrice,true);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}