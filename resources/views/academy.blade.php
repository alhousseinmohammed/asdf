<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/academy.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title>Document</title>
</head>

<body>
  @extends('layout-front.header')

  <div class="main-image">
    <img src=" {{ asset('assets/images/BANNER-TEST-S2_1.jpg') }} "alt="صورة خلفية">
    <div class="overlay">
      <h1>Take student experience to the next level</h1>
    </div>
  </div>

  <nav class="breadcrumbs">
    <a href="{{ route('watch.home') }}">Home</a> &gt;
    <!-- <a href="tasks.html">Tasks</a> &gt; -->
    <span>Task 1</span>
  </nav>

  <div class="maen-container">
    @foreach ($academies as $academy)
    <div class="content-container">
      <div class="content-image"><img src=" {{ asset('assets/images/(1).png') }}  " alt="صورة">
      </div>
      <div class="content-text">
        <h2>{{$academy->name}}</h2>
        <p>In addition to decreasing material costs, clever engineering tricks are pushing the efficiency of silicon
          solar
          cells closer to their theoretical maximum.
          In order for photons to be converted into energy, they must first collide with an electron.</p>
        <button class="action-button">Show More</button>
      </div>
    </div>
    @endforeach

    <div class="content-container">
      <div class="content-image"><img src=" {{ asset('assets/images/(2).png') }}  " alt="صورة">
      </div>
      <div class="content-text">
        <h2>Balqa Academy </h2>
        <p>In addition to decreasing material costs, clever engineering tricks are pushing the efficiency of silicon
          solar
          cells closer to their theoretical maximum.
          In order for photons to be converted into energy, they must first collide with an electron.</p>
        <button class="action-button">Show More</button>
      </div>
    </div>
    <div class="content-container">
      <div class="content-image"><img src=" {{ asset('assets/images/(3).png') }}  "alt="صورة">
      </div>
      <div class="content-text">
        <h2>Amman Academy </h2>
        <p>In addition to decreasing material costs, clever engineering tricks are pushing the efficiency of silicon
          solar
          cells closer to their theoretical maximum.
          In order for photons to be converted into energy, they must first collide with an electron.</p>
        <button class="action-button">Show More</button>
      </div>
    </div>

    <div class="content-container">
      <div class="content-image"><img src=" {{ asset('assets/images/(4).png') }}  " alt="صورة">
      </div>
      <div class="content-text">
        <h2>Amman Academy </h2>
        <p>In addition to decreasing material costs, clever engineering tricks are pushing the efficiency of silicon
          solar
          cells closer to their theoretical maximum.
          In order for photons to be converted into energy, they must first collide with an electron.</p>
        <button class="action-button">Show More</button>
      </div>
    </div>
    <div class="content-container">
      <div class="content-image"><img src=" {{ asset('assets/images/(5).png') }}  " alt="صورة">
      </div>
      <div class="content-text">
        <h2>Amman Academy </h2>
        <p>In addition to decreasing material costs, clever engineering tricks are pushing the efficiency of silicon
          solar
          cells closer to their theoretical maximum.
          In order for photons to be converted into energy, they must first collide with an electron.</p>
        <button class="action-button">Show More</button>
      </div>
    </div>

    <div class="content-container">
      <div class="content-image"><img src=" {{ asset('assets/images/(5).png') }}  " alt="صورة">
      </div>
      <div class="content-text">
        <h2>Amman Academy </h2>
        <p>In addition to decreasing material costs, clever engineering tricks are pushing the efficiency of silicon
          solar
          cells closer to their theoretical maximum.
          In order for photons to be converted into energy, they must first collide with an electron.</p>
        <button class="action-button">Show More</button>
      </div>
    </div>

    <div class="about-us-container">
      <h1 class="about-title">About Us</h1>
      <p class="about-description">Order now and appreciate the beauty of nature</p>
      <div class="about-cards">
        <div class="card">
          <div class="image-circle">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.13477 3.31985C8.98718 3.13 8.80089 2.97373 8.58827 2.86141C8.37565 2.7491 8.14156 2.6833 7.90156 2.66841C7.66156 2.65351 7.42113 2.68985 7.19626 2.77501C6.97138 2.86018 6.76719 2.99221 6.59727 3.16235L4.01227 5.74985C2.80477 6.95985 2.35977 8.67235 2.88727 10.1749C5.07661 16.3938 8.638 22.0401 13.3073 26.6949C17.9621 31.364 23.6083 34.9254 29.8273 37.1149C31.3298 37.6423 33.0423 37.1974 34.2523 35.9899L36.8373 33.4049C37.0074 33.2349 37.1394 33.0307 37.2246 32.8059C37.3098 32.581 37.3461 32.3406 37.3312 32.1006C37.3163 31.8606 37.2505 31.6265 37.1382 31.4138C37.0259 31.2012 36.8696 31.0149 36.6798 30.8674L30.9123 26.3824C30.7094 26.225 30.4735 26.1159 30.2224 26.063C29.9712 26.0102 29.7113 26.0151 29.4623 26.0774L23.9873 27.4449C23.2565 27.6275 22.4908 27.6178 21.7649 27.4167C21.0389 27.2156 20.3774 26.83 19.8448 26.2974L13.7048 20.1549C13.1717 19.6224 12.7856 18.9611 12.584 18.2351C12.3825 17.5091 12.3724 16.7434 12.5548 16.0124L13.9248 10.5374C13.987 10.2883 13.9919 10.0284 13.9391 9.77726C13.8863 9.52608 13.7771 9.29018 13.6198 9.08735L9.13477 3.31985ZM4.70977 1.27735C5.14725 0.839726 5.67284 0.500178 6.25161 0.281256C6.83039 0.0623327 7.44912 -0.0309556 8.06672 0.00758508C8.68432 0.0461258 9.28665 0.215614 9.83372 0.504794C10.3808 0.793975 10.8601 1.19623 11.2398 1.68485L15.7248 7.44985C16.5473 8.50735 16.8373 9.88485 16.5123 11.1849L15.1448 16.6599C15.0741 16.9434 15.0779 17.2405 15.1559 17.5221C15.2338 17.8038 15.3833 18.0605 15.5898 18.2674L21.7323 24.4099C21.9394 24.6167 22.1965 24.7665 22.4786 24.8444C22.7608 24.9224 23.0583 24.926 23.3423 24.8549L28.8148 23.4874C29.4563 23.3269 30.1259 23.3145 30.773 23.4509C31.42 23.5873 32.0276 23.8691 32.5498 24.2749L38.3148 28.7599C40.3873 30.3724 40.5773 33.4349 38.7223 35.2873L36.1373 37.8724C34.2873 39.7224 31.5223 40.5349 28.9448 39.6273C22.3477 37.3062 16.3579 33.5294 11.4198 28.5774C6.46799 23.6399 2.69129 17.651 0.369766 11.0549C-0.535234 8.47985 0.277266 5.71235 2.12727 3.86235L4.71227 1.27735H4.70977ZM27.4998 1.24985C27.4998 0.918332 27.6315 0.600389 27.8659 0.365969C28.1003 0.131548 28.4182 -0.00014757 28.7498 -0.00014757H38.7498C39.0813 -0.00014757 39.3992 0.131548 39.6337 0.365969C39.8681 0.600389 39.9998 0.918332 39.9998 1.24985V11.2499C39.9998 11.5814 39.8681 11.8993 39.6337 12.1337C39.3992 12.3682 39.0813 12.4999 38.7498 12.4999C38.4182 12.4999 38.1003 12.3682 37.8659 12.1337C37.6315 11.8993 37.4998 11.5814 37.4998 11.2499V4.26735L27.1348 14.6349C26.9 14.8696 26.5817 15.0014 26.2498 15.0014C25.9178 15.0014 25.5995 14.8696 25.3648 14.6349C25.13 14.4001 24.9982 14.0818 24.9982 13.7499C24.9982 13.4179 25.13 13.0996 25.3648 12.8649L35.7323 2.49985H28.7498C28.4182 2.49985 28.1003 2.36816 27.8659 2.13374C27.6315 1.89932 27.4998 1.58137 27.4998 1.24985Z"
                fill="#1E1E1E" />
            </svg>
          </div>
          <h3 class="card-title">24/7 Support</h3>
          <p class="card-description">answers to any business related inquiry 24/7 and in real-time.</p>
        </div>
        <div class="card">
          <div class="image-circle">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M20.465 2.59063C20.1665 2.47101 19.8335 2.47101 19.535 2.59063L4.615 8.55813L10.625 10.9606L26.01 4.80813L20.465 2.59063ZM29.375 6.15563L13.99 12.3081L20 14.7106L35.385 8.55813L29.375 6.15563ZM37.5 10.4056L21.25 16.9056V36.7106L37.5 30.2106V10.4056ZM18.75 36.7131V16.9031L2.5 10.4056V30.2131L18.75 36.7131ZM18.6075 0.268126C19.5014 -0.0893755 20.4986 -0.0893755 21.3925 0.268126L39.215 7.39813C39.4467 7.49099 39.6453 7.65111 39.7852 7.85785C39.9251 8.06459 39.9999 8.30849 40 8.55813V30.2131C39.9997 30.7127 39.8497 31.2007 39.5694 31.6142C39.2891 32.0277 38.8914 32.3478 38.4275 32.5331L20.465 39.7181C20.1665 39.8377 19.8335 39.8377 19.535 39.7181L1.575 32.5331C1.11063 32.3482 0.712356 32.0283 0.431605 31.6147C0.150854 31.2012 0.000515823 30.713 0 30.2131L0 8.55813C5.80999e-05 8.30849 0.0748594 8.06459 0.214768 7.85785C0.354676 7.65111 0.553282 7.49099 0.785 7.39813L18.6075 0.268126Z"
                fill="#1E1E1E" />
            </svg>
          </div>
          <h3 class="card-title">Fast & Free Shipping</h3>
          <p class="card-description">4-day or less delivery time, free shipping and an expedited delivery option.</p>
        </div>
        <div class="card">
          <div class="image-circle">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M33.6009 23.0771H18.2604L18.7304 22.6252L22.7425 18.7676C24.363 19.5522 26.1485 19.9706 27.9627 19.9906C29.7888 19.9953 31.5808 19.5148 33.1409 18.6022C37.885 15.8407 40.4271 9.44846 39.9411 1.50241C39.9182 1.12604 39.7524 0.770844 39.4751 0.504257C39.1979 0.23767 38.8285 0.0782541 38.437 0.0562747C30.1728 -0.409104 23.5245 2.03317 20.6525 6.59465C18.7804 9.56576 18.7324 13.1542 20.4785 16.5945L17.6004 19.3618L15.1583 17.0137C16.3583 14.4657 16.2723 11.8215 14.8803 9.61384C12.7062 6.15427 7.72206 4.31006 1.54587 4.65814C1.1551 4.68052 0.786432 4.83987 0.50963 5.10601C0.232829 5.37215 0.0671034 5.72663 0.0438198 6.10235C-0.320192 12.0388 1.59987 16.8311 5.19998 18.9233C6.40441 19.6304 7.78891 20.0032 9.2001 20.0002C10.4804 19.988 11.7432 19.7133 12.9042 19.1945L15.3363 21.5387L13.7362 23.0771H4.79997C4.37561 23.0771 3.96863 23.2392 3.66856 23.5277C3.36849 23.8162 3.19992 24.2075 3.19992 24.6156C3.19992 25.0236 3.36849 25.4149 3.66856 25.7034C3.96863 25.9919 4.37561 26.154 4.79997 26.154H6.71803L9.36011 37.5904C9.51498 38.2753 9.90977 38.8884 10.4784 39.327C11.0471 39.7656 11.7552 40.0032 12.4842 40H25.9186C26.6476 40.0032 27.3557 39.7656 27.9244 39.327C28.4931 38.8884 28.8879 38.2753 29.0427 37.5904L31.6848 26.154H33.6009C34.0252 26.154 34.4322 25.9919 34.7323 25.7034C35.0323 25.4149 35.2009 25.0236 35.2009 24.6156C35.2009 24.2075 35.0323 23.8162 34.7323 23.5277C34.4322 23.2392 34.0252 23.0771 33.6009 23.0771ZM23.4005 8.18886C25.4926 4.86967 30.4488 2.99662 36.801 3.07931C36.883 9.19654 34.9389 13.9599 31.4868 15.9638C29.1847 17.3099 26.4066 17.2214 23.6306 15.7368C22.0845 13.0773 22.0005 10.4023 23.4005 8.18886ZM12.0222 16.1753C10.1821 17.1234 8.36008 17.1676 6.85603 16.2907C4.55596 14.9503 3.22992 11.7907 3.19992 7.69271C7.46205 7.72156 10.7502 8.99654 12.1422 11.208C13.0542 12.6542 13.0002 14.4061 12.0222 16.1753ZM25.9186 36.9231H12.4842L10.0001 26.154H28.4007L25.9186 36.9231Z"
                fill="#1E1E1E" />
            </svg>
          </div>
          <h3 class="card-title">Large Assortment</h3>
          <p class="card-description">we offer many different types of products with fewer variations in each category.
          </p>
        </div>
      </div>
    </div>
    @extends('layout-front.footer')


  </div>
  <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
