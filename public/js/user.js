$(function(){

    var btn_login_submit = $('#login_form').find('button[type="button"]');

    console.log('btn_login_submit = ', btn_login_submit);

    // 登录
    $(btn_login_submit).on('click', function(){
      /*
        var mobile = $('#mobile_login').val();
        var passwd = $('#passwd_login').val();
        var data = {
            mobile: mobile,
            passwd: passwd,
        };
        console.log('data = ', data);
        $.post('/user/login', data, function(ret){
            console.log('ret = ', ret);
        });
        */
        $('#login_form').submit();
    });

});

