@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('users.updatePassword', 2) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Update user password -->
    <label for="password">New Password:</label>
    <input type="password" name="password" required>


    <button type="submit">Update Password</button>
</form>


