<?php
class TeteladatokController extends AppController {
  public function generateTeteladat() {
    if (!empty($this->data)) {
      $data = $this->data['Teteladatok'];
      $teteladat = $data['VT'] . '|';
      $teteladat .= $data['Szamlaszam'] . '|';
      $teteladat .= $data['Termek szam'] . '|';
      $teteladat .= $data['Termek nev'] . '|';
      $teteladat .= $data['Termek mennyiseg'] . '|';
      $teteladat .= $data['Termek mertekegyseg'] . '|';
      $teteladat .= $data['Termek kiszereles'] . '|';
      $teteladat .= $data['Alkohol fok'] . '|';
      $teteladat .= $data['Szamla ertek'] . '|';
      $teteladat .= $data['Szamla penznem'] . PHP_EOL;
      return $teteladat;
    }
  }

  public function writeIntoFile() {
    $filehandle = fopen('GENERATED_FILES/' . $this->data['Teteladatok']['Fajlhely'], 'a');
    fwrite($filehandle, $this->generateTeteladat());
    fclose($filehandle);
  }

  public function index() {
    $this->set('szamlaPenznems', array(
      'HUF' => 'HUF - Magyar forint',
      'CHF' => 'CHF - Svájci frank',
      'EUR' => 'EUR - Euró' ,
      'GBP' => 'GBP - Angol font',
      'USD' => 'USD - USA dollár',
    ));
    $this->set('vTs', array(
      'VT' => 'VT',
    ));
    if(!empty($this->data)) {
      $this->Session->setFlash($this->data['Teteladatok']['Fajlhely'] . '<br>nevű fájlba íródott az alábbi bejegyzés:<br>' . $this->generateTeteladat());
      $this->writeIntoFile();
    }
  }
}