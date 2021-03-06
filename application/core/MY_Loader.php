<?php
class MY_Loader extends CI_Loader {
	
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
			$content .= $this->view('templates/navigation_view', $vars, $return);
	        $content .= $this->view($template_name, $vars, $return);
			$content .= $this->view('templates/sidebar_view', $vars, $return);
	        $content .= $this->view('templates/footer_view', $vars, $return);

        return $content;
		
    else:
			$this->view('templates/navigation_view', $vars, $return);
	        $this->view($template_name, $vars);
			$this->view('templates/sidebar_view', $vars, $return);
	        $this->view('templates/footer_view', $vars, $return);
			
    endif;
    }
	
	
	public function adminpanel($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
			$content .= $this->view('templates/navigation_view', $vars, $return);
	        $content .= $this->view($template_name, $vars, $return);
			$content .= $this->view('events_controlpanel_view', $vars, $return);
	        $content .= $this->view('templates/footer_view', $vars, $return);
			

        return $content;
		
    else:
			$this->view('templates/navigation_view', $vars, $return);
	        $this->view($template_name, $vars);
			$this->view('events_controlpanel_view', $vars, $return);
	        $this->view('templates/footer_view', $vars, $return);
			
    endif;
    }
}
?>