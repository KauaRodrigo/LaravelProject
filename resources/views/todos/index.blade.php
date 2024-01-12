<x-layout title="ToDos">
    <a href="/criar" class="text-white btn btn-info mb-2 mt-2">
        Nova Tarefa
    </a>        
    <ul class="list-group">
        @foreach($tarefas as $tarefa)
            <li class="card mb-2">
                <div class="p-3 w-100 h-100 bg-danger rounded-top d-flex justify-content-between">
                    <p class="text-white m-0">{{ $tarefa->title }}</p>                    
                </div>                                
                <div class="card-body">
                    @if($tarefa->description)
                        {{ $tarefa->description }}
                    @else
                        <p class="text-muted m-0">Sem descrição</p>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>