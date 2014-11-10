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
 * @property integer $nacimientoPais_idPais
 * @property integer $nacimientoDepartamento_idDepartamento
 * @property integer $nacimientoCiudad_idCiudad
 * @property string $fechaExpedicionDoc
 * @property string $sexoPersona
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
 * @property integer $dirProPais_idPais
 * @property integer $dirProDepartamento_idDepartamento
 * @property integer $dirProCiudad_idCiudad
 * @property string $dirPerDireccion
 * @property string $dirPerBarrio
 * @property integer $dirPerCodigoPostal
 * @property integer $dirPerTelefonoFijo
 * @property integer $dirPerTelefonoMovil
 * @property integer $dirPerApartadoPostal
 * @property string $dirPerEmail
 * @property string $dirPerSitioWeb
 * @property integer $dirPerPais_idPais
 * @property integer $dirPerDepartamento_idDepartamento
 * @property integer $dirPerCiudad_idCiudad
 * @property integer $participacionProyectos_idProyectos
 *
 * The followings are the available model relations:
 * @property FormacionAcademica[] $formacionAcademicas
 * @property Ciudad $nacimientoCiudadIdCiudad
 * @property Ciudad $dirProCiudadIdCiudad
 * @property Ciudad $dirPerCiudadIdCiudad
 * @property Departamento $nacimientoDepartamentoIdDepartamento
 * @property Departamento $dirProDepartamentoIdDepartamento
 * @property Departamento $dirPerDepartamentoIdDepartamento
 * @property Pais $nacionalidadPaisIdPais
 * @property Pais $expediciónPaisIdPais
 * @property Pais $nacimientoPaisIdPais
 * @property Pais $dirProPaisIdPais
 * @property Pais $dirPerPaisIdPais
 * @property Proyectos $participacionProyectosIdProyectos
 * @property Proyectos[] $proyectoses
 */
class Persona extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName(){
		return 'Persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedulaPersona, nombrePersona, primerApellidoPersona, tipoDocumentoPersona, nacionalidadPais_idPais, expediciónPais_idPais, nacimientoPais_idPais, nacimientoDepartamento_idDepartamento, nacimientoCiudad_idCiudad, fechaExpedicionDoc, sexoPersona, nacimientoCiudad_idCiudad, fechaNacimientoPersona, usuarioSIICPersona, contraseñaSIICPersona, dirProInstitucion, dirProDireccionInstitucion, dirProBarrio, dirProTelefonoFijo, dirProEmailInstitucional, dirProPais_idPais, dirProDepartamento_idDepartamento, dirProCiudad_idCiudad, dirPerDireccion, dirPerBarrio, dirPerTelefonoFijo, dirPerEmail, dirPerPais_idPais, dirPerDepartamento_idDepartamento, dirPerCiudad_idCiudad', 'required','message'=>  Yii::t('es', 'El campo no puede quedar en blanco')),
			array('nacionalidadPais_idPais, expediciónPais_idPais, nacimientoPais_idPais, nacimientoDepartamento_idDepartamento, nacimientoCiudad_idCiudad, dirProCodigoPostal, dirProApartadoPostal, dirProTelefonoFijo, dirProExtension, dirProPais_idPais, dirProDepartamento_idDepartamento, dirProCiudad_idCiudad, dirPerCodigoPostal, dirPerTelefonoFijo, dirPerTelefonoMovil, dirPerApartadoPostal, dirPerPais_idPais, dirPerDepartamento_idDepartamento, dirPerCiudad_idCiudad', 'numerical', 'integerOnly'=>true ,'message'=>  Yii::t('es', 'El campo debe ser un número entero')),
			array('cedulaPersona, primerApellidoPersona, segundoApellidoPersona, tipoDocumentoPersona', 'length', 'max'=>25),
			array('nombrePersona, usuarioSIICPersona, contraseñaSIICPersona, dirProBarrio, dirPerBarrio', 'length', 'max'=>50),
			array('nombreCitasBliblioPersona', 'length', 'max'=>80),
			array('fechaExpedicionDoc, estadoCivilPersona', 'length', 'max'=>45),
			array('sexoPersona', 'length', 'max'=>9),
			array('dirProInstitucion, dirProEmailInstitucional, dirProPaginaInstitucional, dirPerEmail, dirPerSitioWeb', 'length', 'max'=>100),
			array('dirProDireccionInstitucion, dirPerDireccion', 'length', 'max'=>35),
			array('dirProEmailInstitucional, dirPerEmail','email','message'=>  Yii::t('es', 'El campo debe ser un correo electrónico válido')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedulaPersona, nombrePersona, primerApellidoPersona, segundoApellidoPersona, nombreCitasBliblioPersona', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'formacionAcademicas' => array(self::HAS_MANY, 'FormacionAcademica', 'Persona_idPersona'),
			'nacimientoCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'nacimientoCiudad_idCiudad'),
			'dirProCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'dirProCiudad_idCiudad'),
			'dirPerCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'dirPerCiudad_idCiudad'),
			'nacimientoDepartamentoIdDepartamento' => array(self::BELONGS_TO, 'Departamento', 'nacimientoDepartamento_idDepartamento'),
			'dirProDepartamentoIdDepartamento' => array(self::BELONGS_TO, 'Departamento', 'dirProDepartamento_idDepartamento'),
			'dirPerDepartamentoIdDepartamento' => array(self::BELONGS_TO, 'Departamento', 'dirPerDepartamento_idDepartamento'),
			'nacionalidadPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'nacionalidadPais_idPais'),
			'expediciónPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'expediciónPais_idPais'),
			'nacimientoPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'nacimientoPais_idPais'),
			'dirProPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'dirProPais_idPais'),
			'dirPerPaisIdPais' => array(self::BELONGS_TO, 'Pais', 'dirPerPais_idPais'),
			'participacionProyectosIdProyectos' => array(self::BELONGS_TO, 'Proyectos', 'participacionProyectos_idProyectos'),
			'proyectoses' => array(self::HAS_MANY, 'Proyectos', 'duenoPersona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'idPersona' => 'Id Persona',
			'nombrePersona' => 'Nombres',
			'primerApellidoPersona' => 'Primer Apellido',
			'segundoApellidoPersona' => 'Segundo Apellido',
			'nombreCitasBliblioPersona' => 'Nombre en citas blibliográficas',
			'nacionalidadPais_idPais' => 'Nacionalidad',
			'tipoDocumentoPersona' => 'Tipo de documento',
			'cedulaPersona' => 'Documento de identidad No',
			'expediciónPais_idPais' => 'Lugar de expedición',
			'nacimientoPais_idPais' => 'País de nacimiento',
			'nacimientoDepartamento_idDepartamento' => 'Departamento',
			'nacimientoCiudad_idCiudad' => 'Ciudad',
			'fechaExpedicionDoc' => 'Fecha de expedicion del documento de identidad',
			'sexoPersona' => 'Sexo',
			'nacimientoCiudad_idCiudad' => 'Ciudad de nacimiento',
			'fechaNacimientoPersona' => 'Fecha de nacimiento',
			'usuarioSIICPersona' => 'Usuario SIIC',
			'contraseñaSIICPersona' => 'Clave SIIC',
			'estadoCivilPersona' => 'Estado civil ',
			'dirProInstitucion' => 'Institución',
			'dirProDireccionInstitucion' => 'Dirección de la institución',
			'dirProBarrio' => 'Barrio',
			'dirProCodigoPostal' => 'Código Postal',
			'dirProApartadoPostal' => 'Apartado postal',
			'dirProTelefonoFijo' => 'Teléfono fijo',
			'dirProExtension' => 'Extensión',
			'dirProEmailInstitucional' => 'E-mail institucional',
			'dirProPaginaInstitucional' => 'Sitio web institucional',
			'dirProPais_idPais' => 'País de nacimiento',
			'dirProDepartamento_idDepartamento' => 'Departamento',
			'dirProCiudad_idCiudad' => 'Ciudad',
			'dirPerDireccion' => 'Dirección de residencia',
			'dirPerBarrio' => 'Barrio',
			'dirPerCodigoPostal' => 'Código Postal',
			'dirPerTelefonoFijo' => 'Teléfono fijo',
			'dirPerTelefonoMovil' => 'Teléfono móvil',
			'dirPerApartadoPostal' => 'Apartado postal',
			'dirPerEmail' => 'E-mail',
			'dirPerSitioWeb' => 'Sitio Web personal',
			'dirPerPais_idPais' => 'País de nacimiento',
			'dirPerDepartamento_idDepartamento' => 'Departamento',
			'dirPerCiudad_idCiudad' => 'Ciudad',
			'participacionProyectos_idProyectos' => 'Participacion Proyectos Id Proyectos',
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

		$criteria->compare('idPersona',$this->idPersona);
		$criteria->compare('cedulaPersona',$this->cedulaPersona,true);
		$criteria->compare('nombrePersona',$this->nombrePersona,true);
		$criteria->compare('primerApellidoPersona',$this->primerApellidoPersona,true);
		$criteria->compare('segundoApellidoPersona',$this->segundoApellidoPersona,true);
		$criteria->compare('nombreCitasBliblioPersona',$this->nombreCitasBliblioPersona,true);
		$criteria->compare('tipoDocumentoPersona',$this->tipoDocumentoPersona,true);
		$criteria->compare('nacionalidadPais_idPais',$this->nacionalidadPais_idPais);
		$criteria->compare('expediciónPais_idPais',$this->expediciónPais_idPais);
		$criteria->compare('nacimientoPais_idPais',$this->nacimientoPais_idPais);
		$criteria->compare('nacimientoDepartamento_idDepartamento',$this->nacimientoDepartamento_idDepartamento);
		$criteria->compare('nacimientoCiudad_idCiudad',$this->nacimientoCiudad_idCiudad);
		$criteria->compare('fechaExpedicionDoc',$this->fechaExpedicionDoc,true);
		$criteria->compare('sexoPersona',$this->sexoPersona,true);
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
		$criteria->compare('dirProPais_idPais',$this->dirProPais_idPais);
		$criteria->compare('dirProDepartamento_idDepartamento',$this->dirProDepartamento_idDepartamento);
		$criteria->compare('dirProCiudad_idCiudad',$this->dirProCiudad_idCiudad);
		$criteria->compare('dirPerDireccion',$this->dirPerDireccion,true);
		$criteria->compare('dirPerBarrio',$this->dirPerBarrio,true);
		$criteria->compare('dirPerCodigoPostal',$this->dirPerCodigoPostal);
		$criteria->compare('dirPerTelefonoFijo',$this->dirPerTelefonoFijo);
		$criteria->compare('dirPerTelefonoMovil',$this->dirPerTelefonoMovil);
		$criteria->compare('dirPerApartadoPostal',$this->dirPerApartadoPostal);
		$criteria->compare('dirPerEmail',$this->dirPerEmail,true);
		$criteria->compare('dirPerSitioWeb',$this->dirPerSitioWeb,true);
		$criteria->compare('dirPerPais_idPais',$this->dirPerPais_idPais);
		$criteria->compare('dirPerDepartamento_idDepartamento',$this->dirPerDepartamento_idDepartamento);
		$criteria->compare('dirPerCiudad_idCiudad',$this->dirPerCiudad_idCiudad);
		$criteria->compare('participacionProyectos_idProyectos',$this->participacionProyectos_idProyectos);

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
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
}
