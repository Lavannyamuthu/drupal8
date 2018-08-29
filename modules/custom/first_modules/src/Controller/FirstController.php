<?php
/**
 * Created by PhpStorm.
 * User: lavannya
 * Date: 28/8/18
 * Time: 6:23 PM
 */

namespace Drupal\first_modules\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => ('Hello Lavs'),
        );
    }
}