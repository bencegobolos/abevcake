<style>
  #Menu {
    background-color: #A82222;
    padding: 10px;
  }

  #Fejadatlink, #Teteladatlink, #Fajlneveklink {
    padding: 20px;
    background-color: #A8AA55;
    width: 150px;
    text-align: center;
    margin-bottom: 10px;
    display: inline-block;
    text-align: center;
  }

  #Fajlneveklink {
    float: right;
  }

  #FejadatokHeader {
    background-color: #e7e7e7;
    padding: 30px;
    border: 3px dashed gray;
  }
</style>

<div id="FejadatokHeader" style="margin: 10px 0px 10px">
  <p id="FejadatokTitle" style="font-size: 26px; text-align: center">Fejadatok</p>
  <p id="FejadatokDescription" style="text-align: center">Új fejadat sor generálása.</p>
</div>
<div id="FejadatokContent" style='background-color: #e7dbbe; padding: 30px;'>
  <div id="FejadatokForm">
    <?php
    echo $this->Form->create();
    echo $this->Form->input('VF', array('label' => 'VF', 'div' => array('style' => 'display:none')));
    echo $this->Form->input('Verzio', array('label' => '<strong>Verziószám</strong>: 11 (a következő PM tájékoztató megjelenéséig)'));
    echo $this->Form->input('Elado adoszam', array('label' => 'Eladó <strong>adószáma</strong>'));
    echo $this->Form->input('Elado engedelyszam', array('label' => 'Eladó adóraktári/jövedéki <strong>engedélyszáma</strong>'));
    echo $this->Form->input('Vevo nev', array('label' => 'Vevő/címzett <strong>neve</strong>'));
    echo $this->Form->input('Vevo adoszam', array('label' => 'Vevő/címzett <strong>adószáma</strong> '));
    echo $this->Form->input('Vevo adojel', array('label' => 'Vevő/címzett <strong>adóazonosító jele</strong>'));
    echo $this->Form->input('Vevo engedelyszam', array('label' => 'Vevő/címzett <strong>jövedéki</strong> vagy <strong>működési engedély száma</strong>'));
    echo $this->Form->input('Vevo irszam', array('label' => 'Vevő/címzett – <strong>irányítószám</strong>'));
    echo $this->Form->input('Vevo varos', array('label' => 'Vevő/címzett – <strong>város</strong>'));
    echo $this->Form->input('Vevo utcahsz', array('label' => 'Vevő/címzett – <strong>utca</strong> és <strong>házszám</strong>'));
    echo $this->Form->input('Forgalom tipusa', array('label' => 'Forgalom <strong>típusa</strong>'));
    echo $this->Form->input('TKO szam', array('label' => '<strong>TKO</strong> okmány száma'));
    echo $this->Form->input('EKO szam', array('label' => '<strong>EKO</strong> okmány száma'));
    echo $this->Form->input('Szamlaszam', array('label' => '<strong>Számla</strong>, ennek hiányában <strong>szállítólevél</strong> vagy egyéb a kitárolásról szóló <strong>bizonylat száma</strong>'));
    echo $this->Form->input('Szamla kelt', array('label' => 'Számla (szállítólevél) kibocsátásának <strong>kelte</strong>'));
    echo $this->Form->input('Szallitas idopont', array('label' => 'Kiszállítás <strong>időpontja</strong>'));
    echo $this->Form->input('Fajlhely', array('type' => 'file', 'label' => 'Válassza ki, melyik fájlba íródjon a bejegyzés'));
    echo $this->Form->submit('Generálás');
    echo $this->Form->end();
    ?>
  </div>
  <div id='Notification'></div>
</div>
