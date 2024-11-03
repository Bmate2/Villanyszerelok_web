# Funkcionális specifikáció

## 1. Áttekintés
A LEGO webáruház célja, hogy bármely korosztálynak lehetővé tegye az egyszerű, letisztult designal,a vásárlás folyamatát.A webáruházba lesz egy Login felület is,ami lehetővé teszi és egyszerűsíti a felhasználó számára a visszatérő vásárlást.Ezt egy adatbázisba fogjuk tárolni, ugyanúgy, mint a raktárban lévő LEGO darabokat, csomagokat is. A vásárló vásárlás után eldöntheti, hogy, kártyával szeretne fizetni egyből, vagy ha megérkezett hozzá a csomag. A webáruházban lehet szűrni az árukat, hogy korosztálynak és témának megfelelő ajánlatokat ajánljon a Webáruház.

## 2. Jelenlegi helyzet leírása
A megrendelő egy LEGO webáruház, ahol szerettek volna egy működő webáruházat is a meglévő sima boltjuk mellé, a nagyobb bevétel/több vásárló érdekében, illetve a könnyebb vásárlás segítésében is sokat könnyítene a webáruház.A webáruháznak rendelkeznie kell egy beléptető rendszerrel,ezen felül szűréssel és fizetési lehetőség kiválasztása is opció kell legyne a weboldalon.



## 3. Vágyálomrendszer leírása

A LEGO webáruház célja, hogy minden korosztály LEGO-rajongóinak igényeit kielégítse egy egyszerű, mégis izgalmas vásárlási élmény nyújtásával. A webáruház kulcsfontosságú funkciói, mint a készletkereső és ajánló algoritmusok, lehetővé teszik, hogy a vásárlók gyorsan rátaláljanak az új és ritka készletekre. A felhasználói élményt egy letisztult felület biztosítja.

## 4. Jelenlegi üzleti folyamatok modellje

Jelenleg a készletek kezelése egy belső adatbázisban működik, amely az elérhető termékeket és azok mennyiségét tárolja. Az ügyfelek az üzletben kiválasztják a megvásárolni kívánt termékeket, majd a helyi pénztárban fizetnek, ahol kártyás vagy készpénzes fizetési lehetőségek állnak rendelkezésre. A folyamat minden lépése a fizikai helyszínhez kötött.

## 5. Igényelt üzleti folyamatok modellje

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |

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

## 11. Fogalomszótár
ADMIN   -    Adminisztrátor
USER    -    Felhasználó/Vásárló
NAVBAR  -    Navigációs sáv
