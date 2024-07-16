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
            <a href="{{ route('forms.index') }}" class="btn btn-dark">Back</a>
         </div>
      </div>
      <div class="row d-flex justify-content-center">
         <div class="col-md-10">
            <div class="card border-0 shadow-lg my-4">
               <div class="card-header">
                  <h3>edit table</h3>
               </div>

               <form action="{{route('forms.update', $form->id)}}" method="post">
                  @method('put')
                  @csrf
                  <div class="card-body">
                     <div class="mb-3">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" value="{{old('fname', $form->fname)}}" name="fname" id=""
                           class="form-control form-control-lg" placeholder="First Name">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" value="{{old('lname', $form->lname)}}" name="lname" id=""
                           class="form-control form-control-lg" placeholder="Last Name">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" value="{{old('email', $form->email)}}" name="email" id=""
                           class="form-control form-control-lg" placeholder="Email">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Phone number</label>
                        <input type="tel" value="{{old('phone', $form->phone)}}" name="phone" id=""
                           class="form-control form-control-lg" placeholder="Phone number">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="address" value="{{old('address', $form->address)}}" name="address" id=""
                           class="form-control form-control-lg" placeholder="Address">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">City</label>
                        <input type="text" name="city" id="" value="{{old('city', $form->city)}}"
                           class="form-control form-control-lg" placeholder="City">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">State</label>
                        <input type="text" name="state" value="{{old('state', $form->state)}}" id=""
                           class="form-control form-control-lg" placeholder="State">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Zip</label>
                        <input type="text" name="zip" id="" value="{{old('zip', $form->zip)}}"
                           class="form-control form-control-lg" placeholder="Zip">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Country</label>
                        <input type="text" name="country" value="{{old('country', $form->country)}}" id=""
                           class="form-control form-control-lg" placeholder="Country">
                     </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Message</label>
                        <input type="text" name="message" value="{{old('message', $form->message)}}" id=""
                           class="form-control form-control-lg" placeholder="Message">
                     </div>

                     <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>