$(function(){

    // 登录
    $('button.login-btn').on('click', function(){
        var mobile = $('#mobile_login').val();
        var passwd = $('#passwd_login').val();
        // console.log('mobile = ', mobile);
        // console.log('passwd = ', passwd);
        if (!mobile) {
            alert('请输入手机号');
            return false;
        }
        if (mobile.length != 11 || !/^[0-9]*$/.test(mobile)) {
            alert('手机号必须为11位数字');
            return false;
        }
        if (!passwd) {
            alert('请输入密码');
            return false;
        }
        $('#login_form').submit();
    });

});

