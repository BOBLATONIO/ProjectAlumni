$(document).ready(function () {

    
    $(".aprnce-btn").click(function (event) {
        event.stopPropagation(); 
        $(".aprnce-radio").slideToggle().toggleClass("hidden static active");

        if ($(".aprnce-radio").hasClass("active")) {
            $(".aprnce-icon").html(`
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
            `);
        } else {
            $(".aprnce-icon").html(`
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            `);
        }
    });

    $(".aprnce-radio").mouseleave(function () {
        $(this).slideUp().removeClass("active").addClass("hidden static");
        $(".aprnce-icon").html(`
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        `);
    });





});

// JavaScript for Profile Dropdown in LargeScreen
//SECOND FUNCTION
$(document).ready(function () {
    $(".profile-dropdown, .name-container, .profile-picture").click(function (event) {
        event.stopPropagation(); //para after click hindi mag colapse agad yung dropdown
        $(".profile-dropdown-content").slideToggle();
        $(".profile-dropdown").toggleClass("active"); 

        if ($(".profile-dropdown").hasClass("active")) {
            // Change button to "X" icon (close)
            $(".profile-dropdown").html(`
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 stroke-gray-500 dark:stroke-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            `);
        } else {
            // Change button back to menu icon (≡)
            $(".profile-dropdown").html(`
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 stroke-gray-500 dark:stroke-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            `);
        }
    });

    $(document).click(function (event) {
        if (!$(event.target).closest(" .profile-dropdown, .name-container, .profile-dropdown-content").length) {
            $(".profile-dropdown-content").slideUp();
            $(".profile-dropdown").removeClass("active").html(`
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 stroke-gray-500 dark:stroke-gray-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            `);
        }
    });

   
});