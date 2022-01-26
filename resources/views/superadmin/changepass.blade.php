<form action="/admin/changepass" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$admin->id}}">
    <label for="pw">Change Password for Username: {{$admin->username}}:</label>
    <input type="password" class="form-control" name="pw" required>
    <button class="btn btn-sm btn-success mt-3" type="submit">Save</button>
</form>