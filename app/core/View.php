<?php


namespace core;


class View
{
    /**
     * @param $pageView
     * @param $templateView
     * create user default page
     */
    public function render($pageView, $templateView)
    {
        include_once 'app' . DIRECTORY_SEPARATOR .'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $templateView;
    }
    /**
     * @param $pageView
     * @param $templateView
     * create admin default page
     */
    public function renderAdmin($pageView, $adminView)
    {
        include_once 'app' . DIRECTORY_SEPARATOR .'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $adminView;
    }


}