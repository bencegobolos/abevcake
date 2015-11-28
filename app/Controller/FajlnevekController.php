<?php
class FajlnevekController extends AppController {
  public function generateFajlnev() {
    if (!empty($this->data)) {
      $data = $this->data['Fajlnevek'];
      $fajlnev = $data['Tipus'];
      $fajlnev .= $data['Engedely szam'];
      $fajlnev .= $data['Adatok idoszaka'];
      $fajlnev .= $data['Sorszam'];
      $fajlnev .= '.VNY';
      return $fajlnev;
    }
  }

  public function makeFile() {
    $fileAccess = 'GENERATED_FILES/' . $this->generateFajlnev();
    $abevfile = fopen($fileAccess, 'w') or die ('Unable to open file!');
    fclose($abevfile);
  }

  public function index() {
    if(!empty($this->data)) {
      if ($this->Fajlnevek->save($this->data)) {
        $this->Session->setFlash('Fájl létrehozva az abevcake/app/webroot/GENERATED_FILES mappában ezen a néven: <br>' . $this->generateFajlnev());
        $this->makeFile();
      }
    }
  }
}