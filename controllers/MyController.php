<?php


namespace app\controllers;


class MyController extends AppController {

    public function actionIndex ($id = null) {
   $hi = 'Hello, world!';
      $names = ['Ivanov','Petrov','Sidorov'];

        return $this->render('index', compact('hi','names', 'id' ));

}

public function actionsBlogPost(){
        // my/blog-post
        return 'Blog Post';

}



}