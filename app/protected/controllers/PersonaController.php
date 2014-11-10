<?php

class PersonaController extends Controller{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters(){
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules(){
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','selectdepartamentos','selectciudades','selectdepartamentospersonal','selectciudadespersonal','selectdepartamentosprofesional','selectciudadesprofesional'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin', '1094'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id){
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate(){
		$model=new Persona;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Persona'])){
			$model->attributes=$_POST['Persona'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id){
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Persona'])){
			$model->attributes=$_POST['Persona'];
			if($model->save()){
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id){
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])){
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex(){
		$dataProvider=new CActiveDataProvider('Persona');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin(){
		$model=new Persona('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Persona'])){
			$model->attributes=$_GET['Persona'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Persona the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id){
		$model=Persona::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Persona $model the model to be validated
	 */
	protected function performAjaxValidation($model){
		if(isset($_POST['ajax']) && $_POST['ajax']==='persona-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	* función que lista los departmentos de un pais seleccionado
	*
	*/
	public function actionSelectDepartamentos(){
		$idPais = $_POST['Persona']['nacimientoPais_idPais'];
		$lista = Departamento::model()->findAll('Pais_idPais = :idPais', array(':idPais'=>$idPais));
		$lista = CHtml::listData($lista, 'idDepartamento','nombreDepartamento');
		$this->listar($lista);
	}

	/**
	* función que lista las ciudades de un departamento seleccionado
	*
	*/
	public function actionSelectCiudades(){
		$idDepartamento = $_POST['Persona']['nacimientoDepartamento_idDepartamento'];
		$lista = Ciudad::model()->findAll('Departamento_idDepartamento = :idDepartamento', array(':idDepartamento'=>$idDepartamento));
		$lista = CHtml::listData($lista, 'idCiudad','nombreCiudad');
		$this->listar($lista);
	}

	/**
	* función que lista los departmentos de un pais seleccionado
	*
	*/
	public function actionSelectDepartamentosPersonal(){
		$idPais = $_POST['Persona']['dirPerPais_idPais'];
		$lista = Departamento::model()->findAll('Pais_idPais = :idPais', array(':idPais'=>$idPais));
		$lista = CHtml::listData($lista, 'idDepartamento','nombreDepartamento');
		$this->listar($lista);
	}

	/**
	* función que lista las ciudades de un departamento seleccionado
	*
	*/
	public function actionSelectCiudadesPersonal(){
		$idDepartamento = $_POST['Persona']['dirPerDepartamento_idDepartamento'];
		$lista = Ciudad::model()->findAll('Departamento_idDepartamento = :idDepartamento', array(':idDepartamento'=>$idDepartamento));
		$lista = CHtml::listData($lista, 'idCiudad','nombreCiudad');
		$this->listar($lista);
	}

	/**
	* función que lista los departmentos de un pais seleccionado
	*
	*/
	public function actionSelectDepartamentosProfesional(){
		$idPais = $_POST['Persona']['dirProPais_idPais'];
		$lista = Departamento::model()->findAll('Pais_idPais = :idPais', array(':idPais'=>$idPais));
		$lista = CHtml::listData($lista, 'idDepartamento','nombreDepartamento');
		$this->listar($lista);
	}

	/**
	* función que lista las ciudades de un departamento seleccionado
	*
	*/
	public function actionSelectCiudadesProfesional(){
		$idDepartamento = $_POST['Persona']['dirProDepartamento_idDepartamento'];
		$lista = Ciudad::model()->findAll('Departamento_idDepartamento = :idDepartamento', array(':idDepartamento'=>$idDepartamento));
		$lista = CHtml::listData($lista, 'idCiudad','nombreCiudad');
		$this->listar($lista);
	}

	/**
	* función que lista los elementos del parametro $lista
	* @param Lista $lista es la lista a mostrar
	*/
	public function listar($lista){
		
		echo CHtml::tag('option',array('value'=>''), CHtml::encode('--Seleccione una opción--'), true);
		foreach ($lista as $valor => $nombre) {
			echo CHtml::tag('option',array('value'=>$valor), CHtml::encode($nombre), true);
		}
	}
}
