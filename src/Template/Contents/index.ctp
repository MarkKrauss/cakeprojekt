<?= 
$cell = $this->cell('Menu');
?>
<h1>Seiten</h1>
<p>Hier können Sie die Seiten Ihrer Homepage generieren. Diese sind auf der fertigen Homepage über das Menü zu erreichen.</p>
<br/>
<p><?= $this->Html->link('Hinzufügen', ['action' => 'add'],['class' => 'button']) ?></p>
<table>
	<tr>    
		<th>Seite</th>    
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($contents as $content): ?>
    <tr>
        <td>
            <?= $content->title ?>
        </td>
        
        <td>
            <?= 
            	$this->Form->postLink(
                'Löschen',
                ['action' => 'delete', $content->id,$content->title ],
                ['class'=>'button warning'],
                ['confirm' => 'Are you sure?'])
            ?>
            
            <?= 
            	$this->Html->link('Bearbeiten', 
            	['action' => 'edit', $content->id, $content->title],
            	['class'=>'button success']
				) 
            ?>
            
        </td>
        
    </tr>
    <?php endforeach; ?>

</table>