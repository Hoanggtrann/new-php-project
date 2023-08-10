


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    @include('Elements/head')
</head>
<body>
    @include('Elements/menu')
<section>
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-sm-8 mt-5">
              <div class="card-header pb-0 text-left">
                <h3 class="font-weight-bolder text-primary text-gradient">Tham gia ngay hôm nay</h3>
                <p class="mb-0">Điền vào email và password để đăng ký</p>
              </div>
              <div class="card-body pb-3">
                <form action="./signup" method="POST">
                  <label>Tên</label>
                  <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
                  </div>
                  <label>Email</label>
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                  </div>
                  <div class="form-check form-check-info text-left">
                    <input class="form-check-input" name="check" type="checkbox" value="check" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      Tôi đồng ý <a
                        href="javascript:;"
                        class="text-dark font-weight-bolder">Các điều khoản và điều kiện</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Đăng ký</button>
                  </div>
                  @csrf
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-sm-4 px-1">
                <p class="mb-4 mx-auto">
                  Đã có tài khoản?
                  <a href="./login"
                    class="text-primary text-gradient font-weight-bold">Đăng nhập</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                style="background-image:url('assets/img/curved-images/curved11.jpg')">
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