<?= 
$cell = $this->cell('Menu');
?>
<h1>Vorschau des Footers</h1>
<br/>
<?php
if ($footers->isEmpty()) {
    echo $this->Html->link('Hinzufügen', ['action' => 'add'],['class' => 'button']);
}else{
		
	foreach ($footers as $footer): ?>
    
        <?= 
        	$this->Html->link('Bearbeiten', 
        	['action' => 'edit', $footer->id],['class' => 'button']
			) 
        ?>
    
    <div id="editfield"><?= $footer->body ?></div>
    <?php endforeach; }?>