function getData_MemberCommission_Agent()
{     
    var url='Commission/MemberCommissionCasino?idMaster=' + $('selmaster').value + '&idAgent=' + $('selmaster').value;
    age.DelayReloadPage(url, 1);
}

function show_data_com()
{
    if($('selmaster') && $('selmaster') != 'undefined') 
    {
        var url = 'Commission/MemberCommissionCasino?idMaster=' + $('selmaster').value + '&idAgent=' + $('selAg').value;  
    }
    else
    {
        var url = 'Commission/MemberCommissionCasino?idAgent=' + $('selAg').value;        
    }
    age.DelayReloadPage(url, 1);
}