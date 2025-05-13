$(document).ready(function() {
    $(".faq-header").on("click", function() {
      const content = $(this).next(".faq-content");
      const parentCard = $(this).closest(".faq-card");
      const question = $(this).closest(".faq-card").find(".question");
      
      $(".faq-content").not(content).slideUp();
      $(".question").not(question).removeClass("font-semibold");

      if (content.is(":visible")) {
        content.slideUp();
        question.removeClass("font-semibold");

      } else {
        content.slideDown();
        question.addClass("font-semibold");
      }
    });
  });