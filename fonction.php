<?php 

    function nav_item(string $lien, string $titre, string $linkClasse=''):string
    {
        $classe ='nav_item';
            if($_SERVER['SCRIPT_NAME'] === $lien){
                $classe = $classe . 'active';
            }
           return <<<HTML
            <li class="$classe">
                 <a class="$linkClasse" href="$lien">$titre</a>
            </li>
    HTML;   
    }

    function nav_menu(string $linkClasse=''): string
    {
        return 
            nav_item('accueil.php','Accueil',$linkClasse) .
            nav_item('contact.php','Contact',$linkClasse).
            nav_item('jeu.php','Jeu',$linkClasse);
    }
?>