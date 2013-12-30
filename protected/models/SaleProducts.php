<?php

/**
 * This is the model class for table "sale_products".
 *
 * The followings are the available columns in table 'sale_products':
 * @property string $id
 * @property string $billNo
 * @property string $companyCode
 * @property string $productCode
 * @property integer $productQuantity
 * @property string $amount
 * @property string $taxAmount
 * @property string $unitPrice
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property Sale $billNo0
 * @property Company $companyCode0
 * @property Products $productCode0
 */
class SaleProducts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SaleProducts the static model class
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
		return 'sale_products';
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
			array('billNo', 'length', 'max'=>20),
			array('companyCode, productCode', 'length', 'max'=>10),
			array('amount, taxAmount, unitPrice', 'length', 'max'=>7),
			array('remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, billNo, companyCode, productCode, productQuantity, amount, taxAmount, unitPrice, remarks', 'safe', 'on'=>'search'),
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
			'billNo0' => array(self::BELONGS_TO, 'Sale', 'billNo'),
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
			'billNo' => 'Bill No',
			'companyCode' => 'Company Code',
			'productCode' => 'Product Code',
			'productQuantity' => 'Product Quantity',
			'amount' => 'Amount',
			'taxAmount' => 'Tax Amount',
			'unitPrice' => 'Unit Price',
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
		$criteria->compare('billNo',$this->billNo,true);
		$criteria->compare('companyCode',$this->companyCode,true);
		$criteria->compare('productCode',$this->productCode,true);
		$criteria->compare('productQuantity',$this->productQuantity);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('taxAmount',$this->taxAmount,true);
		$criteria->compare('unitPrice',$this->unitPrice,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}