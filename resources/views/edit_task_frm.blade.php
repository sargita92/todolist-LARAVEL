@extends('layouts.main_layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>

                <h3>TODO LIST </h3>
                <br>
                <h4 class="text-center">EDITAR TAREFA </h4>

                <form action="{{ route('edit_task_submit') }}" method="post">
                    @csrf

                    <input type="hidden" name="id_task" id="id_task" value="{{$task->id}}">

                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">

                            <div class="form-group">
                                <label for="text_edit_task">Editar tarefa</label>
                                <br>
                                <input
                                    type="text"
                                    name="text_edit_task"
                                    id="text_edit_task"
                                    value="{{$task->task}}"
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


