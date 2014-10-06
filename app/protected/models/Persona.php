<?php

/**
 * This is the model class for table "Persona".
 *
 * The followings are the available columns in table 'Persona':
 * @property integer $idPersona
 * @property string $cedulaPersona
 * @property string $nombrePersona
 * @property string $primerApellidoPersona
 * @property string $segundoApellidoPersona
 * @property string $nombreCitasBliblioPersona
 * @property string $tipoDocumentoPersona
 * @property integer $nacionalidadPais_idPais
 * @property integer $expediciónPais_idPais
 * @property string $fechaExpedicionDoc
 * @property string $sexoPersona
 * @property integer $nacimientoCiudad_idCiudad
 * @property string $fechaNacimientoPersona
 * @property string $usuarioSIICPersona
 * @property string $contraseñaSIICPersona
 * @property string $estadoCivilPersona
 * @property integer $DireccionPersonal_idDireccionPersonal
 * @property integer $DireccionProfesional_idDireccionProfesional
 * @property integer $FormacionAcademica_idFormacionAcademica
 * @property integer $Idioma_idIdioma
 * @property integer $FormacionComplementaria_idFormacionComplementaria
 *
 * The followings are the available model relations:
 * @property Ciudad $nacimientoCiudadIdCiudad
 * @property DireccionPersonal $direccionPersonalIdDireccionPersonal
 * @property DireccionProfesional $direccionProfesionalIdDireccionProfesional
 * @property FormacionAcademica $formacionAcademicaIdFormacionAcademica
 * @property FormacionComplementaria $formacionComplementariaIdFormacionComplementaria
 * @property Idioma $idiomaIdIdioma
 * @property Pais $nacionalidadPaisIdPais
 * @property Pais $expediciónPaisIdPais
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedulaPersona, nombrePersona, primerApellidoPersona, tipoDocumentoPersona, nacionalidadPais_idPais, expediciónPais_idPais, fechaExpedicionDoc, sexoPersona, nacimientoCiudad_idCiudad, fechaNacimientoPersona, usuarioSIICPersona, contraseñaSIICPersona', 'required'),
			array('nacionalidadPais_idPais, expediciónPais_idPais, nacimientoCiudad_idCiudad, DireccionPersonal_idDireccionPersonal, DireccionProfesional_idDireccionProfesional, FormacionAcademica_idFormacionAcademica, Idioma_idIdioma, FormacionComplementaria_idFormacionComplementaria', 'numerical', 'integerOnly'=>true),
			array('cedulaPersona, primerApellidoPersona, segundoApellidoPersona, tipoDocumentoPersona', 'length', 'max'=>25),
			array('nombrePersona, usuarioSIICPersona, contraseñaSIICPersona', 'length', 'max'=>50),
			array('nombreCitasBliblioPersona', 'length', 'max'=>80),
			array('fechaExpedicionDoc, estadoCivilPersona', 'length', 'max'=>45),
			array('sexoPersona', 'length', 'max'=>9),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPersona, cedulaPersona, nombrePersona, primerApellidoPersona, segundoApellidoPersona, nombreCitasBliblioPersona, tipoDocumentoPersona, nacionalidadPais_idPais, expediciónPais_idPais, fechaExpedicionDoc, sexoPersona, nacimientoCiudad_idCiudad, fechaNacimientoPersona, usuarioSIICPersona, contraseñaSIICPersona, estadoCivilPersona, DireccionPersonal_idDireccionPersonal, DireccionProfesional_idDireccionProfesional, FormacionAcademica_idFormacionAcademica, Idioma_idIdioma, FormacionComplementaria_idFormacionComplementaria', 'safe', 'on'=>'search'),
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
			'nacimientoCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'nacimientoCiudad_idCiudad'),
			'direccionPersonalIdDireccionPersonal' => array(self::BELONGS_TO, 'DireccionPersonal', 'DireccionPersonal_idDireccionPersonal'),
			'direccionProfesionalIdDireccionProfesional' => array(self::BELONGS_TO, 'DireccionProfesional', 'DireccionProfesional_idDireccionProfesional'),
			'formacionAcademicaIdFormacionAcademica' => array(self::BELONGS_TO, 'FormacionAcademica', 'FormacionAcademica_idFormacionAcademica'),
			'formacionComplementariaIdFormacionComplementaria' => array(self::BELONGS_TO, 'FormacionComplementaria', 'FormacionComplementaria_idFormacionComplementaria'),
			'idiomaIdIdioma' => array(self::BELONGS_TO, 'Idioma', 'Idioma_idIdioma'),
			'nacionalidadPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'nacionalidadPais_idPais'),
			'expediciónPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'expediciónPais_idPais'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPersona' => 'Id Persona',
			'cedulaPersona' => 'Cedula Persona',
			'nombrePersona' => 'Nombre Persona',
			'primerApellidoPersona' => 'Primer Apellido Persona',
			'segundoApellidoPersona' => 'Segundo Apellido Persona',
			'nombreCitasBliblioPersona' => 'Nombre Citas Bliblio Persona',
			'tipoDocumentoPersona' => 'Tipo Documento Persona',
			'nacionalidadPais_idPais' => 'Nacionalidad Pais Id Pais',
			'expediciónPais_idPais' => 'Expedición Pais Id Pais',
			'fechaExpedicionDoc' => 'Fecha Expedicion Doc',
			'sexoPersona' => 'Sexo Persona',
			'nacimientoCiudad_idCiudad' => 'Nacimiento Ciudad Id Ciudad',
			'fechaNacimientoPersona' => 'Fecha Nacimiento Persona',
			'usuarioSIICPersona' => 'Usuario Siicpersona',
			'contraseñaSIICPersona' => 'Contraseña Siicpersona',
			'estadoCivilPersona' => 'Estado Civil Persona',
			'DireccionPersonal_idDireccionPersonal' => 'Direccion Personal Id Direccion Personal',
			'DireccionProfesional_idDireccionProfesional' => 'Direccion Profesional Id Direccion Profesional',
			'FormacionAcademica_idFormacionAcademica' => 'Formacion Academica Id Formacion Academica',
			'Idioma_idIdioma' => 'Idioma Id Idioma',
			'FormacionComplementaria_idFormacionComplementaria' => 'Formacion Complementaria Id Formacion Complementaria',
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

		$criteria->compare('idPersona',$this->idPersona);
		$criteria->compare('cedulaPersona',$this->cedulaPersona,true);
		$criteria->compare('nombrePersona',$this->nombrePersona,true);
		$criteria->compare('primerApellidoPersona',$this->primerApellidoPersona,true);
		$criteria->compare('segundoApellidoPersona',$this->segundoApellidoPersona,true);
		$criteria->compare('nombreCitasBliblioPersona',$this->nombreCitasBliblioPersona,true);
		$criteria->compare('tipoDocumentoPersona',$this->tipoDocumentoPersona,true);
		$criteria->compare('nacionalidadPais_idPais',$this->nacionalidadPais_idPais);
		$criteria->compare('expediciónPais_idPais',$this->expediciónPais_idPais);
		$criteria->compare('fechaExpedicionDoc',$this->fechaExpedicionDoc,true);
		$criteria->compare('sexoPersona',$this->sexoPersona,true);
		$criteria->compare('nacimientoCiudad_idCiudad',$this->nacimientoCiudad_idCiudad);
		$criteria->compare('fechaNacimientoPersona',$this->fechaNacimientoPersona,true);
		$criteria->compare('usuarioSIICPersona',$this->usuarioSIICPersona,true);
		$criteria->compare('contraseñaSIICPersona',$this->contraseñaSIICPersona,true);
		$criteria->compare('estadoCivilPersona',$this->estadoCivilPersona,true);
		$criteria->compare('DireccionPersonal_idDireccionPersonal',$this->DireccionPersonal_idDireccionPersonal);
		$criteria->compare('DireccionProfesional_idDireccionProfesional',$this->DireccionProfesional_idDireccionProfesional);
		$criteria->compare('FormacionAcademica_idFormacionAcademica',$this->FormacionAcademica_idFormacionAcademica);
		$criteria->compare('Idioma_idIdioma',$this->Idioma_idIdioma);
		$criteria->compare('FormacionComplementaria_idFormacionComplementaria',$this->FormacionComplementaria_idFormacionComplementaria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
