<?php

/**
 * This is the model class for table "InformacionFormacion".
 *
 * The followings are the available columns in table 'InformacionFormacion':
 * @property integer $idInformacionFormacion
 * @property string $nivelFormacion
 * @property string $institucion
 * @property string $programaAcademico
 * @property string $fechaInicio
 * @property string $fechaFinalizacion
 * @property integer $tiempoFormacion
 * @property string $unidadTiempoFormacion
 * @property string $promedioPeriodos
 * @property integer $Ciudad_idCiudad
 *
 * The followings are the available model relations:
 * @property FormacionAcademica[] $formacionAcademicas
 * @property FormacionComplementaria[] $formacionComplementarias
 * @property Ciudad $ciudadIdCiudad
 */
class InformacionFormacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'InformacionFormacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Ciudad_idCiudad', 'required'),
			array('tiempoFormacion, Ciudad_idCiudad', 'numerical', 'integerOnly'=>true),
			array('nivelFormacion', 'length', 'max'=>25),
			array('institucion, programaAcademico', 'length', 'max'=>100),
			array('unidadTiempoFormacion', 'length', 'max'=>10),
			array('promedioPeriodos', 'length', 'max'=>2),
			array('fechaInicio, fechaFinalizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInformacionFormacion, nivelFormacion, institucion, programaAcademico, fechaInicio, fechaFinalizacion, tiempoFormacion, unidadTiempoFormacion, promedioPeriodos, Ciudad_idCiudad', 'safe', 'on'=>'search'),
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
			'formacionAcademicas' => array(self::HAS_MANY, 'FormacionAcademica', 'InformacionFormacion_idInformacionFormacion'),
			'formacionComplementarias' => array(self::HAS_MANY, 'FormacionComplementaria', 'InformacionFormacion_idInformacionFormacion'),
			'ciudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'Ciudad_idCiudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idInformacionFormacion' => 'Id Informacion Formacion',
			'nivelFormacion' => 'Nivel Formacion',
			'institucion' => 'Institucion',
			'programaAcademico' => 'Programa Academico',
			'fechaInicio' => 'Fecha Inicio',
			'fechaFinalizacion' => 'Fecha Finalizacion',
			'tiempoFormacion' => 'Tiempo Formacion',
			'unidadTiempoFormacion' => 'Unidad Tiempo Formacion',
			'promedioPeriodos' => 'Promedio Periodos',
			'Ciudad_idCiudad' => 'Ciudad Id Ciudad',
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

		$criteria->compare('idInformacionFormacion',$this->idInformacionFormacion);
		$criteria->compare('nivelFormacion',$this->nivelFormacion,true);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('programaAcademico',$this->programaAcademico,true);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaFinalizacion',$this->fechaFinalizacion,true);
		$criteria->compare('tiempoFormacion',$this->tiempoFormacion);
		$criteria->compare('unidadTiempoFormacion',$this->unidadTiempoFormacion,true);
		$criteria->compare('promedioPeriodos',$this->promedioPeriodos,true);
		$criteria->compare('Ciudad_idCiudad',$this->Ciudad_idCiudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InformacionFormacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
