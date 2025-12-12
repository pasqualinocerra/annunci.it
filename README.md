# annunci.it

**annunci.it** è una mini web app per la gestione di annunci sviluppata durante il corso **"PHP e Laravel: il corso completo per diventare Web Developer"**.  
Progetto didattico che dimostra competenze pratiche in Laravel: CRUD, autenticazione, routing, Blade templates e validazione.

---

## 🔎 Descrizione
App semplice per pubblicare, modificare e cancellare annunci. Pensata per mostrare capacità backend con attenzione alla struttura del codice e alla separazione delle responsabilità.

---

## 🚀 Funzionalità principali
- Registrazione e login utenti (autenticazione Laravel)
- CRUD completo per gli annunci (create/read/update/delete)
- Validazione server-side dei form
- Protezione delle rotte con middleware
- Template con Blade
- Struttura MVC pulita e leggibile

---

## 🛠️ Tecnologie utilizzate
- PHP 8.5
- Laravel 12.41
- Composer
- MySQL / MariaDB
- Blade Template Engine
- Bootstrap / CSS base

---

## 📁 Struttura essenziale del progetto


app/
config/
database/
public/
resources/
routes/
.env.example
artisan
composer.json
README.md


---

## ⚙️ Installazione in locale

### 1️⃣ Clona il repository
```bash
git clone https://github.com/pasqualinocerra/annunci.it.git
cd annunci.it

2️⃣ Installa le dipendenze PHP
composer install

3️⃣ Configura l’ambiente
cp .env.example .env
php artisan key:generate

4️⃣ Configura il database nel file .env
DB_DATABASE=annunci
DB_USERNAME=root
DB_PASSWORD=tuapassword

5️⃣ Esegui le migrazioni
php artisan migrate

6️⃣ Avvia il server
php artisan serve


L’app sarà raggiungibile su:
http://127.0.0.1:8000

✅ Cosa ho imparato

Struttura MVC di Laravel

Creazione di CRUD completi

Routing avanzato

Autenticazione e middleware

Gestione migrazioni e database

Uso di Blade per le view

Git e GitHub nel ciclo di sviluppo

🔜 Miglioramenti futuri (To-Do)

Sistema di upload immagini

Paginazione annunci

Ricerca e filtri avanzati

Aggiunta categorie

Test automatizzati

Deploy online della web app

👨‍💻 Autore

Pasqualino Cerra
Sviluppatore Web (PHP, Laravel)
GitHub: https://github.com/pasqualinocerra
