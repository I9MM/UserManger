<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show User</title>
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  <style>
    body {
      background-color: #f4f5f7;
      font-family: 'Inter', sans-serif;
    }
    .card {
      border-radius: 16px;
      padding: 30px;
      max-width: 450px;
      margin: 50px auto;
      background: #fff;
      box-shadow: 0 8px 24px rgba(0,0,0,0.05);
      text-align: center;
    }
    .user-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #f59e0b;
      margin-bottom: 20px;
    }
    h3 {
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 15px;
    }
    p {
      font-size: 16px;
      color: #374151;
      margin: 5px 0;
    }
    .btn {
      border-radius: 8px;
      font-size: 14px;
      padding: 8px 20px;
      margin: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card">
    <img src="{{ $finduser->image ?? 'https://ui-avatars.com/api/?name='.$finduser->name }}" class="user-img" alt="User Image">

    <h3>{{ $finduser->name }}</h3>
    <p><strong>Email:</strong> {{ $finduser->email }}</p>
    <p><strong>Department:</strong> {{ $finduser->department ?? 'N/A' }}</p>

    <div>
      <a href="{{ route('admin.create') }}" class="btn btn-primary">Back to Users</a>

      <!-- Delete Form -->
      <form id="delete-form" action="{{ route('admin.destroy', $finduser->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
      </form>
    </div>
  </div>
</div>

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
    })
  }
</script>

</body>
</html>
