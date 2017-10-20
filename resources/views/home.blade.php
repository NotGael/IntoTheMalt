@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="beerTable">
                      <th>id_beers</th>
                      <th>name_beer</th>
                      <th>description</th>
                      <th>id_breweries</th>
                      <th>id_categories</th>
                      <th>id_styles</th>
                      <th>abv</th>
                      <th>ibu</th>
                      <th>srm</th>
                      <th>ebc</th>
                      <th>images</th>
                      <th>last_mod</th>
                      <th>image1</th>
                      <th>image2</th>
                      <th>image3</th>
                      <th>image4</th>
                      <th>image5</th>
                      <th>image6</th>
                      <th>image7</th>
                      <th>image8</th>
                      <th>image9</th>
                      <th>image10</th>
                    </table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
