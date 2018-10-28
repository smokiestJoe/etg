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


            $htmlPageBody = new HtmlPageBody($navigationBar->getNavigationBar());
            $htmlPageBody->renderHtmlPageBody();


            // BUILD HEAD


            // BUILD BODY

        }


    }
}
