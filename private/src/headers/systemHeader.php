<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 10:44
 */
error_reporting(E_ALL); ini_set('display_errors', '1');


// Classes
require_once  __DIR__ . "/contentHeader.php";

require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageAbstract.php";

require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageValidator.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageConfiguration.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageMetaTagBuilder.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageLinkTagBuilder.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageHead.php";

require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageNavigationBuilder.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageFooter.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageGlobalScriptBuilder.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageLocalScriptBuilder.php";

require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageBody.php";


require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageBuilder.php";
require_once __DIR__ . "/../../html/htmlPageClasses/HtmlPageRenderer.php";


require_once __DIR__ . "/../../html/htmlModules/services.php";