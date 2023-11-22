<!-- <?php require_once 'menu_fonction.php';?> -->
 <!-- pour appeler la fonction et tester si elle existe -->

<?php 
if(!function_exists('nav_item')){

    function nav_item(string $lien, string $titre, string $linkClasse=''):string{
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

}
?>
<?=nav_item('accueil.php','Accueil');?>
<?=nav_item('contact.php','Contact');?>
<?=nav_item('jeu.php','Jeu');?>