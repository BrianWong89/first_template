$(function () {
    $("#warningDiv").hide();
    $("#successDiv").hide();

    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }

    $("#contact").submit(function (event) {
            var errorMessages = "";
            var sEmail = $("#email").val();

            if ($("#name").val() === "") {
                errorMessages += "Name is empty!\r\n<br>";

            }

            if ($("#email").val() === "") {
                errorMessages += "Email is empty!\r\n<br>";
            }

            else if (!validateEmail(sEmail)) {
                errorMessages += "Email is invalid!\r\n<br>";
            }

            if (errorMessages !== "") {
                $("#warningDiv").show();
                $("#warningDiv").html(errorMessages);
                event.preventDefault();
            } else {
                $("#successDiv").show();
            }
        }
    );
});