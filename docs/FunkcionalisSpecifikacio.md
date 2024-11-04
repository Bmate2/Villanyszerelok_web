# Funkcionális specifikáció

## 1. Áttekintés
A LEGO webáruház célja, hogy bármely korosztálynak lehetővé tegye az egyszerű, letisztult designal,a vásárlás folyamatát.A webáruházba lesz egy Login felület is,ami lehetővé teszi és egyszerűsíti a felhasználó számára a visszatérő vásárlást.Ezt egy adatbázisba fogjuk tárolni, ugyanúgy, mint a raktárban lévő LEGO darabokat, csomagokat is. A vásárló vásárlás után eldöntheti, hogy, kártyával szeretne fizetni egyből, vagy ha megérkezett hozzá a csomag. A webáruházban lehet szűrni az árukat, hogy korosztálynak és témának megfelelő ajánlatokat ajánljon a Webáruház.

## 2. Jelenlegi helyzet leírása
A megrendelő egy LEGO webáruház, ahol szerettek volna egy működő webáruházat is a meglévő sima boltjuk mellé, a nagyobb bevétel/több vásárló érdekében, illetve a könnyebb vásárlás segítésében is sokat könnyítene a webáruház.A webáruháznak rendelkeznie kell egy beléptető rendszerrel,ezen felül szűréssel és fizetési lehetőség kiválasztása is opció kell legyne a weboldalon.



## 3. Vágyálomrendszer leírása

A LEGO webáruház célja, hogy minden korosztály LEGO-rajongóinak igényeit kielégítse egy egyszerű, mégis izgalmas vásárlási élmény nyújtásával. A platform lehetőséget kínál mind az újoncoknak, mind a tapasztalt gyűjtőknek, hogy könnyedén megtalálják a számukra legmegfelelőbb készleteket, legyen szó klasszikus, modern vagy éppen ritka kiadásokról. A webáruház kulcsfontosságú funkciói, mint a fejlett készletkereső, amely lehetővé teszi a vásárlók eligazodását az oldalon. Emellett a személyre szabott ajánló algoritmusok olyan készleteket is javasolnak, amelyek a vásárlók érdeklődési köréhez illeszkednek, így akár új kedvencekre is rátalálhatnak.

A felhasználói élményt egy letisztult felület biztosítja. A vásárlók lehetőséget kapnak arra is, hogy saját LEGO-élményeiket megosszák másokkal értékeléseken, véleményeken keresztül, illetve böngésszenek a közösségi visszajelzések között.

## 4. Jelenlegi üzleti folyamatok modellje

Jelenleg a készletek kezelése egy belső adatbázisban működik, amely az elérhető termékeket és azok mennyiségét tárolja. Az ügyfelek az üzletben kiválasztják a megvásárolni kívánt termékeket, majd a helyi pénztárban fizetnek, ahol kártyás vagy készpénzes fizetési lehetőségek állnak rendelkezésre. A folyamat minden lépése a fizikai helyszínhez kötött.

## 5. Igényelt üzleti folyamatok modellje

Az új webáruház integrálódik majd a meglévő adatbázissal, valós idejű kapcsolatot biztosítva a raktárkezelő rendszerrel. Az online rendszerhez online bankkártyás fizetési és utánvétes opciók kerülnek kialakításra. A termékek elérhetősége és szállítási folyamatainak kezelése az online vásárlások esetén új logisztikai megoldásokat igényel, amelyek illeszkednek majd a fizikai bolt jelenlegi folyamataihoz. 

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :01: | Regisztráció | Regisztrációs folyamat | A rendszer összegyűjti a felhasználó nevét, e-mail címét és jelszavát a fiók létrehozásához. |
| :02: | Termékkeresés | Termékkategória keresés | A rendszer megjeleníti a kategóriák listáját, és lehetővé teszi a felhasználóknak a szűrést. |
| :03: | Fizetés | Bankkártyás fizetés | A rendszer külső fizetési szolgáltatáson keresztül kezeli a bankkártyás fizetéseket. |
| :04: | Szűrés | Termékszűrés | A felhasználók szűrhetnek a termékek között korosztály és kategória alapján. |

## 7. Használati esetek
A webáruház felhasználása két esettel rendelkezik:

    Ha USER-ként lépsz be, akkor lehetőséged van:
        - A készlet kereséséhez
        - Rendeléshez
        - Belépéshez(Adataid elmentéséhez)
    
    Ha adminként lépsz be, akkor lehetőséged van:
        - A készlet kereséséhez
        - Rendeléshez
        - Belépéshez(Adataid elmentéséhez)
        - LEGO hozzáadásához,elvételéhez.

## 8. Képernyőtervek

## 9. Forgatókönyvek
A USER megnyitja a webáruházat, és lehetősége van a belépés lehetőségre, miután ezt megtette, lehetősége van böngészni az árukat, azokat szűrni is. Vásárlás esetén több dolgot is elhelyezhet a kosárba, ezek kifezetésére is 2 lehetősége van, egyből kártyával, vagy utánvéttel kártyával/készpénzzel.
Amennyiben a felületet az ADMIN használja,lehetősége van a sima USER opcióihoz is, de ezen felül megnyílik a lehetőség a raktár kezelésére is. 
## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |
|K1 | Az oldal fő tartalmai legyenek elérhetők | Főoldal
|K2 | A felhasználók beléphessenek a fiókjukba | Belépés
|K3 | Új felhasználók regisztrálhassanak | Regisztráció
|K4 | Adminok kezelhessék a LEGO készletet	Admin nézet: LEGO hozzáadása, | törlés
|K5 | Vásárlók keresést végezhessenek a készleten | Vásárló nézet: Készletkereső
|K6 | A vásárlók láthassák rendelésük részleteit | Rendelés adatai: Nyomon követés
|K7 | A vásárlók rendeléseiket törölhessék | Rendelés adatai: Rendelés törlés
|K8 | A vásárlók módosíthassák rendelésük adatait | Rendelés adatai: Adatok |módosítása
|K9 | A vásárlók módosíthassák fiókadataikat | Fiókadatok: E-mail cím |módosítás, Jelszó módosítás, Profilkép módosítás/feltöltés

## 11. Fogalomszótár
ADMIN   -    Adminisztrátor
USER    -    Felhasználó/Vásárló
NAVBAR  -    Navigációs sáv
