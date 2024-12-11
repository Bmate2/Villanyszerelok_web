<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        \App\Models\Review::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

       

        $products = [
            ['name' => 'Lego Super Heroes - Iron Man Mark 85', 'description' => 'A LEGO Super Heroes sorozatból egy részletes Iron Man Mark 85 páncél, amely az Avengers filmek egyik ikonikus harcosát ábrázolja.', 'stock' => 15, 'price' => 18999.99, 'image_url' => '/images/legobg2.jpg', 'category' => 'LEGO Super Heroes', 'sales_count' => 120],
            ['name' => 'Lego Super Heroes - Batmobile', 'description' => 'A LEGO Super Heroes Batman Batmobile-ja, amely a híres járműt modellezi a DC Comics világából.', 'stock' => 10, 'price' => 24999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 95],
            ['name' => 'Lego Super Heroes - Spider-Man Web Warriors', 'description' => 'A LEGO Super Heroes Spider-Man Web Warriors készlet, melyben Spider-Man és barátai harcolnak a gonosz ellen.', 'stock' => 20, 'price' => 14999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 110],
            ['name' => 'Lego Super Heroes - Captain America’s Shield', 'description' => 'A LEGO Super Heroes szériában található Captain America pajzsa, amely az egyik legismertebb Marvel hős eszköze.', 'stock' => 25, 'price' => 9999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 135],
            ['name' => 'Lego Super Heroes - Hulkbuster', 'description' => 'A LEGO Super Heroes Hulkbuster, amely egy hatalmas páncél, amelyet Tony Stark hozott létre, hogy legyőzze Hulkot.', 'stock' => 12, 'price' => 27999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 70],
            ['name' => 'Lego Super Heroes - Thor’s Hammer', 'description' => 'A LEGO Super Heroes Thor kalapácsa, Mjolnir, amely a híres Asgardi harcos eszköze, teljes részletességgel.', 'stock' => 18, 'price' => 16999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 85],
            ['name' => 'Lego Super Heroes - Black Panther’s Throne Room', 'description' => 'A LEGO Super Heroes Black Panther trónterme, egy lenyűgöző Wakanda-i helyszín a Marvel filmekből.', 'stock' => 16, 'price' => 21999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 90],
            ['name' => 'Lego Super Heroes - Wonder Woman’s Invisible Jet', 'description' => 'A LEGO Super Heroes Wonder Woman láthatatlan repülője, amely a híres szuperhősnő járműve a DC Comics világából.', 'stock' => 22, 'price' => 17999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 115],
            ['name' => 'Lego Super Heroes - Justice League HQ', 'description' => 'A LEGO Super Heroes Justice League központja, ahol Batman, Superman, Wonder Woman és más szuperhősök találkoznak, hogy megmentsék a világot.', 'stock' => 14, 'price' => 29999.99, 'category' => 'LEGO Super Heroes', 'sales_count' => 60],
            ['name' => 'Lego Super Heroes - The Batcave', 'description' => 'A LEGO Super Heroes Batcave készlet, amely Batman titkos búvóhelyét modellezi, tele eszközökkel és különleges kiegészítőkkel.', 'stock' => 19, 'price' => 25999.99, 'image_url' => '/images/legobg1.jpg', 'category' => 'LEGO Super Heroes', 'sales_count' => 80],
                        
            ['name' => 'LEGO City - Police Station', 'description' => 'A LEGO City rendőrségi állomása, ahol a rendőrök napi feladataikat látják el, és elkapják a bűnözőket.', 'stock' => 18, 'price' => 14999.99, 'image_url' => '/images/legobg3.jpg', 'category' => 'LEGO City', 'sales_count' => 120],
            ['name' => 'LEGO City - Fire Truck', 'description' => 'A LEGO City tűzoltóautó, amely segít a tűzoltóknak gyorsan elérni a veszélyhelyzeteket.', 'stock' => 22, 'price' => 9999.99, 'category' => 'LEGO City', 'sales_count' => 140],
            ['name' => 'LEGO City - Airport Terminal', 'description' => 'A LEGO City repülőtéri terminál, ahol az utasok elérhetik a különböző járatokat, és csatlakozhatnak a világ többi részéhez.', 'stock' => 15, 'price' => 18999.99, 'category' => 'LEGO City', 'sales_count' => 100],
            ['name' => 'LEGO City - Fire Rescue Helicopter', 'description' => 'A LEGO City mentőhelikopter, amely gyorsan elérheti a balesetek helyszínét és segítséget nyújt a tűzoltóknak.', 'stock' => 12, 'price' => 12999.99, 'category' => 'LEGO City', 'sales_count' => 80],
            ['name' => 'LEGO City - Dump Truck', 'description' => 'A LEGO City dömper, amelyet az építőipari munkákhoz használnak, és segít a nehéz terhek szállításában.', 'stock' => 30, 'price' => 7999.99, 'category' => 'LEGO City', 'sales_count' => 150],
            ['name' => 'LEGO City - Tow Truck', 'description' => 'A LEGO City vontatóautó, amely segít a lerobbant járművek eltávolításában és szállításában.', 'stock' => 18, 'price' => 8499.99, 'category' => 'LEGO City', 'sales_count' => 120],
            ['name' => 'LEGO City - Police Boat', 'description' => 'A LEGO City rendőrségi csónak, amely segíti a vízen történő bűnüldözést és a rend fenntartását.', 'stock' => 16, 'price' => 10999.99, 'category' => 'LEGO City', 'sales_count' => 110],
            ['name' => 'LEGO City - Garbage Truck', 'description' => 'A LEGO City szemetesautó, amely minden nap összegyűjti a város szemetét és tisztán tartja az utcákat.', 'stock' => 20, 'price' => 7999.99, 'category' => 'LEGO City', 'sales_count' => 130],
            ['name' => 'LEGO City - Train Station', 'description' => 'A LEGO City vasútállomás, ahol a vonatok indulnak és érkeznek, és segíti az utasok közlekedését.', 'stock' => 14, 'price' => 16999.99, 'image_url' => '/images/legobg4.jpg', 'category' => 'LEGO City', 'sales_count' => 90],
            
            ['name' => 'LEGO Technic - Lamborghini Sián', 'description' => 'A LEGO Technic Lamborghini Sián modell, amely az autó világának legújabb csúcsterméke, lenyűgöző részletekkel és működő mechanizmusokkal.', 'stock' => 8, 'price' => 34999.99, 'image_url' => '/images/legobg5.jpg', 'category' => 'LEGO Technic', 'sales_count' => 55],
            ['name' => 'LEGO Technic - 4x4 Off-Road Vehicle', 'description' => 'A LEGO Technic 4x4-es terepjáró, amely minden terepen megállja a helyét, erős felfüggesztéssel és terepalkalmazásokhoz ideális kialakítással.', 'stock' => 15, 'price' => 22999.99, 'category' => 'LEGO Technic', 'sales_count' => 90],
            ['name' => 'LEGO Technic - Porsche 911 RSR', 'description' => 'A LEGO Technic Porsche 911 RSR versenyautó, a világ egyik legnépszerűbb sportautója, részletesen kidolgozott karosszériával és motorral.', 'stock' => 10, 'price' => 24999.99, 'category' => 'LEGO Technic', 'sales_count' => 85],
            ['name' => 'LEGO Technic - Bugatti Chiron', 'description' => 'A LEGO Technic Bugatti Chiron modell, amely a világ egyik legnagyobb teljesítményű autóját örökíti meg élethű formában.', 'stock' => 6, 'price' => 47999.99, 'category' => 'LEGO Technic', 'sales_count' => 40],
            ['name' => 'LEGO Technic - Heavy Duty Excavator', 'description' => 'A LEGO Technic nehéz terep-exkavátor, amely mozgó karokkal és működő dugattyúkkal segíti a nehéz földmunkákat.', 'stock' => 12, 'price' => 14999.99, 'category' => 'LEGO Technic', 'sales_count' => 60],
            ['name' => 'LEGO Technic - Formula 1 Race Car', 'description' => 'A LEGO Technic Formula 1-es versenyautó, amely a motorsport világának legnagyobb élményét adja meg a részletes alkatrészekkel és gyors formával.', 'stock' => 18, 'price' => 19999.99, 'category' => 'LEGO Technic', 'sales_count' => 75],
            ['name' => 'LEGO Technic - Helicopter Rescue', 'description' => 'A LEGO Technic helikopter mentés modell, amely a légi mentés izgalmas világát tükrözi, mozgó rotorokkal és szállítóképességgel.', 'stock' => 20, 'price' => 16999.99, 'category' => 'LEGO Technic', 'sales_count' => 90],
            ['name' => 'LEGO Technic - Mobile Crane', 'description' => 'A LEGO Technic mobil daru, amely képes nagy súlyok emelésére és mozgatására, lenyűgöző mozgásmechanizmussal és erős konstrukcióval.', 'stock' => 14, 'price' => 21999.99, 'category' => 'LEGO Technic', 'sales_count' => 85],
            ['name' => 'LEGO Technic - Tow Truck', 'description' => 'A LEGO Technic vontatóautó, amely minden szükséges eszközt tartalmaz a járművek szállításához, erős fém alkatrészekkel és mozgó mechanizmusokkal.', 'stock' => 22, 'price' => 16999.99, 'image_url' => '/images/legobg2.jpg', 'category' => 'LEGO Technic', 'sales_count' => 100],

            ['name' => 'Millennium Falcon', 'description' => 'A legendás Millennium Falcon LEGO Star Wars modell, amely elképesztő részletességgel készült.', 'stock' => 12, 'price' => 24999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 180],
            ['name' => 'X-Wing Fighter', 'description' => 'Az X-Wing Fighter LEGO változata, amely a Jedi harcosok legfőbb fegyvere.', 'stock' => 20, 'price' => 19999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 150],
            ['name' => 'Darth Vader\'s TIE Fighter', 'description' => 'Darth Vader híres TIE Fighterének LEGO modellje, amely igazi Star Wars-rajongóknak készült.', 'stock' => 18, 'price' => 21999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 160],
            ['name' => 'Imperial Star Destroyer', 'description' => 'A hatalmas Imperial Star Destroyer LEGO modellje, a birodalom legfélelmetesebb hajója.', 'stock' => 15, 'price' => 34999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 110],
            ['name' => 'Death Star', 'description' => 'A Halálcsillag LEGO modellje, amely a galaxis legnagyobb fegyverét ábrázolja.', 'stock' => 10, 'price' => 49999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 95],
            ['name' => 'AT-AT Walker', 'description' => 'Az AT-AT Walker LEGO modellje, amely a Hoth bolygón vívott csatákat idézi fel.', 'stock' => 22, 'price' => 27999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 130],
            ['name' => 'Millennium Falcon (Light Edition)', 'description' => 'A Millennium Falcon világítós változata, amely a filmek ikonikus hajóját ragyogtatja meg.', 'stock' => 13, 'price' => 26999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 105],
            ['name' => 'Yoda\'s Jedi Starfighter', 'description' => 'Yoda Jedi Starfighterének LEGO modellje, amely a Jedi mesterek hírhedt hajóját ábrázolja.', 'stock' => 17, 'price' => 16999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 120],
            ['name' => 'Slave I (Boba Fett)', 'description' => 'Boba Fett híres hajója, a Slave I LEGO változata, amit a galaxis hírhedt fejvadásza vezet.', 'stock' => 14, 'price' => 23999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 140],
            ['name' => 'LEGO Star Wars: The Force Awakens Set', 'description' => 'A LEGO Star Wars: The Force Awakens készlet, amely tartalmazza a legfontosabb járműveket és karaktereket.', 'stock' => 11, 'price' => 31999.99, 'category' => 'LEGO Star Wars', 'sales_count' => 85],
            
            ['name' => 'Ninjago Temple of Airjitzu', 'description' => 'A Ninjago templom, amely a legendás Airjitzu technikát tanítja meg.', 'stock' => 25, 'price' => 14999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 220],
            ['name' => 'Jay’s Elemental Dragon', 'description' => 'Jay, a villámmester sárkányának LEGO változata, ami a Ninjago világában a villám erejét használja.', 'stock' => 18, 'price' => 11999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 190],
            ['name' => 'Lloyd’s Titan Mech', 'description' => 'Lloyd híres Titan Mech robotja, amely erővel és gyorsasággal küzd a gonosz ellen.', 'stock' => 22, 'price' => 20999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 240],
            ['name' => 'Kai’s Fire Dragon', 'description' => 'Kai tüzes sárkányának LEGO változata, amely a tűz erejét adja a Ninjago hőseinek.', 'stock' => 30, 'price' => 16999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 250],
            ['name' => 'Zane’s Ice Dragon', 'description' => 'Zane, a jégmester sárkánya, amely a jég és a hó erejével védelmezi a Ninjago világot.', 'stock' => 20, 'price' => 17999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 210],
            ['name' => 'Nya’s Water Dragon', 'description' => 'Nya vízi sárkányának LEGO változata, amely a víz erejét felhasználva küzd a gonosz ellen.', 'stock' => 28, 'price' => 18999.99, 'image_url' => '/images/legobg1.jpg', 'category' => 'LEGO Ninjago', 'sales_count' => 230],
            ['name' => 'Lloyd’s Ninja Mech', 'description' => 'Lloyd ninja mech-ja, amely a legnagyobb veszélyek ellen is képes harcolni a Ninjago világában.', 'stock' => 15, 'price' => 13999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 180],
            ['name' => 'The Green Ninja’s Battle Pack', 'description' => 'A Zöld Ninja harci csomagja, amely tartalmazza a legfontosabb harcosokat és járműveket a Ninjago sorozatból.', 'stock' => 35, 'price' => 12999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 275],
            ['name' => 'Master Wu’s Dragon', 'description' => 'A mester Wu híres sárkánya, amely segít megvédeni Ninjago világát a sötétség erőitől.', 'stock' => 18, 'price' => 15999.99, 'category' => 'LEGO Ninjago', 'sales_count' => 200],
            ['name' => 'Lloyd’s Golden Mech', 'description' => 'Lloyd arany mech-ja, amely egyedülálló erővel rendelkezik a Ninjago világának megmentésében.', 'stock' => 20, 'price' => 21999.99, 'image_url' => '/images/legobg1.jpg', 'category' => 'LEGO Ninjago', 'sales_count' => 160],

            ['name' => 'Heartlake City Amusement Park', 'description' => 'A Heartlake City vidámparkja, ahol a legjobb élmények várják a LEGO Friends csapatot.', 'stock' => 35, 'price' => 14999.99, 'image_url' => '/images/legobg1.jpg', 'category' => 'LEGO Friends', 'sales_count' => 300],
            ['name' => 'Emma’s Art Café', 'description' => 'Emma művészeti kávézója, amely tökéletes hely a barátok számára egy jó kávé mellett.', 'stock' => 25, 'price' => 8999.99, 'category' => 'LEGO Friends', 'sales_count' => 250],
            ['name' => 'Stephanie’s Sport SUV', 'description' => 'Stephanie sportos terepjárója, amely a LEGO Friends csapatot mindenhová elviszi.', 'stock' => 30, 'price' => 12999.99, 'category' => 'LEGO Friends', 'sales_count' => 230],
            ['name' => 'Olivia’s Treehouse', 'description' => 'Olivia egyedi fája, ahol a legjobb baráti pillanatok születnek a LEGO Friends világában.', 'stock' => 40, 'price' => 11999.99, 'category' => 'LEGO Friends', 'sales_count' => 270],
            ['name' => 'Mia’s Tree-Top Hideaway', 'description' => 'Mia fészkeként funkcionáló fa teteji menedéke, tökéletes hely egy kis pihenéshez a természetben.', 'stock' => 20, 'price' => 9999.99, 'category' => 'LEGO Friends', 'sales_count' => 210],
            ['name' => 'Andrea’s Car & Caravan', 'description' => 'Andrea autója és lakókocsija, hogy a LEGO Friends csapata bárhova eljuthasson egy szórakoztató kalandra.', 'stock' => 25, 'price' => 14999.99, 'image_url' => '/images/legobg1.jpg', 'category' => 'LEGO Friends', 'sales_count' => 180],
            ['name' => 'Friends Heartlake Hospital', 'description' => 'A Heartlake kórház, ahol mindenki a legjobb orvosi ellátásban részesül a LEGO Friends csapattól.', 'stock' => 30, 'price' => 18999.99, 'category' => 'LEGO Friends', 'sales_count' => 210],
            ['name' => 'Heartlake City Mall', 'description' => 'A LEGO Friends szívében található vásárlóközpont, ahol a legdivatosabb helyeket találják a barátok.', 'stock' => 40, 'price' => 17999.99, 'image_url' => '/images/legobg4.jpg', 'category' => 'LEGO Friends', 'sales_count' => 320],
            ['name' => 'Friends Lighthouse Rescue Centre', 'description' => 'A világítótorony mentő központja, amely segít a LEGO Friends csapatnak megmenteni a part menti élővilágot.', 'stock' => 22, 'price' => 12999.99, 'category' => 'LEGO Friends', 'sales_count' => 190],
            ['name' => 'Friends Snow Resort', 'description' => 'A LEGO Friends csapat téli üdülőhelye, ahol síelés, snowboardozás és sok más téli szórakozás várja őket.', 'stock' => 28, 'price' => 20999.99, 'category' => 'LEGO Friends', 'sales_count' => 240],

            ['name' => 'LEGO Creator 3-in-1 Pirate Ship', 'description' => 'Egy lenyűgöző kalózhajó, amely három különböző módon építhető meg, ideális kalandoroknak.', 'stock' => 30, 'price' => 17999.99, 'image_url' => '/images/legobg4.jpg', 'category' => 'LEGO Creator', 'sales_count' => 280],
            ['name' => 'LEGO Creator Expert Roller Coaster', 'description' => 'Egy hatalmas és működő hullámvasút, mely a LEGO Creator Expert sorozat legjobb darabja.', 'stock' => 25, 'price' => 24999.99, 'category' => 'LEGO Creator', 'sales_count' => 220],
            ['name' => 'LEGO Creator 3-in-1 Safari Wildlife Treehouse', 'description' => 'Egy trópusi fa házikó, amit három különböző módon építhetsz meg, rengeteg kalandot ígér.', 'stock' => 35, 'price' => 15999.99, 'category' => 'LEGO Creator', 'sales_count' => 260],
            ['name' => 'LEGO Creator Expert London Bus', 'description' => 'A híres londoni piros busz LEGO verziója, aprólékosan kidolgozott részletekkel.', 'stock' => 30, 'price' => 21999.99, 'category' => 'LEGO Creator', 'sales_count' => 230],
            ['name' => 'LEGO Creator 3-in-1 Medieval Castle', 'description' => 'Egy középkori vár, amely három különböző építési lehetőséget kínál, remek kalandokhoz.', 'stock' => 28, 'price' => 18999.99, 'image_url' => '/images/legobg4.jpg', 'category' => 'LEGO Creator', 'sales_count' => 240],
            ['name' => 'LEGO Creator Expert Roller Coaster Ride', 'description' => 'Egy működő hullámvasút, amely a LEGO Creator Expert sorozat legnagyobb kihívása.', 'stock' => 40, 'price' => 24999.99, 'category' => 'LEGO Creator', 'sales_count' => 300],
            ['name' => 'LEGO Creator 3-in-1 Deep Sea Explorer', 'description' => 'Egy mélytengeri felfedező szett, amely háromféleképpen építhető meg, egy víz alatti kalandot ígér.', 'stock' => 32, 'price' => 13999.99, 'category' => 'LEGO Creator', 'sales_count' => 200],
            ['name' => 'LEGO Creator Expert Fairground Mixer', 'description' => 'Egy forgó vidámpark, ami elképesztő részletekkel és működő funkciókkal rendelkezik.', 'stock' => 20, 'price' => 26999.99, 'category' => 'LEGO Creator', 'sales_count' => 210],
            ['name' => 'LEGO Creator 3-in-1 Sunset Beach House', 'description' => 'Egy tengerparti házikó, amit három különböző módon építhetsz meg, tökéletes pihenéshez.', 'stock' => 22, 'price' => 16999.99, 'category' => 'LEGO Creator', 'sales_count' => 190],
            ['name' => 'LEGO Creator Expert Porsche 911', 'description' => 'A híres Porsche 911 autó LEGO modellje, amit részletesen építhetsz meg, ideális autószeretőknek.', 'stock' => 18, 'price' => 29999.99, 'category' => 'LEGO Creator', 'sales_count' => 170],

            ['name' => 'LEGO Art The Beatles', 'description' => 'A híres The Beatles album borítójának LEGO változata, amely három különböző módon építhető meg.', 'stock' => 20, 'price' => 12999.99, 'category' => 'LEGO Art', 'sales_count' => 150],
            ['name' => 'LEGO Art World Map', 'description' => 'A világ térképe LEGO-ban, egyedi építési élmény, amely lehetővé teszi a térkép testreszabását.', 'stock' => 15, 'price' => 24999.99, 'category' => 'LEGO Art', 'sales_count' => 180],
            ['name' => 'LEGO Art Star Wars: The Sith', 'description' => 'A Star Wars univerzum sötét oldalának LEGO Art változata, egyedi darab a gyűjtőknek.', 'stock' => 25, 'price' => 14999.99, 'category' => 'LEGO Art', 'sales_count' => 200],
            ['name' => 'LEGO Art Harry Potter Hogwarts Crests', 'description' => 'A híres Harry Potter iskola címerének LEGO változata, egyedi falikép építési élmény.', 'stock' => 18, 'price' => 12999.99, 'image_url' => '/images/legobg2.jpg', 'category' => 'LEGO Art', 'sales_count' => 170],
            ['name' => 'LEGO Art Marvel Studios Iron Man', 'description' => 'Iron Man fejének LEGO Art változata, ideális ajándék Marvel rajongóknak.', 'stock' => 22, 'price' => 13999.99, 'category' => 'LEGO Art', 'sales_count' => 190],
            ['name' => 'LEGO Art Disney Mickey Mouse', 'description' => 'A híres Mickey Mouse karakter LEGO Art változata, egy szórakoztató és kreatív építési élmény.', 'stock' => 30, 'price' => 11999.99, 'category' => 'LEGO Art', 'sales_count' => 210],
            ['name' => 'LEGO Art The Lion King', 'description' => 'A The Lion King film klasszikus jeleneteinek LEGO Art változata, tökéletes Disney rajongóknak.', 'stock' => 20, 'price' => 13999.99, 'category' => 'LEGO Art', 'sales_count' => 160],
            ['name' => 'LEGO Art The Mandalorian', 'description' => 'A The Mandalorian sorozat egyik ikonikusan fontos jelenete LEGO Art formájában.', 'stock' => 25, 'price' => 14999.99, 'category' => 'LEGO Art', 'sales_count' => 250],
            ['name' => 'LEGO Art The Rolling Stones', 'description' => 'A legendás Rolling Stones zenekar híres logójának LEGO változata, egy különleges darab zenekedvelőknek.', 'stock' => 20, 'price' => 11999.99, 'category' => 'LEGO Art', 'sales_count' => 170],
            ['name' => 'LEGO Art Vincent van Gogh - Starry Night', 'description' => 'Vincent van Gogh híres festménye, a Csillagos Éj LEGO Art változata, egy igazi művészeti alkotás.', 'stock' => 15, 'price' => 16999.99, 'image_url' => '/images/legobg2.jpg', 'category' => 'LEGO Art', 'sales_count' => 140],

            ['name' => 'LEGO Puzzle Box', 'description' => 'Egy egyedi LEGO puzzle doboz, amely szórakoztató kihívást ad a LEGO rajongóknak.', 'stock' => 30, 'price' => 4999.99, 'category' => 'Other', 'sales_count' => 80],
            ['name' => 'LEGO Solar System Model', 'description' => 'A naprendszer modellje LEGO-ban, amely bemutatja a bolygókat és a napot.', 'stock' => 15, 'price' => 7999.99, 'category' => 'Other', 'sales_count' => 60],
            ['name' => 'LEGO Architecture Eiffel Tower', 'description' => 'A híres párizsi Eiffel-torony LEGO változata, a város egyik legismertebb építménye.', 'stock' => 25, 'price' => 14999.99, 'category' => 'Other', 'sales_count' => 120],
            ['name' => 'LEGO Space Shuttle', 'description' => 'A híres űrrepülőgép LEGO modellje, ami az űrutazás szerelmeseinek készült.', 'stock' => 18, 'price' => 10999.99, 'category' => 'Other', 'sales_count' => 100],
            ['name' => 'LEGO Dinosaur Fossils', 'description' => 'A dinoszauruszok fosszíliáinak LEGO modellje, ideális a történelem és a paleontológia iránt érdeklődők számára.', 'stock' => 20, 'price' => 6999.99, 'category' => 'Other', 'sales_count' => 85],
            ['name' => 'LEGO Robot Kit', 'description' => 'Egy LEGO robot készlet, amellyel különböző robotokat lehet építeni és programozni.', 'stock' => 22, 'price' => 13999.99, 'image_url' => '/images/legobg2.jpg', 'category' => 'Other', 'sales_count' => 150],
            ['name' => 'LEGO World Wonders', 'description' => 'A világ hét csodájának LEGO modelljei, amelyek híres építményeket ábrázolnak.', 'stock' => 10, 'price' => 9999.99, 'category' => 'Other', 'sales_count' => 50],
            ['name' => 'LEGO Medieval Castle', 'description' => 'Egy középkori kastély LEGO változata, ami ideális a történelmi és középkori témák iránt érdeklődők számára.', 'stock' => 12, 'price' => 12999.99, 'category' => 'Other', 'sales_count' => 75],
            ['name' => 'LEGO Fantasy Creatures', 'description' => 'Különféle fantasy lények LEGO modelljei, mint sárkányok és griffmadarak.', 'stock' => 17, 'price' => 7999.99, 'category' => 'Other', 'sales_count' => 90],
            ['name' => 'LEGO Historical Landmarks', 'description' => 'A világ történelmi építményeinek LEGO modellei, ideális ajándék történelemrajongóknak.', 'stock' => 25, 'price' => 8999.99, 'image_url' => '/images/legobg2.jpg', 'category' => 'Other', 'sales_count' => 120],

        ];
        

        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
