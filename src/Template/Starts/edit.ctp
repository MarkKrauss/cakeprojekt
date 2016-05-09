<h1>Bearbeiten</h1>
<?php
    echo $this->Form->create($start);
	echo "<div id='wysiwygEditor'></div>	
		  <div id='txtEditor' contenteditable='true'>$start->body</div>";	
	echo $this->Form->textarea('body', ['id' => 'body']);
    echo $this->Form->button('Speichern', ['type' => 'submit', 'id'=> 'sendWysiwyg','class'=>'floatRight']);
    echo $this->Form->end();
?>
<?=
$this->Html->link(
	'zurück',
	'/Starts',
	['class' => 'button warning']
);
?>