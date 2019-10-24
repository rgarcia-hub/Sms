var carreras = new Array(1);
$(document).ready(function () {
    
    $('#sendSms').click(function () {

        var carSelct = [];
        for (var i = 0; i < 22; i++) {
            if ($('#c' + i).prop('checked')) {
                for (var j = 0; j < 22; j++)
                {
                    if ($('#c' + i).val()==j) {
                        carSelct[i] = j;
                    }
                }
            }
        }
        console.log(carSelct);
        for (var i = 0; i < carSelct.length;i++)
        {
            jQuery.post('index.php',
                {
                    sms: $('#sms').val(),
                    id: carSelct[i]
                }, function (data, textstatus)
                {
                    
                })
        }
            
        

    });
});

    var enviarSms = function obtNums(sms) {
    var url = 'index.php';
    $.ajax
        ({
            type: 'POST',
            url: url,
            data: sms,
            success: function (response) {

            }
        })
}
