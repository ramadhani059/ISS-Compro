<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link href="{{ asset('css/output.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- CSS for carousel/flickity-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <style>
    body {
        font-family: sans-serif;
    }

    /* Add WA floating button CSS */
    .floating {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .fab-icon {
        margin-top: 16px;
    }

  </style>

  <!-- CSS for modal/flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
</head>
<body class="font-poppins text-cp-black">


    @yield('content')

    @stack('before-scripts')

    @stack('after-scripts')

    @foreach ($contact as $contact)
    <a href="{{'https://wa.me/'.$contact->phone.'?text='.urlencode($contact->content)}}" class="floating" target="_blank">
        <i class="fab fa-whatsapp fab-icon"></i>
    </a>
    @endforeach

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
