<?php
// auto-generated by sfViewConfigHandler
// date: 2014/08/25 10:39:41
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Sistema de Visitas Alfaomega', false, false);
  $response->addMeta('language', 'es', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('normalize.css', '', array ());
  $response->addStylesheet('foundation.css', '', array ());
  $response->addJavascript('vendor/modernizr.js', '', array ());
  $response->addJavascript('vendor/jquery.js', '', array ());
  $response->addJavascript('foundation.min.js', '', array ());
  $response->addJavascript('foundation/foundation.topbar.js', '', array ());


