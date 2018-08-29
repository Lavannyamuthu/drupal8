<?php
/**
 * Created by PhpStorm.
 * User: lavannya
 * Date: 28/8/18
 * Time: 12:34 PM
 */
namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase
{
    public function hello(){
        return array(
            '#title' => 'Hello World!',
            '#markup' => 'This is some Content.'
        );
    }
}