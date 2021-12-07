<?php

class DBData {
	/** @var PDO */
	private $dbh;

    public function __construct() {
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
    

    public function insert_user($data=[])
    {
   
        $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, mobile, adresse, code_postal,fonction) VALUES
         (:nom, :prenom, :email, :mot_de_passe, :mobile, :adresse, :code_postal, :fonction)";
        $res= $this->dbh->prepare($sql)->execute($data);
        
        return $res;
    }


    public function get_login() {
        $query = "SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe";
        $reslt = $this->dbh ->prepare($query);  
        $reslt->execute(  
             array(  
                  'email'     =>     $_POST["email"],  
                  'mot_de_passe'     =>     $_POST["mot_de_passe"]  
             )  
        );  

        $user = $reslt->fetch(PDO::FETCH_ASSOC);
        $_SESSION["email"] = $_POST["email"]; 

        // var_dump ($user['fonction']);exit;
      
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            if ($user['fonction'] == 'admin') {
                header('location:admin.php');		  
            }elseif($user['fonction'] == 'parent') {
                header('location:parent.php');    
            }elseif($user['fonction'] == 'professeur') {
                header('location:professeur.php'); 
            }elseif($user['fonction'] == 'etudiant') {
                header('location:etudiant.php'); 
            }else{
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }

    }


    






























    /**
     * Méthode permettant de retourner les données sur une catégorie donnée
     *
     * @param int $categoryId
     * @return Category
     */
    public function getCategoryDetails($categoryId) {
        // TODO
    }

    /**
     * Méthode permettant de retourner les données sur un auteur donnée
     *
     * @param int $authorId
     * @return Author
     */
    public function getAuthorDetails($authorId) {
        // TODO
    }

    /**
     * Méthode permettant de retourner les données sur un article donnée
     *
     * @param int $articleId
     * @return Article
     */
    public function getArticleDetails($articleId) {
        // TODO
    }
    
    /**
     * Méthode permettant de retourner les 4 catégories de la sidebar
     *
     * @return Category[]
     */
    public function getSidebarCategories() {
        // $categoryList est initialisé avec un tableau vide
        $categoryList = [];

        // $sql contient la requête SQL pour récupérer toutes les catégories
        $sql = '
            SELECT *
            FROM category
        ';
      
        // On stocke dans $categoryArray, le résultat de la requête sous la forme d'un tableau associatif
        // depuis ma connexion à la base de donnée ($this->dbh)
        // j'execute la requête (query($sql))
        // je récupére le résultat (fetchAll)
        // sous la forme d'un tableau associatif (PDO::FETCH_ASSOC)
        $categoryArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($categoryArray as $category) {
            $categoryList[] = new Category($category['id'], $category['name']);
        }

        return $categoryList;
    }
    
    /**
     * Méthode permettant de retourner les 7 auteurs de la sidebar
     *
     * @return Author[]
     */
    public function getSidebarAuthors() {
        $authorsList = [];
        
        $sql = '
            SELECT *
            FROM author
        ';

        $authorsArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($authorsArray as $author) {
            $authorsList[] = new Author($author['id'], $author['name']);
        }

        return $authorsList;
    }
    
//............................... query trois tables..........................................

    // $query = "SELECT * from utilisateur inner join utilisateur_role on utilisateur.id_utilisateur = 
    // utilisateur_role.id_utilisateur inner join role on utilisateur_role.id_role = 
    // role.id_role where role_label = 'admin' AND email = :email AND mot_de_passe = :mot_de_passe";



    /**
     * Méthode permettant de retourner les 4 articles de la BD
     *
     * @return Article[]
     */
    public function getAllArticles() {
        
        $articleList = [];

        // Version condition Where
        // On selectionne tous les articles, le nom des categories, le nom des auteurs
        // Depuis les tables articles category et author
        // Là où la colonne de la table article category_id est egale à l'id de la table categorie
        // Et là où la colonne de la table article author_id est egale à l'id de la table author
        // $sql = '
        //     SELECT                 
                // article.id,
                // article.title,
                // article.content,
                // article.publish_date, 
                // category.name AS category_name, 
                // author.name AS author_name
        //     FROM `article`, `category`, `author`
        //     WHERE article.category_id = category.id
        //     AND article.author_id = author.id
        // ';

        // Version Jointure
        // On selectionne tous les articles, le nom des categories, le nom des auteurs
        // Depuis les tabls article
        // On joint la table category là où la colonne de la table article category_id est egale à l'id de la table categorie
        // Et on joint la table author là où la colonne de la table article author_id est egale à l'id de la table author
        $sql = "
            SELECT 
                article.id,
                article.title,
                article.content,
                article.publish_date,
                category.name AS category_name,
                author.name AS author_name
            FROM `article` 
            JOIN `category` ON category.id = article.category_id 
            JOIN `author` ON author.id = article.author_id
        ";

        $articleArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($articleArray as $article) {
            $articleList[] = new Article($article['id'], $article['title'], $article['content'], $article['author_name'], $article['publish_date'], $article['category_name']);
        }

        return $articleList;
    }
}