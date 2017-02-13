<span>
	<?= $this->Html->link("Procedimento",
		array('controller' => 'procedimentos',
			  'action' => 'index')); ?>
</span>

<span>
	<?= $this->Html->link("Área do Paciente",
		array('controller' => 'pacientes',
			  'action' => 'index')); ?>
</span>


<span>
	<?= $this->Html->link("Área do Administrador",
		array('controller' => 'administrador',
			  'action' => 'index')); ?>
</span>
