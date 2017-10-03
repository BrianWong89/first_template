$(function () {
    $.getJSON("savings.php", function (data) {
        //console.log(data);
       // console.log(data.members);
        for (i = 0; i < data.members.length; i++) {
            console.log(data.members[i]);
            $('#myTable tr:last').after("<tr><td> " + data.members[i].name + " </td><td> " + data.members[i].surname + " </td><td> " + data.members[i].age + " </td><td> " + data.members[i].savings + " </td></tr>"); //This one executes 3 times
        }

    });
    //Don't remove this two lines as it should be hidden by default
    $("#warningDiv").hide();
    $("#successDiv").hide();

    $("#freshlyBakedDescription").html(
        "At Brian's Curry Puff, our puffs are <strong>hand-made</strong> and <strong>freshly</strong> " +
        "baked from the oven on a daily basis. We\n " +
        "only utilize the very freshest and best of ingredients to ensure our puffs remain of high quality\n " +
        "and standards, to satisfy the taste buds of all curry puff lovers out there.<br>");

    $("#flashBtn").click(function () {

    });


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