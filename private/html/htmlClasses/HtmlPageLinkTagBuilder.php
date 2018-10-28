<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 27/10/2018
 * Time: 09:07
 */

class HtmlPageLinkTagBuilder extends HtmlPageAbstract
{
    public $arrLinkTags = [];

    public $strLinkTag = "";

    public function __construct()
    {
        $this->buildHtmlLinkTags();
    }

    public function buildHtmlLinkTags()
    {
        foreach ($this->htmlHeadLinks as $tagType) {

            $this->strLinkTag = "";

            foreach ($tagType as $question => $answer) {

                $this->strLinkTag .= $question . "='" . $answer . "' ";
            }

            $this->strLinkTag = "<link " . $this->strLinkTag . "/>";

            $this->arrLinkTags[] = $this->strLinkTag;
        }
    }

    public function getLinkTagArray()
    {
        return $this->arrLinkTags;
    }


}