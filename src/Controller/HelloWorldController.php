<?php
 
namespace Drupal\hello_world_module\Controller;
 
class HelloWorldController {
    public function hello() {
        return array(
                '#title' => 'Hello World!',
                '#markup' => 'successfully implement content.',
            );
    }
}