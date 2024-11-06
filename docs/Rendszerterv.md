# Rendszerterv

## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Bodnár Máté
   * Product owner: Györkis Tamás
     
### 2.2 Projektmunkások és felelőségek:
   * Fejlesztők és tesztelők: a csapat tagjai

### 2.3 Ütemterv:

| Funkció                  | Feladat                                | Prioritás | Becslés (óra) | Aktuális becslés (óra) | Eltelt idő (óra) | Becsült idő (óra) |
|--------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
| Követelmény specifikáció | Megírás                                | 1         | 2             | 2                      | 2                | 2                   |
| Funkcionális specifikáció| Megírás                                | 1         | 3             | 3                      | 3                | 3                   |
| Rendszerterv             | Megírás                                | 1         | 4             | 4                      | 4                | 4                   |
| Program                  | Képernyőtervek elkészítése             | 2         | 3             | 3                      | 3                | 3                   |
| Program                  | Prototípus elkészítése                 | 3         | 12            | 12                     | 0                | 12                  |
| Program                  | Főoldal fejlesztése                    | 3         | 6             | 6                      | 0                | 6                   |
| Program                  | Belépési funkciók megvalósítása        | 3         | 4             | 4                      | 0                | 4                   |
| Program                  | Regisztrációs funkciók megvalósítása   | 3         | 4             | 4                      | 0                | 4                   |
| Program                  | Admin nézet - LEGO hozzáadása/törlés   | 3         | 10            | 10                     | 0                | 10                  |
| Program                  | Vásárló nézet - Készletkereső          | 3         | 8             | 8                      | 0                | 8                   |
| Program                  | Vásárló nézet - Rendelés adatai        | 3         | 6             | 6                      | 0                | 6                   |
| Program                  | Nyomon követés funkció                 | 3         | 4             | 4                      | 0                | 4                   |
| Program                  | Rendelés törlés funkció                | 3         | 4             | 4                      | 0                | 4                   |
| Program                  | Rendelési adatok módosítása funkció    | 3         | 4             | 4                      | 0                | 4                   |
| Program                  | Fiókadatok - E-mail cím módosítás      | 3         | 3             | 3                      | 0                | 3                   |
| Program                  | Fiókadatok - Jelszó módosítás          | 3         | 3             | 3                      | 0                | 3                   |
| Program                  | Fiókadatok - Profilkép módosítás       | 3         | 4             | 4                      | 0                | 4                   |
| Program                  | Teljes rendszer tesztelése             | 4         | 8             | 8                      | 0                | 8                   |


### 2.4 Mérföldkövek:
   * Prototípus átadása

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

Diákok: Elsődleges célcsoport.
Egyéb felhasználók.
Adminisztrátorok: A webáruház tartalmát, készletét és felhasználói adatokat kezelik.

### 3.2 Üzleti folyamatok

Ingyenes hozzáférés: A webáruház használata mindenki számára díjmentes.
Regisztráció: Profil létrehozása adatok eltárolása érdekében gyorsabb vásárláshoz.
Keresés, szűrés: Keresési és szűrési lehetőségek ár és téma alapján.
Kosár, fizetés: Termékek kosárba helyezése, fizetési módszer kiválasztása, bankkártyával vagy utánvéttel.

## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1	| Főoldal | Az alkalmazás kezdőlapja, ahonnan a felhasználók navigálhatnak a különböző funkciókhoz.
| K2	| Belépés | Lehetővé teszi a felhasználók számára, hogy bejelentkezzenek a fiókjukba.
| K3	| Regisztráció | Új felhasználók számára regisztrációs lehetőséget biztosít.
| K4	| Admin LEGO kezelés |Az adminok hozzáadhatnak és törölhetnek LEGO termékeket az adatbázisból.
| K5	| Készletkereső | Vásárlók számára lehetőséget biztosít a LEGO készletben való keresésre.
| K6	| Rendelés nyomon követése | Vásárlók számára lehetővé teszi rendelésük állapotának követését.
| K7	| Rendelés törlése | Vásárlók lemondhatják rendelésüket az alkalmazásban.
| K8	| Rendelés adatainak módosítása | Vásárlók szerkeszthetik rendelésük részleteit a megfelelő határidőn belül.
| K9	| E-mail cím módosítása | Vásárlók frissíthetik a regisztráció során megadott e-mail címüket.
| K10 | Jelszó módosítása | Vásárlók megváltoztathatják jelszavukat a fiókjukban.
| K11 | Profilkép módosítása/feltöltése | Vásárlók feltölthetnek vagy módosíthatnak profilképet a fiókjukban.

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

Admin
Felhasználó
Vendég vásárló

### 5.2 Menühierarchiák

* Főoldal
* Belépés
* Regisztráció
* Admin nézet:
   * LEGO hozzáadása, törlés
* Vásárló nézet:
   * Készletkereső
   * Rendelés adatai
      * Nyomon követés
      * Rendelés törlés
      * Adatok módosítása
   * Fiókadatok
      * E-mail cím módosítás
      * Jelszó módosítás
      * Profilkép módosítás/feltöltés

## 6. Fizikai környezet

### Vásárolt softwarekomponensek és külső rendszerek

* Nincsenek vásárolt softwarekomponensek

### Fejlesztő eszközök

* Visual Studio
* Github 
* Trello

## 8. Architekturális terv

### Webszerver

Apache

### Adatbázis rendszer

1. Kliens réteg

Felhasználói böngésző: A felhasználói felületet a böngésző szolgáltatja, ahonnan a vásárlók és az adminisztrátorok elérhetik a rendszer funkcióit (például bejelentkezés, termékkezelés, rendelés követés).
Reszponzív felület: A front-end reszponzív kialakítása biztosítja a mobil- és asztali felhasználók megfelelő kiszolgálását.
HTTP-kérések: A felhasználói műveletek (pl. bejelentkezés, keresés) HTTP-kéréseken keresztül jutnak el a webszerverhez.

2. Webszerver réteg

Nginx vagy Apache: Kiszolgálja az alkalmazást, kezeli a bejövő kéréseket, biztosítja a statikus fájlok (képek, stíluslapok) gyors elérését, és HTTPS protokollon keresztül titkosítja a kapcsolatot.
SSL-tanúsítvány: Biztosítja az összes adat biztonságos átvitelét a kliens és a webszerver között.

3. Alkalmazás réteg (Laravel)

MVC architektúra:
Modellek: Az adatbázissal kapcsolatos műveleteket kezelik. Például a felhasználók, LEGO termékek és rendelési tételek modelljei biztosítják az ORM alapú adatműveleteket.
Vezérlők (Controllers): Kezeli a felhasználói műveleteket (pl. bejelentkezés, termékkezelés, rendelésmódosítás). Az egyes végpontokhoz (URL-ekhez) külön vezérlők kapcsolódnak, amelyek a megfelelő logikát biztosítják.
Nézetek (Views): Az admin és vásárlói nézetek különálló felületként jelennek meg. A Blade sablonmotor biztosítja a dinamikus HTML-generálást.
Köztes réteg (Middleware):
Autentikáció és jogosultság kezelés (admin és vásárlói jogosultságok elhatárolása).
CSRF védelem és token alapú biztonság biztosítása.

4. Adatbázis réteg

MySQL vagy PostgreSQL: Tárolja az összes tartalmat és kapcsolatot (felhasználók, termékek, rendelési adatok).
Adatbázis struktúra:
Táblák a felhasználók, termékek (LEGO-k), rendelések, rendelési tételek, és felhasználói címek tárolására.
Külső kulcsok és indexek az adatok közötti gyors és hatékony kapcsolatokhoz.

5. Fájltároló réteg

Helyi tárhely vagy felhő alapú tárhely (pl. AWS S3): Profilképek és egyéb statikus fájlok biztonságos és hatékony tárolására.
Laravel Storage: A fájlkezelést egyszerűsíti, valamint hozzáférést biztosít a különböző fájltárolási megoldásokhoz.

6. Gyorsítótárazási réteg

Redis vagy Memcached: Az adatbázis műveletek gyorsítása érdekében a gyakran használt adatokat (pl. készlet információk) cache-ben tárolja.
Session kezelés: Az autentikációs adatok gyors elérése és a felhasználói munkamenetek kezelése cache használatával.

7. API réteg

RESTful API végpontok: Biztosítják az integrációt egy esetleges mobilalkalmazással vagy más külső szolgáltatással. Lehetővé teszi a termékinformációk, rendelési műveletek API-k keresztüli elérését.
Autentikáció és jogosultság kezelés: Token alapú hitelesítési megoldás (pl. Laravel Passport vagy Sanctum) az API végpontok biztonságos eléréséhez.

8. Adminisztrációs és üzemeltetési eszközök

CI/CD Pipeline: Az alkalmazás verziókezeléséhez és folyamatos integrációjához (GitLab CI, GitHub Actions) automatizált telepítési folyamat.
Monitoring és Loggolás: A rendszer figyelése és a hibakeresés érdekében eszközök (pl. Laravel Telescope, Sentry, Grafana) biztosítják az alkalmazás teljesítményének és hibáinak nyomon követését.
Biztonsági mentés: Adatbázis és fájl biztonsági mentés rendszeres időközönként, a felhasználói adatok védelmére.


### A program elérése, kezelése

interneten

## 9. Adatbázis terv

<<<<<<< HEAD
-- Felhasználók táblája
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    profile_picture VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Rendelések táblája
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    status ENUM('pending', 'shipped', 'delivered', 'cancelled') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- LEGO termékek táblája
CREATE TABLE lego_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    stock INT DEFAULT 0,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Rendelés tételek táblája (mely termékek vannak egy rendelésben)
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    lego_item_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (lego_item_id) REFERENCES lego_items(id) ON DELETE CASCADE
);

-- Adminok táblája
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);


=======
1. Users (Felhasználók)

id (int, primary key) – Egyedi azonosító.
name (string) – Felhasználó neve.
email (string, unique) – E-mail cím (egyedi).
password (string) – Hashelt jelszó.
profile_picture (string, nullable) – Profilkép fájlneve vagy URL-je.
role (enum: 'admin', 'customer') – Felhasználói jogosultság (admin vagy vásárló).
created_at (timestamp) – Regisztráció dátuma.
updated_at (timestamp) – Utolsó módosítás dátuma.

2. LEGO_Items (LEGO termékek)

id (int, primary key) – Egyedi azonosító.
name (string) – LEGO termék neve.
description (text, nullable) – Termék leírása.
price (decimal) – Ár.
stock_quantity (int) – Készleten lévő mennyiség.
created_at (timestamp) – Termék hozzáadásának dátuma.
updated_at (timestamp) – Utolsó módosítás dátuma.

3. Orders (Rendelések)

id (int, primary key) – Egyedi azonosító.
user_id (int, foreign key) – Hivatkozás a felhasználóra.
status (enum: 'pending', 'shipped', 'delivered', 'cancelled') – Rendelés állapota.
total_price (decimal) – Rendelés összértéke.
created_at (timestamp) – Rendelés dátuma.
updated_at (timestamp) – Utolsó módosítás dátuma.

4. Order_Items (Rendelés tételek)

id (int, primary key) – Egyedi azonosító.
order_id (int, foreign key) – Hivatkozás a rendelésre.
lego_item_id (int, foreign key) – Hivatkozás a LEGO termékre.
quantity (int) – Rendelésben szereplő mennyiség.
price (decimal) – Egységár (a rendelés időpontjában).

5. Addresses (Címek)

id (int, primary key) – Egyedi azonosító.
user_id (int, foreign key) – Hivatkozás a felhasználóra.
address_line1 (string) – Cím első sora.
address_line2 (string, nullable) – Cím második sora (opcionális).
city (string) – Város.
postal_code (string) – Irányítószám.
country (string) – Ország.
created_at (timestamp) – Cím hozzáadásának dátuma.
updated_at (timestamp) – Utolsó módosítás dátuma.
6. Password_Resets (Jelszó helyreállítások)
id (int, primary key) – Egyedi azonosító.
user_id (int, foreign key) – Hivatkozás a felhasználóra.
token (string) – Jelszó helyreállító token.
created_at (timestamp) – Token létrehozásának dátuma.
>>>>>>> 08f2491315ad34a0b7d969429e39dc080070c98f

## 10. Implementációs terv


Web (Frontend)

HTML, CSS, JavaScript, Blade: A felhasználói felület készítéséhez használjuk őket. Az elemeket külön fájlokba szervezzük, hogy átlátható és könnyen módosítható legyen. A Blade sablonmotor segít a dinamikus oldalak létrehozásában és a visszatérő elemek kezelésében.

Backend (Szerveroldali logika)

Laravel PHP keretrendszer: Az MVC architektúra alapján szervezzük az alkalmazást, így a kód logikusan felépített, könnyen karbantartható és bővíthető. Az autentikáció és jogosultságkezelés köztes rétegekkel történik, a Laravel ORM pedig egyszerűsíti az adatbázis-műveleteket.

Adatbázis

MySQL: Az adatbázis tárolja a felhasználókat, termékeket és rendeléseket. Laravel ORM segítségével könnyen integrálható, ami gyors és hatékony adatkezelést biztosít.

API (REST szolgáltatások)

Laravel RESTful API: Az API végpontok biztosítják az adatok elérését más alkalmazások (például mobilalkalmazások) számára is. Autentikációhoz API tokeneket használunk.

Fájlok tárolása

Laravel Storage, AWS S3 vagy helyi tárolás: Profilképek és más fájlok tárolására használjuk, rugalmasan választható helyi vagy felhő alapú tárhely.

Gyorsítótárazás

Redis vagy Memcached: A gyakran használt adatok gyorsítótárazása segíti a gyorsabb betöltést és csökkenti az adatbázis terhelését.

Verziókezelés és folyamatos integráció

Git, GitHub Actions/GitLab CI: Verziókezeléshez Git-et használunk, a CI/CD pipeline pedig automatizálja a telepítést, így felgyorsítva a fejlesztési folyamatot.

## 11. Tesztterv

A tesztelés célja a rendszer és annak komponensei funkcionalitásának alapos vizsgálata, valamint az üzleti szolgáltatások megfelelő működésének ellenőrzése. A teszteket a fejlesztői csapat végzi, és az eredményeket külön fájlokban dokumentálják.

### Tesztesetek

 | Teszteset | Elvárt eredmény | 
 |-----------|-----------------| 
 | ... | ... |

### A tesztelési jegyzőkönyv kitöltésére egy sablon:

**Tesztelő:** Vezetéknév Keresztnév

**Tesztelés dátuma:** Év.Hónap.Nap

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------
például. Teszt #01 | Regisztráció | A felhasználó az adatok megadásával sikeresen regisztrálni tud  | A felhasználó sikeresen regisztrált | Nem találtam problémát.
... | ... | ... | ... | ...


## 12. Telepítési terv

## 13. Karbantartási terv


Karbantartási feladatok
Corrective Maintenance

A felhasználók által bejelentett hibák és problémák javítása. Ezeket rendszeresen ellenőrizzük és kijavítjuk a felhasználói élmény javítása érdekében.

Adaptive Maintenance

Az alkalmazást naprakészen tartjuk, és biztosítjuk a kompatibilitást a használt technológiák, például az új böngésző verziók vagy szerverfrissítések esetén.
Igény szerint módosítjuk az alkalmazást, hogy megfeleljen az új jogszabályoknak vagy üzleti követelményeknek.

Perfective Maintenance

Az alkalmazás teljesítményének javítása, új funkciók hozzáadása a felhasználói élmény és a rendszer hatékonyságának növelése érdekében.
Felhasználói visszajelzések alapján optimalizáljuk a meglévő funkciókat.

Preventive Maintenance

Olyan potenciális problémák elhárítása, amelyek még nem észlelhetők, de a jövőben komolyabb gondokat okozhatnak.
Biztonsági frissítések és rendszeres ellenőrzések annak érdekében, hogy a rendszer védett maradjon az újabb sérülékenységekkel szemben.
=======
Semmiféle szoftver telepítése nem szükséges, a weboldal bármilyen böngészőből futtatható.
