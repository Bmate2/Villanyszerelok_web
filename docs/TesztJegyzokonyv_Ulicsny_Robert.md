### A tesztelési jegyzőkönyv:

**Tesztelő:** Ulicsny Róbert

| Tesztszám | Rövid leírás    | Várt eredmény                                                                                                                                 | Eredmény                                                                                        | Megjegyzés                                                                        |
| --------- | --------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| 01 | Értékelések megjelenítése | Az adott termék értékelése megjelenik a hozzá tartozó oldalon | Első megnyitásra mindenen alapvetően 0 értékelést jelez, miután hozzáad az aktuális felhasználó egy értékelést akkor frissül csak | A probléma megoldva |
| 02 | Értékelés hozzáadása | Egy adott termékhez egy felhasználó csak egy értékelést tud adni | Több értékelést is hozzá tud adni egy felhasználó ugyanazon termékhez | A probléma megoldva |
| 03 | Értékelés hozzáadása vendégként | Vendégként nem tudunk értékelést hozzáadni a termékekhez, feldob egy ablakot hogy jelentkezzünk be | Nem volt lekezelve ha nem vagyunk bejelentkezve, ezért az értékelés hozzáadásánál összeesett az oldal | A probléma megoldva |
| 04 | Termékek ráktáron | Ha a termékekhez tartozó "stock" attribútum 0 akkor az adott termék oldalán az jelenik meg hogy "Elfogyott", ha pedig nagyobb mint 0 akkor az hogy "Raktáron"  | Helyes működés |  |
