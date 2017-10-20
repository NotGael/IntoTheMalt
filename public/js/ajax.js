$.ajax({
    type: 'GET',
    url: 'http://10.5.1.250/team8/beer/start/1',
    data: {},
    dataType: 'json',
    success: function (data) {
      feed = data.feed.feed;
        $.each(feed, function(index, element) {
            var txt = "<tr>" + "<td>" + element.id_beers + "</td>" +
                               "<td>" + element.name_beer + "</td>" +
                               "<td>" + element.description + "</td>" +
                               "<td>" + element.id_breweries + "</td>" +
                               "<td>" + element.id_categories + "</td>" +
                               "<td>" + element.id_styles + "</td>" +
                               "<td>" + element.abv + "</td>" +
                               "<td>" + element.ibu + "</td>" +
                               "<td>" + element.srm + "</td>" +
                               "<td>" + element.ebc + "</td>" +
                               "<td><img src=\"" + element.images + "\" alt=\"Une image de bière\" style=\"max-width:100px; min-width:100px\"></td>" +
                               "<td>" + element.last_mod + "</td>" +
                               "<td>" + element.image1 + "</td>" +
                               "<td>" + element.image2 + "</td>" +
                               "<td>" + element.image3 + "</td>" +
                               "<td>" + element.image4 + "</td>" +
                               "<td>" + element.image5 + "</td>" +
                               "<td>" + element.image6 + "</td>" +
                               "<td>" + element.image7 + "</td>" +
                               "<td>" + element.image8 + "</td>" +
                               "<td>" + element.image9 + "</td>" +
                               "<td>" + element.image10 + "</td>" +
                               "</tr>";
            $('#beerTable').append(txt);
        });
    }
});
