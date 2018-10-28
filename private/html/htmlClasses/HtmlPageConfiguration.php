<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 14:30
 */

class HtmlPageConfiguration extends HtmlPageAbstract
{
    protected $strPageName;

    public function __construct($strPageName)
    {
       $this->strPageName = $strPageName;

       parent::$htmlHeadTitle = $this->pages[$this->strPageName]['title'];

       parent::$htmlBodyHeader = $this->pages[$this->strPageName]['header'];

    }

}
