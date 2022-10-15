<form method="post" action="{{$url}}" style="display: inline-block" class="delete-form" id="delete-form">
    @method('DELETE')
    @csrf
    <div class="form-group">
        <button style="cursor: pointer;" type="submit" class="btn btn-danger" title="Delete"><i class="fa-solid fa-trash-can"></i></button>
    </div>
</form>