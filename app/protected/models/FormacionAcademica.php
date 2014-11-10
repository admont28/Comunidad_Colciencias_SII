<?php

/**
 * This is the model class for table "FormacionAcademica".
 *
 * The followings are the available columns in table 'FormacionAcademica':
 * @property integer $idFormacionAcademica
 * @property integer $formAcaIntensidadHoraria
 * @property string $formAcaFechaObtencionTitulo
 * @property string $formAcaBecado
 * @property string $formAcaInstitucionOfreceBeca
 * @property string $formAcaNivelFormacion
 * @property string $formAcaInstitucion
 * @property string $formAcaProgramaAcademico
 * @property string $formAcaFechaInicio
 * @property string $formAcaFechaFinalizacion
 * @property integer $formAcaTiempoFormacion
 * @property string $formAcaUnidadTiempoFormacion
 * @property string $formAcaPromedioPeriodos
 * @property integer $formAcaCiudad_idCiudad
 * @property string $nombreIdioma
 * @property string $nivelEscritura
 * @property string $nivelLectura
 * @property string $nivelHabla
 * @property string $nivelEscucha
 * @property string $formComTituloObtenido
 * @property string $formComNivelFormacion
 * @property string $formComInstitucion
 * @property string $formComProgramaAcademico
 * @property string $formComFechaInicio
 * @property string $formComFechaFinalizacon
 * @property integer $formComTiempoFormacion
 * @property string $formComUnidadTiempoFormacion
 * @property string $formComPromedioPeriodos
 * @property integer $formComCiudad_idCiudad
 * @property integer $Persona_idPersona
 *
 * The followings are the available model relations:
 * @property Ciudad $formAcaCiudadIdCiudad
 * @property Ciudad $formComCiudadIdCiudad
 * @property Persona $personaIdPersona
 */
class FormacionAcademica extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName(){
		return 'FormacionAcademica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('formAcaCiudad_idCiudad, formComCiudad_idCiudad, Persona_idPersona', 'required','message'=>  Yii::t('es', 'El campo no puede quedar en blanco')),
			array('formAcaIntensidadHoraria, formAcaTiempoFormacion, formAcaCiudad_idCiudad, formComTiempoFormacion, formComCiudad_idCiudad, Persona_idPersona', 'numerical', 'integerOnly'=>true,'message'=>  Yii::t('es', 'El campo debe ser un número entero')),
			array('formAcaBecado, formAcaPromedioPeriodos, formComPromedioPeriodos', 'length', 'max'=>2),
			array('formAcaInstitucionOfreceBeca, formAcaInstitucion, formAcaProgramaAcademico, formComInstitucion, formComProgramaAcademico', 'length', 'max'=>100),
			array('formAcaNivelFormacion, formComNivelFormacion', 'length', 'max'=>25),
			array('formAcaUnidadTiempoFormacion, nivelEscritura, nivelLectura, nivelHabla, nivelEscucha, formComUnidadTiempoFormacion', 'length', 'max'=>10),
			array('nombreIdioma', 'length', 'max'=>45,'message'=>  Yii::t('es', 'El campo no puede exceder los 45 caracteres')),
			array('formComTituloObtenido', 'length', 'max'=>30,'message'=>  Yii::t('es', 'El campo no puede exceder los 30 caracteres')),
			array('formAcaFechaObtencionTitulo, formAcaFechaInicio, formAcaFechaFinalizacion, formComFechaInicio, formComFechaFinalizacon', 'safe'),
			
			array('formAcaFechaFinalizacion','compare','compareAttribute'=>'formAcaFechaInicio','operator'=>'>','message'=>  Yii::t('es', 'La fecha de finalización debe ser mayor que la fecha de inicio')),
			array('formAcaFechaObtencionTitulo','compare','compareAttribute'=>'formAcaFechaInicio','operator'=>'>','message'=>  Yii::t('es', 'La fecha de obtención del titulo debe ser mayor que la fecha de inicio')),
			
			array('formComFechaFinalizacon','compare','compareAttribute'=>'formComFechaInicio','operator'=>'>','message'=>  Yii::t('es', 'La fecha de finalización debe ser mayor que la fecha de inicio de la formación complementaria')),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFormacionAcademica, formAcaIntensidadHoraria, formAcaFechaObtencionTitulo, formAcaBecado, formAcaInstitucionOfreceBeca, formAcaNivelFormacion, formAcaInstitucion, formAcaProgramaAcademico, formAcaFechaInicio, formAcaFechaFinalizacion, formAcaTiempoFormacion, formAcaUnidadTiempoFormacion, formAcaPromedioPeriodos, formAcaCiudad_idCiudad, nombreIdioma, nivelEscritura, nivelLectura, nivelHabla, nivelEscucha, formComTituloObtenido, formComNivelFormacion, formComInstitucion, formComProgramaAcademico, formComFechaInicio, formComFechaFinalizacon, formComTiempoFormacion, formComUnidadTiempoFormacion, formComPromedioPeriodos, formComCiudad_idCiudad, Persona_idPersona', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'formAcaCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'formAcaCiudad_idCiudad'),
			'formComCiudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'formComCiudad_idCiudad'),
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'idFormacionAcademica' => 'ID Formación Académica',
			'formAcaIntensidadHoraria' => 'Intensidad horaria semanal',
			'formAcaFechaObtencionTitulo' => 'Fecha obtención del titulo',
			'formAcaBecado' => 'Becado',
			'formAcaInstitucionOfreceBeca' => 'Institución ofrece beca',
			'formAcaNivelFormacion' => 'Nivel de formación',
			'formAcaInstitucion' => 'Institución',
			'formAcaProgramaAcademico' => 'Programa académico',
			'formAcaFechaInicio' => 'Fecha de inicio',
			'formAcaFechaFinalizacion' => 'Fecha finalización',
			'formAcaTiempoFormacion' => 'Tiempo formación',
			'formAcaUnidadTiempoFormacion' => 'Unidad Tiempo Formación',
			'formAcaPromedioPeriodos' => 'Promedio acumulativo de los periodos cursados',
			'formAcaCiudad_idCiudad' => 'Ciudad Id Ciudad',
			'nombreIdioma' => 'Idioma',
			'nivelEscritura' => 'Nivel de escritura',
			'nivelLectura' => 'Nivel de lectura',
			'nivelHabla' => 'Nivel de habla',
			'nivelEscucha' => 'Nivel de escucha',
			'formComTituloObtenido' => 'Titulo obtenido',
			'formComNivelFormacion' => 'Nivel de formación',
			'formComInstitucion' => 'Institución',
			'formComProgramaAcademico' => 'Programa académico',
			'formComFechaInicio' => 'Fecha de inicio',
			'formComFechaFinalizacon' => 'Fecha finalización',
			'formComTiempoFormacion' => 'Tiempo formación',
			'formComUnidadTiempoFormacion' => 'Unidad Tiempo Formacion',
			'formComPromedioPeriodos' => 'Promedio acumulativo de los periodos cursados',
			'formComCiudad_idCiudad' => 'Ciudad',
			'Persona_idPersona' => 'Persona Id Persona',
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

		$criteria->compare('idFormacionAcademica',$this->idFormacionAcademica);
		$criteria->compare('formAcaIntensidadHoraria',$this->formAcaIntensidadHoraria);
		$criteria->compare('formAcaFechaObtencionTitulo',$this->formAcaFechaObtencionTitulo,true);
		$criteria->compare('formAcaBecado',$this->formAcaBecado,true);
		$criteria->compare('formAcaInstitucionOfreceBeca',$this->formAcaInstitucionOfreceBeca,true);
		$criteria->compare('formAcaNivelFormacion',$this->formAcaNivelFormacion,true);
		$criteria->compare('formAcaInstitucion',$this->formAcaInstitucion,true);
		$criteria->compare('formAcaProgramaAcademico',$this->formAcaProgramaAcademico,true);
		$criteria->compare('formAcaFechaInicio',$this->formAcaFechaInicio,true);
		$criteria->compare('formAcaFechaFinalizacion',$this->formAcaFechaFinalizacion,true);
		$criteria->compare('formAcaTiempoFormacion',$this->formAcaTiempoFormacion);
		$criteria->compare('formAcaUnidadTiempoFormacion',$this->formAcaUnidadTiempoFormacion,true);
		$criteria->compare('formAcaPromedioPeriodos',$this->formAcaPromedioPeriodos,true);
		$criteria->compare('formAcaCiudad_idCiudad',$this->formAcaCiudad_idCiudad);
		$criteria->compare('nombreIdioma',$this->nombreIdioma,true);
		$criteria->compare('nivelEscritura',$this->nivelEscritura,true);
		$criteria->compare('nivelLectura',$this->nivelLectura,true);
		$criteria->compare('nivelHabla',$this->nivelHabla,true);
		$criteria->compare('nivelEscucha',$this->nivelEscucha,true);
		$criteria->compare('formComTituloObtenido',$this->formComTituloObtenido,true);
		$criteria->compare('formComNivelFormacion',$this->formComNivelFormacion,true);
		$criteria->compare('formComInstitucion',$this->formComInstitucion,true);
		$criteria->compare('formComProgramaAcademico',$this->formComProgramaAcademico,true);
		$criteria->compare('formComFechaInicio',$this->formComFechaInicio,true);
		$criteria->compare('formComFechaFinalizacon',$this->formComFechaFinalizacon,true);
		$criteria->compare('formComTiempoFormacion',$this->formComTiempoFormacion);
		$criteria->compare('formComUnidadTiempoFormacion',$this->formComUnidadTiempoFormacion,true);
		$criteria->compare('formComPromedioPeriodos',$this->formComPromedioPeriodos,true);
		$criteria->compare('formComCiudad_idCiudad',$this->formComCiudad_idCiudad);
		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormacionAcademica the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
}
