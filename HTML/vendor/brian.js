$(function () {
    $.getJSON("webservices.php", function (data) {
        console.log(data);

        $("#name").val(data.name);
        $("#email").val(data.email);
    });
    //Don't remove this two lines as it should be hidden by default
    $("#warningDiv").hide();
    $("#successDiv").hide();

    $("#freshlyBakedDescription").html(
        "At Brian's Curry Puff, our puffs are <strong>hand-made</strong> and <strong>freshly</strong> " +
        "baked from the oven on a daily basis. We\n " +
        "only utilize the very freshest and best of ingredients to ensure our puffs remain of high quality\n " +
        "and standards, to satisfy the taste buds of all curry puff lovers out there.<br>");
    $("#freshlyBakedDescription").append("<br><input type='checkbox'> Click if you like it!");

    $("#contact").submit(function (event) {
        var errorMessages = "";
        if ($("#name").val() === "") {
            errorMessages += "Name is empty!\r\n<br>";

        }
        if ($("#email").val() === "") {
            errorMessages += "Email is empty!\r\n<br>";

        }
        if ($("#subject").val() === "") {
            errorMessages += "Subject is empty!\r\n<br>";

        }
        if ($("#message").val() === "") {
            errorMessages += "Message is empty!\r\n";

        }
        //What is inside errorMessages?
        if (errorMessages !== "") {
            //alert(errorMessages);
            $("#warningDiv").show();
            $("#warningDiv").html(errorMessages);
            event.preventDefault();
        } else {
            $("#successDiv").show();
        }
    });
});