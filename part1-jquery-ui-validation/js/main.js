$(document).ready(function(){
    //if validation is successful, then alert and hide the dialog

    $.validator.setDefaults({
        submitHandler:function(){
            alert("submitted");
            ("#dialog").hide();
        }
    });
    var validate = $("#commentForm").validate();

        //accordion animation
        $("#accordion").accordion();

        //dialog for contact form
        $(function(){
            $("#dialog").dialog({
            autoOpen:false,
            width: 700,
            show: "blind",
            hide: "clip",
            title: "New Contact"
        });

        //open
        $("#opener").click(function(){
            $("#dialog").dialog("open");
            //reset the form
            $("#commentForm")[0].reset(); //here the form values are reset
            validate.resetForm();
        return false;   
        });
    });
});




