<div class="btn-list d-flex">
    <a class="me-1" href="{{ route('promotions.show', $item->id) }}">
        <button id="bShow" type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="View">
            <span class="fe fe-eye"> </span>
        </button>
    </a>

    <a class="me-1" href="{{ route('promotions.edit', $item->id) }}">
        <button id="bEdit" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit">
            <span class="fe fe-edit"> </span>
        </button>
    </a>

    <form action="{{ route('promotions.destroy', $item->id) }}" method="POST" class="me-1 destroy_{{$item->id}}">
        @csrf
        @method('DELETE')
        <button id="bDel" type="button" class="btn btn-sm btn-danger delFunc" data-id="{{$item->id}}" data-toggle="tooltip" data-placement="top" title="Delete">
            <span class="fe fe-trash-2"> </span>
        </button>
    </form>
</div>
