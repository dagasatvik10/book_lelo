$(window).on('hashchange', function() {
    console.log(window.location.hash);
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else {
            getBooks(page);
        }
    }
});
/*$(document).ready(function() {
    $(document).on('click', '.pagination a', function (e) {
        getBooks($(this).attr('href').split('page=')[1]);
        e.preventDefault();
    });
});*/
function getBooks(page) {
    var formData,url,form;

    form = $('#sort_form');
    formData = form.serialize();
    $.ajax({
        type: 'POST',
        url : '?page=' + page,
        data: formData,
        dataType: 'json'
    }).done(function (data) {
        $('.trending-ads').html(data.html);
        location.hash = page;
    }).fail(function () {
        alert('Books could not be loaded.');
    });
}