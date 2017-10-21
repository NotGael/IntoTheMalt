$("#brewerySearchSubmit").click(function(e) {
    localStorage.clear();
    e.preventDefault();
    $.ajax({
        type: 'GET',
        url: 'http://10.5.1.250/team8/beer/search/belgium',
        data: {},
        dataType: 'json',
        success: function (data) {
        //   localStorage.setItem('biers', JSON.stringify(data));
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
        //   alert("State : " + state + "\nEBC : " + ebc + "\nEBC min : " + minEbc + "\nEBC max : " + maxEbc);
          var feed = data.feed.feed;
          console.log("bonjour");
          console.log(feed);
          var beers = [];
            $.each(feed, function(index, element) {
                console.log(element);
                beer.push(element);
                localStorage.setItem('biers', JSON.stringify(beer));
                if(element.state == state && element.ebc > minEbc && element.ebc < maxEbc && element.ibu <= ibu) {
                    // localStorage.setItem('biers', JSON.stringify(element));
                    console.log("bonjour");
                    // $('#beerTable').append(txt);
                }
            });
        }

    });
    window.location.href = "http://localhost:8000/";

});
