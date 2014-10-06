<?php

/**
 * This is the model class for table "DireccionPersonal".
 *
 * The followings are the available columns in table 'DireccionPersonal':
 * @property integer $idDireccionPersonal
 * @property string $direccion
 * @property string $barrio
 * @property integer $codigoPostal
 * @property integer $Ciudad_idCiudad
 * @property integer $telefonoFijo
 * @property integer $telefonoMovil
 * @property integer $apartadoPostal
 * @property string $email
 * @property string $sitioWeb
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadIdCiudad
 * @property Persona[] $personas
 */
class DireccionPersonal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DireccionPersonal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idDireccionPersonal, direccion, barrio, Ciudad_idCiudad, telefonoFijo, email', 'required'),
			array('idDireccionPersonal, codigoPostal, Ciudad_idCiudad, telefonoFijo, telefonoMovil, apartadoPostal', 'numerical', 'integerOnly'=>true),
			array('direccion', 'length', 'max'=>35),
			array('barrio', 'length', 'max'=>50),
			array('email, sitioWeb', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDireccionPersonal, direccion, barrio, codigoPostal, Ciudad_idCiudad, telefonoFijo, telefonoMovil, apartadoPostal, email, sitioWeb', 'safe', 'on'=>'search'),
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
			'ciudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'Ciudad_idCiudad'),
			'personas' => array(self::HAS_MANY, 'Persona', 'DireccionPersonal_idDireccionPersonal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDireccionPersonal' => 'Id Direccion Personal',
			'direccion' => 'Direccion',
			'barrio' => 'Barrio',
			'codigoPostal' => 'Codigo Postal',
			'Ciudad_idCiudad' => 'Ciudad Id Ciudad',
			'telefonoFijo' => 'Telefono Fijo',
			'telefonoMovil' => 'Telefono Movil',
			'apartadoPostal' => 'Apartado Postal',
			'email' => 'Email',
			'sitioWeb' => 'Sitio Web',
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

		$criteria->compare('idDireccionPersonal',$this->idDireccionPersonal);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('codigoPostal',$this->codigoPostal);
		$criteria->compare('Ciudad_idCiudad',$this->Ciudad_idCiudad);
		$criteria->compare('telefonoFijo',$this->telefonoFijo);
		$criteria->compare('telefonoMovil',$this->telefonoMovil);
		$criteria->compare('apartadoPostal',$this->apartadoPostal);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sitioWeb',$this->sitioWeb,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DireccionPersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
