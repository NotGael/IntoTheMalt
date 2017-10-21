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
                    <!-- Front-End Comment Styliser le Form ['url' => 'foo/bar', 'class' => myClass, 'id' => myId]-->
                    <!-- SELECT ... ['placeholder' => 'Pick a size...', 'class' => myClass, 'id' => myId] -->
                    {!! Form::open(['url' => 'foo/bar']) !!}
                        {!! Form::token() !!}
                        <!-- Province -->
                        {!! Form::select('size', ['Anvers' => 'Anvers',
                                                  'Brabant flamand' => 'Brabant flamand',
                                                  'Brabant wallon' => 'Brabant wallon',
                                                  'Flandre occidentale' => 'Flandre occidentale',
                                                  'Flandre orientale' => 'Flandre orientale',
                                                  'Hainaut' => 'Hainaut',
                                                  'Liège' => 'Liège',
                                                  'Limbourg' => 'Limbourg',
                                                  'Luxembourg' => 'Luxembourg',
                                                  'Namur' => 'Namur'], null, ['placeholder' => 'Choisi une province ...']) !!}
                                          <!-- distance / checkbox : blonde, brune, ambrée -->
                        {!! Form::number('number', '50') !!}
                        <!-- Range -->
                        {!! Form::macro('myField', function()
                          {
                            return '<!--input type="awesome"-->';
                          });
                        !!}
                        <!-- Type -->
                        {!! Form::checkbox('Blonde', 'blonde') !!}
                        {!! Form::checkbox('Brune', 'brune') !!}
                        {!! Form::checkbox('Ambrée', 'ambree') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
