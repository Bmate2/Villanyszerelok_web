# Követelmény specifikáció

## 1. Áttekintés
A LEGO webáruház célja, hogy bármely korosztálynak lehetővé tegye az egyszerű, letisztult designal,a vásárlás folyamatát.A webáruháznak rendelkeznie kell  egy Login felülettel (ADMIN és USER-nek),ami lehetővé teszi és egyszerűsíti a USER és ADMIN számára a visszatérő vásárlást.Ezt egy adatbázisba fogjuk tárolni, ugyanúgy, mint a raktárban lévő LEGO darabokat(Amelyeket az ADMIN tud majd befolyásolni), csomagokat is. A USER vásárlás után eldöntheti, hogy, kártyával szeretne fizetni egyből, vagy ha megérkezett hozzá a csomag. A webáruházban lehet szűrni az árukat, hogy korosztálynak és témának megfelelő ajánlatokat ajánljon a Webáruház.

## 2. A jelenlegi helyzet leírása
A megrendelő bolt, egy olyan LEGO áruház, ahol régóta terveztek, egy fejlesztést, amivel online felüleletre is átterjedne a bolt, egy Webáruház céljával.Webáruház nélkül kevesebb megrendelésük,bevételük,vásárlójuk van,ezért szeretnének egy letisztult és egyszerű webáruházat,amely több emberhez jutna el és ebből adódóan több vásárlást is generálna nekik. A teljes manuális boltbeli vásárlás helyett,ez egy gyorsabb,egyszerűbb megoldás az üzlet számára is.
## 3. Vágyálomrendszer

A LEGO webáruház célja, hogy minden korosztály LEGO-rajongóinak igényeit kielégítse egy egyszerű, mégis izgalmas vásárlási élmény nyújtásával. A platform lehetőséget kínál mind az újoncoknak, mind a tapasztalt gyűjtőknek, hogy könnyedén megtalálják a számukra legmegfelelőbb készleteket, legyen szó klasszikus, modern vagy éppen ritka kiadásokról. A webáruház kulcsfontosságú funkciói, mint a fejlett készletkereső, amely lehetővé teszi a vásárlók eligazodását az oldalon. Emellett a személyre szabott ajánló algoritmusok olyan készleteket is javasolnak, amelyek a vásárlók érdeklődési köréhez illeszkednek, így akár új kedvencekre is rátalálhatnak.

A felhasználói élményt egy letisztult felület biztosítja. A vásárlók lehetőséget kapnak arra is, hogy saját LEGO-élményeiket megosszák másokkal értékeléseken, véleményeken keresztül, illetve böngésszenek a közösségi visszajelzések között.

## 4. Jelenlegi üzleti folyamatok modellje

Jelenleg az áruház kizárólag fizikai üzletekben értékesíti termékeit. Az ügyfelek az üzletek nyitvatartási idejében látogathatják meg a boltot, személyesen választhatnak a polcokon található termékek közül, majd a pénztárnál fizethetnek. Az elérhető termékválasztékot az adott üzlet készlete korlátozza, így egyes népszerű készletek esetenként nem kaphatók. A vásárlás csak helyben és személyesen lehetséges, ami korlátozza a hozzáférhetőséget és az értékesítés bővítésének lehetőségét.

## 5. Igényelt üzleti folyamatok modellje

A vásárlás időben és helyszínben korlátozott, ami csökkenti a hozzáférhetőséget. Az üzlet készlete korlátozott, és a vevők a személyes elérhetőség miatt csak a fizikai bolt nyitvatartási idején belül vásárolhatnak. Emiatt a vállalat szeretne bővíteni egy online webáruházzal, amely rugalmasságot és szélesebb választékot biztosítana a vásárlóknak, elérhetővé téve a termékeket a nap 24 órájában, bárhonnan.

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| 01 | Regisztráció | Felhasználói regisztráció | A felhasználók regisztrálhatnak a webáruházba, hogy elmentsék adataikat és rendeléseiket. |
| 02 | Termékkeresés | Keresési funkció | A vásárlók termékek között kereshetnek név és ár alapján a gyorsabb vásárlás érdekében. |
| 03 | Fizetés | Online fizetési opciók | A felhasználók választhatnak a bankkártyás és utánvétes fizetési módok közül. |
| 04 | Szűrés | Termékszűrés | A felhasználók szűrhetnek a termékek között korosztály és kategória alapján. |

## 7. Fogalomtár
ADMIN   -    Adminisztrátor
USER    -    Felhasználó/Vásárló