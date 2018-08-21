$(function(){

    var btn_login_submit = $('#login_form').find('button[type="button"]');
    var btn_reg_submit = $('#reg_form').find('button[type="button"]');

    console.log('btn_login_submit = ', btn_login_submit);
    console.log('btn_reg_submit = ', btn_reg_submit);

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

    // 注册
    $(btn_reg_submit).on('click', function(){
        /*
        var mobile = $('#mobile_registe').val();
        var cfm_qrcode = $('#cfm_qrcode').val();
        var passwd = $('#passwd_registe').val();
        var data = {
            mobile: mobile,
            cfm_qrcode: cfm_qrcode,
            passwd: passwd,
        };
        console.log('data = ', data);
        $.post('/user/registe', data, function(ret){
            console.log('ret = ', ret);
        });
        */
        $('#reg_form').submit();
    });

});

