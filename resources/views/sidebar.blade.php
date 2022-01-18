<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sidebar</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/style-sidebar.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h2></h2><br>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a href="https://news.google.com/topstories?hl=es-419&gl=US&ceid=US%3Aes-419"> <i class="fas fa-globe"></i> Noticias Destacadas</a>
                </li>
                <li>
                    <a href="https://news.google.com/foryou?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="far fa-square"></i> Para ti</a>
                </li>
                <li>
                    <a href="https://news.google.com/my/library?hl=es-419&gl=US&ceid=US%3Aes-419"> <i class="far fa-star"></i> Siguiendo</a>
                </li>
                <li>
                    <a href="https://news.google.com/my/searches?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="fas fa-search"></i> Busquedas Guardadas</a>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.magazines&referrer=news.google.com?utm_source=web&utm_medium=menu&utm_campaign=side_menu_promotion">Descargar la App para Android <i class="fas fa-external-link-alt"></i></a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/US/app/apple-store/id459182288?pt=9008&ct=Web%20Side%20Promotion&mt=8&l=es-419">Descargar la App para iOS <i class="fas fa-external-link-alt"></i></a>
                </li>
                <li>
                    <a href="https://support.google.com/googlenews?p=web&hl=es-419&authuser=0">Ayuda <i class="fas fa-external-link-alt"></i></a>
                </li>
            </ul>
            
        </nav>

            <button title="Menu Principal" type="button" id="sidebarCollapse" class="btn float-start">
                <i class="fas fa-align-justify"></i>
            </button>

    </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>