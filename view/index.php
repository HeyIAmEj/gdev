<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDev</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="./assets/lib/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
        main>.container-fluid {
            /* padding: 60px 15px 0; */
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body class="d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-code-slash"></i>
                    GDev
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bases
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../../glpi1005/" target="_blank">glpi1005</a></li>
                                <li><a class="dropdown-item" href="../../glpi103/" target="_blank">glpi103</a></li>
                                <li><a class="dropdown-item" href="../../glpi100/" target="_blank">glpi100</a></li>
                                <li><a class="dropdown-item" href="../../glpi957/" target="_blank">glpi1957</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#settingsModal" href="#settingsModal">Configuração</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./terminal.php" target=”_blank”>Terminal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="">
        <div class="py-4 px-2 container-fluid row g-2">
            <div class="col-md-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Criar nova issue</h2>
                    <p>Insira o número do chamado para abrir a issue.</p>
                    <button class="btn btn-outline-light" type="button">Criar issue</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Criar nova branch</h2>
                    <p>Insira o número do chamado para criar nova branch.</p>
                    <button class="btn btn-outline-light" type="button">Criar branch</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Iniciar contador de tarefa</h2>
                    <p>Víncule a sua tarefa atual</p>
                    <button class="btn btn-outline-light" type="button">Iniciar contador</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Criar nova branch</h2>
                    <p>Insira o número do chamado para criar nova branch.</p>
                    <button class="btn btn-outline-light" type="button">Abrir</button>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="settingsModalLabel">Configurações de sistema</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="settingsForm">
                        <div class="form-group">
                            <label>Caminho completo do arquivo hosts</label>
                            <input type="text" class="form-control" name="hosts_path" placeholder="/etc/hosts">
                            <label>Url para acessar o GLPI localmente</label>
                            <input type="text" class="form-control" name="glpi_local_url" placeholder="glpi.local">
                            <label>Diretório para instalar o(s) GLPI(s)</label>
                            <input type="text" class="form-control" name="glpis_path" placeholder="/var/www/html">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" form="settingsForm" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted">Ferramenta para desenvolvedores GLPI</span>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-muted" href="https://www.instagram.com/eusouveve/">
                        <i class="bi bi-instagram">
                        </i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-muted" href="https://twitter.com/eusouveve">
                        <i class="bi bi-twitter">
                        </i>
                    </a>
                </li>
            </ul>
        </div>

    </footer>

    <script src="./assets/lib/js/bootstrap.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<script>
    function submitSettings(settings) {
        console.log(settings);
        let url = '../system/configure.php';
        fetch(url, {
            method: 'POST',
            body: JSON.stringify(settings)
        }).then(response => response.json().then(res => {
            toastr.success(res.message, 'Sucesso!', {
                timeOut: 1000,
                progressBar: true,
                onHidden: () => {
                }
            });
        })).catch(error => {
            toastr.error("Erro ao salvar configurações", error.message);
        });
    }


    let form = document.getElementById('settingsForm');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        let settings = {
            "hosts_path": form.hosts_path.value,
            "glpi_local_url": form.glpi_local_url.value,
            "glpis_path": form.glpis_path.value,
        };
        submitSettings(settings);
    });
</script>

</html>