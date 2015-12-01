<style>
  #Menu {
    background-color: #006a00;
    padding: 10px;
  }

  #Fejadatlink, #Teteladatlink, #Fajlneveklink {
    padding: 20px;
    background-color: #58e05c;
    width: 150px;
    text-align: center;
    margin-bottom: 10px;
    display: inline-block;
  }

  #Fajlneveklink {
    float: right;
  }

  #TeteladatokHeader {
    background-color: #e7e7e7;
    padding: 30px;
    border: 3px dashed gray;
  }
</style>

<div id="TeteladatokHeader" style="margin: 10px 0px 10px">
  <p id="TeteladatokTitle" style="font-size: 26px; text-align: center">Tételadatok</p>
  <p id="TeteladatokDescription" style="text-align: center">Új tételadat sor generálása.</p>
</div>
<div id="TeteladatokContent" style='background-color: #c3e7c1; padding: 30px;'>
  <div id="TeteladatokForm">
    <?php
    echo $this->Form->create();
    echo $this->Form->input('VT', array('label' => 'VT', 'div' => array('style' => 'display:none')));
    echo $this->Form->input('Szamlaszam', array('label' => '<strong>Számla</strong>, ennek hiányában szállítólevél vagy egyéb a kitárolásról szóló <strong>bizonylat száma</strong>'));
    echo $this->Form->input('Termek szam', array('label' => 'Értékesítet termék <strong>vámtarifaszáma</strong>'));
    echo $this->Form->input('Termek nev', array('label' => 'Értékesített termék <strong>megnevezése</strong>'));
    echo $this->Form->input('Termek mennyiseg', array('label' => 'Értékesített termék <strong>mennyisége</strong> [12 egész és 2 tizedes ponttal elválasztva]'));
    echo $this->Form->input('Termek mertekegyseg', array('label' => 'Értékesített termék <strong>mennyiségi egysége</strong> (2 karakter hosszon)'));
    echo $this->Form->input('Termek kiszereles', array('label' => 'Értékesített termék <strong>kiszerelésének típusa</strong> [4 egész és 3 tizedes ponttal elválasztva]'));
    echo $this->Form->input('Alkohol fok', array('label' => 'Alkoholtermék <strong>alkoholfoka</strong> (%) [3 egész és 2 tizedes ponttal elválasztva]'));
    echo $this->Form->input('Szamla ertek', array('label' => 'Számla szerinti <strong>érték</strong> [13 egész és 2 tizedes ponttal elválasztva]'));
    echo $this->Form->input('Szamla penznem', array('label' => 'Számla pénzneme'));
    echo $this->Form->input('Fajlhely', array('type' => 'file', 'label' => 'Válassza ki, melyik fájlba íródjon a bejegyzés'));
    echo $this->Form->submit('Generálás');
    echo $this->Form->end();
    ?>
  </div>
  <div id='Notification'></div>
</div>