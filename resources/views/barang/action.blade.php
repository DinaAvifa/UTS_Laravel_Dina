<body>
    <div class="d-flex">
        <a href="{{route('barang.show', ['barang' => $list->id]) }}" class="btn btn-outline-light bg-info btn-sm me-2"><i
                class="bi-info-circle "></i></a>
        <a href="{{ route('barang.edit', ['barang' => $list->id]) }}" class="btn btn-outline-warning btn-sm me-2"><i
                class="bi-pencil-square"></i></a>
        <div>
            <form action="{{ route('barang.destroy', ['barang' => $list->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm me-2 "><i class="bi-trash"></i></button>
            </form>
        </div>
    </div>
</body>
