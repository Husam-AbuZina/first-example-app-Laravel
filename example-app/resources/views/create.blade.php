<form action = "/create" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name=:title></br>
    <label for="body">Body:</label>
    <textarea name="body" cols="30" rows="10"></textarea>
    <button>Send</button>
</form>
