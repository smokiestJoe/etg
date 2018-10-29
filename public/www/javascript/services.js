/*global $, console
*/
/* JS LINT Last performed 29.10.2018
By: J.Rose
 */
(function () {

    "use strict";
    function onClickLoadItSolutionSelectionPartial() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                document.getElementById("htmlPageContent").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "/../etg/public/ajaxXml/itSolutionSelection.php", true);
        xhttp.send();
    }

    function onClickLoadBusinessChangeManagementPartial() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                document.getElementById("htmlPageContent").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "/../etg/public/ajaxXml/businessChangeManagement.php", true);
        xhttp.send();
    }

    function onClickLoadItTransformationPartial() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                document.getElementById("htmlPageContent").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "/../etg/public/ajaxXml/itTransformation.php", true);
        xhttp.send();
    }

    function onClickLoadTechnicalDeliveryPartial() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                document.getElementById("htmlPageContent").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "/../etg/public/ajaxXml/technicalDelivery.php", true);
        xhttp.send();
    }

    function onClickLoadSupportPartial() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                document.getElementById("htmlPageContent").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "/../etg/public/ajaxXml/support.php", true);
        xhttp.send();
    }

    $("#it-solution-selection-services-button").on("click", function () {

        onClickLoadItSolutionSelectionPartial();
    });

    $("#business-change-management-services-button").on("click", function () {

        onClickLoadBusinessChangeManagementPartial();
    });

    $("#it-transformation-services-button").on("click", function () {

        onClickLoadItTransformationPartial();
    });

    $("#technical-delivery-services-button").on("click", function () {

        onClickLoadTechnicalDeliveryPartial();
    });

    $("#support-services-button").on("click", function () {

        onClickLoadSupportPartial();
    });

}());