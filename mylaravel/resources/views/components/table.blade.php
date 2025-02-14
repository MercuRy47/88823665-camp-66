
<div class="card mb-3">
    <div class="card-header"><h3 class="card-title">Users</h3></div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $index => $user)
            <tr class="align-middle">
                <td>{{  $index+1 }}</td>
                <td>{{  $user->name }}</td>
                <td>{{  $user->email }}</td>
                <td>
                    <a href="{{ url('/user/edit/' . $user->id) }}"><button class="btn btn-warning" onclick="confirmDeleteAlert()">Edit</button></a>
                    <form id="delete-form" action="{{ url('/user/delete/' . $user->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    {!! $users->links('pagination::bootstrap-5') !!}
    </div>

{{--

INSERT INTO users (name, email, password) VALUES
('Alice Johnson', 'alice.johnson@example.com', 'pass123'),
('Bob Smith', 'bob.smith@example.com', 'secure456'),
('Charlie Brown', 'charlie.brown@example.com', 'charlie789'),
('David Williams', 'david.williams@example.com', 'davidpass'),
('Emma Davis', 'emma.davis@example.com', 'emma321'),
('Frank Miller', 'frank.miller@example.com', 'frank999'),
('Grace Wilson', 'grace.wilson@example.com', 'graceabc'),
('Henry Taylor', 'henry.taylor@example.com', 'henry654'),
('Isabella Anderson', 'isabella.anderson@example.com', 'isabella777'),
('Jack Thomas', 'jack.thomas@example.com', 'jackpass');

--}}
