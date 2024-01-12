<x-layout title="Criar ToDo">    
    <form class="form-group" action="/salvar" method="post">
        @csrf
        <label class="form-label" for="titulo">Título:</label>
        <input class="form-control" type="text" id="titulo" name="titulo"><br>
        <label for="descricao" class="form-label">Descrição</label><br>
        <textarea name="descricao" class="form-control" id="descricao"></textarea>
        <button class="btn btn-success mt-4" type="submit">Adicionar</button><a class="btn btn-danger mt-4 mx-3" href="/">Voltar</a>
    </form>
</x-layout>