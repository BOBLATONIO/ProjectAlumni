$(document).ready(function () {
    //For announcement
    $(".announcement").each(function () {
        // For Seemore Toggle
        var textElement = $(this).find(".announcementBody");
        var button = $(this).find(".toggleButton");
        var fullText = textElement.text();
        var maxLength = 180; // Set maximum length of a text for see more to display or not

        if (fullText.length > maxLength) {
            button.removeClass("hidden");
        }

        button.click(function () {
            if (textElement.hasClass("line-clamp-3")) {
                textElement.removeClass("line-clamp-3 overflow-hidden");
                button.text("See less");
            } else {
                textElement.addClass("line-clamp-3 overflow-hidden");
                button.text("See more");
            }
        });

        //For View on facebook
        let fbLink = $(this).find(".facebook-link");
        if (!fbLink.attr("href") || fbLink.attr("href").trim() === "") {
            fbLink.hide();
        }
        
    });

   
});