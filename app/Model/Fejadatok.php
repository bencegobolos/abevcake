<?php
class Fejadatok extends AppModel {
  public $validate = array(
    'VF' => array(
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
//    'Verzio' => array(
//      'rule' => array('maxLength', 2),
//    ),
//    'Elado adoszam' => 'alphaNumeric',
//    'Elado engedelyszam' => 'alphaNumeric',
//    'Vevo nev' => 'alphaNumeric',
//    'Vevo adoszam' => 'alphaNumeric',
//    'Vevo adojel' => 'alphaNumeric',
//    'Vevo engedelyszam' => 'alphaNumeric',
//    'Vevo irszam' => 'alphaNumeric',
//    'Vevo varos' => 'alphaNumeric',
//    'Vevo utcahsz' => 'alphaNumeric',
//    'Forgalom tipusa' => 'alphaNumeric',
//    'TKO szam' => 'alphaNumeric',
//    'EKO szam' => 'alphaNumeric',
//    'Szamlaszam' => 'alphaNumeric',
//    'Szamla kelt' => 'date',
//    'Szallitas idopont' => 'date',
  );
}