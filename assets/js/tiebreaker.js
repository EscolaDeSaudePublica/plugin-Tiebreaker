$(document).ready(function () {
    console.log('hidden');
    $('#agentBrithDate').on('hidden', function(e) {
       console.log('Farei o calculo');
        var dtInput = $('#agentBrithDate').editable('getValue', true);
        var years  = moment().diff(dtInput, 'years',true);
        console.log(parseInt(years));
    });
});