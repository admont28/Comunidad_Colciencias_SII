<?php

class FormacionAcademicaController extends Controller
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
				'actions'=>array('index','view'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$idPersona = Yii::app()->user->id;
		$persona=Persona::model()->findByPk($idPersona);
		$modelFormacionAcademica=new FormacionAcademica;
		$modelIdioma=new Idioma;
		$modelFormacionComplementaria=new FormacionComplementaria;
		$modelInformacionFormacionAcademica=new InformacionFormacion;
		$modelInformacionFormacionComplementaria=new InformacionFormacion;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($modelFormacionAcademica, $modelIdioma, $modelFormacionComplementaria, $modelInformacionFormacionAcademica, $modelInformacionFormacionComplementaria));

		if(isset($_POST['FormacionAcademica'],$_POST['Idioma'],$_POST['FormacionComplementaria'],$_POST['Persona'],$_POST['InformacionFormacion']))
		{
			$persona->attributes=$_POST['Persona'];
			$modelFormacionAcademica->attributes=$_POST['FormacionAcademica'];
			$modelIdioma->attributes=$_POST['Idioma'];
			$modelFormacionComplementaria->attributes=$_POST['FormacionComplementaria'];

			$modelInformacionFormacionComplementaria->attributes=$_POST['InformacionFormacion'];
			/* 	
				----------------------------- 
				poner atención 
				----------------------------- 
			*/
			$modelInformacionFormacionAcademica->attributes=$_POST['InformacionFormacion'];
			
			$persona->Idioma_idIdioma=$modelIdioma->idIdioma;
			$persona->FormacionAcademica_idFormacionAcademica = $modelFormacionAcademica->idFormacionAcademica;
			$persona->FormacionComplementaria_idFormacionComplementaria = $modelFormacionComplementaria->idFormacionComplementaria;

			if($modelInformacionFormacionAcademica->save())
				if ($modelInformacionFormacionComplementaria->save()) 
					if($modelFormacionComplementaria->save())
						if($modelIdioma->save())
							if($modelFormacionAcademica->save())
								if($persona->save())
									$this->redirect('index');

		}

		$this->render('create',array(
			'modelFormacionAcademica'=>$modelFormacionAcademica, 'modelIdioma'=>$modelIdioma,
			'modelFormacionComplementaria'=> $modelFormacionComplementaria,
			'modelInformacionFormacionAcademica'=>$modelInformacionFormacionAcademica,
			'modelInformacionFormacionComplementaria'=>$modelInformacionFormacionComplementaria,
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
		// $this->performAjaxValidation($model);

		if(isset($_POST['FormacionAcademica']))
		{
			$model->attributes=$_POST['FormacionAcademica'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idFormacionAcademica));
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
		$dataProvider=new CActiveDataProvider('FormacionAcademica');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FormacionAcademica('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FormacionAcademica']))
			$model->attributes=$_GET['FormacionAcademica'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FormacionAcademica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FormacionAcademica::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FormacionAcademica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='formacion-academica-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
