$(function() {

    // tabs
    $('#mywrap-tabs').on('click', '.mytab', function() {
        var tabs = $('#mywrap-tabs .mytab'),
            cont = $('#mywrap-tabs .mytab-content');
        tabs.removeClass('active');
        cont.removeClass('active');
        $(this).addClass('active');
        cont.eq($(this).index()).addClass('active');
        return false;
    });

    // check checkbox
    $('#confirm').on('change', function(){
        if($('#confirm').prop('checked')){
            $('#submit').attr('disabled', false);
        }else{
            $('#submit').attr('disabled', true);
        }
    });

    // check input
    var fields = ["name", "phone", "email"];
    $(".form").submit(function () {
        var error = 0;
        var errorCheck = 0;
        var error_text = "";

        $(".form").find(":input").each(function () {
            for(var i = 0; i < fields.length; i++) {
                if($(this).attr("name")== fields[i]) {
                    if (!$.trim($(this).val())) {
                        $(this).addClass("formError");
                        error = 1;
                    } else {
                        $(this).removeClass("formError");
                    }
                }
            }
        })

        var check = $(".check").prop("checked");
        if (!check) {
            $(".check").next().addClass("formTextRed");
            errorCheck = 1;
        } else {
            $(".check").next().removeClass("formTextRed");
        }
        if (error == 0 && errorCheck == 0) {
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "http://httpbin.org/post",
                dataType: "json",
                data:data,
                success: function (res) {
                    console.log('Данные успешно отправлены!!');
                },
                error: function (res) {
                    console.log('Произшола ошибка');
                }
            }).done(function() {
                setTimeout(function() {
                    $(".form").trigger("reset");
                    document.getElementById('messenger').style.display="none";
                }, 1000);
            });
            return false;
        } else {
            if (error)
                error_text += "Не заполнены обязательные поля!<br/>";
            if (errorCheck) error_text += "Вы не подтвердили согласие на публикацию!";
            $("#messenger").hide().fadeIn(500).html(error_text);
            return false;
        }
    });
});