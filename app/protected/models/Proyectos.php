<?php

/**
 * This is the model class for table "Proyectos".
 *
 * The followings are the available columns in table 'Proyectos'.:
 * @property integer $idProyectos
 * @property string $nombreProyecto
 * @property string $tipoProyecto
 * @property string $tipoFinanciacion
 * @property string $fuentesFinanciacion
 * @property string $participacionProyecto
 * @property string $institucion
 * @property string $participacionInst
 * @property integer $valorContrapartida
 * @property integer $numeroActoAdministrativo
 * @property string $anioInicio
 * @property string $mesInicio
 * @property string $anioFin
 * @property string $mesFin
 * @property string $resumen
 * @property string $integrantesProyecto
 * @property string $certificado
 * @property string $institucionesVinculadas
 * @property string $produccionCTI
 * @property integer $duenoPersona_idPersona
 *
 * The followings are the available model relations:
 * @property Persona[] $personas
 * @property Persona $duenoPersonaIdPersona
 */
class Proyectos extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName(){
		return 'Proyectos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProyectos, nombreProyecto, tipoProyecto, tipoFinanciacion, fuentesFinanciacion, participacionProyecto, institucion, participacionInst, valorContrapartida, numeroActoAdministrativo, anioInicio, mesInicio, anioFin, mesFin, resumen, certificado', 'required','message'=>  Yii::t('es', 'El campo no puede quedar en blanco')),
			array('idProyectos, valorContrapartida, numeroActoAdministrativo, duenoPersona_idPersona', 'numerical', 'integerOnly'=>true,'message'=>  Yii::t('es', 'El campo debe ser un número entero')),
			array('nombreProyecto, institucion, certificado, institucionesVinculadas, produccionCTI', 'length', 'max'=>100),
			array('tipoProyecto, tipoFinanciacion, fuentesFinanciacion, participacionProyecto, participacionInst, anioInicio, mesInicio, anioFin, mesFin', 'length', 'max'=>45),
			array('resumen, integrantesProyecto', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProyectos, nombreProyecto, tipoProyecto, tipoFinanciacion, fuentesFinanciacion, participacionProyecto, institucion, participacionInst, valorContrapartida, numeroActoAdministrativo, anioInicio, mesInicio, anioFin, mesFin, resumen, integrantesProyecto, certificado, institucionesVinculadas, produccionCTI, duenoPersona_idPersona', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'personas' => array(self::HAS_MANY, 'Persona', 'participacionProyectos_idProyectos'),
			'duenoPersonaIdPersona' => array(self::BELONGS_TO, 'Persona', 'duenoPersona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'idProyectos' => 'C&#243digo del proyecto SIGP / C&#243digo entidad financiadora',
			'nombreProyecto' => 'Nombre',
			'tipoProyecto' => 'Tipo',
			'tipoFinanciacion' => 'El proyecto es: ',
			'fuentesFinanciacion' => 'Fuentes de Financiaci&#243n',
			'participacionProyecto' => 'Indique su participaci&#243n en el proyecto',
			'institucion' => 'Instituci&#243n',
			'participacionInst' => 'Participaci&#243n de la instituci&#243n',
			'valorContrapartida' => 'Valor de contrapartida',
			'numeroActoAdministrativo' => 'N&#250mero de acto administrativo',
			'anioInicio' => 'A&#241o',
			'mesInicio' => 'Mes',
			'anioFin' => 'A&#241o',
			'mesFin' => 'Mes',
			'resumen' => 'Resumen',
			'integrantesProyecto' => 'Integrantes del proyecto',
			'certificado' => 'Certificado expedido por la instituci&#243n que presta el servicio de extensi&#243n',
			'institucionesVinculadas' => 'Instituciones vinculadas al proyecto',
			'produccionCTI' => 'Producci&#243n CTI resultado del proyecto o programa',
			'duenoPersona_idPersona' => 'Dueno Persona Id Persona',
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

		$criteria->compare('idProyectos',$this->idProyectos);
		$criteria->compare('nombreProyecto',$this->nombreProyecto,true);
		$criteria->compare('tipoProyecto',$this->tipoProyecto,true);
		$criteria->compare('tipoFinanciacion',$this->tipoFinanciacion,true);
		$criteria->compare('fuentesFinanciacion',$this->fuentesFinanciacion,true);
		$criteria->compare('participacionProyecto',$this->participacionProyecto,true);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('participacionInst',$this->participacionInst,true);
		$criteria->compare('valorContrapartida',$this->valorContrapartida);
		$criteria->compare('numeroActoAdministrativo',$this->numeroActoAdministrativo);
		$criteria->compare('anioInicio',$this->anioInicio,true);
		$criteria->compare('mesInicio',$this->mesInicio,true);
		$criteria->compare('anioFin',$this->anioFin,true);
		$criteria->compare('mesFin',$this->mesFin,true);
		$criteria->compare('resumen',$this->resumen,true);
		$criteria->compare('integrantesProyecto',$this->integrantesProyecto,true);
		$criteria->compare('certificado',$this->certificado,true);
		$criteria->compare('institucionesVinculadas',$this->institucionesVinculadas,true);
		$criteria->compare('produccionCTI',$this->produccionCTI,true);
		$criteria->compare('duenoPersona_idPersona',$this->duenoPersona_idPersona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyectos the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
}
