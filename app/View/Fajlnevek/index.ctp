<style>
  #Menu {
    background-color: #c9c89a;
    padding: 10px;
  }

  #Fejadatlink, #Teteladatlink, #Fajlneveklink {
    padding: 20px;
    background-color: #e0df9a;
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
  <p id="FejadatokTitle" style="font-size: 26px; text-align: center">Fájlnevek</p>
  <p id="FejadatokDescription" style="text-align: center">Új fájlnév generálása.</p>
</div>
<div id="FejadatokContent" style='background-color: #e7dbbe; padding: 30px;'>
  <div id="FejadatokForm">
    <?php
    echo $this->Form->create();
    echo $this->Form->input('Tipus', array('label' => 'Nyílvántartás típusa (1 karakter): \'J\' - Jövedéki engedélyes, \'A\' - Adóraktári engedélyes.'));
    echo $this->Form->input('Engedely szam', array('label' => 'Telephely engedély száma (13 karakter hosszon)'));
    echo $this->Form->input('Adatok idoszaka', array('label' => 'Adat-összeállítás időszaka \'ÉÉHH\' formátumban'));
    echo $this->Form->input('Sorszam', array('label' => 'Adatállomány sorszáma (00-ZZ)'));
    echo $this->Form->submit('Generálás');
    echo $this->Form->end();
    ?>
  </div>
  <div id='Notification'></div>
</div>
