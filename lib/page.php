<?php
/**
 * Project: SeedMan
 * User: Randy
 * Date: 7/18/14
 * Time: 6:54 PM
 * File: renderer.php
 * 
 */

class page {

    private $loader;
    private $twig;
    private $template;
    private $__pageTitle;
    private $__pageCSS=null;
    private $__content="<br><h1>PAGE CONTENT NOT SET</h1><br>";
    private $__scripts=array();

    function __construct()
    {
        // include and register Twig auto-loader
        include WWW_DIR . 'lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        try
        {
            // specify where to look for templates
            $this->loader = new Twig_Loader_Filesystem(TEMPLATES_DIR);

            // initialize Twig environment
            $this->twig = new Twig_Environment($this->loader);
            $this->twig->addExtension(new Twig_Extension_StringLoader());

        }
        catch (Exception $e)
        {
            die ('ERROR: ' . $e->getMessage());
        }

    }

    /**
     * @param string $_content
     */
    public function setContent($_content)
    {
        $this->__content = $_content;
    }

    /**
     * @param string $_pageName
     */
    public function setPageCSS($_pageName)
    {
        $this->__pageCSS = $_pageName;
    }

    /**
     * @param string $_pageTitle
     */
    public function setPageTitle($_pageTitle)
    {
        $this->__pageTitle = $_pageTitle;
    }

    /**
     * @param string $_script
     */
    public function addScript($_script)
    {
        $this->__scripts[] = $_script;
    }


    function renderPage()
    {
        // set template variables
        // render template
        try
        {
            // load template
            $this->template = $this->twig->loadTemplate('basepage.twig');

            echo $this->template->render(array(
            'WWW_TOP' => WWW_TOP,
            'pageTitle' => $this->__pageTitle,
            'pageName'  => $this->__pageCSS,
            'content'   => $this->__content,
            'scripts'   => $this->__scripts
        ));
        }
        catch (Exception $e)
        {
            die ('ERROR: ' . $e->getMessage());
        }
    }

    /**
     * @param string    $template   Do not include .twig extension
     * @param array     $data       Must be an associative array or null
     *
     * @return string               html
     */
    function renderContent($template, $data=array())
    {
        try
        {
            // load template
            $this->template = $this->twig->loadTemplate($template . '.twig');

            return $this->template->render($data);
        }
        catch (Exception $e)
        {
            die ('ERROR: ' . $e->getMessage());
        }
    }
}