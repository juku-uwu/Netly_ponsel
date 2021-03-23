$(document).ready(function(){
    $('#masking1').mask('#.##0', {reverse: true});
    $('#masking2').mask('#.##0,0', {reverse: true});
    $('#masking3').mask('#,##0.00', {reverse: true});
})