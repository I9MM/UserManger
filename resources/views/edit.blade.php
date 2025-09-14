<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f5f7;
      font-family: 'Inter', sans-serif;
    }
    .card {
      border-radius: 16px;
      padding: 30px;
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      box-shadow: 0 8px 24px rgba(0,0,0,0.05);
      text-align: center;
    }
    .user-img-preview {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #f59e0b;
      margin-bottom: 20px;
    }
    h3 {
      font-weight: 600;
      color: #f59e0b;
      margin-bottom: 20px;
    }
    .form-label {
      font-weight: 500;
      color: #374151;
    }
    .btn {
      border-radius: 8px;
      font-size: 14px;
      padding: 8px 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card">
    <h3>Edit User</h3>

    <!-- Current User Image -->
    <img src="{{ $finduser->image ?? 'https://ui-avatars.com/api/?name='.$finduser->name }}" class="user-img-preview" alt="User Image">

    <form action="{{ route('admin.update', $finduser->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3 text-start">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $finduser->name }}" required>
      </div>

      <div class="mb-3 text-start">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $finduser->email }}" required>
      </div>

      <div class="mb-3 text-start">
        <label class="form-label">Password <small class="text-muted">(leave empty if not changing)</small></label>
        <input type="password" class="form-control" name="password" placeholder="New password">
      </div>

      <!-- Image Upload -->
      <div class="mb-3 text-start">
        <label class="form-label">User Image</label>
        <!-- <input type="file" class="form-control" name="image"> -->
      </div>

      <!-- Department -->
      <div class="mb-3 text-start">
        <label class="form-label">Department</label>
        <!-- <select name="department" class="form-control">
          <option value="">Select department</option>
          <option value="IT" {{ $finduser->department == 'IT' ? 'selected' : '' }}>IT</option>
          <option value="HR" {{ $finduser->department == 'HR' ? 'selected' : '' }}>HR</option>
          <option value="Finance" {{ $finduser->department == 'Finance' ? 'selected' : '' }}>Finance</option>
        </select> -->
      </div>

      <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('admin.create') }}" class="btn btn-secondary w-45">Cancel</a>
        <button type="submit" class="btn btn-warning w-45">Update</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
