$(document).ready(function () {
    $("#divtiebreaker").hide();
    $("#btnGenerateReport").hide();
    $('.js-example-basic-single').select2();
    console.log('hidden');
    $('#agentBrithDate').on('hidden', function(e) {
       console.log('Farei o calculo');
        var dtInput = $('#agentBrithDate').editable('getValue', true);
        var years  = moment().diff(dtInput, 'years',true);
        console.log(parseInt(years));
    });

    $("#selectRel").change(function (e) { 
        e.preventDefault();
        $("#btnGenerateReport").show();
        var option = $("#selectRel").val();
        console.log({option});
        if(option == 3) {
            $("#divtiebreaker").show();
        }else{
            $("#divtiebreaker").hide();
        }
    });
});
