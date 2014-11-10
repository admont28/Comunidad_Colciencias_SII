<?php

class ProyectosController extends Controller{
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
		);}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules(){
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','agregar','volver','limpiar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin','1094'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id){
		$modelParticipantes = new ParticipantesForm;


		if(isset($_POST['ParticipantesForm'])){
			$modelParticipantes->idParticipante = $_POST['ParticipantesForm']['idParticipante'];
			if($modelParticipantes->idParticipante != null){
			$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$modelParticipantes->idParticipante));
			$modelPersona->participacionProyectos_idProyectos = $id;
			if($modelPersona->update()){
				$this->redirect(array('view','id'=>$id));}}}
		
		if(isset($_POST['volver'])){
			$this->redirect(array('/proyectos/admin'));}
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'modelParticipantes'=>$modelParticipantes,
		));}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate(){
		$model=new Proyectos;
		$modelParticipantes = new ParticipantesForm;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Proyectos'])){
			$model->attributes=$_POST['Proyectos'];
			$model->certificado=CUploadedFile::getInstance($model,'image');
			$cedulaPersona = Yii::app()->user->id;
			$usuario = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$cedulaPersona));
			$model->duenoPersona_idPersona = $usuario->idPersona;
			if($model->save()){
				if(isset($_POST['ParticipantesForm'])){
					$modelParticipantes->idParticipante = $_POST['ParticipantesForm']['idParticipante'];
					if($modelParticipantes->idParticipante != null){
						$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$modelParticipantes->idParticipante));
						$id =  $model->idProyectos;
						$modelPersona->participacionProyectos_idProyectos = $id;
						if($modelPersona->update()){
							$this->redirect(array('view','id'=>$id));}}}
				$this->redirect(array('view','id'=>$model->idProyectos));
				$model->certificado->saveAs('/proyectoYII/images/'.CUploadedFile::getInstance($model,'image')->name);}}

		$this->render('create',array(
			'model'=>$model,
			'modelParticipantes'=>$modelParticipantes,
		));}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id){
		$model=$this->loadModel($id);
		$modelParticipantes = new ParticipantesForm;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Proyectos'])){
			$model->attributes=$_POST['Proyectos'];
			$model->certificado=CUploadedFile::getInstance($model,'image');
			if($model->save()){
				if(isset($_POST['ParticipantesForm'])){
				//$modelParticipantes->attributes =$_POST['ParticipantesForm'];
					$modelParticipantes->idParticipante = $_POST['ParticipantesForm']['idParticipante'];
					if($modelParticipantes->idParticipante != null){
						$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$modelParticipantes->idParticipante));
						$id =  $model->idProyectos;
						$modelPersona->participacionProyectos_idProyectos = $id;
						if($modelPersona->update())
							$this->redirect(array('view','id'=>$id));
					}
				}
				$this->redirect(array('view','id'=>$model->idProyectos));
				$model->certificado->saveAs('/proyectoYII/images/'.CUploadedFile::getInstance($model,'image')->name);
			}
		}
		$this->render('update',array(
			'model'=>$model,
			'modelParticipantes'=>$modelParticipantes,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$modelProyecto = $this->loadModel($id);
		$criteria = new CDbCriteria();
		$criteria->select = 'idPersona, cedulaPersona, participacionProyectos_idProyectos';
		$criteria->condition = 'participacionProyectos_idProyectos= :proyectos';
		$criteria->params = array(':proyectos' => $id);
		$comments= Persona::model()->findAll($criteria);

		foreach ($comments as $key) {
			$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$key->cedulaPersona));
			$modelPersona->participacionProyectos_idProyectos = null;
			$modelPersona->update();
		}
		$modelProyecto->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])){
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));}}

	/**
	 * Lists all models.
	 */
	public function actionIndex(){
		$dataProvider=new CActiveDataProvider('Proyectos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));}

	/**
	 * Manages all models.
	 */
	public function actionAdmin(){
		$model=new Proyectos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyectos'])){
			$model->attributes=$_GET['Proyectos'];}

		$this->render('admin',array(
			'model'=>$model,
		));}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Proyectos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id){
		$model=Proyectos::model()->findByPk($id);
		if($model===null){
			throw new CHttpException(404,'The requested page does not exist.');}
		return $model;}

	/**
	 * Performs the AJAX validation.
	 * @param Proyectos $model the model to be validated
	 */
	protected function performAjaxValidation($model){
		if(isset($_POST['ajax']) && $_POST['ajax']==='proyectos-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();}}

	
	public function actionLimpiar(){

		$model = new Proyectos;
		$modelParticipantes = new ParticipantesForm;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		$this->render('update',array(
			'model'=>$model,
			'modelParticipantes'=>$modelParticipantes,
		));
	}
}
