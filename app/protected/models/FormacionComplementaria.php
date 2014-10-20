<?php

/**
 * This is the model class for table "FormacionComplementaria".
 *
 * The followings are the available columns in table 'FormacionComplementaria':
 * @property integer $idFormacionComplementaria
 * @property string $tituloObtenido
 * @property integer $InformacionFormacion_idInformacionFormacion
 *
 * The followings are the available model relations:
 * @property InformacionFormacion $informacionFormacionIdInformacionFormacion
 * @property Persona[] $personas
 */
class FormacionComplementaria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'FormacionComplementaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InformacionFormacion_idInformacionFormacion', 'required'),
			array('InformacionFormacion_idInformacionFormacion', 'numerical', 'integerOnly'=>true),
			array('tituloObtenido', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFormacionComplementaria, tituloObtenido, InformacionFormacion_idInformacionFormacion', 'safe', 'on'=>'search'),
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
			'personas' => array(self::HAS_MANY, 'Persona', 'FormacionComplementaria_idFormacionComplementaria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFormacionComplementaria' => 'Id Formacion Complementaria',
			'tituloObtenido' => 'Titulo Obtenido',
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

		$criteria->compare('idFormacionComplementaria',$this->idFormacionComplementaria);
		$criteria->compare('tituloObtenido',$this->tituloObtenido,true);
		$criteria->compare('InformacionFormacion_idInformacionFormacion',$this->InformacionFormacion_idInformacionFormacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FormacionComplementaria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
