<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CCS Page')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #ffea5e; 
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .content-box {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            max-width: 700px;
            width: 100%;
            text-align: center;
            font-family: 'Segoe UI', sans-serif;
        }

        form, label, input, textarea, button {
            font-family: 'Segoe UI', sans-serif !important;
        }

        h1 {
            color: #ffeb3b; 
            font-weight: bold;
        }

        p {
            color: black; 
            font-family: 'Segoe UI', sans-serif;    
        }

        form, label, input, textarea, button {
            font-family: 'Segoe UI', sans-serif !important;
            color: black;
        }

        .btn-custom {
            border: 2px solid #ffeb3b;
            color: #ffeb3b;
            font-weight: bold;
            width: 200px;
        }

        .btn-custom:hover {
            background-color: #ffeb3b;
            color: white;
        }
    </style>
</head>
<body>
    <div class="content-box text-center">
    <img src="https://ccs.cspc.edu.ph/wp-content/uploads/2022/08/cropped-Proposed-Logo-College-of-Computer-Studies-CSPC-02.png" 
         alt="CCS Logo" 
         style="width: 160px; margin-top: -20px; margin-bottom: 10px;">
    @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        @yield('script')
</body>
</html>