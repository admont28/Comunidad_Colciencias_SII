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
 * @property string $dirProInstitucion
 * @property string $dirProDireccionInstitucion
 * @property string $dirProBarrio
 * @property integer $dirProCodigoPostal
 * @property integer $dirProApartadoPostal
 * @property integer $dirProTelefonoFijo
 * @property integer $dirProExtension
 * @property string $dirProEmailInstitucional
 * @property string $dirProPaginaInstitucional
 * @property integer $dirProCiudad_idCiudad
 * @property string $dirPerDireccion
 * @property string $dirPerBarrio
 * @property integer $dirPerCodigoPostal
 * @property integer $dirPerTelefonoFijo
 * @property integer $dirPerTelefonoMovil
 * @property integer $dirPerApartadoPostal
 * @property string $dirPerEmail
 * @property string $dirPerSitioWeb
 * @property integer $dirPerCiudad_idCiudad
 *
 * The followings are the available model relations:
 * @property FormacionAcademica[] $formacionAcademicas
 * @property Ciudad $nacimientoCiudadIdCiudad
 * @property Ciudad $dirProCiudadIdCiudad
 * @property Ciudad $dirPerCiudadIdCiudad
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
			array('cedulaPersona, nombrePersona, primerApellidoPersona, tipoDocumentoPersona, nacionalidadPais_idPais, expediciónPais_idPais, fechaExpedicionDoc, sexoPersona, nacimientoCiudad_idCiudad, fechaNacimientoPersona, usuarioSIICPersona, contraseñaSIICPersona, dirProInstitucion, dirProDireccionInstitucion, dirProBarrio, dirProTelefonoFijo, dirProEmailInstitucional, dirProCiudad_idCiudad, dirPerDireccion, dirPerBarrio, dirPerTelefonoFijo, dirPerEmail, dirPerCiudad_idCiudad', 'required'),
			array('nacionalidadPais_idPais, expediciónPais_idPais, nacimientoCiudad_idCiudad, dirProCodigoPostal, dirProApartadoPostal, dirProTelefonoFijo, dirProExtension, dirProCiudad_idCiudad, dirPerCodigoPostal, dirPerTelefonoFijo, dirPerTelefonoMovil, dirPerApartadoPostal, dirPerCiudad_idCiudad', 'numerical', 'integerOnly'=>true),
			array('cedulaPersona, primerApellidoPersona, segundoApellidoPersona, tipoDocumentoPersona', 'length', 'max'=>25),
			array('nombrePersona, usuarioSIICPersona, contraseñaSIICPersona, dirProBarrio, dirPerBarrio', 'length', 'max'=>50),
			array('nombreCitasBliblioPersona', 'length', 'max'=>80),
			array('fechaExpedicionDoc, estadoCivilPersona', 'length', 'max'=>45),
			array('sexoPersona', 'length', 'max'=>9),
			array('dirProInstitucion, dirProEmailInstitucional, dirProPaginaInstitucional, dirPerEmail, dirPerSitioWeb', 'length', 'max'=>100),
			array('dirProDireccionInstitucion, dirPerDireccion', 'length', 'max'=>35),
			array('dirProEmailInstitucional, dirPerEmail','email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedulaPersona, nombrePersona, primerApellidoPersona, segundoApellidoPersona, nombreCitasBliblioPersona', 'safe', 'on'=>'search'),
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
			'formacionAcademicas' => array(self::HAS_MANY, 'FormacionAcademica', 'Persona_idPersona'),
			'nacimientoCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'nacimientoCiudad_idCiudad'),
			'dirProCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'dirProCiudad_idCiudad'),
			'dirPerCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'dirPerCiudad_idCiudad'),
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
			'dirProInstitucion' => 'Dir Pro Institucion',
			'dirProDireccionInstitucion' => 'Dir Pro Direccion Institucion',
			'dirProBarrio' => 'Dir Pro Barrio',
			'dirProCodigoPostal' => 'Dir Pro Codigo Postal',
			'dirProApartadoPostal' => 'Dir Pro Apartado Postal',
			'dirProTelefonoFijo' => 'Dir Pro Telefono Fijo',
			'dirProExtension' => 'Dir Pro Extension',
			'dirProEmailInstitucional' => 'Dir Pro Email Institucional',
			'dirProPaginaInstitucional' => 'Dir Pro Pagina Institucional',
			'dirProCiudad_idCiudad' => 'Dir Pro Ciudad Id Ciudad',
			'dirPerDireccion' => 'Dir Per Direccion',
			'dirPerBarrio' => 'Dir Per Barrio',
			'dirPerCodigoPostal' => 'Dir Per Codigo Postal',
			'dirPerTelefonoFijo' => 'Dir Per Telefono Fijo',
			'dirPerTelefonoMovil' => 'Dir Per Telefono Movil',
			'dirPerApartadoPostal' => 'Dir Per Apartado Postal',
			'dirPerEmail' => 'Dir Per Email',
			'dirPerSitioWeb' => 'Dir Per Sitio Web',
			'dirPerCiudad_idCiudad' => 'Dir Per Ciudad Id Ciudad',
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
		$criteria->compare('dirProInstitucion',$this->dirProInstitucion,true);
		$criteria->compare('dirProDireccionInstitucion',$this->dirProDireccionInstitucion,true);
		$criteria->compare('dirProBarrio',$this->dirProBarrio,true);
		$criteria->compare('dirProCodigoPostal',$this->dirProCodigoPostal);
		$criteria->compare('dirProApartadoPostal',$this->dirProApartadoPostal);
		$criteria->compare('dirProTelefonoFijo',$this->dirProTelefonoFijo);
		$criteria->compare('dirProExtension',$this->dirProExtension);
		$criteria->compare('dirProEmailInstitucional',$this->dirProEmailInstitucional,true);
		$criteria->compare('dirProPaginaInstitucional',$this->dirProPaginaInstitucional,true);
		$criteria->compare('dirProCiudad_idCiudad',$this->dirProCiudad_idCiudad);
		$criteria->compare('dirPerDireccion',$this->dirPerDireccion,true);
		$criteria->compare('dirPerBarrio',$this->dirPerBarrio,true);
		$criteria->compare('dirPerCodigoPostal',$this->dirPerCodigoPostal);
		$criteria->compare('dirPerTelefonoFijo',$this->dirPerTelefonoFijo);
		$criteria->compare('dirPerTelefonoMovil',$this->dirPerTelefonoMovil);
		$criteria->compare('dirPerApartadoPostal',$this->dirPerApartadoPostal);
		$criteria->compare('dirPerEmail',$this->dirPerEmail,true);
		$criteria->compare('dirPerSitioWeb',$this->dirPerSitioWeb,true);
		$criteria->compare('dirPerCiudad_idCiudad',$this->dirPerCiudad_idCiudad);

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
