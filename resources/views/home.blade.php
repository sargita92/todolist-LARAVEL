@extends('layouts.main_layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>

                <h3>TODO LIST </h3>

                <div class="my-y2">
                    <a href="{{ route('new_task_frm') }}" class="btn btn-primary"> Criar tarefa...</a>
                </div>
        </div>
        <br />
        @if ($tasks->count() === 0)
            <p>Nao exitem tarefas disponiveis</p>


        @else
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Tarefas</th>
                        <th>Acoes</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td style="width: 70%">{{$task->task}}</td>
                            <td>
                                @if ( $task->done == null)
                                    <a href="{{ route('task_done', ['id'=>$task->id, ]) }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i>
                                    </a>
                                @else
                                <a href="{{ route('task_undone', ['id'=>$task->id, ]) }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-times"></i>
                                    </a>
                                @endif

                                <a href="{{ route('edit_task_frm', ['id'=>$task->id, ]) }}" class="btn btn-primary btn-sm">
                                    Editar
                                </a>

                                @if ($task->visible === 0)
                                    <a href="{{ route('task_visible', ['id'=>$task->id, ]) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                @else
                                    <a href="{{ route('task_invisible', ['id'=>$task->id, ]) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                @endif

                                <a href="{{ route('task_delete', ['id'=>$task->id, ]) }}" class="btn btn-primary btn-sm">
                                    Apagar
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                <p>TOTAL: {{$tasks->count()}}</p>
            </div>
        @endif
    </div>

@endsection


