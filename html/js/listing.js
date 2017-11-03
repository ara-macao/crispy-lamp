function refreshListing() {
    var isbuying = $('#isbuying').val();
    apiRequest('getListings', {isbuying: isbuying}, refreshCallback);
}

function getListingWithID(id) {
    apiRequest('getListingWithID', {id: id}, listingCallback);
}

function removeListingWithID() {
    var id = $('#id').val();
    apiRequest('removeListingWithID', {id: id}, listingCallback);
}

function addListing() {
    var characterid = $('#characterid').val();
    var itemid = $('#itemid').val();
    var listingtype = $('#listingtype').val();
    var itemprice = $('#itemprice').val();
    var itemcount = $('#itemcount').val();
    var comment = $('#comment').val();
    apiRequest('addListing', {characterid: characterid, itemid: itemid, listingtype: listingtype, itemprice: itemprice, itemcount: itemcount, comment: comment}, listingCallback);
}

function refreshCallback(html)
{
    var data = JSON.parse(html);
    if(data['error']) {
        $("#listingFeedback").html(data['message']);
        $("#listingFeedback").show();
        console.log('fail');
    }else{
        $('#buy-orders').empty();
        $('#sell-orders').empty();
        $("#loginUsernameFeedback").hide();
        var result = JSON.parse(data["data"]);
        for (var i = 0; i < result.length; i++) {
          var listing = $('<button type="button" data-button={"listingid":' + result[i]["listing_id"] + '} class="btn btn-' + (result[i]["listing_type"] == 0 ? 'primary' : 'warning') + ' col-sm-12" data-toggle="modal" href="forms/buyitem.php" onclick="getListingWithID(' + result[i]["listing_id"] + ')" id="buyitem" data-target="#remoteModal" > ' + result[i]["item_count"] + " x " + result[i]["item_price"] + " GIL    " + result[i]["item_nicename"] + '</button><br><br>');
          listing.appendTo("#" + (result[i]["listing_type"] == 0 ? "sell" : "buy") + "-orders");
          console.log(result[i]);
        }
    }
}

function listingCallback(html)
{
    var data = JSON.parse(html);
    if(data['error']) {
        $("#listingFeedback").html(data['message']);
        $("#listingFeedback").show();
        console.log('fail');
    }else{
        $("#loginUsernameFeedback").hide();
        var result = JSON.parse(data["data"]);
        console.log(result[0]);
        setTimeout(function()
        {
         var itemname = $('<button type="button" class="close modalbuytext" data-dismiss="modal">&times;</button><h4 class="modal-title modalbuytext"><b>'+ result[0]["item_nicename"] +'</b></h4>');
         $("#inameheader").html(itemname);
         var itemimg = $('<img class="img-rounded" src="'+result[0]["item_image_url"]+'" alt="Image" width="100" height="100">'); 
         $("#itemimg").html(itemimg);
         var iteminfo = $('<table cellpadding="10" class="lead"><tr><td>Item price:</td> <td>'+result[0]["item_price"]+'</td></tr><tr><td>Item amount:</td> <td>'+result[0]["item_count"]+' </td></tr></table>');
         $("#iteminfo").html(iteminfo);
         var itemdescr = $('<p class="modalbuytext"> '+result[0]["item_description"]+'</p>');
         $("#itemdescr").html(itemdescr);
         var charname = $('<p class="lead modalbuytext"> Character: '+result[0]["character_name"]+'</p>]');
         $("#charname").html(charname);
         var comment = $('<p class="modalbuytext"> Comment: '+result[0]["comment"]+'</p>]');
         $("#comment").html(comment);
        }, 50);
    }
}
