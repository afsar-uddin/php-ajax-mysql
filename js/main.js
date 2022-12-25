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


});  