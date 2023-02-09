<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <div class="container-fluid">
          <a class="navbar-brand" href="/buku">Gaji Karyawan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-danger">{{ auth()->user()->name }} Logout</button>
                </form>
          </div>
        </div>
</nav>
<!-- End of Topbar -->
