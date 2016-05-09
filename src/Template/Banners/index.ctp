<?= 
$cell = $this->cell('Menu');
?>
<h1>Banner</h1>
<br/>
<p><?= $this->Html->link('Hinzufügen', ['action' => 'add'],['class' => 'button']) ?></p>
<table>
	<tr>    
		<th>Bild</th>
		<th>Auswählen</th>
    </tr>

    <?php foreach ($banners as $banner): ?>
    <tr>
        <td>
        	<?= $this->Html->image('uploads/'.$banner->filename, ['alt' => 'banner','class'=>'img_tmp']); ?>
        </td>
        <td>
        	<?= 
            	$this->Html->link('OK', 
            	['action' => 'edit', $banner->id, $banner->filename],['class'=>'button success inlineMe']
				) 
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>