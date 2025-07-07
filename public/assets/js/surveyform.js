$(document).ready(function () {
    $(".multiple-choice").each(function () {
        const labels = $(this).find("label");
        labels.on("click", function () {
            labels.removeClass("bg-blue-200 border-blue-400  dark:bg-[#3B3D3E]");
            $(this).addClass("bg-blue-200 border-blue-400 dark:bg-[#3B3D3E]");
        });
    });

    $("#questionnaireForm").on("submit", function (event) {
        event.preventDefault(); 
        let responses = [];
        $(".question").each(function () {
            let questionText = $(this).find("p").first().text(); // Get question
            let selectedOptions = [];

            // dropdown/select == OK
            let selectInput = $(this).find("select");
            if (selectInput.length > 0) {
                let selectedValue = selectInput.val();
                if (selectedValue) {
                    selectedOptions.push(selectedValue);
                }
            }

            // Multiple Choice
            $(this).find("input:checked").each(function () {
                selectedOptions.push($(this).val());
            });

            // text input and textarea values
            $(this).find("input[type='text'], textarea").each(function () {
                let textValue = $(this).val().trim();
                if (textValue) {
                    selectedOptions.push(textValue);
                }
            });

            // store "No answer" if no answer
            responses.push({
                question: questionText,
                answers: selectedOptions.length > 0 ? selectedOptions : ["No answer"]
            });
        });

        console.log("Submitted Responses:", responses); // for testing output the answer in console
    });

    
});