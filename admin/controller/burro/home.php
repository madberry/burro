<?
	
class ControllerBurroHome extends Controller{ 
	public function index(){
		// VARS
		$template="burro/home.tpl"; // .tpl location and file
		$this->language->load('burro/home');
		$this->load->model('burro/home');
		$this->document->setTitle($this->language->get('heading_title'));
		
		//vars for template
		$this->data['heading_title'] = $this->language->get('heading_title');		
		$this->data['heading_subtitle'] = $this->language->get('heading_subtitle');		
		$this->data['body01'] = $this->language->get('body01');		
		$this->data['breadcrumbs'] = array();
		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);
   		$this->data['breadcrumbs'][] = array(
       		'text'      => 'Hostings : About burro',
			'href'      => $this->url->link('burro/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		$this->data['error_warning'] = "";
		$this->data['success'] = "";
		
		$this->template = ''.$template.'';
		$this->children = array(
			'common/header',
			'common/footer'
		);	  
		$this->response->setOutput($this->render());
	}
}
?>