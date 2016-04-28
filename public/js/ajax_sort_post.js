function sortBooksList(){
    $('.sort_elements').change(function (e) {
        var formData,url;

        e.preventDefault();

        formData = $('#sort_form').serialize();

        url = $('#sort_form').attr('action');

        $.ajax({
            type: 'POST',
            data: formData,
            dataType: 'json',
            url: url,
            success: function(data) {
                console.log(data.success);
                $('#trendingAds').empty().html(data.html);
                //sortBooksList();
            }
        })
    });
}