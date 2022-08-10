<?php


class BlogController extends Controller{

    public function actionTeste($message='Teste'){
        return $this->render('teste',[
            'message' => $message
        ]);
    }

}

?>