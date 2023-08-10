<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    @include('Elements/head')

</head>
<body>
    @include('Elements/menu')
    <section>
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left">
                <h3 class="font-weight-bolder text-primary text-gradient">Welcome back</h3>
                <p class="mb-0">Nhập email và password để đăng nhập</p>
              </div>
              <div class="card-body">
                  <!-- thêm vào mothod(POST) cho form và action đến chính trang đó(login) -->
                <form method="POST" action="./login">
                      <!-- If lỗi -->
                      @if ($errors -> any())
                      @foreach ($errors->all() as $message)
                      <div class="toast fade show d-flex align-items-center justify-content-between bg-gradient-warning border-0 pe-2 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body text-white">
                          {{$message}}
                        </div>
                        <i class="fas fa-times text-md cursor-pointer pe-2 text-white" data-bs-dismiss="toast" aria-label="Close"></i>
                      </div>
                      @endforeach
                      @endif

                  <label>Email</label>
                  <div class="mb-3">
                    <!-- thêm vào name="email" -->
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <!-- thêm vào name="password" -->
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                  </div>
                  <div class="form-check form-switch">
                    <!-- thêm vào name="remember" -->
                    <input name="remember" class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label" for="rememberMe">Ghi nhớ</label>
                  </div>
                  <div class="text-center">
                    <!-- thêm vào type="submit" -->
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Đăng nhập</button>
                  </div>
                  <!--@scrf để lấy token -->
                   @csrf
                  
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Không có tài khoản?
                  <a href="./signup" class="text-primary text-gradient font-weight-bold">Đăng ký</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                style="background-image:url('assets/img/curved-images/curved9.jpg')">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






  </section>

    @include('Elements/footer')
</body>
</html>
