@extends('layouts.main_layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>

                <h3>TODO LIST </h3>
                <br>
                <h4 class="text-center">NOVA TAREFA </h4>

                <form action="{{ route('new_task_submit') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">

                            <div class="form-group">
                                <label for="text_new_task">Nova tarefa</label>
                                <br>
                                <input
                                    type="text"
                                    name="text_new_task"
                                    id="text_new_task"
                                    class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Salvar">
                                <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
                            </div>

                        </div>
                    </div>

                </form>
        </div>
    </div>

@endsection


