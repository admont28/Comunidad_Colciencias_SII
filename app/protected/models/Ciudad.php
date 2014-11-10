<?php

/**
 * This is the model class for table "Ciudad".
 *
 * The followings are the available columns in table 'Ciudad':
 * @property integer $idCiudad
 * @property string $nombreCiudad
 * @property integer $Departamento_idDepartamento
 *
 * The followings are the available model relations:
 * @property Departamento $departamentoIdDepartamento
 * @property FormacionAcademica[] $formacionAcademicas
 * @property FormacionAcademica[] $formacionAcademicas1
 * @property Persona[] $personas
 * @property Persona[] $personas1
 * @property Persona[] $personas2
 */
class Ciudad extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName(){
		return 'Ciudad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idCiudad, nombreCiudad, Departamento_idDepartamento', 'required'),
			array('idCiudad, Departamento_idDepartamento', 'numerical', 'integerOnly'=>true),
			array('nombreCiudad', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCiudad, nombreCiudad, Departamento_idDepartamento', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'departamentoIdDepartamento' => array(self::BELONGS_TO, 'Departamento', 'Departamento_idDepartamento'),
			'formacionAcademicas' => array(self::HAS_MANY, 'FormacionAcademica', 'formAcaCiudad_idCiudad'),
			'formacionAcademicas1' => array(self::HAS_MANY, 'FormacionAcademica', 'formComCiudad_idCiudad'),
			'personas' => array(self::HAS_MANY, 'Persona', 'nacimientoCiudad_idCiudad'),
			'personas1' => array(self::HAS_MANY, 'Persona', 'dirProCiudad_idCiudad'),
			'personas2' => array(self::HAS_MANY, 'Persona', 'dirPerCiudad_idCiudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'idCiudad' => 'Id Ciudad',
			'nombreCiudad' => 'Nombre Ciudad',
			'Departamento_idDepartamento' => 'Departamento Id Departamento',
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

		$criteria->compare('idCiudad',$this->idCiudad);
		$criteria->compare('nombreCiudad',$this->nombreCiudad,true);
		$criteria->compare('Departamento_idDepartamento',$this->Departamento_idDepartamento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ciudad the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
}
