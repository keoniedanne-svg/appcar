<?php
/**
 * Système d'emailing
 */

class Mailer {
    
    public static function send_adhesion_confirmation($email, $nom, $prenom) {
        $subject = 'Candidature Reçue - Académie Lavoisier';
        $body = self::template_confirmation($nom, $prenom);
        return self::send($email, $subject, $body);
    }
    
    public static function send_adhesion_accepted($email, $nom, $prenom) {
        $subject = 'Candidature Acceptée - Académie Lavoisier';
        $body = self::template_accepted($nom, $prenom);
        return self::send($email, $subject, $body);
    }
    
    public static function send_adhesion_rejected($email, $nom, $prenom) {
        $subject = 'Candidature - Académie Lavoisier';
        $body = self::template_rejected($nom, $prenom);
        return self::send($email, $subject, $body);
    }
    
    private static function send($to, $subject, $body) {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM_EMAIL . ">\r\n";
        return @mail($to, $subject, $body, $headers);
    }
    
    private static function template_confirmation($nom, $prenom) {
        return <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><style>body{font-family:Arial;background:#e3f2fd;padding:20px}.container{max-width:600px;margin:auto;background:white;border-radius:10px;padding:30px;box-shadow:0 2px 10px rgba(0,0,0,0.1)}.header{background:linear-gradient(135deg,#1976d2,#1565c0);color:white;padding:20px;border-radius:5px;text-align:center}.footer{color:#888;font-size:12px;margin-top:30px;border-top:1px solid #eee;padding-top:20px}</style></head>
<body>
<div class="container">
<div class="header"><h1>✓ Candidature Reçue</h1></div>
<p>Bonjour <strong>$prenom $nom</strong>,</p>
<p>Nous avons bien reçu votre candidature pour l'Académie Lavoisier.</p>
<p>Notre équipe l'examinera dans les meilleurs délais. Vous recevrez une réponse bientôt.</p>
<p>Merci pour votre intérêt! 😊</p>
<div class="footer"><p>&copy; 2026 Académie Lavoisier</p></div>
</div>
</body>
</html>
HTML;
    }
    
    private static function template_accepted($nom, $prenom) {
        return <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><style>body{font-family:Arial;background:#e3f2fd;padding:20px}.container{max-width:600px;margin:auto;background:white;border-radius:10px;padding:30px;box-shadow:0 2px 10px rgba(0,0,0,0.1)}.header{background:linear-gradient(135deg,#1976d2,#1565c0);color:white;padding:20px;border-radius:5px;text-align:center}.button{display:inline-block;background:#1976d2;color:white;padding:12px 30px;text-decoration:none;border-radius:5px;margin:20px 0}.footer{color:#888;font-size:12px;margin-top:30px;border-top:1px solid #eee;padding-top:20px}</style></head>
<body>
<div class="container">
<div class="header"><h1>🎉 Bienvenue!</h1></div>
<p>Félicitations <strong>$prenom $nom</strong>!</p>
<p>Votre candidature pour rejoindre l'Académie Lavoisier a été <strong>acceptée</strong>!</p>
<p><strong>Prochaine étape :</strong> Rejoignez notre serveur Discord et ouvrez un ticket pour finaliser votre adhésion.</p>
<a href="https://discord.gg/4MPZJQJqcW" class="button">Rejoindre Discord</a>
<p>Bienvenue parmi nous! 🎓</p>
<div class="footer"><p>&copy; 2026 Académie Lavoisier</p></div>
</div>
</body>
</html>
HTML;
    }
    
    private static function template_rejected($nom, $prenom) {
        return <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><style>body{font-family:Arial;background:#f3e5f5;padding:20px}.container{max-width:600px;margin:auto;background:white;border-radius:10px;padding:30px;box-shadow:0 2px 10px rgba(0,0,0,0.1)}.header{background:linear-gradient(135deg,#7b1fa2,#6a1b9a);color:white;padding:20px;border-radius:5px;text-align:center}.footer{color:#888;font-size:12px;margin-top:30px;border-top:1px solid #eee;padding-top:20px}</style></head>
<body>
<div class="container">
<div class="header"><h1>Candidature - Académie Lavoisier</h1></div>
<p>Bonjour <strong>$prenom $nom</strong>,</p>
<p>Nous vous remercions pour votre intérêt envers l'Académie Lavoisier.</p>
<p>Malheureusement, votre candidature n'a pas été retenue cette fois-ci.</p>
<p>N'hésitez pas à réessayer. Bonne chance!</p>
<div class="footer"><p>&copy; 2026 Académie Lavoisier</p></div>
</div>
</body>
</html>
HTML;
    }
}
?>