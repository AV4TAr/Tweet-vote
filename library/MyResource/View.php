<?php
class MyResource_View extends Zend_Application_Resource_ResourceAbstract
{
    protected $_view;
    
    public function init() {
        return $this->getView();
        
    }
    
    public function getView()
    {
        if (null === $this->_view) {
            $options = $this->getOptions();
            $title   = '';
            if (array_key_exists('title', $options)) {
                $title = $options['title'];
                unset($options['title']);
            }
 
            $view = new Zend_View($options);
            $view->headTitle($title);
            
            $view->headLink()->appendStylesheet('/css/bootstrap.css');
            $view->headLink()->appendStylesheet('/css/bootstrap.min.responsive.css');
            $view->headScript()->appendFile('/js/bootstrap.min.js');     
            $view->headScript()->appendFile('/js/analytics.js');
 
            $viewRenderer =
                Zend_Controller_Action_HelperBroker::getStaticHelper(
                    'ViewRenderer'
                );
            $viewRenderer->setView($view);
 
            $this->_view = $view;
        }
        return $this->_view;
    }
    
}