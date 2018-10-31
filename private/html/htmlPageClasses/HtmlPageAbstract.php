<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 12:08
 */

abstract class HtmlPageAbstract
{
    protected $pages = [
        'index' => [
            'name' => 'index',
            'title' => 'Welcome to ETG',
            'header' => 'Welcome to Enterprise Tech Group (ETG)',
            'navlink' => [
                'name' => 'Home',
                'link' => '/etg/public/www/index.php'
            ],
            'content' => 'indexContent',
            'usescript' => false,
        ],
        'aboutUs' => [
            'name' => 'aboutUs',
            'title' => 'About ETG',
            'header' => 'About us',
            'navlink' => [
                'name' => 'About us',
                'link' => '/etg/public/www/pages/aboutUs.php'
            ],
            'content' => 'aboutUsContent',
            'usescript' => false,
        ],
        'services' => [
            'name' => 'services',
            'title' => 'ETG Services',
            'header' => 'Our services',
            'navlink' => [
                'name' => 'Services',
                'link' => '/etg/public/www/pages/services.php'
            ],
            'content' => 'servicesContent',
            'usescript' => true,
        ],
        'workingTogether' => [
            'name' => 'workingTogether',
            'title' => 'Working With ETG',
            'header' => 'Working Together',
            'navlink' => [
                'name' => 'Together',
                'link' => '/etg/public/www/pages/workingTogether.php'
            ],
            'content' => 'workingTogetherContent',
            'usescript' => false,
        ],
        'partners' => [
            'name' => 'partners',
            'title' => 'Partners of ETG',
            'header' => 'Our Partners',
            'navlink' => [
                'name' => 'Partners',
                'link' => '/etg/public/www/pages/partners.php'
            ],
            'content' => 'partnersContent',
            'usescript' => false,
        ],
    ];

    protected $htmlHeadCharSet = "<meta charset=\"UTF-8\">";

    protected $htmlHeadMetaData = [
        'description' => 'whatever the company does',
        'keywords' =>'Enter,Words,As,Strings',
        'author' => 'name goes here',
        'viewport' => 'width=device-width, initial-scale=1.0',
    ];

    protected $htmlHeadLinks = [
        'bootstrap' => [
            'rel' => 'stylesheet',
            'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
            'integrity' => 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u',
            'crossorigin' => 'anonymous',
        ],
        'css' => [
            'rel' => 'stylesheet',
            'href' => '/etg/public/www/css/main.css',
            'integrity' => 'na',
            'crossorigin' => 'na',
        ],
    ];

    protected $htmlScriptLinks = [
        'jquery' => [
            'call' => ['global'],
            'src' => 'https://code.jquery.com/jquery-3.3.1.js',
            'integrity' => 'sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=',
            'crossorigin' => 'anonymous',
        ],
        'bootstrap' => [
            'call' => ['global'],
            'src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
            'integrity' => 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa',
            'crossorigin' => 'anonymous',
        ],
        'namespace' => [
            'call' => ['global'],
            'src' => '/etg/public/www/javascript/applicationNamespace.js',
        ],
        'servicesFunctions' => [
            'call' => ['services'],
            'src' => '/etg/public/www/javascript/services/servicesFunctions.js',
        ],
        'services' => [
            'call' => ['services'],
            'src' => '/etg/public/www/javascript/services/services.js',
        ],
    ];

    protected static $htmlHeadTitle = "";

    protected static $htmlBodyHeader = "";

    protected static $htmlPageContent = "";

    protected static $htmlPageLocalJavascript = false;







    public $htmlHead;

    public $htmlHeadIconLinks;

    public $htmlBody;

    public $htmlBodyPageWrapper;

    public $htmlBodyBanner;

    public $htmlBodyNavigationBar;

    public $htmlBodyCategoryBar;

    public $htmlBodyPageContents;

    public $htmlBodyPageSubCategoryBar;

    public $htmlBodyFooter;

    public $htmlBodyScriptLinks;

}
