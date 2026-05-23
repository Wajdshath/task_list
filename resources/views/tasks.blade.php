<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="mb-4">Task List</h2>
            
        
            <form action="create" method="POST">
               @csrf
                <div class="row g-2 mb-4">
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" placeholder="Enter task" required>
                    </div>

                    <div class="col-md-2 d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i> Add Task
                        </button>
                    </div>

                 
                </div>
            </form>

            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-light">
                    <tr>
                      
                        <th>Task</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($tasks as $task)
                        
                  <tr>
                    
                    <td>{{$task->name}}</td>
                    <td>
                        <form action="/delete/{{$task->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"> Delete </i>
                            </button>
                        </form>
                      
                    </td>
                </tr>
             
                
                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>