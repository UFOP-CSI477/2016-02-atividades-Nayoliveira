<h1><?= $procedimento['Procedimento']['id'];?></h1>

<p> ID: <?=$procedimento['Procedimento']['id'];?></p>

<?=
  $this->Html->link("Voltar",
    array('controller' => 'procedimentos',
          'action' => 'index'));
?>
