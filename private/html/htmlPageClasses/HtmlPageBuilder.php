<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 12:08
 */

class HtmlPageBuilder extends HtmlPageAbstract
{
    public function buildHtmlPage($strPageName)
    {
        # 1: validate page is actually legitimate and not injected!
        $boolValidator = new HtmlPageValidator($strPageName);

        if ($boolValidator->validatePage()) {

            # 2: Configure page parameters
            new HtmlPageConfiguration($strPageName);

            # 3: Build meta tags
            $metaTags = new HtmlPageMetaTagBuilder();

            # 4: Build link tags
            $linkTags = new HtmlPageLinkTagBuilder();

            # 5: Begin construction of the page head
            $htmlPageHead = new HtmlPageHead($metaTags->getMetaTagArray(), $linkTags->getLinkTagArray());
            $htmlPageHead->renderHtmlPageHead();

            # 6: Build site navigation
            $navigationBar = new HtmlPageNavigationBuilder($strPageName);

            # 7: Build page Footer
            $pageFooter = new HtmlPageFooter();

            # 8: Prepare any global script tags - jQuery, Bootstrap, etc...
            $globalScriptTags = new HtmlPageGlobalScriptBuilder();

            # 9: Prepare any page specific tags here
            $localScriptTags = new HtmlPageLocalScriptBuilder($strPageName);

            # NEED TO LOAD INDIVIDUAL PAGE SCRIPTING HERE!!!!!!!
            # ADD CLASS, BUILD SCRIPT LINKS,
            # PASS IN!

            $htmlPageBody = new HtmlPageBody($navigationBar->getNavigationBar(), $pageFooter->getHtmlPageFooter(),
                $globalScriptTags->getScriptTagArray(), $localScriptTags->getScriptTagArray());

            $htmlPageBody->renderHtmlPageBody();


            // BUILD HEAD


            // BUILD BODY

        }
    }
}
