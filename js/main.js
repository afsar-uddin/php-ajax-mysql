$(document).ready(function(){ 
    // username availability
    $('#username').blur(function() {
        var username = $(this).val();
            $.ajax({
                url: "check/checkuser.php",
                method: "POST",
                data: {username:username},
                dataType: "text",
                success: function(data) {
                    $('#userstatus').html(data); 
                }
            })
    })
    // autocomplete textbox
    $('#skill').keyup(function() {
        var skill = $(this).val();

        if(skill != '') {
            $.ajax({
                url: "check/checkskill.php",
                method: "POST",
                data: {skill:skill},
                success: function(data) {
                    $('#skillstatus').fadeIn();
                    $('#skillstatus').html(data);
                }
            })
        }
    })

    $(document).on('click', 'li', function() {
        $("#skill").val($(this).text());
        $('#skillstatus').fadeOut();
    })

    // Show / hide password
    $('#showpassword').on('click', function() {
        var pass = $('#password');
        var fieldType = pass.attr('type');
        if(fieldType == 'password') {
            pass.attr('type', 'text');
            $(this).text('Hide password');
        }else {
            pass.attr('type', 'password');
            $(this).text('Show password');
        }
    })

    // auto refresh div content
    $('#autorefresh').on('click', function() {
        var content = $('#body').val();
        if($.trim(content) != '') {
            $.ajax({
                url: "check/checkrefresh.php",
                method: "POST",
                data: {body: content},
                dataType: "text",
                success: function(data) {
                    $('#body').val('');
                }
            });
            return false;
        }
    });

    setInterval(() => {
        $('#autorefreshtatus').load("check/getrefresh.php").fadeIn("slow");
    }, 1000);


});  