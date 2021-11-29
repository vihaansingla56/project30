

<?php

$email =  filter_var("vihaansingla555@gmail.com", FILTER_VALIDATE_EMAIL);
 
if($email){
  echo "exists";
}
else{
  echo "not exist";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <title>Document</title>
</head>

<body>

  <!-- Button trigger modal -->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



  <div class="modal modal-alert position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalChoice">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-body p-4 text-center">
          <h5 class="mb-0">Enable this setting?</h5>
          <p class="mb-0">You can always change your mind in your account settings.</p>
        </div>
        <div class="modal-footer flex-nowrap p-0">
          <button type="button"
            class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Yes,
              enable</strong></button>
          <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"
            data-bs-dismiss="modal">No thanks</button>
        </div>
      </div>
    </div>
  </div>






  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Sign up for free</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body p-5 pt-0">
          <form class="">
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
            <hr class="my-4">
            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#twitter"></use>
              </svg>
              Sign up with Twitter
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#facebook"></use>
              </svg>
              Sign up with Facebook
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#github"></use>
              </svg>
              Sign up with GitHub
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>