<aside class="">
    <div class="list-group">
        <a href="{{ route('page.home') }}" class="list-group-item list-group-item-action">Home</a>
    </div>
    @user
    <p class="mt-3 my-2">My Dashboard</p>
    <div class="list-group">
        <a href="{{ route('dashboard.home') }}" class="list-group-item list-group-item-action">Dashboard</a>
    </div>
    <p class="mt-3 my-2">Manage Category</p>
    <div class="list-group">
        <a href="{{ route('category.create') }}" class="list-group-item list-group-item-action">Create Category</a>
    </div>
    <div class="list-group">
        <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action">Category List</a>
    </div>

    <p class="mt-3 my-2">Manage Inventory</p>
    <div class="list-group">
        <a href="{{ route('item.create') }}" class="list-group-item list-group-item-action">Create Item</a>
    </div>
    <div class="list-group">
        <a href="{{ route('item.index') }}" class="list-group-item list-group-item-action">Item List</a>
    </div>

    <p class="mt-3 my-2">User Profile</p>
    <div class="list-group">
        <a href="" class="list-group-item list-group-item-action">My Profile</a>
    </div>
    <div class="list-group">
        <a href="{{ route('auth.passwordChange') }}" class="list-group-item list-group-item-action">Change Password</a>
    </div>
    <form action="{{ route('auth.logout') }}" method="post">
        @csrf
        <button class="btn btn-danger w-100 mt-3">LogOut</button>
    </form>

    @enduser
    @notUser
    <p class="mt-3 my-2"></p>
    <div class="list-group">
        <a href="{{ route('auth.login') }}" class="list-group-item list-group-item-action">Login</a>
    </div>
    <div class="list-group">
        <a href="{{ route('auth.register') }}" class="list-group-item list-group-item-action">Register</a>
    </div>
    @endnotUser
</aside>
