<?php
class PluginDisplayTime_v1{
  public function widget_include(){
    wfPlugin::enable('wf/embed');
    $element = array();
    $element[] = wfDocument::createHtmlElement('style', ".plugin_display_time_v1{background:silver}");
    $element[] = wfDocument::createWidget('wf/embed', 'embed', array('type' => 'script', 'file' => '/plugin/display/time_v1/js/function.js'));
    wfDocument::renderElement($element);
  }
  public function widget_show(){
    $element = array();
    $element[] = wfDocument::createHtmlElement('span', null, array('id' => 'plugin_display_time_v1', 'class' => 'plugin_display_time_v1'));
    $element[] = wfDocument::createHtmlElement('script', "PluginDisplayTime_v1.startTime()");
    wfDocument::renderElement($element);
  }
}
