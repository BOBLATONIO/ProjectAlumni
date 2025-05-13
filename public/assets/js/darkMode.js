$(document).ready(function () {  
    const htmlElement = document.documentElement;  

    // Load dark mode setting from localStorage  
    if (localStorage.getItem("darkMode") === "enabled") {  
        htmlElement.classList.add("dark");  
        $("#dark").prop("checked", true);  
        $("#mobileThemeToggle").prop("checked", true); 
    } else {  
        htmlElement.classList.remove("dark");  
        $("#light").prop("checked", true);  
        $("#mobileThemeToggle").prop("checked", false);  
    }  

    // Change theme when radio button is clicked (large screens)  
    $(".theme-toggle").on("change", function () {  
        if ($("#dark").is(":checked")) {  
            htmlElement.classList.add("dark");  
            localStorage.setItem("darkMode", "enabled");  
            $("#mobileThemeToggle").prop("checked", true); 
        } else {  
            htmlElement.classList.remove("dark");  
            localStorage.setItem("darkMode", "disabled");  
            $("#mobileThemeToggle").prop("checked", false);  
        }  
    });  

    // Change theme when toggle is clicked (mobile screens)  
    $("#mobileThemeToggle").on("change", function () {  
        if ($(this).is(":checked")) {  
            htmlElement.classList.add("dark");  
            localStorage.setItem("darkMode", "enabled");  
            $("#dark").prop("checked", true);  
        } else {  
            htmlElement.classList.remove("dark");  
            localStorage.setItem("darkMode", "disabled");  
            $("#light").prop("checked", true);  
        }  
    });  
});  