<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StayCozy</title>
    <link rel="stylesheet" href="{{ url('fe/style/style.css') }}" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="{{ url('frontend/css/kalkulator.css') }}" />
    <link rel="stylesheet" href="{{ url('fe/style/about.css') }}" />
    <link rel="stylesheet" href="{{ url('fe/style/list.css') }}" />
        <link rel="stylesheet" href="{{ url('frontend/css/gaya.css') }}" />        
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />           
     @method('css')
  </head>

  <body>
    <!-- Add your site or application content here -->

    @include('components.frontend.navbar')

    @yield('content')

    @include('components.frontend.footer')

</body>
</html>
