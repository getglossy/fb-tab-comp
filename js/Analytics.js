function shareImageAnalytic()
{
    $.ajax({
        type: "POST",
        url: "inc/Analytics.php",
        data: "id=shareImage"
    });
}

function shareCompAnalytic()
{
    $.ajax({
        type: "POST",
        url: "inc/Analytics.php",
        data: "id=shareComp"
    });
}

function visitFacebookLinkAnalytic()
{
    $.ajax({
        type: "POST",
        url: "inc/Analytics.php",
        data: "id=facebookLink"
    });
}

function visitOtherPageLinkAnalytic()
{
    $.ajax({
        type: "POST",
        url: "inc/Analytics.php",
        data: "id=otherLink"
    });
}

function AppVisitAnalytic()
{
    $.ajax({
        type: "POST",
        url: "inc/Analytics.php",
        data: "id=appVisit"
    });
}
