$(function(){

    var btn_reg_submit = $('#reg_form').find('button[type="button"]');
    console.log('btn_reg_submit = ', btn_reg_submit);

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

    $.get('/imgcode', function(ret){
        // console.log('ret =', ret);
        if (ret.code == '00000') {
            $('#imgcode_id').val(ret.id);
            $('#imgcode_url').prop('src', ret.imagePath);
        }
    });

    $('#btn_qrcode').on('click', function(){
        var mobile = $('#mobile_reg').val();
        var imgcode_id = $('#imgcode_id').val();
        var imgcode = $('#imgcode').val();
        if (mobile == '') {
            $('#mobile_reg').focus();
            alert('请输入手机号');
            return false;
        }
        if (imgcode_id == '0' || imgcode == '') {
            $('#imgcode').focus();
            alert('请输入图形验证码');
            return false;
        }
        $.get('/qrcode?imgcode_id='+imgcode_id+'&imgcode='+imgcode+'&mobile='+mobile, function(ret){
            // console.log('ret =', ret);
            if (ret.code == '10007') {
                alert('该手机号已注册，可直接登录');
                return false;
            } else if (ret.code == '00000') {
                alert('验证码已发送到您的手机，请输入');
                return true;
            }
            alert('请确认手机号是否正确再试');
        });
        return true;
    });

});

