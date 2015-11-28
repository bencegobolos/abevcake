<?php
class Fajlnevek extends AppModel {
  public $validate = array(
    'Tipus' => array(
      'rule' => array('lengthBetween', 1, 1),
      'message' => 'J vagy A karakter!',
    ),
    'Engedely szam' => array(
      'rule' => array('lengthBetween', 13, 13),
      'message' => '13 karatker hosszúnak kell lennie.',
    ),
    'Adatok idoszaka' => array(
      'rule' => array('lengthBetween', 4, 4),
      'message' => 'ÉÉHH formátumban kell kitölteni.',
    ),
    'Sorszam' => array(
      'rule' => array('lengthBetween', 2, 2),
      'message' => '00-ZZ -ig.',
    ),
  );
}