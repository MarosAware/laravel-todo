<span><a href="{{ route('category.edit', [$category]) }}" class="category-item--btn btn btn-primary">Edit</a></span>
<span>
    {{ Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $category->id]]) }}
    {{ Form::submit('Delete', ['class' => 'category-item--btn btn btn-danger']) }}
    {{ Form::close() }}
</span>