<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 14:28
 */

class HtmlPageHead extends HtmlPageAbstract
{
    public $arrMetaTags;

    public $arrLinkTags;

    public function __construct($arrMetaTags, $arrLinkTags)
    {
        $this->arrMetaTags = $arrMetaTags;

        $this->arrLinkTags = $arrLinkTags;
    }

    public function buildHtmlPageHead()
    {
        ?>
        <html>
            <head>

                <?php

                echo $this->htmlHeadCharSet;

                foreach ($this->arrMetaTags as $metaTag) {

                    echo $metaTag;
                }

                ?>

                <title><?= parent::$htmlHeadTitle; ?></title>

                <?php

                foreach ($this->arrLinkTags as $LinkTag) {

                    echo $LinkTag;
                }

                ?>

            </head>
        <?php
    }

    public function renderHtmlPageHead()
    {
        return $this->buildHtmlPageHead();
    }
}