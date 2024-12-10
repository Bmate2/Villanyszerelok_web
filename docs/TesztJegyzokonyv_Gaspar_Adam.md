### A tesztelési jegyzőkönyv:

**Tesztelő:** Gáspár Ádám

| Tesztszám | Rövid leírás    | Várt eredmény                                                                                                                                 | Eredmény                                                                                        | Megjegyzés                                                                        |
| --------- | --------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| 01 | Regisztrálás helyes adatokkal | Helyes adat megadásával sikeres regisztráció fog történni ezután be lehet jelentkezni | Helyes működés|-|
| 02 | 	Regisztrálás hibás jelszóval| Regisztráció nem lesz lehetséges a jelszó nem helyes megadása miatt |Helyes működés  |-|
| 03 | Belépés hamis fiók adatokkal| A belépés nem lesz sikeres,mivel az adatbázisban nem található meg a felhasználó |helyes működés|-|
| 04 | Regisztráció nem létező e-mail címmel | Nem létező e-mail cím megadása esetén hibaüzenet jelenik meg | Helyes működés | - |
| 05 | Bejelentkezés mezők kitöltése nélkül |Ha egyik mező sincs kitöltve, a weboldal nem fog beengedni | Helyes működés | - |
| 06 | Navbar helyes működése | A navbar minden menüpontra reagál | A navbar 2 menüpontra nem reagált | A probléma javítva lett|
| 07 | Navbar dropdown menü működése | A navbar-on belül a dropdown menü helyes lenyílása,működése | A menüpont nem nyílt le | A probléma javítva lett|
| 08 | Belépés helyes adatokkal | Helyes adat megadásával sikeres belépés történt|A belépés nem volt sikeres|A probléma javítva lett,az adatbázis nem megfelelően működött|
| 09 | Navbar megváltozása bejelentkezés után|Bejelentkezés után változzonak meg a navbar menüpontjai,amiket hozzáad a bejelentkezés|Nem adódtak hozzá az adott funkciók| A probléma megoldva |
| 10 |Navbar átirányítások| Az adott menüpont irányítson át az adott view-ra| A menüpontok közül nem mindegyik működött|A probléma ki lett javítva|
