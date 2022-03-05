$(document).ready(function(){
    $("#searchSHK").click(function(){
        var mashk = $("#mashk").val();
        if(mashk!=""){
            let form_datas = new FormData();
            form_datas.append('mashk',mashk);
            $.ajax({
                url: 'process-searchSHK.php', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_datas,
                type: 'post',
                success: function(res) {
                    $("#allshk").html(res);
                }
            });
            return false;
        }else{

        }
    })
})
$(document).ready(function(){
    $("#searchShkTk").click(function(){
        var mashk = $("#mashkTk").val();
        if(mashk!=""){
            let form_datas = new FormData();
            form_datas.append('mashk',mashk);
            $.ajax({
                url: 'search-tachkhau.php', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_datas,
                type: 'post',
                success: function(res) {
                    $("#selectND").html(res);
                }
            });
            return false;
        }else{

        }
    })
})
$(document).ready(function(){
    $("#tHTK").click(function(){
        var mashk = $("#mashkTk").val();
        var cccd = $("#nguoimuontach").val();
        if(mashk!=""){
            let form_datas = new FormData();
            form_datas.append('mashk',mashk);
            form_datas.append('cccd',cccd);
            console.log(mashk+cccd);
            $.ajax({
                url: 'tmp-tachkhau.php', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_datas,
                type: 'post',
                success: function(res) {
                    $("#formthongtin").html(res);
                }
            });
            return false;
        }else{

        }
    })
})
function checkTK(){
    if($("#mashknew").val()!="" && $("#noithuongtru").val()!="" && $("#ngaycap").val()!="" && $("#truongcongana").val()!=""){
        return true;
    }else{
        alert("Hãy nhập đầy đủ thông tin cho sổ hộ khẩu!");
        return false;
    }
}