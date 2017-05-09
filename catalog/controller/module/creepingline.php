<?php
class ControllerModuleCreepingline extends Controller {
    public function index() {
        $this->load->language('module/creepingline'); // loads the language file of creepingline
         
        $data['heading_title'] = $this->language->get('heading_title'); // set the heading_title of the module
         
        $data['creepingline_value'] = html_entity_decode($this->config->get('creepingline_text_field')); // gets the saved value of creepingline text field and parses it to a variable to use this inside our module view
        $data['creepingline_url'] = html_entity_decode($this->config->get('creepingline_url_field')); // gets the saved value of creepingline url field and parses it to a variable to use this inside our module view
         
        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/creepingline.tpl')) {
            return $this->load->view($this->config->get('config_template') . '/template/module/creepingline.tpl', $data);
        } else {
            return $this->load->view('default/template/module/creepingline.tpl', $data);
        }
    }
}