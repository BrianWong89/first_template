$(function () {
    // Handler for .ready() called.
    $("#freshlyBakedDescription").html(
        "At Brian's Curry Puff, our puffs are <strong>hand-made</strong> and <strong>freshly</strong> " +
        "baked from the oven on a daily basis. We\n " +
        "only utilize the very freshest and best of ingredients to ensure our puffs remain of high quality\n " +
        "and standards, to satisfy the taste buds of all curry puff lovers out there.\n ");
    $("#freshlyBakedDescription").append("<br><input type='checkbox'> Click if you like it!");

    $("#contact").submit(function (event) {
        var errorMessages = "";
        if ($("#name").val() === "") {
            errorMessages += "Name is empty!\r\n";

        }
        if ($("#email").val() === "") {
            errorMessages += "Email is empty!\r\n";

        }
        if ($("#subject").val() === "") {
            errorMessages += "Subject is empty!\r\n";

        }
        if ($("#message").val() === "") {
            errorMessages += "Message is empty!\r\n";

        }
        if (errorMessages !== "") {
            alert(errorMessages);
            event.preventDefault();
        }
        if (errorMessages === "") {
            alert("Success!");
        }
    });
});