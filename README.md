# Services-Website

## Descriere

**Services-Website** este o platformă web de tip *Fiverr*, unde utilizatorii pot:
- vedea servicii oferite de diferiți prestatori,
- crea cont (în viitor: client / prestator),
- publica și administra servicii (funcționalitate planificată).

Proiectul este **în dezvoltare** și servește ca bază pentru un marketplace de servicii construit cu PHP și MySQL.

---

## Tehnologii folosite

- **PHP**
- **MySQL**
- **HTML5**
- **CSS3**
- **JavaScript**
- **AJAX (fetch / jQuery)**

---

## Instalare & Rulare locală

1. Clonează repository-ul:

```bash
git clone https://github.com/mihai1702/Services-Website.git
cd Services-Website
```

2. Creează o bază de date MySQL (ex. `services_website`) și importă schema (dacă există un fișier `.sql` în proiect).

3. Configurează conexiunea la baza de date în `db-connection.php`:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "services_website";
```

4. Rulează proiectul printr-un server local (de ex. XAMPP / WAMP):

- Copiază proiectul în `htdocs/` (XAMPP) sau `www/` (WAMP)
- Accesează în browser:
  - `http://localhost/Services-Website/`

---

## Ce urmeaza implementat

- Sistem complet de autentificare (login / register)
- Roluri utilizatori (client / prestator)
- Adăugare, editare, ștergere servicii
- Pagină de profil pentru prestator
- Sistem de mesaje client–prestator
- Recenzii și rating pentru servicii
- Căutare și filtrare după categorie / preț / rating

---
