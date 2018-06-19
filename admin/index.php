<?php
$login_cookie = $_COOKIE['usuario'];
if (isset($login_cookie)) {
    ?>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title><?= $login_cookie; ?> - Intranet</title>

            <!-- Bootstrap core CSS-->
            <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <!-- Custom fonts for this template-->
            <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
            <!-- Page level plugin CSS-->
            <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
            <!-- Custom styles for this template-->
            <link href="../css/sb-admin.css" rel="stylesheet" type="text/css"/>

            <script>
                function excluir(valor) {
                    return confirm('Deseja realmente excluir o registro ' + valor + '?');
                }
            </script>
        </head>
        <body class="fixed-nav sticky-footer bg-dark" id="page-top">
            <!-- Menu -->
            <?php include './menu.php'; ?>

            <div class="content-wrapper">
                <?php
                $url = $_GET['url'];

                switch ($url) {
                    // CASE PARA OS MENUS
                    case 'home.php':
                        $menu = 'Home';
                        include './navegacao.php';
                        include ('./home.php');
                        break;
                    case 'tipo_programacao.php':
                        $menu = 'Tipo de Programação';
                        include './navegacao.php';
                        include ('./tipo_prog.php');
                        break;
                    case 'programacao.php':
                        $menu = 'Programação';
                        include './navegacao.php';
                        include ('./programacao.php');
                        break;
                    case 'sobre.php':
                        $menu = 'Sobre';
                        include './navegacao.php';
                        include ('./sobre.php');
                        break;
                    case 'cardapio.php':
                        $menu = 'Cardápio';
                        include './navegacao.php';
                        include ('./cardapio.php');
                        break;
                    case 'contato.php':
                        $menu = 'Contatos';
                        include './navegacao.php';
                        include ('./contato.php');
                        break;
                    case 'admin.php':
                        $menu = 'Admin';
                        include './navegacao.php';
                        include ('./admin.php');
                        break;
                    case 'evento.php':
                        $menu = 'Evento';
                        include './navegacao.php';
                        include ('./evento.php');
                        break;

                    case 'adc_evento.php':
                        $menu = '<a href="?url=evento.php">Evento</a> / Adicionar Evento';
                        include './navegacao.php';
                        include ('./adicionar/adc_evento.php');
                        break;
                    case 'excBD_evento.php':
                        include ('./excluir/excBD_evento.php');
                        break;
                    default :
                        $menu = 'Home';
                        include './navegacao.php';
                        include ('./home.php');
                }
                ?>

                <!-- Rodapé -->
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            <small>Copyright © Your Website 2018</small>
                        </div>
                    </div>
                </footer>

                <!-- Botão para subir ao topo -->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>

                <!-- Sair Modal-->
                <?php include './home_modal.php'; ?>

                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                <script src="../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>
                <script src="../vendor/chart.js/Chart.min.js" type="text/javascript"></script>
                <script src="../vendor/datatables/dataTables.bootstrap4.js" type="text/javascript"></script>
                <script src="../vendor/datatables/jquery.dataTables.js" type="text/javascript"></script>
                <script src="../js/sb-admin.min.js" type="text/javascript"></script>
                <script src="../js/sb-admin-datatables.min.js" type="text/javascript"></script>
                <script src="../js/sb-admin-charts.min.js" type="text/javascript"></script>
            </div>
        </body>
    </html>
    <?php
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Faça o Login!');window.location.href='login.html'</script>";
}
?>