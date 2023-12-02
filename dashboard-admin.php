<?php

// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'infosfinancement');

if ($conn->connect_error) {
    die('La connexion a échoué : ' . $conn->connect_error);
}
$sql = "SELECT * FROM myForm";
$result = $conn->query($sql);
?>
<?php
if (isset($_POST ["Demande"])) {
    echo "test";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Material icon -->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
            rel="stylesheet"
        />

        <!-- CSS -->
        <link rel="stylesheet" href="dashboardstyle1.css" />
        <title>Tableau de bord</title>
    </head>

    <body>
        <script src="script.js"></script>
        <div class="dashboard-container">
            <!-- Sidebar -->
            <aside class="main-sidebar">
                <header class="aside-header">
                    <div class="brand">
                        <img src="images/logo2.png" alt="Logo" />
                        <h3>AL AKHDAR BANK</h3>
                    </div>
                    <div class="close" id="closeSidebar">
                        <span class="material-icons-sharp"> close </span>
                    </div>
                </header>

                <div class="sidebar" id="sidebar">
                    <ul class="list-items">
                        <li class="item">
                            <a href="#">
                                <span class="material-icons-sharp">
                                    dashboard
                                </span>
                                <span>Tableau de bord</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="file:///c%3A/Users/hp/Desktop/AL%20AKHDAR%20BANK%20WEBSITE/dashboard-admin.html#">
                                <span class="material-icons-sharp">
                                    people
                                </span>
                                <span>Consulter Demandes</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="file:///C:/Users/hp/Desktop/AL%20AKHDAR%20BANK%20WEBSITE/ajouterdemande.html#">
                                <span class="material-icons-sharp">
                                    shopping_cart
                                </span>
                                <span>Ajouter Demande</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="file:///C:/Users/hp/Desktop/AL%20AKHDAR%20BANK%20WEBSITE/ajouterdemande.html#" class="">
                                <span class="material-icons-sharp">
                                    insights
                                </span>
                                <span>Modifier Demande</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#">
                                <span class="material-icons-sharp">
                                    logout
                                </span>
                                <span>Se Deconnecter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Main -->
            <main class="main-container">
                <h1 class="main-title">Dashboard</h1>

                <!-- CARD -->
                <div class="insights">
                    <div class="card">
                        <div class="card-container">
                            <div class="card-header">
                                <span class="material-icons-sharp">
                                    bar_chart
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="card-info">
                                    <h3>Demandes totales</h3>
                                    <br>
                                    <h1>2.03M</h1>
                                </div>

                                <div class="card-progress">
                                    <svg width="96" height="96">
                                        <circle
                                            id="circle1"
                                            cx="38"
                                            cy="38"
                                            r="36"
                                            class="stroke-yellow"
                                        ></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-container">
                            <div class="card-header">
                                <span class="material-icons-sharp">
                                    add_shopping_cart
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="card-info">
                                    <h3>Demandes</h3>
                                    <br>
                                    <h1>780</h1>
                                </div>

                                <div class="card-progress">
                                    <svg width="96" height="96">
                                        <circle
                                            id="circle2"
                                            cx="38"
                                            cy="38"
                                            r="36"
                                            class="stroke-fuscha"
                                        ></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>Sur les 48H precedentes</small>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-container">
                            <div class="card-header">
                                <span class="material-icons-sharp">
                                    group_add
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="card-info">
                                    <h3>Clients</h3>
                                    <br>
                                    <h1>21</h1>
                                </div>

                                <div class="card-progress">
                                    <svg
                                        width="96"
                                        height="96"
                                        class="stroke-cyan"
                                    >
                                        <circle
                                            id="circle3"
                                            cx="38"
                                            cy="38"
                                            r="36"
                                        ></circle>
                                    </svg>
                                    <div class="percentage">
                                        <p>43%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>Sur les 48H precedentes</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RECENT ORDERS -->
                <section class="recent-orders">
                    <div class="ro-title">
                        <h2 class="recent-orders-title">Liste des demandes de financement</h2>
                        <a href="#" class="show-all">Tout afficher</a>
                    </div>
                    <table id="tableauresultat">
                        <script src="script2.js"></script>
                        <thead>
                            <tr>
                                <th id="cd">Code demande</th>
                                <th id="ce">Code événement</th>
                                <th id="ca">Code agence</th>
                                <th id="tf">Type de financement</th>
                                <th id="ti">Type d'intervention</th>
                                <th id="ci">Cible</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </section>
            </main>

            <!-- Sidebar droite -->
            <aside class="extrabar">
                <header class="header-right">
                    <button class="toggle-menu-btn" id="openSidebar">
                        <span class="material-icons-sharp"> menu </span>
                    </button>

                    <div class="toggle-theme">
                        <span class="material-icons-sharp active">
                            tungsten
                        </span>
                        <span class="material-icons-sharp"> dark_mode </span>
                    </div>
                    <div class="profile">
                        <div class="profile-info">
                            <p>Bonjour, </p>
                        </div>
                        <div class="profile-image">
                            <img src="images/team-4.jpg" alt="" width="100%" />
                        </div>
                    </div>
                </header>

                <!-- Info recentes -->
                <div class="recent-updates">
                    <h2>Infos recentes</h2>
                    <div class="updates-container">
                        <div class="update">
                            <div class="profile-image">
                                <img
                                    src="logo2.png"
                                    alt=""
                                    width="100%"
                                />
                            </div>
                            <div class="message">
                                <p>
                                    <strong>AL AKHDAR BANK</strong><br>élue meilleure <br> banque participative <br>en 2022.
                                </p>
                                <small>Il y a 8 minutes</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat -->
                <div class="analytics">
                    <h2>Evolution des demandes</h2>
                    <div class="order direct">
                        <div class="order-icon">
                            <span class="material-icons-sharp">
                                shopping_cart
                            </span>
                        </div>
                        <div class="order-details">
                            <div class="info">
                                <h3>DEMANDES</h3>
                                <small>48H precedentes</small>
                            </div>
                            <h4 class="percent-evo text-cyan">+18%</h4>
                            <h3>2417</h3>
                        </div>
                    </div>
                    <div class="order online">
                        <div class="order-icon">
                            <span class="material-icons-sharp"> wifi </span>
                        </div>
                        <div class="order-details">
                            <div class="info">
                                <h3>DEMANDES</h3>
                                <small>48H precedentes</small>
                            </div>
                            <h4 class="percent-evo text-fuscha">-5%</h4>
                            <h3>619</h3>
                        </div>
                    </div>
                    <div class="order customers">
                        <div class="order-icon">
                            <span class="material-icons-sharp">
                                group_add
                            </span>
                        </div>
                        <div class="order-details">
                            <div class="info">
                                <h3>DEMANDES</h3>
                                <small>48H precedentes</small>
                            </div>
                            <h4 class="percent-evo text-cyan">+22%</h4>
                            <h3>411</h3>
                        </div>
                    </div>
                    <button class="new-product" onclick="window.location.href='file:///C:/Users/hp/Desktop/AL%20AKHDAR%20BANK%20WEBSITE/ajouterdemande.html#'">
                        <span class="material-icons-sharp"> add </span>
                        <h3>Nouvelle Demande</h3>
                    </button>
                </div>
            </aside>
        </div>
        <script src="dashboard.js"></script>
        <script src="crudscript.js"></script>
        <script src="script2.js"></script>
    </body>
</html>