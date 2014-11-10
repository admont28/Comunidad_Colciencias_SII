<?php

/**
 * This is the model class for table "Pais".
 *
 * The followings are the available columns in table 'Pais':
 * @property integer $idPais
 * @property string $nombrePais
 *
 * The followings are the available model relations:
 * @property Departamento[] $departamentos
 * @property Persona[] $personas
 * @property Persona[] $personas1
 */
class Pais extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName(){
		return 'Pais';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombrePais', 'required'),
			array('nombrePais', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPais, nombrePais', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'departamentos' => array(self::HAS_MANY, 'Departamento', 'Pais_idPais'),
			'personas' => array(self::HAS_MANY, 'Persona', 'nacionalidadPais_idPais'),
			'personas1' => array(self::HAS_MANY, 'Persona', 'expediciónPais_idPais'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'idPais' => 'Id Pais',
			'nombrePais' => 'Nombre Pais',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search(){
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idPais',$this->idPais);
		$criteria->compare('nombrePais',$this->nombrePais,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pais the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
}
