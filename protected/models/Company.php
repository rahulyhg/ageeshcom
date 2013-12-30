<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property string $code
 * @property string $name
 * @property string $address
 * @property string $startDate
 * @property string $endDate
 * @property string $tin
 * @property string $companyTelephone
 * @property string $executiveName
 * @property string $executivePhone
 * @property string $status
 * @property string $statusDate
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property Products[] $products
 * @property Purchase[] $purchases
 * @property PurchaseProducts[] $purchaseProducts
 * @property PurchaseReturn[] $purchaseReturns
 * @property SaleProducts[] $saleProducts
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return 'company';
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
			array('tin, companyTelephone', 'length', 'max'=>25),
			array('executiveName, executivePhone', 'length', 'max'=>50),
			array('status', 'length', 'max'=>9),
			array('address, startDate, endDate, statusDate, remarks', 'safe'),
			array('code,name,tin,address,status,startDate, endDate, statusDate', 'required'),
			array('startDate, endDate, statusDate','date','format'=> 'yyyy-mm-dd'),
			
			// The following rule is used by search()
			// Please remove those attributes that should not be searched.
			array('code, name, address, startDate, endDate, tin, companyTelephone, executiveName, executivePhone, status, statusDate, remarks', 'safe', 'on'=>'search'),
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
			'products' => array(self::HAS_MANY, 'Products', 'companyCode'),
			'purchases' => array(self::HAS_MANY, 'Purchase', 'companyCode'),
			'purchaseProducts' => array(self::HAS_MANY, 'PurchaseProducts', 'companyCode'),
			'purchaseReturns' => array(self::HAS_MANY, 'PurchaseReturn', 'companyCode'),
			'saleProducts' => array(self::HAS_MANY, 'SaleProducts', 'companyCode'),
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
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'tin' => 'Tin',
			'companyTelephone' => 'Company Telephone',
			'executiveName' => 'Executive Name',
			'executivePhone' => 'Executive Phone',
			'status' => 'Status',
			'statusDate' => 'Status Date',
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

		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('tin',$this->tin,true);
		$criteria->compare('companyTelephone',$this->companyTelephone,true);
		$criteria->compare('executiveName',$this->executiveName,true);
		$criteria->compare('executivePhone',$this->executivePhone,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('statusDate',$this->statusDate,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}