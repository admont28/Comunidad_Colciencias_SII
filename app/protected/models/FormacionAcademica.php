<?php

/**
 * This is the model class for table "FormacionAcademica".
 *
 * The followings are the available columns in table 'FormacionAcademica':
 * @property integer $idFormacionAcademica
 * @property integer $intensidadHoraria
 * @property string $fechaObtencionTitulo
 * @property string $becado
 * @property string $institucionOfreceBeca
 * @property integer $InformacionFormacion_idInformacionFormacion
 *
 * The followings are the available model relations:
 * @property InformacionFormacion $informacionFormacionIdInformacionFormacion
 * @property Persona[] $personas
 */
class FormacionAcademica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'FormacionAcademica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InformacionFormacion_idInformacionFormacion,intensidadHoraria', 'required'),
			array('intensidadHoraria, InformacionFormacion_idInformacionFormacion', 'numerical', 'integerOnly'=>true),
			array('becado', 'length', 'max'=>1),
			array('institucionOfreceBeca', 'length', 'max'=>100),
			array('fechaObtencionTitulo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFormacionAcademica, intensidadHoraria, fechaObtencionTitulo, becado, institucionOfreceBeca, InformacionFormacion_idInformacionFormacion', 'safe', 'on'=>'search'),
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
			'informacionFormacionIdInformacionFormacion' => array(self::BELONGS_TO, 'InformacionFormacion', 'InformacionFormacion_idInformacionFormacion'),
			'personas' => array(self::HAS_MANY, 'Persona', 'FormacionAcademica_idFormacionAcademica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFormacionAcademica' => 'Id Formacion Academica',
			'intensidadHoraria' => 'Intensidad Horaria',
			'fechaObtencionTitulo' => 'Fecha Obtencion Titulo',
			'becado' => 'Becado',
			'institucionOfreceBeca' => 'Institucion Ofrece Beca',
			'InformacionFormacion_idInformacionFormacion' => 'Informacion Formacion Id Informacion Formacion',
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

		$criteria->compare('idFormacionAcademica',$this->idFormacionAcademica);
		$criteria->compare('intensidadHoraria',$this->intensidadHoraria);
		$criteria->compare('fechaObtencionTitulo',$this->fechaObtencionTitulo,true);
		$criteria->compare('becado',$this->becado,true);
		$criteria->compare('institucionOfreceBeca',$this->institucionOfreceBeca,true);
		$criteria->compare('InformacionFormacion_idInformacionFormacion',$this->InformacionFormacion_idInformacionFormacion);

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
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
