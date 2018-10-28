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
        ],
        'workingTogether' => [
            'name' => 'workingTogether',
            'title' => 'Working With ETG',
            'header' => 'Working Together',
            'navlink' => [
                'name' => 'Together',
                'link' => '/etg/public/www/pages/workingTogether.php'
            ],
            'content' => 'workingTogtherContent',
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

    protected static $htmlHeadTitle = "";

    protected static $htmlBodyHeader = "";

    protected static $htmlPageContent = "";







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
