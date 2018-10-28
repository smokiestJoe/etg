<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 13:08
 */

class HtmlPageValidator extends HtmlPageAbstract
{
    private $strValidationKey;

    public function handleValidationException($isPageValid)
    {
        if (! $isPageValid) {

            throw new Exception("Page not valid on this server");
        }
    }

    public function __construct($strPageName)
    {
        $this->strValidationKey = $strPageName;
    }

    public function checkValidationKey()
    {
        if (array_key_exists($this->strValidationKey, $this->pages)) {

            return true;

        } else {

            return false;
        }
    }

    public function validatePage()
    {
        try {

            $this->handleValidationException($this->checkValidationKey());

            return true;

        } catch (Exception $e) {

            echo 'Message: ' .$e->getMessage();

            return false;
        }
    }
}
