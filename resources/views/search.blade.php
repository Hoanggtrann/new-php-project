<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('elements/head')
</head>
<body>
    <!-- menu -->
    @include('elements/menu')

    <!-- search -->
    <header>
        <div class="page-header min-vh-75">
          <div class="oblique position-absolute top-0 h-100 d-md-block d-none">
            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
              style="background-image:url('assets/img/curved-images/curved11.jpg')">
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div
                class="col-lg-6 col-md-7 d-flex justify-content-center text-md-start text-center flex-column mt-sm-0 mt-7">
                <h1 class="text-gradient text-primary" style="padding-top:50px">Từ điển thuốc</h1>
                <h1 class="mb-4">Số 1 Việt Nam</h1>
                <p class="lead pe-md-5 me-md-5">Xin chào! Cảm ơn bạn đã sử dụng từ điển thuốc. 😊</p>
                <div class="buttons">
                  <input placeholder="Tên thuốc cần tìm" type="text"> <br>
                  <button type="button" class="btn bg-gradient-primary mt-4">Tìm kiếm</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>



    <!-- footer -->
    @include('elements/footer')
</body>
</html>