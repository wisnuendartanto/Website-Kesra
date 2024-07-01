@foreach ($data as $row)
    <tr>
        <td>{{ $row->category->name }}</td>
        <td>{{ $row->title }}</td>
        <td>
            <img src="{{ asset($row->image) }}" alt="image" srcset="" width="160" class="rounded">
        </td>
        <td class="text-end">
            @if (itcan('edit admin.articles') || itcan('delete admin.articles'))
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle btn-action" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-action">
                        @itcan('edit admin.articles')
                            <li>
                                <a href="{{ adminRoute('admin.articles.edit', $row->uuid) }}" class="dropdown-item">Edit</a>
                            </li>
                        @enditcan
                        @itcan('delete admin.articles')
                            <li>
                                <a href="javascript:;" data-toggle="confirmation"
                                    data-message="{{ __('adminportal.delete_confirmation') }}"
                                    data-action="{{ adminRoute('admin.articles.destroy', $row->uuid) }}"
                                    data-method="DELETE" class="dropdown-item">Delete</a>
                            </li>
                        @enditcan
                    </ul>
                </div>
            @endif
        </td>
    </tr>
@endforeach
