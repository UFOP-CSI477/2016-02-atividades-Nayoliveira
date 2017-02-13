<h2><?php echo __('Procedimentos'); ?></h2>

<table>
<tr>
<th><?php echo $this->Paginator->sort('id'); ?></th>
<th><?php echo $this->Paginator->sort('name'); ?></th>
<th><?php echo $this->Paginator->sort('preco'); ?></th>
</tr>  
<?php foreach ($procedimentos as $procedimento): ?>
  <tr>
  	<td>
  		<?php echo $procedimento['Procedimento']['id'];?>
  	</td>
    
    <td>
      <?php echo $this->Html->link($procedimento['Procedimento']['nome'], array('controller'=>'view', $procedimento['Procedimento']['id']));
      ?>
    </td>
    <td>
      <?php echo $this->Html->link($procedimento['Procedimento']['preco'],array('controller'=>'view', $procedimento['Procedimento']['id']));?>
    </td>

</tr>
 <?php endforeach; ?>
</table>
