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

* Nincsenek vásárolt softwarekomponensek

### Fejlesztő eszközök

* Visual Studio
* Github 
* Trello

## 8. Architekturális terv

### Webszerver

### Adatbázis rendszer

### A program elérése, kezelése

## 9. Adatbázis terv

## 10. Implementációs terv

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

Semmiféle szoftver telepítése nem szükséges, a weboldal bármilyen böngészőből futtatható.

## 13. Karbantartási terv