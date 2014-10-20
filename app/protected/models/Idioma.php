<?php

/**
 * This is the model class for table "Idioma".
 *
 * The followings are the available columns in table 'Idioma':
 * @property integer $idIdioma
 * @property string $nombreIdioma
 * @property string $nivelEscritura
 * @property string $nivelLectura
 * @property string $nivelHabla
 * @property string $nivelEscucha
 *
 * The followings are the available model relations:
 * @property Persona[] $personas
 */
class Idioma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Idioma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreIdioma', 'length', 'max'=>45),
			array('nivelEscritura, nivelLectura, nivelHabla, nivelEscucha', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idIdioma, nombreIdioma, nivelEscritura, nivelLectura, nivelHabla, nivelEscucha', 'safe', 'on'=>'search'),
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
			'personas' => array(self::HAS_MANY, 'Persona', 'Idioma_idIdioma'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idIdioma' => 'Id Idioma',
			'nombreIdioma' => 'Nombre Idioma',
			'nivelEscritura' => 'Nivel Escritura',
			'nivelLectura' => 'Nivel Lectura',
			'nivelHabla' => 'Nivel Habla',
			'nivelEscucha' => 'Nivel Escucha',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idIdioma',$this->idIdioma);
		$criteria->compare('nombreIdioma',$this->nombreIdioma,true);
		$criteria->compare('nivelEscritura',$this->nivelEscritura,true);
		$criteria->compare('nivelLectura',$this->nivelLectura,true);
		$criteria->compare('nivelHabla',$this->nivelHabla,true);
		$criteria->compare('nivelEscucha',$this->nivelEscucha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Idioma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
