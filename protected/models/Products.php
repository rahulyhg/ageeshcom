<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property string $code
 * @property string $companyCode
 * @property string $description
 * @property string $name
 * @property integer $quantity
 * @property string $amount
 * @property string $retailAmount
 * @property string $distAmount
 * @property string $wholeAmount
 * @property string $retailerDate
 * @property string $wholeDate
 * @property string $distDate
 * @property string $tax
 * @property string $entry
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Company $companyCode0
 * @property PurchaseProducts[] $purchaseProducts
 * @property PurchaseReturn[] $purchaseReturns
 * @property SaleProducts[] $saleProducts
 */
class Products extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
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
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quantity', 'numerical', 'integerOnly'=>true),
			array('code, companyCode', 'length', 'max'=>10),
			array('description, name', 'length', 'max'=>250),
			array('amount, retailAmount, distAmount, wholeAmount, tax', 'length', 'max'=>7),
			array('status', 'length', 'max'=>9),
			array('retailerDate, wholeDate, distDate, entry', 'safe'),
			array('code, companyCode, name, amount, retailAmount, distAmount, wholeAmount, tax, retailerDate, wholeDate, distDate', 'required'),
			array('retailerDate, wholeDate, distDate','date','format'=> 'yyyy-mm-dd'),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('code, companyCode, description, name, quantity, amount, retailAmount, distAmount, wholeAmount, retailerDate, wholeDate, distDate, tax, entry, status', 'safe', 'on'=>'search'),
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
			'purchaseProducts' => array(self::HAS_MANY, 'PurchaseProducts', 'productCode'),
			'purchaseReturns' => array(self::HAS_MANY, 'PurchaseReturn', 'productCode'),
			'saleProducts' => array(self::HAS_MANY, 'SaleProducts', 'productCode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'code' => 'Code',
			'companyCode' => 'Company Code',
			'description' => 'Description',
			'name' => 'Name',
			'quantity' => 'Quantity',
			'amount' => 'Amount',
			'retailAmount' => 'Retail Amount',
			'distAmount' => 'Dist Amount',
			'wholeAmount' => 'Whole Amount',
			'retailerDate' => 'Retailer Date',
			'wholeDate' => 'Whole Date',
			'distDate' => 'Dist Date',
			'tax' => 'Tax',
			'entry' => 'Entry',
			'status' => 'Status',
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
		$criteria->compare('companyCode',$this->companyCode,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('retailAmount',$this->retailAmount,true);
		$criteria->compare('distAmount',$this->distAmount,true);
		$criteria->compare('wholeAmount',$this->wholeAmount,true);
		$criteria->compare('retailerDate',$this->retailerDate,true);
		$criteria->compare('wholeDate',$this->wholeDate,true);
		$criteria->compare('distDate',$this->distDate,true);
		$criteria->compare('tax',$this->tax,true);
		$criteria->compare('entry',$this->entry,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}