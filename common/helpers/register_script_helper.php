<?php
namespace common\helpers;
use Yii;

/**
 *
 */
class register_script_helper {

	private $client;
	private $global;

	function __construct() {
		$this->client = Yii::$app->clientScript;
		$this->client->registerScriptFile('http://libs.baidu.com/jquery/1.11.1/jquery.min.js');
		$this->client->registerMetaTag(' text/html;charset=utf-8', null, 'Content-Type');
		$this->global = str_replace("/backend", "", Yii::app()->baseUrl);
	}

	function init() {
		if ($this->client != null) {
			return true;
		} else {
			$this->client = Yii::app()->clientScript;
			$this->client->registerScriptFile('http://libs.baidu.com/jquery/1.11.1/jquery.min.js');
		}

		if ($this->client != null) {
			return true;
		} else {
			return false;
		}

	}

	public static function getBasicUrl() {
		$basic = '';

		if (strlen($basic) < 3) {
			$basic = "http://" . $_SERVER['HTTP_HOST'];
		}

		if (strlen($basic) < 3) {
			$basic = "http://www.wangrunxin.com";
		}
		return $basic;
	}

	public function registerCss($filePath, $whole_url = false) {
		if (self::init()) {
			if ($whole_url) {
				$this->client->registerCssFile($filePath);
			} else {
				$this->client->registerCssFile(Yii::app()->baseUrl . "/assets/" . $filePath);
			}
		}
	}

	public function registerScript($filePath, $format = false, $whole_url = false) {
		if (self::init()) {
			if ($format) {
				if ($whole_url) {
					$this->client->registerScriptFile($filePath, CClientScript::POS_END);
				} else {
					$this->client->registerScriptFile(Yii::app()->baseUrl . "/assets/" . $filePath, CClientScript::POS_END);
				}

			} else {
				if ($whole_url) {
					$this->client->registerScriptFile($filePath);
				} else {
					$this->client->registerScriptFile(Yii::app()->baseUrl . "/assets/" . $filePath);
				}

			}

		}
	}

	public function registerGlobalCss($filePath) {

		if (self::init()) {
			$this->client->registerCssFile($this->global . "/assets/" . $filePath);
		}
	}

	public function registerGlobalScript($filePath, $format = false) {

		if (self::init()) {
			if ($format) {
				$this->client->registerScriptFile($this->global . "/assets/" . $filePath, CClientScript::POS_END);
			} else {
				$this->client->registerScriptFile($this->global . "/assets/" . $filePath);
			}

		}
	}

	public function registerScriptForExtension($publish_file, $script_file, $format = false) {
		//'application.extensions.tinymce'
		$assets = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.modules.' . $publish_file));
		self::registerScript($assets . "/" . $script_file, $format, true);
	}

	public function registerCssForExtension($publish_file, $script_file) {
		//'application.extensions.tinymce'
		$assets = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.modules.' . $publish_file));
		self::registerCss($assets . "/" . $script_file, true);
	}

	public function getScirptPath($filePath) {
		return Yii::app()->baseUrl . "/assets/" . $filePath;
	}

	public function getUrlPath($filePath) {
		if (substr($filePath, 0, 1) == "/") {
			return self::getBasicUrl() . $filePath;
		} else {
			return self::getBasicUrl() . "/" . $filePath;
		}

	}
}

?>