# Rendszerterv

## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Bodnár Máté
   * Product owner: Györkis Tamás
     
### 2.2 Projektmunkások és felelőségek:
   * Fejlesztők és tesztelők: a csapat tagjai

### 2.3 Ütemterv:
|Funkció                  | Feladat                                | Prioritás | Becslés (óra) | Aktuális becslés (óra) | Eltelt idő (óra) | Becsült idő (óra) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|

### 2.4 Mérföldkövek:
   * Prototípus átadása

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők
Főként a diákok de bárki használhatja

### 3.2 Üzleti folyamatok

ingyenes

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

### Hardver topológia

### Fizikai alrendszerek

### Fejlesztő eszközök


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

## 10. Implementációs terv

## 11. Tesztterv

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