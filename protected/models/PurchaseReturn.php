<?php

/**
 * This is the model class for table "purchase_return".
 *
 * The followings are the available columns in table 'purchase_return':
 * @property string $id
 * @property string $customerCode
 * @property string $companyCode
 * @property string $productCode
 * @property integer $quantity
 * @property string $returnType
 * @property string $entryDate
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property Customers $customerCode0
 * @property Company $companyCode0
 * @property Products $productCode0
 */
class PurchaseReturn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseReturn the static model class
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
		return 'purchase_return';
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
			array('customerCode, companyCode, productCode', 'length', 'max'=>10),
			array('returnType', 'length', 'max'=>5),
			array('entryDate, remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customerCode, companyCode, productCode, quantity, returnType, entryDate, remarks', 'safe', 'on'=>'search'),
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
			'customerCode' => 'Customer Code',
			'companyCode' => 'Company Code',
			'productCode' => 'Product Code',
			'quantity' => 'Quantity',
			'returnType' => 'Return Type',
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
		$criteria->compare('customerCode',$this->customerCode,true);
		$criteria->compare('companyCode',$this->companyCode,true);
		$criteria->compare('productCode',$this->productCode,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('returnType',$this->returnType,true);
		$criteria->compare('entryDate',$this->entryDate,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}