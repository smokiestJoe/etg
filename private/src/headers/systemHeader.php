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

require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageAbstract.php";

require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageValidator.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageConfiguration.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageMetaTagBuilder.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageLinkTagBuilder.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageHead.php";

require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageNavigationBuilder.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageFooter.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageGlobalScriptBuilder.php";
require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageLocalScriptBuilder.php";

require_once __DIR__ . "/../../html/htmlPageBuildClasses/HtmlPageBody.php";


require_once __DIR__ . "/../../html/htmlPageDisplayClasses/HtmlPageBuilder.php";
require_once __DIR__ . "/../../html/htmlPageDisplayClasses/HtmlPageRenderer.php";


require_once __DIR__ . "/../../html/htmlModules/services.php";