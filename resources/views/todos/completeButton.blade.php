@if ($todo->completed)
<span class="fas fa-check px-2 text-green-400 cursor-pointer" onclick="event.preventDefault(); 
    document.getElementById('form-incomplete-{{ $todo->id }}').submit()""/> 
    <form method=" post" id="{{ 'form-incomplete-' . $todo->id }}" class="hidden"
    action="{{ route('todo.incomplete', $todo) }}">
    @csrf
    @method('delete')
    </form>

    @else
    <span onclick="event.preventDefault(); 
                document.getElementById('form-complete-{{ $todo->id }}').submit()"
        class="fas fa-check px-2 text-gray-300 cursor-pointer" />
    <form method="post" id="{{ 'form-complete-' . $todo->id }}" class="hidden"
        action="{{ route('todo.complete', $todo) }}">
        @csrf
        @method('put')
    </form>
    @endif