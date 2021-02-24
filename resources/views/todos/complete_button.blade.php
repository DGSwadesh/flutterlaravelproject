@if ($todo->completed)
    <p class="">{{ $todo->title }}</p>
@else
    <p class="line-through">{{ $todo->title }}</p>
@endif
<div>

    <a href="{{ '/todos/' . $todo->id . '/edit' }}" class="mx-5 py-1 px-1 cursor-pointer rounded text-white">
        <span class="fa fa-edit text-blue-400 px-1"></span></a>
    @if ($todo->completed)
        <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{ $todo->id }}').submit()"
            class="fa fa-check-square text-green-400 px-1"></span>

        <form action="{{ route('todo.incomplete', $todo->id) }}" method="post" style="display:none"
            id="{{ 'form-incomplete-' . $todo->id }}">
            @csrf
            @method('delete')
        </form>
    @else
        <span onclick="event.preventDefault();document.getElementById('form-complete-{{ $todo->id }}').submit()"
            class="fa fa-check-square cursor-pointer text-gray-400 px-1"></span>
        <form action="{{ route('todo.completed', $todo->id) }}" method="post" style="display:none"
            id="{{ 'form-complete-' . $todo->id }}">
            @csrf
            @method('put')
        </form>
    @endif
</div>

