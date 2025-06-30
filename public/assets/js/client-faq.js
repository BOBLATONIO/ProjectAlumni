$(document).ready(function() {
  $(".faq-header").on("click", function() {
    const content = $(this).next(".faq-content");
    const question = $(this).find(".question");

    // Hide all other content
    $(".faq-content").not(content).slideUp();
    $(".question").not(question).removeClass("font-semibold");

    // Toggle the clicked content
    if (content.is(":visible")) {
      content.slideUp();
      question.removeClass("font-semibold");
    } else {
      content.slideDown();
      question.addClass("font-semibold");
    }
  });
});
