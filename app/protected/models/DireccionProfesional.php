<?php

/**
 * This is the model class for table "DireccionProfesional".
 *
 * The followings are the available columns in table 'DireccionProfesional':
 * @property integer $idDireccionProfesional
 * @property string $institucion
 * @property string $direccionInstitucion
 * @property string $barrio
 * @property integer $codigoPostal
 * @property integer $apartadoPostal
 * @property integer $Ciudad_idCiudad
 * @property integer $telefonoFijo
 * @property integer $extension
 * @property string $emailInstitucional
 * @property string $paginaInstitucional
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadIdCiudad
 * @property Persona[] $personas
 */
class DireccionProfesional extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DireccionProfesional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institucion, direccionInstitucion, barrio, Ciudad_idCiudad, telefonoFijo, emailInstitucional', 'required'),
			array('codigoPostal, apartadoPostal, Ciudad_idCiudad, telefonoFijo, extension', 'numerical', 'integerOnly'=>true),
			array('institucion, emailInstitucional, paginaInstitucional', 'length', 'max'=>100),
			array('direccionInstitucion', 'length', 'max'=>35),
			array('barrio', 'length', 'max'=>50),
			array('emailInstitucional','email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDireccionProfesional, institucion, direccionInstitucion, barrio, codigoPostal, apartadoPostal, Ciudad_idCiudad, telefonoFijo, extension, emailInstitucional, paginaInstitucional', 'safe', 'on'=>'search'),
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
			'personas' => array(self::HAS_MANY, 'Persona', 'DireccionProfesional_idDireccionProfesional'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDireccionProfesional' => 'Id Direccion Profesional',
			'institucion' => 'Institucion',
			'direccionInstitucion' => 'Direccion Institucion',
			'barrio' => 'Barrio',
			'codigoPostal' => 'Codigo Postal',
			'apartadoPostal' => 'Apartado Postal',
			'Ciudad_idCiudad' => 'Ciudad Id Ciudad',
			'telefonoFijo' => 'Telefono Fijo',
			'extension' => 'Extension',
			'emailInstitucional' => 'Email Institucional',
			'paginaInstitucional' => 'Pagina Institucional',
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

		$criteria->compare('idDireccionProfesional',$this->idDireccionProfesional);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('direccionInstitucion',$this->direccionInstitucion,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('codigoPostal',$this->codigoPostal);
		$criteria->compare('apartadoPostal',$this->apartadoPostal);
		$criteria->compare('Ciudad_idCiudad',$this->Ciudad_idCiudad);
		$criteria->compare('telefonoFijo',$this->telefonoFijo);
		$criteria->compare('extension',$this->extension);
		$criteria->compare('emailInstitucional',$this->emailInstitucional,true);
		$criteria->compare('paginaInstitucional',$this->paginaInstitucional,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DireccionProfesional the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
