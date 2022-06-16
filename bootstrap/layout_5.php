<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>부트스트랩</title>
</head>
<body>
    <div class="container">
        <div class="row row-cols-auto">
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column Column Column Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
        </div>
        <hr>
        <div class="row row-cols-4">
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
            Level 1: .col-sm-3
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-8 col-sm-6">
                    Level 2: .col-8 .col-sm-6
                    </div>
                    <div class="col-4 col-sm-6">
                    Level 2: .col-4 .col-sm-6
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- 열 줄바꿈 -->
        <div class="row">
            <div class="col-9">.col-9</div>
            <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
            <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
        </div>
        <hr>
        <!-- 열 분할 -->
        <div class="row">
            <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
            <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

            <!-- Force next columns to break to new line -->
            <div class="w-100 d-none d-md-block"></div>

            <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
            <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
        </div>
        <hr>
        <!-- 재정렬 -->
        <div class="row">
            <div class="col">
            First in DOM, no order applied
            </div>
            <div class="col order-5">
            Second in DOM, with a larger order
            </div>
            <div class="col order-1">
            Third in DOM, with an order of 1
            </div>
        </div>
        <hr>
        <!-- 오프셋 클래스 -->
        <div class="row">
            <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
            <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
        </div>
</body>
</html>