$("#brewerySearchSubmit").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'GET',
        url: 'http://10.5.1.250/team8/beer/search/belgium',
        data: {},
        dataType: 'json',
        success: function (data) {
          localStorage.setItem('biers', JSON.stringify(data));
          var state = $("#brewerySearch select[name=state]").val();
          var ebc = $("#brewerySearch select[name=ebc]").val();
          var ibu = $("#brewerySearch input[name=ibu]").val();
          var minEbc = 0;
          var maxEbc = 0;
          if(ebc == "stout") {
              minEbc = 75;
              maxEbc = 100;
          } else if(ebc == "brune") {
              minEbc = 50;
              maxEbc = 75;
          } else if(ebc == "ambree") {
              minEbc = 25;
              maxEbc = 50;
          }else if(ebc == "blonde") {
              minEbc = 0;
              maxEbc = 25;
          } else {
              minEbc = 0;
              maxEbc= 100;
          }
          alert("State : " + state + "\nEBC : " + ebc + "\nEBC min : " + minEbc + "\nEBC max : " + maxEbc);
          var feed = data.feed.feed;
            $.each(feed, function(index, element) {
                if(element.state == state && element.ebc > minEbc && element.ebc < maxEbc && element.ibu <= ibu) {
                    console.log('Test');
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
                                       "<td>" + element.name_brewery + "</td>" +
                                       "<td>" + element.address + "</td>" +
                                       "<td>" + element.city + "</td>" +
                                       "<td>" + element.state + "</td>" +
                                       "<td>" + element.country + "</td>" +
                                       "<td>" + element.gps + "</td>" +
                                       "<td>" + element.web + "</td>" +
                                       "</tr>";
                    $('#beerTable').append(txt);
                }
            });
        }
        window.location.replace('http://127.0.0.1:8000/');
    });
});
