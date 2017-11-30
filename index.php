<?php
session_start();
$uri = $_SERVER['REQUEST_URI'];


$uriarray = explode("/", rtrim($uri));
unset($uriarray[0], $uriarray[1]);
$uri = join("/", $uriarray);
require_once ('modeles/get_genre.php');
if(!isset($uriarray[3])){
    $uriarray[3] = "";
} if(!isset($_SESSION['result'])){
    $_SESSION['result'] = "";
}

switch($uriarray[2]){
        
    case '':
            header("Refresh: 0; url=accueil");
        break;
        
    case 'accueil':
        
        if(isset($uriarray[3]) && ctype_digit($uriarray[3])){
            require_once 'modeles/pdo.php';

            require_once 'modeles/get_all_movies.php';

            $liste_films = get_all_movies($pdo);

            require_once 'modeles/pagination.php';

            $pagination = pagination($pdo, $liste_films, $uriarray[3], 6);

            require_once 'modeles/get_genres.php';

            foreach($liste_films as $film){
                $genres = get_genres($film['id'], $pdo);   
            }
            require_once 'vues/vue_pagination.php';
            break;
        } elseif ($uri == 'accueil' || $uri == 'accueil/') {
            require_once 'modeles/pdo.php';
            require_once 'modeles/last_movies.php';
            $last_films = last_movies($pdo);

            require_once 'vues/vue_accueil.php';
            break;
        } else {
            echo 'Erreur 404';
            break;
        }
    case 'search':
        require_once 'modeles/pdo.php';
        require_once 'modeles/get_all_movies.php';
        $films = get_all_movies($pdo);
        require_once 'modeles/search_query.php';
        $result = search_query($pdo, $_POST['searchtext'], $films);
        break;
    case 'films' && ctype_digit($uriarray[3]):
            require_once 'modeles/pdo.php';
            require_once 'modeles/detail_movie.php';
            $detail_film = detail_movie($pdo, $uriarray[3]);
            require_once 'modeles/get_all_movies.php';
            $liste_films = get_all_movies($pdo);
            require_once 'modeles/get_genres.php';
            foreach($liste_films as $film){
                $genres = get_genres($film['id'], $pdo);   
            }
            require_once 'modeles/get_user.php';
            $user = get_user($pdo);
            require_once 'vues/vue_films.php';
        break;
        
    case 'ajout':
        if($_SESSION['result']){
            require_once 'modeles/pdo.php';
            require_once 'vues/vue_form.php';
            require_once 'modeles/formulaire.php';
            break;
        } else {
            echo "Vous n'avez pas la permission d'ajouter des films !<br> Inscrivez vous !";
            header("Refresh:1; url=http://localhost/access_movies/register");
            break;
        }
        break;
    case 'register':
            require_once 'modeles/pdo.php';
            require_once 'vues/vue_inscription.php';
            require_once 'modeles/register_user.php';
        break;
    case 'connect':
        require_once 'modeles/pdo.php';
        require_once 'modeles/get_user.php';
        $users = get_user($pdo);
        require_once 'vues/vue_connexion.php';
        break;
    case 'connexion':
        require_once 'modeles/pdo.php';
        require_once 'modeles/get_user.php';
        $users = get_user($pdo);
        require_once 'modeles/connect_user.php';
        $_SESSION['result'] = connect_user($_SESSION['pseudo'], $_SESSION['password'], $users);
        header("Refresh:0; url=http://localhost/access_movies/accueil/1");
        break;
    case 'deconnexion':
        session_destroy();
        header("Refresh:0; url=http://localhost/access_movies/accueil/1");
        break;
    case 'profil':
        if($_SESSION['result']){
            require_once 'modeles/pdo.php';
            require_once 'modeles/get_all_movies.php';
            require_once 'modeles/get_user_films.php';
            
            $liste_films = get_all_movies($pdo);
            
            $films_user = get_user_films($pdo, $_SESSION['pseudo']);
            
            require_once 'vues/vue_profil.php';
            
            require_once 'modeles/change_password.php';
            
            break;
        } else {
            echo "Connectez-vous pour consulter votre profil";
            header("Refresh:1; url=http://localhost/access_movies/connect");
            break;
        }
    default:
         echo "Erreur 404";
        break;
}

?>