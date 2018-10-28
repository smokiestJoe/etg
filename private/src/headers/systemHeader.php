<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 10:44
 */
error_reporting(E_ALL); ini_set('display_errors', '1');


require_once __DIR__ . "/../../html/htmlClasses/HtmlPageAbstract.php";

require_once __DIR__ . "/../../html/htmlClasses/HtmlPageValidator.php";
require_once __DIR__ . "/../../html/htmlClasses/HtmlPageConfiguration.php";
require_once __DIR__ . "/../../html/htmlClasses/HtmlPageMetaTagBuilder.php";
require_once __DIR__ . "/../../html/htmlClasses/HtmlPageLinkTagBuilder.php";
require_once __DIR__ . "/../../html/htmlClasses/HtmlPageHead.php";


require_once __DIR__ . "/../../html/htmlClasses/HtmlPageNavigationBuilder.php";




require_once __DIR__ . "/../../html/htmlClasses/HtmlPageBody.php";


require_once __DIR__ . "/../../html/htmlClasses/HtmlPageBuilder.php";
require_once __DIR__ . "/../../html/htmlClasses/HtmlPageRenderer.php";