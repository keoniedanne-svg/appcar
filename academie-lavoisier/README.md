# Académie Lavoisier - Structure

## 📁 Structure du projet

```
academie-lavoisier/
├── index.php                    # Page d'accueil principale
├── .htaccess                    # Configuration Apache (sécurité)
│
├── includes/
│   ├── config.php              # Configuration générale
│   ├── db.php                  # Gestionnaire JSON
│   ├── functions.php           # Fonctions utilitaires
│   └── mail.php                # Système d'emailing
│
├── pages/                       # Pages publiques
│   ├── accueil.php
│   ├── actualites.php
│   ├── equipe.php
│   ├── etablissements.php
│   ├── adhesion.php
│   └── mentions-legales.php
│
├── admin/                       # Panel administrateur
│   ├── index.php               # Dashboard admin
│   ├── login.php               # Connexion
│   ├── logout.php              # Déconnexion
│   └── pages/
│       ├── dashboard.php
│       ├── actualites.php
│       ├── equipe.php
│       ├── etablissements.php
│       └── adhesions.php
│
├── assets/
│   ├── style.css               # CSS principal
│   ├── admin-style.css         # CSS admin
│   └── logo.png                # Logo (à ajouter)
│
├── uploads/
│   ├── photos/                 # Photos d'équipe
│   └── logos/                  # Logos établissements
│
└── data/                        # Base de données JSON
    ├── actualites.json
    ├── equipe.json
    ├── etablissements.json
    └── adhesions.json
```

## 🔐 Accès Admin

- **URL**: /admin/ ou /admin/login.php
- **ID**: admin
- **Mot de passe**: admin

⚠️ **À changer après la première connexion!**

## 📧 Configuration Email

Les emails sont envoyés via Brevo SMTP (Infinity Free compatible).
Configuration dans `includes/config.php`:

```
SMTP_HOST: smtp-relay.brevo.com
SMTP_PORT: 587
SMTP_USER: ad09a4001@smtp-brevo.com
```

## 🛡️ Sécurité

- CSRF token sur tous les formulaires
- reCAPTCHA v3 sur l'adhésion
- Validation des données
- Protection des fichiers JSON via .htaccess
- Passwords hashés (bcrypt)

## 📱 Caractéristiques

✅ Page d'accueil élégante
✅ Actualités avec admin
✅ Gestion d'équipe hiérarchique
✅ Établissements
✅ Formulaire adhésion avec captcha
✅ Admin complet avec upload fichiers
✅ Système d'emailing
✅ Design bleu/blanc moderne
✅ Responsive mobile
✅ Mentions légales/CGU

## 🚀 Installation

1. Extraire le ZIP
2. Uploader sur Infinity Free
3. Accéder à index.php
4. Admin: /admin/login.php

Bon développement! 🎓
