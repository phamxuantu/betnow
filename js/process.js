function myfunction() {
    var row = $('.test').html();
    $(row).appendTo('.more-row');
}

$(document).ready(function () {
    $('.more-row').on('keyup', '.row_tinh input:nth-child(6)', function () {
        var sum_n = 0;
        for (var i = 0; i < $('.row_tinh input:nth-child(6)').length - 1; i++) {
            if($($('.row_tinh input:nth-child(6)')[i]).val() == ''){
                sum_n += 0;
            }else {
                sum_n += parseInt($($('.row_tinh input:nth-child(6)')[i]).val());
            }
        }
        $('[name="sum_unit_n"]').attr('value', sum_n);
        $('#price').html((parseInt($('[name="sum_unit_n"]').attr('value')) * 1000 + parseInt($('[name="sum_unit_s"]').attr('value')) * 1000) + ' ks');
    });

    $('.more-row').on('keyup', '.row_tinh input:nth-child(8)', function () {
        var sum_s = 0;
        for (var i = 0; i < $('.row_tinh input:nth-child(8)').length - 1; i++) {
            if($($('.row_tinh input:nth-child(8)')[i]).val() == ''){
                sum_s += 0;
            }else {
                sum_s += parseInt($($('.row_tinh input:nth-child(8)')[i]).val());
            }
        }
        $('[name="sum_unit_s"]').attr('value', sum_s);
        $('#price').html((parseInt($('[name="sum_unit_n"]').attr('value')) * 1000 + parseInt($('[name="sum_unit_s"]').attr('value')) * 1000) + ' ks');
    });
});

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
	var day =  today.getDay();
	switch (day) {
    case 0:
        day = "Sunday";
        break;
    case 1:
        day = "Monday";
        break;
    case 2:
        day = "Tuesday";
        break;
    case 3:
        day = "Wednesday";
        break;
    case 4:
        day = "Thursday";
        break;
    case 5:
        day = "Friday";
        break;
    case 6:
        day = "Saturday";
}
    document.getElementById('curentTime').innerHTML =
    day + ", " + h + ":" + m ;
    setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}