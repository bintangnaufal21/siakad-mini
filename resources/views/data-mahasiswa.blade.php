<x-layoutAdmin>
<section class="content-header">
        <h1>Data Mahasiswa</h1>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="/tambah_data_mahasiswa/data_mahasiswa" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Mahasiswa
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>admin@mail.com</td>
                            <td><span class="badge badge-danger">Admin</span></td>
                            <td>
                                <a href="/users/1/edit" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dosen A</td>
                            <td>dosen@mail.com</td>
                            <td><span class="badge badge-info">Dosen</span></td>
                            <td>
                                <a href="/users/2/edit" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mahasiswa B</td>
                            <td>mahasiswa@mail.com</td>
                            <td><span class="badge badge-success">Mahasiswa</span></td>
                            <td>
                                <a href="/users/3/edit" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layoutAdmin>
