@extends('core::layouts.panel')

@section('content')

    <div class="row">
        <div class="col col-xs-12">
            <h1>Create room form</h1>
            <form method="post" action="{{ action('room.store') }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <label for="roomName">Nazwa</label>
                    <input type="text" name="roomName" class="form-control" id="roomName" placeholder="Nazwa">
                    <small>Type room name</small>
                </div>
                <div class="form-group">
                    <label for="game-input">Wybierz grę</label>
                    <select name="game" id="game-input" class="form-control" name="game">
                        <option value="warhammer">Warhammer</option>
                        <option value="darkheresy">Darh Heresy</option>
                    </select>
                    <small>Po wybraniu gry otrzymasz pomoce w zarządzaniu</small>
                </div>
                <button type="submit" class="btn btn-primary">Utwórz</button>
            </form>

        </div>
    </div>





@stop
