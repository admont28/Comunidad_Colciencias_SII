<?php

class PersonaController extends Controller
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
				'users'=>array('admin'),
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
		$model=new Persona;
		$modelDireccionPersonal= new DireccionPersonal;
		$modelDireccionProfesional = new DireccionProfesional;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$modelDireccionPersonal,$modelDireccionProfesional));

		if(isset($_POST['Persona'],$_POST['DireccionPersonal'], $_POST['DireccionProfesional']))
		{
			$model->attributes=$_POST['Persona'];
			$modelDireccionPersonal->attributes=$_POST['DireccionPersonal'];
			$modelDireccionProfesional->attributes=$_POST['DireccionProfesional'];

			$valid=$model->validate();
        	$valid=$modelDireccionPersonal->validate() && $valid;
        	$valid=$modelDireccionProfesional->validate() && $valid;

        	if($valid)
        	{
        		if($modelDireccionPersonal->save()){
        			$model->DireccionPersonal_idDireccionPersonal = $modelDireccionPersonal->idDireccionPersonal;
        			if($modelDireccionProfesional->save()){
        				$model->DireccionProfesional_idDireccionProfesional = $modelDireccionProfesional->idDireccionProfesional;
        				if ($model->save()) {
        					$this->redirect('index');
        					/* $this->redirect(array('view','id'=>$model->idPersona)); */
        				}
					}
        		}
			}
		}

		$this->render('create',array(
			'model'=>$model,'modelDireccionPersonal'=>$modelDireccionPersonal, 'modelDireccionProfesional'=>$modelDireccionProfesional,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$modelos=$this->loadModel($id);
		$model=$modelos['model'];
		$modelDireccionPersonal=$modelos['modelDireccionPersonal'];
		$modelDireccionProfesional=$modelos['modelDireccionProfesional'];

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$modelDireccionPersonal,$modelDireccionProfesional));

		if(isset($_POST['Persona'],$_POST['modelDireccionPersonal'], $_POST['modelDireccionProfesional']))
		{
			$model->attributes=$_POST['Persona'];
			$modelDireccionPersonal->attributes=$_POST['modelDireccionPersonal'];
			$modelDireccionProfesional->attributes=$_POST['modelDireccionProfesional'];

			/*
			$valid=$model->validate();
        	$valid=$modelDireccionPersonal->validate() && $valid;
        	$valid=$modelDireccionProfesional->validate() && $valid;
        	*/

			if($modelDireccionPersonal->save()){
				if($modelDireccionProfesional->save()){
					if($model->save())
						$this->redirect('index');
        					/* $this->redirect(array('view','id'=>$model->idPersona)); */
				}
			}


			/*

				$modelTabla2 = new Tabla2; #Se creo instancia de la Tabla2
		        $model=$this->loadModel($id);
		        $modelTabla2=Tabla2::model()->find('tabla1_id=?',array($id));

		        if(isset($_POST['Tabla1'])){
		                $model->attributes=$_POST['Tabla1'];
		                if($model->save()){
		                        if(isset($_POST['Tabla2']))
		                        $modelTabla2->attributes=$_POST['Tabla2'];
		                        $modelTabla2->tabla1_id = $model->id; #Se envia el id de Tabla1
		                        if($modelTabla2->save())
		                        $this->redirect(array('view','id'=>$model->id));
		                }
		        }
		        $this->render('update',array(
		        'model'=>$model,
		        'modelTabla2'=$modelTabla2,
		        ));
			*/
		}

		$this->render('update',array(
			'model'=>$model,'modelDireccionPersonal'=>$modelDireccionPersonal, 'modelDireccionProfesional'=>$modelDireccionProfesional
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
		$dataProvider=new CActiveDataProvider('Persona');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Persona('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Persona']))
			$model->attributes=$_GET['Persona'];

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
	public function loadModel($id)
	{
		$model=Persona::model()->findByPk($id);
		$modelDireccionPersonal=DireccionPersonal::model()->findByPk($model->DireccionPersonal_idDireccionPersonal);
		$modelDireccionProfesional=DireccionProfesional::model()->findByPk($model->DireccionProfesional_idDireccionProfesional);
		if($model===null || $modelDireccionProfesional == null || $modelDireccionPersonal == null)
			throw new CHttpException(404,'The requested page does not exist.');
		return array('model'=>$model,'modelDireccionPersonal' =>$modelDireccionPersonal,'modelDireccionProfesional' => $modelDireccionProfesional);
	}

	/**
	 * Performs the AJAX validation.
	 * @param Persona $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='persona-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
