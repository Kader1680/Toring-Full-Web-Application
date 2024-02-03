@extends("layout.master")
@section("content")


    <div class="container mt-5 px-2">

        <h2 class=" mb-5">We Have ( {{ $users->count() }} ) Users Register</h2>
        <div class="table-responsive">
        <table class="table table-responsive table-borderless fs-5">

          <thead>
            <tr class="bg-light">
              <th scope="col" width="20%">First Name</th>
              <th scope="col" width="10%">Last Name</th>
              <th scope="col" width="20%">Address Email</th>
              <th scope="col" width="20%">Phone</th>
              <th scope="col" width="20%">Username</th>
            </tr>
          </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->FirstName }}</td>
            <td>{{ $user->LastName }}</td>
            <td>{{ $user->Address }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->name }}</td>

          </tr>
        @endforeach


      </tbody>
    </table>

      </div>



      <h2 class=" mb-5">We Have ( {{ $stories->count() }} ) Stories Posted</h2>
        <div class="table-responsive">
        <table class="table table-responsive table-borderless fs-5">

          <thead>
            <tr class="bg-light">
              <th scope="col" width="25%">Title Story</th>
              <th scope="col" width="60%">Content</th>

            </tr>
          </thead>
      <tbody>
        @foreach ($stories as $story)
        <tr>
            <td>{{ $story->title }}</td>
            <td>{{ $story->content }}</td>


          </tr>
        @endforeach


      </tbody>
    </table>

      </div>

    </div>
@endsection
