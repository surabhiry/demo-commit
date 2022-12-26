<html>
var $datePicker = $("div#datepicker");

var $datePicker = $("div");

$datePicker.datepicker({
    changeMonth: true,
    changeYear: true,
    inline: true,
    altField: "#datep",
}).change(function(e){
    setTimeout(function(){   
        $datePicker
            .find('.ui-datepicker-current-day')
            .parent()
            .after('<tr>\n\
                        <td colspan="8">\n\
                            <div> \n\
                                <button>8:00 am – 9:00 am </button>\n\
                            </div>\n\
                            <button>9:00 am – 10:00 am</button>\n\
                            </div>\n\
                            <button>10:00 am – 11:00 am</button>\n\
                            </div>\n\
                        </td>\n\
                   </tr>');

    });
});
<div id="datepicker"></div>
</html>