<?php
/**
 * Created by PhpStorm.
 * User: lavannya
 * Date: 28/8/18
 * Time: 5:47 PM
 */
namespace  Drupal\second_module\Controller;

class SecondController {
    public function content(){
        return array(
            '#title' => 'Hello World!',
            '#markup' => 'This is some Content.'
        );
    }
}