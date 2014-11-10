<?php

class ProyectosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','agregar','volver'),
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
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$modelParticipantes = new ParticipantesForm;


		if(isset($_POST['ParticipantesForm'])){
			//$modelParticipantes->attributes =$_POST['ParticipantesForm'];
			$modelParticipantes->idParticipante = $_POST['ParticipantesForm']['idParticipante'];
			if($modelParticipantes->idParticipante != null){
			$modelPersona = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$modelParticipantes->idParticipante));
			//$id =  $modelPersona->idPersona;
			$modelPersona->participacionProyectos_idProyectos = $id;
			if($modelPersona->update())
				$this->redirect(array('view','id'=>$id));
			}
		}
		
		if(isset($_POST['volver']))
			$this->redirect(array('/proyectos/admin'));
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'modelParticipantes'=>$modelParticipantes,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Proyectos;
		$modelParticipantes = new ParticipantesForm;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Proyectos']))
		{
			$model->attributes=$_POST['Proyectos'];
			$cedulaPersona = Yii::app()->user->id;
			$usuario = Persona::model()->find('cedulaPersona=:cedulaPersona', array(':cedulaPersona'=>$cedulaPersona));
			$model->duenoPersona_idPersona = $usuario->idPersona;
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
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'modelParticipantes'=>$modelParticipantes,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Proyectos']))
		{
			$model->attributes=$_POST['Proyectos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idProyectos));
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
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Proyectos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Proyectos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyectos']))
			$model->attributes=$_GET['Proyectos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Proyectos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Proyectos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Proyectos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='proyectos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	
	public function actionAgregar(){

		$modelParticipantes = new ParticipantesForm;

		if(isset($_POST['ParticipantesForm'])){
			$modelParticipantes->attributes =$_POST['ParticipantesForm'];
			$modelPersona = Persona::model()->findByPk($modelParticipantes->id);
			$modelPersona->participacionProyectos_idProyectos = $modelPersona->$id;
			if($modelPersona->update())
				$this->redirect(array('/proyectos/admin'));
		}
	}
}
