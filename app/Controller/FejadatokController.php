<?php
  class FejadatokController extends AppController {
    public function generateFejadat() {
      if (!empty($this->data)) {
        $data = $this->data['Fejadatok'];
        $fejadat = $data['VF'] . '|';
        $fejadat .= $data['Verzio'] . '|';
        $fejadat .= $data['Elado adoszam'] . '|';
        $fejadat .= $data['Elado engedelyszam'] . '|';
        $fejadat .= $data['Vevo nev'] . '|';
        $fejadat .= $data['Vevo adoszam'] . '|';
        $fejadat .= $data['Vevo adojel'] . '|';
        $fejadat .= $data['Vevo engedelyszam'] . '|';
        $fejadat .= $data['Vevo irszam'] . '|';
        $fejadat .= $data['Vevo varos'] . '|';
        $fejadat .= $data['Vevo utcahsz'] . '|';
        $fejadat .= $data['Forgalom tipusa'] . '|';
        $fejadat .= $data['TKO szam'] . '|';
        $fejadat .= $data['EKO szam'] . '|';
        $fejadat .= $data['Szamlaszam'] . '|';
        $fejadat .= $data['Szamla kelt']['year'] . $data['Szamla kelt']['month'] . $data['Szamla kelt']['day'] . '|';
        $fejadat .= $data['Szallitas idopont']['year'] . $data['Szallitas idopont']['month'] . $data['Szallitas idopont']['day'] . PHP_EOL;
        return $fejadat;
      }
    }

    public function writeIntoFile() {
      $fileplace = 'GENERATED_FILES/' . $this->data['Fejadatok']['Fajlhely'];
      $filehandle = fopen($fileplace, 'a');
      fwrite($filehandle, $this->generateFejadat());
      fclose($filehandle);
    }

    public function index() {
      $this->set('vFs', array(
        'VF' => 'VF',
      ));
      if(!empty($this->data)) {
        if ($this->Fejadatok->save($this->data)) {
          $this->Session->setFlash($this->data['Fejadatok']['Fajlhely'] . '<br>nevű fájlba íródott az alábbi bejegyzés:<br>' . $this->generateFejadat());
          $this->writeIntoFile();
        }
      }
    }
  }