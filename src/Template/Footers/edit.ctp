<h1>Bearbeiten</h1>
<?php
    echo $this->Form->create($footer);
	echo "<div id='wysiwygEditor'></div>	
		  <div id='txtEditor' contenteditable='true'>$footer->body</div><br />";	
	echo $this->Form->textarea('body', ['id' => 'body']);
    echo $this->Form->button('Speichern', ['type' => 'submit', 'id'=> 'sendWysiwyg','class'=>'floatRight']);
    echo $this->Form->end();
?>
<?=
$this->Html->link(
	'zurück',
	'/Footers',
	['class' => 'button warning']
);
?>