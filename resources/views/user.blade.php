<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  <style>
    body {
      background-color: #f9fafb;
      font-family: 'Inter', sans-serif;
    }

    h3 {
      font-weight: 600;
    }

    .card {
      border: 1px solid #e5e7eb;
      border-radius: 16px;
      background: #fff;
      padding: 25px;
    }

    table {
      border-radius: 12px;
      overflow: hidden;
    }

    thead {
      background-color: #f1f5f9;
    }

    thead th {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      color: #374151;
    }

    tbody td {
      font-size: 15px;
      color: #4b5563;
      vertical-align: middle;
    }

    .btn {
      border-radius: 8px;
      font-size: 14px;
      padding: 6px 12px;
    }

    .form-label {
      font-weight: 500;
      color: #374151;
    }

    .user-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #0d6efd;
    }
  </style>
</head>
<body>

<div class="container py-5">

  <!-- Users Table -->
  <div class="card mb-5">
    <h3 class="text-center text-primary mb-4">Users List</h3>

    <div class="table-responsive">
      <table class="table align-middle text-center mb-0">
        <thead>
          <tr>
            <th width="60">ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th width="220">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($user as $data)
          <tr>
            <td>{{ $data->id }}</td>
            <td>
              <img src="{{ $data->image ?? 'https://ui-avatars.com/api/?name='.$data->name }}" class="user-img" alt="User Image">
            </td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>
              <a href="/admin/{{$data->id}}/show" class="btn btn-outline-primary btn-sm">Show</a>
              <a href="/admin/{{$data->id}}/edit" class="btn btn-outline-warning btn-sm">Edit</a>
<form id="delete-form" method="POST" action="{{ route('admin.destroy', $data->id) }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-outline-danger btn-sm" onclick="confirmDelete()">
        Delete
    </button>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
function confirmDelete() {
    Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form').submit();
        }
    });
}
</script>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Register Form -->
  <div class="card">
    <h3 class="text-center text-success mb-4">Register New User</h3>

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Enter password" required>
      </div>

      <!-- Upload Image -->
      <div class="mb-3">
        <label class="form-label">Photo</label>
        <!-- <input type="file" class="form-control" name="image" accept="image/*"> -->
      </div>
            <!-- Department -->
      <div class="mb-3 text-start">
        <label class="form-label">Department</label>
        <!-- <select name="department" class="form-control">
          <option value="">Select department</option>
          <option value="IT">IT</option>
          <option value="HR">HR</option>
          <option value="Finance">Finance</option>
        </select> -->
      </div>
      <button type="submit" class="btn btn-success w-100">Register</button>
    </form>
  </div>

</div>

@if(session('success'))
<script>
  Swal.fire({
    title: "{{ session('success') }}",
    icon: "success",
    timer: 2000,
    showConfirmButton: false
  });
</script>
@endif
@if(session('Delete'))
<script>
  Swal.fire({
    title: "{{ session('Delete') }}",
    icon: "success",
    timer: 2000,
    showConfirmButton: false
  });
</script>
@endif

</body>
</html>
