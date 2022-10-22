$(document).ready(function () {
    $("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost:82/autocomplete/autocomplete/GetCountryName",
            data: {
                keyword: $("#country").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#country').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#country').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="displayCountries" ><a role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['m_name'] + '</a></li>');
                });
            }
        });
    });

    // $(document).keydown(function(e) {
    //       var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
    //       switch(key) {
    //       case 32: // space
    //         gallery.next();
    //         e.preventDefault();
    //         break;
    //       }})
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#country').val($(this).text());
    });
});