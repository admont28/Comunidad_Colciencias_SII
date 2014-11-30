<?php

/**
 * Change the following URL based on your server configuration
 * Make sure the URL ends with a slash so that we can use relative URLs in test cases
 */
define('TEST_BASE_URL','http://localhost/yii/Comunidad_Colciencias_SII/app/index-test.php/');

/**
 * The base class for functional test cases.
 * In this class, we set the base URL for the test application.
 * We also provide some common methods to be used by concrete test classes.
 */
class WebTestCase extends CWebTestCase{
	/**
	 * Sets up before each test method runs.
	 * This mainly sets the base URL for the test application.
	 */
	protected function setUp(){
		parent::setUp();
                $this->setBrowser('*firefox');
		$this->setBrowserUrl(TEST_BASE_URL);
	}
        
        /*protected function _login(){
            $this->windowMaximize();
            $this->open("site/login");
            $this->type("username", "1094"); //Donde LoginForm_username es el id del usuario
            $this->type("password", "123456");
            $this->click("rememberMe"); //Permite recordar y no estar autenticando cada rato
            $this->click("name=yt0");
            $this->waitForPageToLoad(self::PAGE_LOAD_WAIT_TIME); //constante que declaré para esperar un tiempo
        }*/
}
