<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres','root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['Envoyer'])) {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $mail = htmlspecialchars($_POST['mail']);
    $confirmationMail = htmlspecialchars($_POST['confirmationMail']);
    $password = htmlspecialchars($_POST['password']);
    $confirmationPassword = htmlspecialchars($_POST['confirmationPassword']);
    $subscriptionType = $_POST['subscription_type'] ?? null;

    if (!empty($firstName) && !empty($lastName) && !empty($mail) && !empty($confirmationMail) && !empty($subscriptionType)) {
        
        if (strlen($firstName) > 255) {
            $erreur = "Votre prénom ne doit pas dépasser 255 caractères.";
        } elseif (strlen($lastName) > 255) {
            $erreur = "Votre nom ne doit pas dépasser 255 caractères.";
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $erreur = "Votre adresse mail n'est pas valide.";
        } else {
            // Vérifier si le mail existe déjà
            $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
            $reqmail->execute([$mail]);
            
            if ($reqmail->rowCount() > 0) {
                $erreur = "Cette adresse mail est déjà utilisée.";
            } elseif ($mail !== $confirmationMail) {
                $erreur = "Vos adresses mail ne correspondent pas.";
            } elseif ($password !== $confirmationPassword) {
                $erreur = "Vos mots de passe ne correspondent pas.";
            } else {
                // Tout est bon, insertion
                $cryptedPassword = md5($password); // 💡 Pour plus de sécurité : utiliser password_hash() !
                $insertmbr = $bdd->prepare("INSERT INTO membres(prenom, nom, mail, password) VALUES (?, ?, ?, ?)");
                $insertmbr->execute([$firstName, $lastName, $mail, $cryptedPassword]);

                $_SESSION["prenom"] = $firstName;

                // Récupération de l'ID
                $reqID = $bdd->prepare("SELECT ID FROM membres WHERE mail = ?");
                $reqID->execute([$mail]);
                $resultatID = $reqID->fetch(PDO::FETCH_ASSOC);
                $_SESSION["ID"] = $resultatID["ID"];

                header('Location: utilisateur.php');
                exit;
            }
        }
    } else {
        $erreur = "Tous les champs doivent être complétés.";
    }
}
?>
