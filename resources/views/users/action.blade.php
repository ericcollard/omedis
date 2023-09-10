<td class="table-action">

    <a href="{{ route('users.show',$id) }}" class="action-icon"> <i class="fa fa-eye fa-sm"> </i></a>
    <a href="{{ route('users.edit',$id) }}" class="action-icon"> <i class="fa fa-edit fa-sm"></i></a>
    <form id="delete-{{ $id }}" method="POST" action="{{ route('users.destroy',$id) }}" class="d-sm-inline-block action-icon">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="javascript:{}" onclick="document.getElementById('delete-{{ $id }}').submit(); return false;" style="color: inherit;">
            <i class="fa fa-trash fa-sm"></i>
        </a>
    </form>
</td>
