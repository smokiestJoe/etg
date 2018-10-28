<?php
/**
 * Created by PhpStorm.
 * User: Joseph Rose
 * Date: 26/10/2018
 * Time: 14:29
 */

class HtmlPageBody extends HtmlPageAbstract
{
    public $strNavigationBar = "";

    public function __construct($strNavigationBar)
    {
        $this->strNavigationBar = $strNavigationBar;
    }

    public function buildHtmlPageBody()
    {
    ?>
        <body>

            <div class="htmlPageBodyWrapper container-fluid">

                <div class="htmlPageBodyTopWrapper row">

                    <div id="htmlPageNavigationPageWrapper">

                    </div>

                    <div id="htmlPageBannerWrapper" class="col-md-12">

                        LOGO AND BANNER GO HERE

                    </div>

                    <div id="htmlPageNavigationBarWrapper" class="col-md-12">

                        <?= $this->strNavigationBar; ?>

                    </div>

                    <div id="htmlPageCategoryBarWrapper">

                    </div>

                </div>

                <div class="htmlPageBodyBottomWrapper row">

                    <div id="htmlPageContentWrapperOuter" class="col-md-12">

                        <div class="spacer col-md-1"></div>

                        <div id="htmlPageContentWrapperInner" class="col-md-10">

                            <div id="htmlPageSubCategoryLinkWrapper">

                            </div>

                            <div id="htmlPageSidebarWrapper">

                            </div>

                            <div id="htmlPageHeaderWrapper">

                                <header><h2><?= parent::$htmlBodyHeader; ?></h2></header>

                            </div>

                            <div id="htmlPageContent">

                                <?= parent::$htmlPageContent; ?>

                            </div>

                            <div id="htmlPageFooterWrapper">

                                <footer>
                                    <small> 2018 copyright &copy; ETG</small>
                                </footer>

                            </div>

                        </div>

                        <div class="spacer col-md-1"></div>

                    </div>




                </div>

            </div>

            <div id="htmlPageScriptingWrapper">

            </div>

        </body>

    </html>
    <?php
    }

    public function renderHtmlPageBody()
    {
        return $this->buildHtmlPageBody();
    }
}

