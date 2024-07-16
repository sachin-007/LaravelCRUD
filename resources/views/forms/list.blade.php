   <!doctype html>
   <html lang="en">

   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Hello, world!</title>
   </head>

   <body>

      <div class="bg-dark py-3">
         <div class="text-white text-center">Laravel CRUD</div>
      </div>

      <div class="container">
         <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
               <a href="{{ route('forms.create') }}" class="btn btn-primary">Create</a>
            </div>
         </div>
         <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-4">
               <div class="alert alert-success">
                  {{Session::get('success')}}
               </div>
            </div>
            @endif

            <div class="col-md-10">
               <div class="card border-0 shadow-lg my-4">
                  <div class="card-header">
                     <h3>forms</h3>
                  </div>
                  <div class="card-body">
                     <table class="table">
                        <tr>
                           <th>ID</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Address</th>
                           <th>City</th>
                           <th>state</th>
                           <th>Zip</th>
                           <th>Country</th>
                           <th>Message</th>
                           <th>Actions</th>
                        </tr>
                        @if ($forms->isNotEmpty())
                        @foreach ($forms as $form)
                        <tr>
                           <td>{{$form->id}}</td>
                           <td>{{$form->fname}}</td>
                           <td>{{$form->lname}}</td>
                           <td>{{$form->email}}</td>
                           <td>{{$form->phone}}</td>
                           <td>{{$form->address}}</td>
                           <td>{{$form->city}}</td>
                           <td>{{$form->state}}</td>
                           <td>{{$form->zip}}</td>
                           <td>{{$form->country}}</td>
                           <td>{{$form->message}}</td>
                           <td>
                              <a href="{{route('forms.edit', $form->id)}}" class="btn btn-dark">Edit</a>
                              <a href="#" onclick="deleteForm({{$form->id}})" class="btn btn-danger">Delete</a>
                              <form id="delete-form-{{$form->id}}" action="{{route('forms.destroy', $form->id)}}"
                                 method="post">
                                 @csrf
                                 @method('delete')
                              </form>
                           </td>

                        </tr>
                        @endforeach
                        @endif

                     </table>
                  </div>


               </div>
            </div>
         </div>
      </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>


      <script>
      function deleteForm(id) {
         if (confirm("are you sure you want to delete form")) {
            document.getElementById('delete-form-' + id).submit();
         }
      }
      </script>

   </body>

   </html>