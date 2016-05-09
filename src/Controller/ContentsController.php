<?php
namespace App\Controller;
use App\Controller\AppController;

/*
 * ContentsController 
 * 
 * @author Markus Krauss
 * */
class ContentsController extends AppController
{
		
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent        
    }
	
	/*
	 * Möglichkeit, auf die Anwendungslogik, die in dieser Methode implementiert ist, 
	 * über den Aufruf von www.example.com/posts/index zuzugreifen. Definieren wir eine Methode namens foobar(), 
	 * so haben User gleichermaßen die Möglichkeit über den Aufruf von www.example.com/posts/foobar 
	 * auf die in dieser Methode enthaltenen Logik zuzugreifen.
	 */
    public function index()
    {
    	//um Daten vom Controller zur View zu übergeben, DB_Tabelle nötig
        $this->set('contents', $this->Contents->find('all'));
    }
	
	public function add()
    {
    	$contents = $this->Contents->newEntity();
        if ($this->request->is('post')) {
            $contents = $this->Contents->patchEntity($contents, $this->request->data);
			//Authentifizierung
			//$contents->user_id = $this->Auth->user('id');
            if ($this->Contents->save($contents)) {
            	//Flash: CakeHelper Benachrichtigung
                $this->Flash->success(__('Seite erstellt'));
                return $this->redirect(['action' => 'index']); 
            }
            $this->Flash->error(__('Unable to add your content.'));
        }
        $this->set('content', $contents);
    }
	
	public function delete($id,$title){				
		$this->request->allowMethod(['post', 'delete']);		
		$content = $this->Contents->get($id);
	    if ($this->Contents->delete($content)) {
	    	$this->Flash->success(__("Seite $title gelöscht"));	    	
	        return $this->redirect(['action' => 'index']);
	    }else{
	    	$this->Flash->success(__('Fehler beim löschen von:', h($title)));
	    }
	}
	
	public function edit($id = null, $title){
		
	    $content = $this->Contents->get($id);
		 
	    if ($this->request->is(['post', 'put'])) {
	        $this->Contents->patchEntity($content, $this->request->data);
	        if ($this->Contents->save($content)) {
	        	
	            $this->Flash->success(__('Your article has been updated.'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Unable to update your article.'));
	    }	
	    $this->set('content', $content);
	}
	
	 
}