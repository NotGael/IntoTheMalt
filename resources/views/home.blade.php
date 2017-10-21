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
                    <!-- Front-End Comment Styliser le Form ['url' => 'foo/bar', 'class' => myClass, 'id' => myId]-->
                    <!-- SELECT ... ['placeholder' => 'Pick a size...', 'class' => myClass, 'id' => myId] -->
                    <form name="brewerySearch" id="brewerySearch">
                        {!! Form::token() !!}
                        <!-- Province -->
                        {!! Form::select('state', ['Antwerpen' => 'Anvers',
                                                  'Vlaams Brabant' => 'Brabant Flamand',
                                                  'Brabant Wallon' => 'Brabant Wallon',
                                                  'West-Vlaanderen"' => 'Flandre Occidentale',
                                                  'Oost-Vlaanderen' => 'Flandre Orientale',
                                                  'Hainaut' => 'Hainaut',
                                                  'Lige' => 'Liège',
                                                  'Limburg' => 'Limbourg',
                                                  'Luxembourg' => 'Luxembourg',
                                                  'Namur' => 'Namur'], null, ['placeholder' => 'Choisi une province ...']) !!}
                                          <!-- distance / checkbox : blonde, brune, ambrée -->
                        {!! Form::number('range', '50') !!}
                        <!-- Range -->
                        {!! Form::macro('myField', function()
                          {
                            return '<!--input type="awesome"-->';
                          });
                        !!}
                        {!! Form::myField() !!}
                        <!-- Type -->
                        <label>Blonde : </label>
                        {!! Form::checkbox('ebc', 'blonde') !!}
                        <label>Brune : </label>
                        {!! Form::checkbox('ebc', 'brune') !!}
                        <label>Ambree : </label>
                        {!! Form::checkbox('ebc', 'ambree') !!}
                        <label>Stout : </label>
                        {!! Form::checkbox('ebc', 'stout') !!}
                        <button id="brewerySearchSubmit">Submit</button>
                    {!! Form::close() !!}
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
                        <th>name_brewery</th>
                        <th>address</th>
                        <th>city</th>
                        <th>state</th>
                        <th>country</th>
                        <th>gps</th>
                        <th>web</th>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
