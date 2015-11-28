<?php
class Teteladatok extends AppModel {
  public $validate = array(
    'VT' => array(
      'ruletype' => array(
        'rule' => 'alphaNumeric',
        'message' => 'Csak betű és szám írható ide!',
        'last' => FALSE,
      ),
      'rulelength' => array(
        'rule' => array('maxLength', 2),
        'message' => 'Maximum két karakter!',
      ),
    ),
//    'Fajlhely' => array(
//      'requied' => TRUE,
//    ),
  );
}