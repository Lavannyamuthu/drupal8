<?php

class FirstTestController {
    public function content(){
        return array(
            '#title' => 'Hello World!',
            '#markup' => 'This is some Content.'
        );
    }
}