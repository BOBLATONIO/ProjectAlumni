$(document).ready(function () {
    $('.show-sidebar-btn').click(function () {
        $('.sidebar').toggleClass('w-64 w-14 py-5');
        $('.a-pages').toggleClass('justify-center pl-5');
        $('.sidebar-menu-text, .p-admin-panel').toggleClass('hidden');
    });
});

