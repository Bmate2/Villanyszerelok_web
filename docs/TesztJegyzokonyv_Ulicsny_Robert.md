### A tesztelési jegyzőkönyv:

**Tesztelő:** Ulicsny Róbert

| Tesztszám | Rövid leírás    | Várt eredmény                                                                                                                                 | Eredmény                                                                                        | Megjegyzés                                                                        |
| --------- | --------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| 01 | Értékelések megjelenítése | Az adott termék értékelése megjelenik a hozzá tartozó oldalon | Első megnyitásra mindenen alapvetően 0 értékelést jelez, miután hozzáad az aktuális felhasználó egy értékelést akkor frissül csak | A probléma megoldva |
| 02 | Értékelés hozzáadása | Egy adott termékhez egy felhasználó csak egy értékelést tud adni | Több értékelést is hozzá tud adni egy felhasználó ugyanazon termékhez | A probléma megoldva |
| 03 | Értékelés hozzáadása vendégként | Vendégként nem tudunk értékelést hozzáadni a termékekhez, feldob egy ablakot hogy jelentkezzünk be | Nem volt lekezelve ha nem vagyunk bejelentkezve, ezért az értékelés hozzáadásánál összeesett az oldal | A probléma megoldva |
| 04 | Termékek ráktáron | Ha a termékekhez tartozó "stock" attribútum 0 akkor az adott termék oldalán az jelenik meg hogy "Elfogyott", ha pedig nagyobb mint 0 akkor az hogy "Raktáron"  | Helyes működés | - |
| 05 | Legjobb értékelés megjelenítése | A termékhez tartozó legfrissebb legjobb értékelést mejeleníti az oldalon, ha még nincsen értékelés akkor azt írja ki | Helyes működés | - |
| 06 | Átirányítás a checkout-hoz | A kosár oldalon lévő gombbal átlépünk a checkout oldalra | Az oldal összeomlott | A probléma javítva lett, a gomb GET metódus helyett POST-ot küldött |
| 07 | Rendelés elmentése | A rendelés leadása gombra kattintva a rendelést felveszzük az adatbázisba | A rendelés nem lett felvéve az adatbázisba | A probléma javítva lett, rosszul lettek elnevezve a form adatai, szóval mindig üres értékeket akart átadni az oldal az OrderControllernek |
| 08 | Rendelésnél nem kötelező mező üresen hagyása | A kötelező mezőket kitöktve és a nem kötelező mezőket üresen hagyva a rendelés elmentődik az adatbázisba | Nem engedte elmenteni amíg nem töltöttük ki a mezőt | A probléma megolva |
| 09 | Rendelés elmentése | A rendelés leadása gombra kattintva minden megadott adatot elmentünk az adatbázisba | A nem kötelező mezők nem kerültek mentésre | A probléma megolva |
| 10 | Rendelés megjelenítése a profilon | Az profilon megjelennek az aktuális fiók által tett rendelések | Helyes működés | - |
| 11 | Értékelés törlése | Az értékelésünket töröljük, ha szeretnénk írhatunk újat | Helyes működés | - |
| 12 | Jelszó változtatás | A jelszót megváltoztatjuk a profilunkon, és a régi jelszó érvénytelenné válik, az újat kell használni | Helyes működés | - |
| 13 | Név megváltoztatása | A nevünket megváltoztathatjuk a profilunkon, ezzel az adatbázisban is | Helyes működés | - |
| 14 | Email megváltoztatása | Az email címünket megváltoztathatjuk a profilunkon, ezzel az adatbázisban is | Helyes működés | - |
| 15 | Rendelések megjelenítése admin felületen | A rendelések megjelennek minden hozzájuk tartozó adattal | Az oldal összeomlott | A probléma javítva, nem volt létrehozva a kötés az order és a user között |
| 16 | Admin nézet mezei userként | Az admin nézet nem jelenik meg általános felhasználóként | Helyes működés | - |
| 17 | Rendelés törlése admin felületből | A rendelést töröljük az adatbázisból | Helyes működés | - |
| 18 | Rendelés státuszának módosítása admin felületből | A rendelést státuszát átállítjuk a kiválasztott opcióra | Helyes működés | - |
| 19 | Admin felületről átirányítás termékhez | A termék kártyára kattintva az oldal átirányul a termék oldalára | Nem létező oldalra került átirányítás | Probléma megoldva, rosszul volt linkelve |