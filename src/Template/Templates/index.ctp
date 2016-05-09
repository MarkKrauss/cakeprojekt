<?= 
$cell = $this->cell('Menu');
?>
<h1>Templates</h1>

<table>
	<tr>    
		<th>Template</th>
		<th>Auswählen</th>
    </tr>

    <?php foreach ($templates as $template): ?>
    <tr>
        <td>
        	<?= $this->Html->image($template->image, ['alt' => 'template','class'=>'img_tmp']); ?>
        </td>
        <td>
        	<?= 
            	$this->Html->link('OK', 
            	['action' => 'choose', $template->id, $template->name],['class'=>'button success']
				) 
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>