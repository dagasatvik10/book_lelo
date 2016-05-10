function sortBooksList(){
    $('.sort_elements').change(function (e) {
        var formData,url,name,form;

        e.preventDefault();

        if($(this).is('select')) {
            name = $(this).attr('name');
            $('.sort_elements[name=' + name + ']').val($(this).val());
        }

        form = $('#sort_form');
        formData = form.serialize();
        url = form.attr('action');

        $.ajax({
            type: 'POST',
            data: formData,
            dataType: 'json',
            url: url,
            success: function(data) {
                //console.log(data.success);
                $('.trending-ads').empty().html(data.html);
                //sortBooksList();
            }
        })
    });
}