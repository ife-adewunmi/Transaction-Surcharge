/*
 * Author:           I.A John <ifeoluwa.adewunmi94@gmail.com>
 * Copyright:        (c) 2020, Ifeoluwa-Adewunmi John | All Rights Reserved.
 */

$('#submit').click( function()
{
    var submitFormName = 'form[name=calculator] ';
    var oData = { amount : $(submitFormName + '#tAmount').val() };

    $.get('check.php', oData, function(oOutput)
    {
        $('#amount').text( $(oOutput).find('amount').text() );
        $('#transfer').text( $(oOutput).find('transfer').text() );
        $('#charges').text( $(oOutput).find('charges').text() );
        $('#debit').text( $(oOutput).find('debit').text() );
        $('#status').text( $(oOutput).find('status').text() );
    });
});