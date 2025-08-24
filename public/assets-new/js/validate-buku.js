$(document).ready(function () {
    let rules = new Object();
    let messages = new Object();

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0} byte');

    rules["heading"] = {
        required: true,
    };
    messages["heading"] = { required: "This field is required" };

    rules["subheading"] = {
        required: true,
    };
    messages["subheading"] = { required: "This field is required" };

    $('input[name="filecover"]').each(function () {
        rules[this.name] = {
            extension: "png|jpe?g",
            filesize: 3145728,
        };
        messages[this.name] = {
            extension: "Format yang diterima : png, jpg, jpeg ",
            filesize: "File size must be less than 3 MB",
        };
    });

    myValidate();

    function myValidate () {
        var validator = $("#LandingPageForm").validate();
        validator.destroy();
        $("#LandingPageForm").validate({
            rules: rules,
            messages: messages,
            errorPlacement: function (error, element) {
                Object.keys(rules).forEach((value) => {
                    if (element.attr("name") == value)
                        $("#" + value + "-errorMsg").html(error);
                });
            },
        });
    }
});
