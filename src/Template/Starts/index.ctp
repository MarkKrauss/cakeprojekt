<?= 
$cell = $this->cell('Menu');
?>
<h1>Startseite Ihrer Homepage</h1>
<br/>
<?php
if ($starts->isEmpty()) {
	echo $this->Html->link('Hinzufügen', ['action' => 'add', 'class' => 'button']);
}else{
		
	foreach ($starts as $start): ?>
    
        <?= 
        	$this->Html->link('Bearbeiten', 
        	['action' => 'edit', $start->id],[ 'class' => 'button']
			) 
        ?>
    
    <div id="editfield"><?= $start->body ?></div>
    <?php endforeach; }?>