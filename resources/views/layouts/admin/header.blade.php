<style>
.topbar{
    background:white;
    padding:15px 20px;
    border-radius:10px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:15px;
}

.logout-btn{
    background:#dc3545;
    color:white;
    border:none;
    padding:8px 15px;
    border-radius:5px;
    cursor:pointer;
    font-size:14px;
}

.logout-btn:hover{
    background:#bb2d3b;
}
</style>

<div class="topbar">
    
    <h2>Dashboard</h2>

    <div class="topbar-right">
        <p>Welcome Admin</p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </div>

</div>