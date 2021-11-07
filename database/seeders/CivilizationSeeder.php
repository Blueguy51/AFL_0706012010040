<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CivilizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Aztecs - DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/aztecs.png',
            'civcode' => 'aztec',
            'civname' => 'Aztecs',
            'civtype' => 'Infantry and Monk',
            //'uniqueunit' => 'Jaguar Warrior',
            'uniquetechone' => 'Atlatl (Skirmishers +1 attack, +1 range)',
            'uniquetechtwo' => 'Garland Wars (+4 infantry attack)',
            'civsbonus' => 'Villagers carry +3 extra resources.',
            'teambonus' => 'Relics generate +33% gold',
            'civdescription' => '"Wage Garland Wars against your neighbors, rule a vast empire from a floating city, and defend it from the Spanish conquistadors with droves of experienced infantry. Harness the power of the gods through austere priests with a thirst for human sacrifice! Backed by a thriving economy, unstoppable hordes of Jaguar Warriors and Eagle Warriors will tear your enemies to shreds!"',
            'civinformation1' => 'The Aztecs are a Native American civilization introduced in Age of Empires II: The Conquerors. They focus on infantry and Monks.',
            'civinformation2' => 'Their unique unit is the Jaguar Warrior, the highest rank of warrior in the Aztec army, wielding a wooden club studded with obsidian sharp shards. The Jaguar Warrior is thus a heavy infantry unit which is strong against other infantry units. Their Castle Age unique technology, Atlatl, represents a tool employed by hunters and Warriors that was used for throwing spears or javelins. Their Imperial Age unique technology, Garland Wars, references the "flower wars" which the Aztecs organized among their allies in order to provide more sacrifices. The Aztecs were also known as a hard working and innovative civilization, and their Villagers carry more resources (and got the Loom technology free before The Forgotten). Being a highly military civilization, the Aztecs also have a general creation speed bonus across the board for all their military units. They were famous for their bloody and ardent faith, with their Relics generating extra gold and their Monks receiving extra HP per each Monastery technology researched, allowing their Monks to join other soldiers on the battlefield. The Aztecs did not have horses or gunpowder. Thus, they completely lack Stables (and with it the entire cavalry branch) and cannons. Also, they start random map games with an Eagle Scout (an Eagle Warrior in The Conquerors) as a scouting unit instead of a Scout Cavalry.',
            'civoverview' => 'The Aztecs are a Native American civilization. As such, they lack any access to cavalry, including Cavalry Archers, by default, but since the Definitive Edition they can produce Xolotl Warriors from converted Stables. The Aztecs possess some of the strongest infantry, despite lacking Halberdiers. Their archers are below average without Thumb Ring and Ring Archer Armor, but their Skirmishers are still very strong with Atlatl. The Aztecs are strong in the siege weapon department with Siege Rams, Siege Onagers, and Siege Engineers. Their navy is weak, lacking almost everything apart from the fully upgradable Fast Fire Ship. But their Monks are the best in the game with access to all religious technologies and an extra 5 HP for every one researched. Their defenses are below average. The Aztec economy is one of the strongest in the game, due to their villagers carrying +3 resources.',

            'strategies' => 'Aztecs have a very effective five-Militia Dark Age rush (drush) as they begin with +50 gold, and military units create faster. A standard drush consists of three Militia, so Aztecs get a large advantage here, especially when the opponent is also drushing. In a 1v1, Aztec players should almost always drush, as it is one of their key advantages and makes up for potential struggling later on.
            Aztecs have a powerful economic advantage because of their Villager carrying bonus, and if the player chooses not to drush, this combined with the extra gold can make a large economic difference. This helps make up for the fact that Aztecs lack Scouts in the Feudal Age. In the Castle and Imperial Ages, an Aztec player must use Monks, Eagle Warriors, Jaguar Warriors, and Champions as needed. Monks can deter Cavalry charges with proper support, Eagle Warriors are great against archers and for raiding, and Jaguar Warriors can easily defeat other Infantry, especially Champions who have a bonus against Eagle Warriors. The player must mix Siege Onagers and Siege Rams in their army for better results.
            Once in the Imperial Age, an Aztec player must focus on gold production (relics are good because of the Aztec team bonus) and mass-produce large numbers of Garland Wars-boosted Elite Eagle Warriors for raiding. If the opponent is using lots of heavy Cavalry, the player must make Monks to convert them, as Cavalry can quickly overrun Eagle Warriors. The main strength of Eagles is their speed and resistance to arrow fire, allowing them to run under Castles and Town Centers with impunity. It is important to not let the game drag on too long, as there is very little Aztecs can do in the Post-Imperial Age.
            Aztecs should try to keep their feet dry where possible, as they have indisputably the worst Navy in the game. Lacking Galleons, Cannon Galleons, and Demolition Ships, their only hope is to take over the water before the foe can get the Galleon upgrade. On primarily sea-based maps, it is vitally important to control the water from early game, since War Galleys stand no chance going up against an army of Galleons. Fire Ships are good for taking the water and holding it, since Aztecs fortunately get Fast Fire Ships and all the relevant technologies.
            If the player is forced to go defensive as Aztecs, they must use Monks and siege and build walls. Lacking Masonry, Architecture, and Hoardings, their Castles go down extremely fast and should never be relied on for defense.
            The Aztecs\' main foe would be civilizations that utilize heavy cavalry and gunpowder units to a great extent, like the Spanish or the Persians with Hand Cannoneers and Paladins doing formidable damage against the Aztecs\' infantry (in addition to the lack of Halberdiers to deal with strong Paladins, although the Aztecs can easily punish the Persians due to them lacking Heresy). The Aztecs, like many Native American civilizations, will struggle against the Byzantine Cataphracts due to the anti-infantry nature of the units in addition to their cheaper Skirmishers and stronger archery line should the Aztecs try to counter the Cataphracts with archers. Aztecs will however find it easier to play against archer civilizations and other infantry civilizations, like Goths.'
        ]);

        //Berbers - DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/berbers.png',
            'civcode' => 'berber',
            'civname' => 'Berbers',
            'civtype' => 'Cavalry and Naval',
            //'uniqueunit' => 'Camel Archer ,Genitour',
            'uniquetechone' => 'Kasbah (Team castles work +25% faster.)',
            'uniquetechtwo' => 'Maghrebi Camels (camel troops regenerate.)',
            'civsbonus' => 'Villagers move +10% faster',
            'teambonus' => 'Genitour are avaliable at the Archery Range in Castle Age',
            'civdescription' => 'The arid desert breeds tough men, horses, and camels alike. Unite the tribes of Northern Africa, prepare your naval vessels to escape 
            the scorching heat of the Maghreb, and set sail to war-torn Iberia to conquer new riches. Are your powerful cavalry, camelry, and Camel Archers enough 
            to defend your Kasbahs against the scrambled kingdoms of Iberia that are slowly uniting against you?',

            'civinformation1' => 'The Berbers are a Middle Eastern civilization featured in Age of Empires II HD: The African Kingdoms.They focus on navy and cavalry.',

            'civinformation2' => 'Berber (Imazighen) states have existed in North Africa since antiquity, existing alongside Romans, Vandals, and Egyptians in the region; 
            the Berbers were also early converts to Islam, and quickly became one of the most prominent ethnicities in the Early Islamic world, alongside Arabs and Persians. 
            In 711 AD, a Muslim force mainly composed of Muladis and Berbers (called Moors by the Christians) that was led by a small group of Arabs (called Saracens) 
            invaded Spain and established a kingdom that would endure for centuries and make lasting contributions to art, science, and philosophy. 
            They were dreaded in war because of their fast horses and skilled guerrilla warriors. These facts are reflected in the game in their unique units, both of which 
            are powerful counter units, the Camel Archer and the Genitour, two cavalry units that historically used to be very effective against European armies.
            Much of their strength was represented in the fact that once they built a base they realized systems of communication in order to connect the camps to each other 
            and respond quickly to the attacks of the enemies. To reflect that, their first unique technology, Kasbah, makes their Castles and the allies\' ones produce units
            and research technologies at a faster rate. Because of moving constantly in the desert, their soldiers were used to fight effectively in hostile conditions or as nomads. 
            While Europeans\' cavalry could not survive long there, their troops were deadly ambushers able to hit hard and quick. This is why their second unique technology, 
            Maghrabi Camels, gives their camel units a regeneration ability; also, their Villagers move faster. After the Muslim conquest, the Berber tribes of coastal North Africa 
            became almost fully Islamized. To reflect Islamic influence against Berber tribes, the Berbers is the only African civilization to use the Middle Eastern architecture 
            instead of African. Finally, Berber sailors had a fearsome reputation as corsairs and slavers as their pirate galleys plundered the coasts and seas of Christian Europe for centuries,
            easily evading the slow European warships and even raiding as far as Iceland and the British Isles. As a result, their ships are faster.',

            'civoverview' => 'The Berbers are primarily a cavalry civilization, and have very strong and cost-effective cavalry units and an almost full tech tree in the cavalry department, 
            only lacking the Paladin. Their infantry is also good with only the Halberdier missing. Their archers are overall subpar as they lack Arbalesters and Parthian Tactics. 
            Especially the latter is unfortunate as it hinders their unique unit. The siege weapons are average without Siege Rams and Siege Onagers. The navy is another selling point for 
            the Berbers with faster ships and a full tech tree, apart from Shipwright. Their Monks are average, and their defenses rather weak. Their economy, however, is strong with all 
            technologies apart from Two-Man Saw at their disposal, and a great civilization bonus which grants their Villagers +10% movement speed. Overall, the Berbers are mobility-oriented, 
            as they focus on cavalry and accelerated units.',

            'strategies' => 'The Berbers are a versatile civilization in many strategies and on all kinds of maps and are able to boom and rush effectively. Early in the game, their villager 
            speed bonus gives them a small economic edge as they can save time when retrieving resources or when moving between resources. It also gives them an edge at farming as villagers 
            walk around the farm. This bonus also helps heavily when performing a Feudal Age or Tower rush as the Villagers will reach the enemy towns earlier in order to create forward 
            military structures like the Barracks or Watch Towers.Their Villager bonus also helps defensively, as they have a better chance to escape from enemy military units or catch enemy 
            villagers that are trying to create forward towers and military buildings in the player\'s base. The first unique unit of the Berbers is the Genitour, which is built at the Archery Range. 
            The Genitour is a mounted Skirmisher with slightly less range, but more health, speed, and attack. Just like the skirmisher, it only costs food and wood. Since the Genitour is mounted, 
            it receives +20 hit points from Bloodlines, giving it a considerably larger health pool than its cousin, the Elite Skirmisher. Genitours are well suited for hit-and-run tactics as they are cheap, 
            fast and have ranged attack, but perform less effectively in equal numbers than regular Cavalry Archers as they have the same basic weaknesses of a skirmisher (minimum range and lower accuracy 
            than the bow units) so is advisable to mix them with camel archers and/ or regular cavalry archers for this purpose, pairing them with camels also work well as camels can protect Genitours from 
            melee cavalry (who can catch them and exploit their minimum range weakness). The Camel Archer is the unique unit of the Berbers from the Castle and is a Cavalry Archer that has a bonus against 
            other Cavalry Archers. This includes the War Wagon, the Elephant Archer and the Mangudai, making it a formidable counter unit. Its stats compare well to the standard Cavalry Archer, meaning it 
            can be fielded more readily without knowing what an opponent is making. At the same time, it is an excellent harassment unit, and can be used for raids like any other Cavalry Archer.
            With a Heavy Camel/Camel Archer combo they arguably can counter the typical Hussar/Cavalry Archer tactic employed by civilizations such as the Turks, Mongols, Huns, and Magyars. This combination,
            however, performs less effectively in a regular raid than those civilizations. Their two unique technologies benefit the Heavy Camel/Camel Archer combo, as Kasbah will improve the Camel Archer 
            creation speed while Maghrabi Camels will give both units slight health regeneration, thus prolonging the lifespan of the Berbers\' camelry. Kasbah also enables to the Berbers to create Petards 
            and Trebuchets faster, enabling the petard-spamming tactic and making Castle drops more effective. On water maps, the Berbers have an advantage early-game but may struggle a little in the late game. 
            Proper scouting and prevention of other civilizations\' naval buildups are crucial in early to mid-game to maximize the Berbers\' naval presence and protect their excellent naval economy. 
            Since the Ship speed bonus applies to all naval units, fishing ships and trade cogs will move more quickly between resources and the Berbers enjoy having a tactical speed advantage over opposing navies. 
            Hit-and-run tactics work particularly well. As an added bonus, their transport ships will reach the land faster to unload troops.'
        ]);

        //Bohemians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/bohemians.png',
            'civcode' => 'bohemian',
            'civname' => 'Bohemians',
            'civtype' => 'Monk and Gunpowder',
            //'uniqueunit' => 'Hussite Wagon' + 'Houfnice',
            'uniquetechone' => 'Wagenburg Tactics (Gunpowder Units move 15% faster.)',
            'uniquetechtwo' => 'Hussite Reforms (Monk and Monastery upgrades have their gold cost replaced by food.)',
            'civsbonus' => 'Mining upgrades free.',
            'teambonus' => 'Markets work 80% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Britons
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/britons.png',
            'civcode' => 'briton',
            'civname' => 'Britons',
            'civtype' => 'Foot Archer',
            //'uniqueunit' => 'Longbowman',
            'uniquetechone' => 'Yeomen (+1 range for foot archers and +2 attack for towers)',
            'uniquetechtwo' => 'Warwolf (Trebuchets deal blast damage.)',
            'civsbonus' => 'Shepherd works 15% faster.',
            'teambonus' => 'Archery Ranges work 20% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Bulgarians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/bulgarians.png',
            'civcode' => 'bulgarian',
            'civname' => 'Bulgarians',
            'civtype' => 'Infantry and Cavalry',
            //'uniqueunit' => 'Konnik',
            'uniquetechone' => 'Stirrups (Cavalry units attack 33% faster.)',
            'uniquetechtwo' => 'Bagains (Militia line +5 melee armor.)',
            'civsbonus' => 'Militia-line upgrades free.',
            'teambonus' => 'Blacksmiths work 80% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Burgundians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/burgundians.png',
            'civcode' => 'burgundian',
            'civname' => 'Burgundians',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'Coustiller' + 'Flemish Militia',
            'uniquetechone' => 'Burgundian Vineyards (Farmers slowly generate gold in addition to food at a rate of 0.017 gold per second or 1 gold per farmer per minute.)',
            'uniquetechtwo' => 'Flemmish Revolution (Upgrade existing villager to Flemish Militia, enables the creation of Flemish Militia at Town Center.)',
            'civsbonus' => 'Economic Upgrades avaliable one age earlier and cost -50% food.',
            'teambonus' => 'Relics generate both Gold and Food.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Burmese
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/burmese.png',
            'civcode' => 'burmese',
            'civname' => 'Burmese',
            'civtype' => 'Monks and Elephants',
            //'uniqueunit' => 'Arambai',
            'uniquetechone' => 'Howdah (Battle Elephants +1/+2 armor.)',
            'uniquetechtwo' => 'Manipur Cavalry (Cavalry and Arambai +6 attack against standard buildings.)',
            'civsbonus' => 'Lumber Camp technologies are free.',
            'teambonus' => 'Relics are visible on the map from the beginning of game.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Byzantines
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/byzantines.png',
            'civcode' => 'byzantine',
            'civname' => 'Byzantines',
            'civtype' => 'Defensive',
            //'uniqueunit' => 'Cataphract',
            'uniquetechone' => 'Greek Fire (Fire Ships +1 range.)',
            'uniquetechtwo' => 'Logistica (Cataphracts deal trample damage and +6 attack against infantry)',
            'civsbonus' => 'Buildings have +10%/+20%/+30%/+40% HP in the Dark/Feudal/Castle/Imperial Age.',
            'teambonus' => 'Monks heal 50% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Celts
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/celts.png',
            'civcode' => 'celtic',
            'civname' => 'Celts',
            'civtype' => 'Infantry and Siege',
            //'uniqueunit' => 'Woad Raider',
            'uniquetechone' => 'Stronghold (Castles and towers fire 25% faster)',
            'uniquetechtwo' => 'Furor Celtica (Siege Workshop units have +40% HP)',
            'civsbonus' => 'Infantry units move 15% faster starting in the Feudal Age.',
            'teambonus' => 'Siege Workshops work 20% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Chinese
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/chinese.png',
            'civcode' => 'chinese',
            'civname' => 'Chinese',
            'civtype' => 'Archer',
            //'uniqueunit' => 'Chu Ko Nu',
            'uniquetechone' => 'Great Wall (Walls and towers +30% HP)',
            'uniquetechtwo' => 'Rocketry (Chu Ko Nu +2, Scorpions +4 attack)',
            'civsbonus' => 'Start game with three extra Villagers, but with -200 food and -50 wood.',
            'teambonus' => 'Farms start with +10% food.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Cumans
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/cumans.png',
            'civcode' => 'cuman',
            'civname' => 'Cumans',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'Kipchak',
            'uniquetechone' => 'Steppe Husbandry (Scout Cavalry line, Steppe Lancers and Cavalry Archers are trained 50% faster)',
            'uniquetechtwo' => 'Cuman Mercenaries (team members can create 10 free Elite Kipchaks at the Castle)',
            'civsbonus' => 'A second Town Center can be built in the Feudal Age.',
            'teambonus' => 'Palisade Walls have +33% hit points.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Ethiopians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/ethiopians.png',
            'civcode' => 'ethiopian',
            'civname' => 'Ethiopians',
            'civtype' => 'Archers and Siege',
            //'uniqueunit' => 'Shotel Warrior',
            'uniquetechone' => 'Royal Heirs (Halves Shotel Warrior training time)',
            'uniquetechtwo' => 'Torsion Engines (Siege Workshop units have blast radius increased)',
            'civsbonus' => 'Archers fire +18% faster.',
            'teambonus' => ' Towers and Outposts have +3 Line of Sight.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Franks
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/franks.png',
            'civcode' => 'frank',
            'civname' => 'Franks',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'Throwing Axeman',
            'uniquetechone' => 'Bearded Axe (Throwing Axeman +1 range)',
            'uniquetechtwo' => 'Chivalry (Stables work 40% faster)',
            'civsbonus' => 'Farm upgrades are free.',
            'teambonus' => 'Knights +2 Line of Sight.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Goths
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/goths.png',
            'civcode' => 'gothic',
            'civname' => 'Goths',
            'civtype' => 'Infantry',
            //'uniqueunit' => 'Huskarls',
            'uniquetechone' => 'Anarchy (Huskarls can be created at Barracks)',
            'uniquetechtwo' => 'Perfusion (Barracks work 100% faster)',
            'civsbonus' => 'Infantry are 20%/25%/30%/35% cheaper in the Dark/Feudal/Castle/Imperial Age.',
            'teambonus' => 'Barracks work 20% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Huns
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/huns.png',
            'civcode' => 'hun',
            'civname' => 'Huns',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'Tarkan',
            'uniquetechone' => 'Marauders (create Tarkans at Stables)',
            'uniquetechtwo' => 'Atheism (+100 years for Relic/Wonder victories; enemy Relic gold generation reduced by 50%)',
            'civsbonus' => 'Start the game with -100 wood, but with the population cap at the maximum.',
            'teambonus' => 'Stables work 20% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Incas
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/incas.png',
            'civcode' => 'inca',
            'civname' => 'Incas',
            'civtype' => 'Infantry',
            //'uniqueunit' => 'Kamayuk' + 'Slinger',
            'uniquetechone' => 'Andean Sling (Slingers and Skirmisher have no minimum range)',
            'uniquetechtwo' => 'Fabric Shields (Kamayuks, Slingers, and Eagle Warriors +1/+2 armor)',
            'civsbonus' => 'Start with a free Llama.',
            'teambonus' => 'Farms are built 100% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Indians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/indians.png',
            'civcode' => 'indian',
            'civname' => 'Indians',
            'civtype' => 'Camel and Gunpowder',
            //'uniqueunit' => 'Elephant Archer' + 'Imperial Camel Rider',
            'uniquetechone' => 'Sultans (All gold production +10% faster)',
            'uniquetechtwo' => 'Shatagni (Hand Cannoneers +1 range)',
            'civsbonus' => 'Fishermen work 10% faster.',
            'teambonus' => 'Camel units have +4 attack against standard buildings.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Italians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/italians.png',
            'civcode' => 'italian',
            'civname' => 'Italians',
            'civtype' => 'Naval and Archer',
            //'uniqueunit' => 'Genoese Crossbowman' + 'Condottiero',
            'uniquetechone' => 'Pavise (foot archers (except Skirmishers) and Condottieri +1/+1 armor)',
            'uniquetechtwo' => 'Silk Road (trade units cost -50%)',
            'civsbonus' => 'Advancing to the next Age is 15% cheaper.',
            'teambonus' => ' Condottieri are available at the Barracks in Imperial Age.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Japanese
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/japanese.png',
            'civcode' => 'japanese',
            'civname' => 'Japanese',
            'civtype' => 'Infantry',
            //'uniqueunit' => 'Samurai',
            'uniquetechone' => 'Yasama (towers fire extra arrows)',
            'uniquetechtwo' => 'Kataparuto (Trebuchets fire and pack faster)',
            'civsbonus' => 'Fishing Ships have double HP, +2 pierce armor, and work 5%/10%/15%/20% faster in the Dark/Feudal/Castle/Imperial Age.',
            'teambonus' => 'Galleys have a +50% longer Line of Sight.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Khmer
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/khmer.png',
            'civcode' => 'khmer',
            'civname' => 'Khmer',
            'civtype' => 'Elephants and Siege',
            //'uniqueunit' => 'Ballista Elephant',
            'uniquetechone' => 'Tusk Swords (Battle Elephants +3 attack)',
            'uniquetechtwo' => 'Double Crossbow (Ballista Elephants and Scorpions shoot two projectiles)',
            'civsbonus' => 'No buildings are required to construct certain buildings or advance in Age.',
            'teambonus' => 'Scorpions have +1 range.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Koreans
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/koreans.png',
            'civcode' => 'korean',
            'civname' => 'Koreans',
            'civtype' => 'Defensive and Naval',
            //'uniqueunit' => 'War Wagon' + 'Turtle Ship',
            'uniquetechone' => 'Eupseong (Watch Towers, Guard Towers, and Keeps +2 range)',
            'uniquetechtwo' => 'Shinkichon (+1 range for Mangonels)',
            'civsbonus' => 'Villagers have +3 Line of Sight.',
            'teambonus' => 'Mangonel line minimum range reduced to 1.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Lithuanians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/lithuanians.png',
            'civcode' => 'lithuanian',
            'civname' => 'Lithuanias',
            'civtype' => 'Cavalry and Monks',
            //'uniqueunit' => 'Leitis' + 'Winged Hussar',
            'uniquetechone' => 'Hill Forts (Town Centers +3 range)',
            'uniquetechtwo' => 'Tower Shields (Spearman line and Skirmishers +2 pierce armor)',
            'civsbonus' => 'Start with +150 food.',
            'teambonus' => 'Monastery works 20% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Magyars
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/magyars.png',
            'civcode' => 'magyar',
            'civname' => 'Magyars',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'Magyar Huszar',
            'uniquetechone' => 'Corvinian Army (Magyar Huszars cost no gold)',
            'uniquetechtwo' => 'Recurve Bow (Cavalry Archers + 1 range and attack)',
            'civsbonus' => 'Forging, Iron Casting, and Blast Furnace are free.',
            'teambonus' => 'Foot archers (except Skirmishers) have +2 Line of Sight.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Malay
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/malay.png',
            'civcode' => 'malay',
            'civname' => 'Malay',
            'civtype' => 'Naval',
            //'uniqueunit' => 'Karambit Warrior',
            'uniquetechone' => 'Thalassocracy (upgrades Docks to Harbors, which shoot arrows)',
            'uniquetechtwo' => 'Forced Levy (Turns Militia line gold cost to food cost)',
            'civsbonus' => 'Advancing in Age is 66% faster.',
            'teambonus' => 'Docks have double Line of Sight.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Malians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/malians.png',
            'civcode' => 'malian',
            'civname' => 'Malians',
            'civtype' => 'Infantry',
            //'uniqueunit' => 'Gbeto',
            'uniquetechone' => 'Tigui (Town Centers fire arrows even without garrison)',
            'uniquetechtwo' => 'Farimba (Stable units +5 attack)',
            'civsbonus' => 'Buildings cost -15% wood (except Farms and Fish Traps).',
            'teambonus' => 'Universities work +80% faster.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Mayans
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/mayans.png',
            'civcode' => 'mayan',
            'civname' => 'Mayans',
            'civtype' => 'Archer',
            //'uniqueunit' => 'Plumed Archer',
            'uniquetechone' => 'Hul che Javelineers (Improves Skirmishers by making them throw a second projectile)',
            'uniquetechtwo' => 'El Dorado (+40 hit points for Eagle Warriors)',
            'civsbonus' => 'Start the game with +1 Villager, but with -50 food.',
            'teambonus' => 'Walls are 50% cheaper.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Mongols
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/mongols.png',
            'civcode' => 'mongol',
            'civname' => 'Mongols',
            'civtype' => 'Cavalry Archer',
            //'uniqueunit' => 'Mangudai',
            'uniquetechone' => 'Nomads (Houses retain population when destroyed)',
            'uniquetechtwo' => 'Drill (Siege Workshop units move +50% faster)',
            'civsbonus' => 'Cavalry archers fire 25% faster.',
            'teambonus' => 'Scout Cavalry, Light Cavalry. Hussar have +2 Line of Sight.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Persians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/persians.png',
            'civcode' => 'persian',
            'civname' => 'Persians',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'War Elephant',
            'uniquetechone' => 'Kamandaran (turns Archer gold cost into wood cost)',
            'uniquetechtwo' => 'Mahouts (War Elephants move +30% faster)',
            'civsbonus' => 'Start game with +50 food and +50 wood.',
            'teambonus' => 'Knights have +2 attack against archers.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Poles
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/poles.png',
            'civcode' => 'polish',
            'civname' => 'Poles',
            'civtype' => 'Cavalry',
            //'uniqueunit' => 'Obuch' + 'Winged Hussar',
            'uniquetechone' => 'Szlachta Privileges (Knight line costs -60% gold)',
            'uniquetechtwo' => 'Lechitic Legacy (Scout Cavalry line deals trample damage)',
            'civsbonus' => 'Villagers regenerate 5/10/15/20 HP per minute in Dark/Feudal/Castle/Imperial Age.',
            'teambonus' => 'The Scout Cavalry line has +1 attack vs. archers',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Portuguese
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/portuguese.png',
            'civcode' => 'portuguese',
            'civname' => 'Portuguese',
            'civtype' => 'Naval and Gunpowder',
            //'uniqueunit' => 'Organ Gun' + 'Caravel',
            'uniquetechone' => 'Carrack (ships +1/+1 armor)',
            'uniquetechtwo' => 'Arquebus (gunpowder units fire more accurately at moving targets)',
            'civsbonus' => 'All units cost -20% gold.',
            'teambonus' => 'The Line of Sight is shared with the team from the beginning of the game.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Saracens
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/saracens.png',
            'civcode' => 'saracen',
            'civname' => 'Saracens',
            'civtype' => 'Cavalry and Naval',
            //'uniqueunit' => 'Mameluke',
            'uniquetechone' => 'Madrasah (33% of a Monk\'s gold cost are returned if the Monk gets killed)',
            'uniquetechtwo' => 'Zealotry (Camel Riders and Mamelukes +20 hit points)',
            'civsbonus' => 'The commodity trading fee is 5%.',
            'teambonus' => 'Foot archers have +3 attack against standard buildings.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Sicilians
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/sicilians.png',
            'civcode' => 'sicilian',
            'civname' => 'Sicilians',
            'civtype' => 'Infantry',
            //'uniqueunit' => 'Serjeant',
            'uniquetechone' => 'First Crusade (Upon researching, each Town Center (up to a max of 5) spawns a one-time group of 7 Serjeants; units are more resistant to conversion)',
            'uniquetechtwo' => 'Hauberk (Knight-line units are granted +1 melee armor and +2 pierce armor)',
            'civsbonus' => 'Start with +100 additional stone.',
            'teambonus' => 'Transport Ships +5 LOS, cost -50%.',
            'civdescription' => '',
            'civinformation1' => '',
            'civinformation2' => '',
            'civoverview' => '',
            'strategies' => ''
        ]);

        //Slavs -- DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/slavs.png',
            'civcode' => 'slavic',
            'civname' => 'Slavs',
            'civtype' => 'Infantry and Siege',
            //'uniqueunit' => 'Boyar',
            'uniquetechone' => 'Orthodoxy (+3/+3 armor for Monks)',
            'uniquetechtwo' => 'Druzhina (infantry damage adjacent units)',
            'civsbonus' => 'Farmers work 10% faster.',
            'teambonus' => 'Military buildings (excluding Castles and Docks) provide +5 population.',
            'civdescription' => 'While new kingdoms formed from the ruins of the Roman Empire in Western Europe, Slavic tribes settled the rich lands of Central and Eastern Europe and established formidable states of their own. Illuminate your populations with the teachings of Orthodoxy, recreate the rich farming and trade economies of Poland and Kievan Rus, assemble retinues of Boyars and Druzhina to defend the Russian principalities from the Mongols, or lead a charge of Winged Hussars to save Europe from Ottoman conquest!',
            'civinformation1' => 'The Slavs are an Eastern European civilization introduced in Age of Empires II HD: The Forgotten. They focus on infantry and siege weapons.',
            'civinformation2' => 'The Slavs represent their namesake based on the Eastern European peoples that later became the founders of Slavic European nations with a sphere of influence consisting of modern day Bulgaria, Poland, Russia, and Ukraine. By the time frame of Ages of Empires II, the Slavic tribes had already split into the Western, Eastern, and Southern branches.
            The Slavic civilization is mostly representative of the Eastern Slavic identity of the Kievan Rus\', whose semi-autonomous principalities and city-states covered much of modern-day Ukraine, Belarus, and Western Russia. Politics of the time were dominated by Boyar aristocracy, which was adapted into the Slavs\' unique heavy cavalry unit.
            Educated and influenced by the Byzantine Greeks as a result of its close proximity, they adopted the Eastern Orthodox branch of Christianity as their religion, and to depict this, their unique technology gives Monks extra armor. Slavic armies are mainly composed of infantry, and to depict this, their other unique technology gives infantry trample damage, making them powerful in groups and against clusters of units, and they also receive Supplies (Tracking before the Definitive Edition) for free.
            Slavic lands in modern-day Ukraine were especially fertile and productive, later to be known as the Breadbasket of Europe, thus Slav Farmers receive a bonus. The Slavs have cheaper siege weapons and their team bonus provides +5 population to all military buildings, providing them a logistical military advantage in a similar fashion to the Byzantines, albeit in a more offensive way.',
            'civoverview' => 'As an infantry civilization, the Slavs have access to the full infantry technology tree and also get Druzhina, making their infantry units highly useful in mass battles. Their cavalry is also good despite missing out on the Paladin upgrade. The archers, however, are among the worst of all civilizations. This is compensated to a degree by their excellent Siege Workshop units that get a 15% discount. Especially the Heavy Scorpion can fulfill the archers\' role for the Slavs. Their navy is weak, although they can fully upgrade their Fire Ships. The Slavic Monks are excellent offensively with every upgrade there plus Orthodoxy which grants them extra armor, making them fearsome in Monk rushes. They lack Heresy and Faith and thus are vulnerable to conversion (Note: Faith was added in the Definitive Edition). Their defensive structures are below average but their faster farming is considered one of the strongest economic bonuses in the game.',
            'strategies' => 'The Slavs perform various strategies effectively, thanks to their 10% faster farmers and wood saved from building fewer houses.
            The Slavic Feudal Rush (flush) is above average, due to free Tracking (in the HD Edition)/Supplies (in the Definitive Edition) and Barracks that raise population capacity by five. Clicking up to Feudal Age on twenty-two population (typically with twenty-one villagers) and building two Barracks is recommended, and finishing an opponent quickly will help to off-set the Slavs weak late-game defenses. Depending on how starting resources are positioned, a Slav player may be able to skip building a Mill and 4 houses and build a Barracks and a house with the initial wood instead in the Dark Age.
            Strategies in the Castle Age become significantly more diverse due to a discount on Siege Workshop units and the Orthodoxy technology. Monks, Mangonels, and Rams are strong additions to any infantry-heavy army, as Monks can heal wounded infantry and Mangonels/Rams are fantastic anti-archer tools. If a Slav player has invested heavily in infantry, it is recommended to research Long Swordsman and any infantry-relevant Blacksmith technologies, starting with the armor upgrades.
            The Slavs perform Castle drops and Castle Age rushes with some proficiency, as their Unique Unit is incredibly strong. If the enemy player is fielding infantry or cavalry, the Boyar is an excellent choice because of its stellar melee defenses. Slav players can produce limited numbers of Boyars with effective results, and employ infantry and siege as the main army composition. Boyars perform well as a heavy cavalry substitute, and may catch opponents who are expecting infantry off-guard.
            In the early-to-mid-Imperial Age, the strategy is determined by what tactic was chosen in the Castle Age. A typical strategy is to prioritize upgrading Rams to Siege Rams, followed by infantry upgrades and additional siege techs. If the player went for a cavalry-heavy strategy in the Castle Age, Light Cavalry can be upgraded into Hussars for effective economy raiding. The Slavs also have an attractive offensive Monk tech tree that can be utilized, and it is recommended to research Block Printing and Sanctity.
            Slavic infantry becomes top-tier in late Imperial Age with the Druzhina unique technology, which allows the Militia and Spearman line to deal trample damage. This means that fewer infantry are required to overcome a larger enemy army, especially when the enemy is bunched up or in a choke point.
            The Slavic navy is average, missing the Shipwright, Heavy Demolition Ship and Elite Cannon Galleon upgrades. With this in mind, the Slavs should keep their feet dry unless water control is crucial, since their resources are far better spent on troops and siege.'
        ]);

        //Spanish -- DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/spanish.png',
            'civcode' => 'spanish',
            'civname' => 'Spanish',
            'civtype' => 'Monks and Gunpowder',
            //'uniqueunit' => 'Conquistador' + 'Missionary',
            'uniquetechone' => 'Inquisition (conversion rate improved)',
            'uniquetechtwo' => 'Supremacy (increased attack, armor, and HP for Villagers)',
            'civsbonus' => 'Builders work 30% faster (20% for Wonders).',
            'teambonus' => 'Trade units generate +25% gold.',
            'civdescription' => 'After the Berbers demolished the Visigoth kingdom of Iberia, the last remnants of resistance took up arms in the mountains of Asturias and strove to slowly turn the tide. Launch the Reconquista, lead deadly galleons of Conquistadors overseas to explore and conquer unknown lands, and experience the horrors of the Spanish Inquisition. From the tyranny of Pedro the Cruel to the heroism and tolerance of El Cid, the path to follow is yours to choose.',
            'civinformation1' => 'The Spanish are a Southern European civilization introduced in Age of Empires II: The Conquerors. They are the descendants of the Celtiberians, the Romans, and the Visigoths, and are closely related to the Portuguese, who likewise base their homeland in Iberia. The Spanish focus on gunpowder units and Monks.',
            'civinformation2' => 'The Spanish were best known for exploring much of the world across the Atlantic and for being among the first Europeans to establish colonies along the Caribbean and the Americas. That fact is reflected in their fast working builders. They were also known for defeating powerful Amerindian empires of the New World and introducing Christianity to the region as a result of their powerful navy and superior weaponry. To reflect this achievement, Spanish gunpowder units fire faster and their Cannon Galleons fire more accurately with a Ballistics-like effect and also, their cannonballs travel faster. Their superior weaponry and metallurgy is represented by the fact that their Blacksmith technologies require no gold to be researched. In addition, they can train more than one unique unit, namely the Conquistador and the Missionary which are both mounted units.
            To reflect their widespread religious activity in the Americas, Inquisition allows their Monks and Missionaries to convert faster. As another result of their overseas conquest and their successful search for riches, the Spanish team bonus increases productivity of all allied trade units.',
            'civoverview' => 'The Spanish are classified as a gunpowder and Monk civilization. They excel at these two particular areas, getting all possible upgrades there bar Siege Engineers as well as specific bonuses and technologies, but the Spanish are far from being limited to their areas of expertise. Their infantry and cavalry units are great and do not miss out on a single feature. The Paladin deserves a special mention here as very few civilizations can utilize them. Their archers rank below average, though. The Spanish navy is simply excellent; their technology tree there is perfect (a feature that is only shared with the Byzantines) and their Cannon Galleons can effectively be used in naval battles and are not limited to razing buildings thanks to the faster and more accurate cannonballs. The siege weapons are overall average, but the faster attacking Bombard Cannons make a notable difference. The defensive structures are also strong for the Spanish, which leaves their economy to be the shallow part in their tree. Overall, the Spanish have a very complete technology tree that enables them to pick from a wide variety of viable strategies.',
            'strategies' => 'The Spanish can be used in several ways. They can be used for turtling and rushing strategies, but they are mainly considered a Boom civilization due to the fact that most of their bonuses are Castle and Imperial Age bonuses. Normally a Spanish player should try to go for a Fast Castle, but alternatively they can try a Feudal Age rush by taking advantage of their bonus that allows villagers to build 30% faster and scout rush or a tower rush. The building bonus can also be used in order to wall off and turtle early in the game.
            Typically, Spanish should go for a Fast Castle and boom their economy. Once in the Castle Age, a Spanish player must create some Monasteries and one or two Castles. Conquistadors as a gunpowder unit are formidable against infantry and Missionaries excel in supporting mounted units so a combined force of heavy cavalry, Conquistadors and a few Missionaries must be the main offensive force. The player must not forget the Spanish Blacksmith bonus, which removes the gold cost from all Blacksmith technologies, allowing the player to research all of these technologies at a bargain price of only food.
            The Imperial Age is when The Spanish really start to show their strengths. The Spanish are one of the few civilizations that have full gunpowder improvements, so at this point the formidable Hand Cannoneers and Bombard Cannons can be trained. Conquistadors must remain the main mounted unit along with the Paladin during the Imperial Age; the player must upgrade these as soon as possible.
            Researching Supremacy in the Imperial Age allows the Spanish to improve their town defense by boosting all the Villager attack and defensive stats, but also in many cases the player can abuse their villagers for frontline support and create forward Castles, towers and other military buildings just for their defensive stats and building speed. Spanish Villagers can help heavily in a siege by attacking buildings and enemy villagers since a Spanish Villager is almost as strong as a standard infantry unit.
            On maps with water, Spanish must try to take naval superiority early on in order to make room for their formidable Cannon Galleons in later ages. Because Ballistics benefit Spanish Cannon Galleons, a siege from the sea can become devastating in the Imperial Age.
            Long story short, as long as the player can survive until the Imperial Age, the Spanish arguably become a "master-of-all" civilization.'
        ]);

        //Tatars -- DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/tatars.png',
            'civcode' => 'tatar',
            'civname' => 'Tatars',
            'civtype' => 'Cavalry Archers',
            //'uniqueunit' => 'Keshik' + 'Flaming Camel',
            'uniquetechone' => 'Silk Armor (Scout Cavalry line, Steppe Lancers and Cavalry Archers have +1/+1 armor)',
            'uniquetechtwo' => 'Timurid Siegecraft (Trebuchets +2 range, enables Flaming Camels at the Castle)',
            'civsbonus' => 'Herdables contain +50% food (actual value is 57%).',
            'teambonus' => 'Cavalry Archers +2 Line of Sight.',
            'civdescription' => 'For centuries, fierce nomads roamed the Central Asian steppe, periodically launching distant migrations or campaigns to conquer or extort their sedentary neighbors. Don arrow-resistant silk armor and dominate the hills and plains with mobile horsemen and cavalry archers, or join the Mongol hordes and swell the ranks of the Keshiks, honored bodyguards of the Great Khan himself! Dare you follow in the footsteps of Tamerlane and mercilessly conquer an empire from Transoxiana to India, Anatolia, and Russia?',
            'civinformation1' => 'The Tatars are a Central Asian civilization introduced in Age of Empires II: Definitive Edition. They focus on Cavalry Archers.',
            'civinformation2' => 'Historically, the Tatars were a para-Mongolic people who originated from the Gobi desert\'s northeast corner. Tatars revolted against the Uyghur khaganate unsucessfully and part of them fled westwards and joined the Turkophone Kimek-Kipchak confederation. Tatars who stayed in their homeland were subjugated by Temujin, forcibly incorporated into his Mongol Empire, and participated in the Mongol conquests, gaining new lands to settle in the process. Tatars would later be Turkicized and absorbed into their Turkic-speaking neighbours. The in-game Tatars civilization is mostly representative of the Turco-Mongol successor Khanates and states established during and after the decline and dissolution of the Mongol Empire that were often called "Tartars" by Europeans, such as the Golden Horde, Chagatai Khanate and the Timurid Empire (which is the primary basis of the Tatar campaign). Today, many Kipchak-Turkic-speaking peoples still call themselves Tatars.
            The steppe people that later became known as Tatars were known for their nomadic lifestyle which relied on hunting and herding. To reflect this, the Tatars can obtain 50% more food from herdable animals; Also, they get two free Sheep per new Town Center.
            The Tatars, like other equestrian nomadic folks (Mongols, Huns, Oghuz Turks, Cumans-Kipchaks, early Magyars, etc.), often used feigned retreat tactics: they would lure pursuing enemies, whom they\'d shoot back at, into ambushes which Tatars had laid by taking full advantage of terrain. To reflect this, the Tatars\' units can deal 50% more damage when attacking enemy units from higher locations.
            The Tatar horsemen were famous for their skillful ability when using weapons (especially bow) on horseback. This is reflected by their free Parthian Tactics and Thumb Ring technologies. In addition, the Tatars also has access to the Silk Armor unique technology which increases the armor of their Scout Cavalry, Steppe Lancer and Cavalry Archer-line as well increased Line of Sight of their Cavalry Archers as their team bonus.
            After the dissolution of the Mongol Empire, various new kingdoms or khanates were established in former Mongol Empire territory by Tatar warlords. These khanates often invaded and plundered their neighbours to collect war booty. To reflect this, the Tatars can train the Keshik unique unit that generates gold automatically when attacking enemy units.
            One of the most powerful Tatar states established after the dissolution of the Mongol Empire was the Timurid Empire, which was known to deploy siege weapons intensively. To reflect this, the Tatars has access to the Timurid Siegecraft unique technology which gives additional range to the Trebuchet.
            During the Battle of Delhi (1398), the Timurid army used camels carrying burning straws to frighten Delhi\'s war elephants and make them trample their own troops. To reflect this, once Timurid Siegecraft is researched, the Tatars are able to train Flaming Camels that deal bonus damage against Elephants and other cavalry.',
            'civoverview' => 'The Tatars are classified as a cavalry archer civilization. Their Cavalry Archers are extremely powerful, not only having all possible upgrades (two of those, Parthian Tactics and Thumb Ring, are free for them), they also deal 50% more damage when fight on higher grounds (this bonus applies to all Tatar units), increased Line of Sight (which is their team bonus) and the Silk Armor unique technology, which gives additional melee and pierce armor to them, putting the Tatar cavalry archers at the same level as the Mongol, Hun, Turk, Magyar and Cuman cavalry archers.
            Tatars also have strong cavalry, despite lacking the Paladin upgrade, as they have the Keshik, a medium armored cavalry unit which generates gold when fighting other units, and complete upgrades to all Stable units (the Scout Cavalry also benefits from the Silk Armor unique technology) as well access to the Steppe Lancer which is exclusive to the Tatars, Cumans, and Mongols, and affected by Silk Armor.
            Though having Hand Cannoneer, their foot archers are not great, due to lacking the Arbalester upgrade. Tatars also have possibly the weakest infantry of all civilizations, to the point that it is nearly unusable, not only lacking the Champion upgrade and Supplies, they are the only civilization that lack Chain Mail Armor.
            Despite having average siege units (lacking Siege Onager and Bombard Cannon), the Tatar Trebuchet has the longest range in the game, thanks to the Timurid Siegecraft unique technology which grants them +2 range (with Siege Engineers they reach 19 range).
            The Tatar navy is average, only lacking Heavy Demolition Ship and Shipwright.
            Their defenses are lackluster, due to lacking Hoardings, Architecture, Keep, and Arrowslits, but they have access to the Bombard Towers.
            Tatar Monks are very weak, as they lack several upgrades.
            Their economy is pretty strong at the start and part of the mid-game, as their herdables contain 50% more food and they get two free Sheep per new Town Center, starting in the Castle Age, but much more limited in the late game, due to lacking Stone Shaft Mining and Two-Man Saw.',
            'strategies' => 'On standard matches, the Tatar herdable bonus results in almost 400 additional food, assuming all 8 starting herdable animals are harvested. This bonus helps for every early game strategy, and Tatars can have more Villagers gather food from herdable animals without running out as quickly. The Tatar player can delay placing Farms, freeing more wood for Feudal Age buildings or an Archer rush. The 400 extra food also helps with a scout rush, as scouts are an effective raiding unit with a high food cost. The player will also find it easier to afford Feudal Age technologies. The bonus helps for advancing to the next age quickly, as it both saves wood for Feudal Age buildings and assists in fulfilling the Castle Age food requirement. All in all, the Tatar bonuses help out by quite a bit for any Feudal Age strategy.
            A challenging but effective strategy with the Tatars is the three-Stable scout rush. The extra 400 food is most evident in the early Feudal Age, where a player has exhausted their livestock. The build involves advancing with 20-21 Villagers (standard scout rush start), but saving up enough wood for three Stables instead of two and a Blacksmith while advancing. The key difference is the 400 extra food, which allows creating up to five extra Scout Cavalry from the third Stable, without requiring more Villagers. The added effect of four Scout Cavalry (the first three created from the three Stables plus the starting Scout Cavalry) as opposed to three can take down Villagers quicker, handle a Spearman without losing a Scout Cavalry, and potentially separate into two groups for harassment on multiple resources. Sustaining all three Stables and Villagers is not easy, and the third may be idle after it has produced its fifth Scout Cavalry, but by that point the scout rush would have had its effect.
            In addition, the bonus helps recover from a difficult start for the Tatars. If the opponents lames the player by stealing a Boar or Sheep, the player can rely on the additional food provided from the herdables to keep up with them.
            While advancing, the Tatar player should scout out the map for Relics, resources, and elevation points. the Tatar player can secure those places to both raid and defend more effectively and, in the Castle and Imperial Age, perform tactical retreats to with their mobile army.
            Effective strategies for the Tatar player are combinations of Scout Cavalry into Cavalry Archers or archers into Steppe Lancers or Knights. With the effects of the herdable bonus discussed above, the Tatar player can perform both rushes relatively quickly. The opponent\'s response to a scout rush will most likely be Spearmen, while the optimal counter to Archers is Skirmishers and the opponent\'s own Archers. Once the Tatar player has raided to their full potential and clicked up to the Castle Age, they can effectively counter either of the opponent\'s units effectively with Cavalry Archers against Spearmen or Steppe Lancers against Skirmishers and Archers.
            The Tatars have weak infantry and average archers, but strong Cavalry Archers and Stable units. They excel on open and elevation-heavy maps where their Lancers and Cavalry Archers can harass the enemy from multiple fronts and feign retreats to the top of a hill when at a disadvantage. Their lack of a defensive bonus or solid Castle/early Imperial economy bonus means they must always be on the offensive and inflict damage to the opponent whenever possible. Furthermore, most counters to Steppe Lancers and Cavalry Archers are slow-moving units, and the Tatar player can easily avoid unfavourable matchups.
            In the Castle Age, the Tatar player can also make use of Keshiks. Their high attack and HP relative to their total cost for a Castle Age unit and ability to generate gold while attacking make them excellent raiding units. A powerful strategy is to attract the opponents attention with Cavalry Archers or Lancers and hit-and-run their military while a group of Keshiks raid their economy. The gold generated can be modest, but the player still earns around four gold per enemy villager killed, which is definitely favourable. Population space might be better spent on Cavalry Archers, Steppe Lancers, or siege, but Keshiks are definitely cost-effective against most other cavalry and ranged units. Raiding an opponent\'s trade line in the Imperial Age or sniping Town Centers to harass villagers is also a possibility with a tempting gold reward.
            For a Town Center snipe in the Castle Age, a group of 14 Keshiks can easily take down an unguarded, generic, fully-garrisoned Town Center. However, the Tatar player should not destroy the Town Center completely. Once the Villagers are ejected from the Town Center, the Keshiks should target them instead. A Town Center with 15 Villagers garrisoned within means 60 gold with 14 units in a split second, as well as the damage inflicted on the opponent\'s economy. Keshiks can also make a great difference in the late Imperial Age, especially in 1 vs 1 games or FFA, as their gold generation may help to sustain late game gold economy and delay the "trash wars" a bit (but the player should still take Relics and support Keshiks with trash units). In the late game, Tatars should pair their Elite Keshiks with Elite Steppe Lancers and Heavy Cavalry Archers in the back.
            The Imperial Age is where the Tatars shine. Their instant Parthian Tactics and increased Cavalry Archer line of sight allows them to have the strongest Cavalry Archers in the early Imperial Age. The resources a typical Cavalry Archer civilization spends on Parthian Tactics should be spent on Silk Armor, the Castle Age technology which gives their Cavalry Archers and Light Cavalry one extra pierce armour. Additionally, their Imperial Age technology Timurid Siegecraft gives their Trebuchets two extra range. Depending on the player\'s gold availability, the ideal Tatar army is composed of durable Heavy Cavalry Archers with 18-range Trebuchets dealing most of the damage and from a safe distance, while either arrow-resistant Hussars, Elite Steppe Lancers, or Elite Keshiks serve as the powerful meat shield, depending on gold availability. Hussars are especially effective at soaking up arrow fire and only cost food, leaving wood and gold for Heavy Cavalry Archers and Trebuchets to deal damage to most units and structures from a distance.
            The Tatars should almost never make infantry (except the Pikemen line), as they lack Champions, and are the only civilization to lack the second infantry armour upgrade entirely.'
        ]);

        //Teutons -- DONE 
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/teutons.png',
            'civcode' => 'teuton',
            'civname' => 'Teutons',
            'civtype' => 'Infantry',
            //'uniqueunit' => 'Teutonic Knight',
            'uniquetechone' => 'Ironclad (siege weapons +4 melee armor)',
            'uniquetechtwo' => 'Crenellations (Castles +3 range; garrisoned infantry fires arrows)',
            'civsbonus' => 'Monks have double healing range.',
            'teambonus' => 'Units resist conversion.',
            'civdescription' => 'Charlemagne’s empire has fallen, and the task of rebuilding the Holy Roman Empire lies in your hands. Unite the feuding duchies, contend with Papal authority, and construct powerful crenellated fortifications! Smash enemy armies with potent knights and demolish their cities with armored siege engines, or lead your men on crusade to the Holy Land or into Eastern Europe. The Teuton unique unit is the Teutonic Knight, a zealous warrior who can carve most melee units into ribbons.',
            'civinformation1' => 'The Teutons are a Central European civilization in Age of Empires II. They focus on infantry.',
            'civinformation2' => 'The historical Teutons were first mentioned by Republican Roman authors as being from Scandinavia and allies with the Cimbri against Rome. The in-game "Teutons" actually represent many migration period\'s West Germanic-speaking peoples, East Francia, the Holy Roman Empire, Crusader states, and three famous crusading orders: the Knights Hospitaller, Knights Templar, and the Teutonic Knights. They rely on infantry, cavalry, siege units, and fortifications, which is typical for a medieval European army.
            The Teutons were known for their mighty citadels and fortress cities which defended their cities from invaders across Europe. This is seen with their double garrison size for their towers and Town Centers. Their Castles are also second to none, as the footmen aided the archers in defending the castle. To do so, the walls built with crenellations which allows infantry to fire arrows within the safety of their wall. To supplement the castles was an efficient system of farming, so their farms are cheaper to build.
            Being the center of multiple crusader orders and having their own Catholic sect, the Teutons are fanatical defenders of their faith which inspires fierce loyalty with their allies. This is reflected by having their Monks heal their allies further away from the battlefield as well as having units less likely to defect to the enemy side. German siegecraft is also designed to endure the threat of soldiers in the event they are flanked in battle, which is represented by the +4 armor. German soldiers were known to be heavily armored in battle, which is represented by the increased melee armor for both Barracks and Stable units and the iconic high melee armor of their unique unit, the Teutonic Knight.',
            'civoverview' => 'The Teutons are an infantry civilization. As such, they have excellent infantry with all upgrades, an extra +1/+2 melee armor in the Castle and Imperial ages, and the Teutonic Knight, a unit that is, albeit slow, unrivaled in melee combat. Their cavalry is, in fact, limited to the Paladin, which unfortunately lacks Husbandry and thus misses out on an important speed bonus; it remains a strong unit with +2 melee armor, however. Their archers are very weak, missing improvements all over the board, but Hand Cannoneers are available. The siege weapons are great, mostly due to Ironclad, which helps patch up their main weakness: melee attacks. The Teutonic navy is very underwhelming without Dry Dock and Bracer, which is an unfortunate combination as both the Fire Ship and Galleon are greatly hindered by their absence. Teutonic Monks are excellent. Their defensive capabilities are great, mostly thanks to Crenellations and overall solid defensive structures. Their economy is good, particularly their Farms, which are the most cost effective of all civilizations.',
            'strategies' => 'In The Conquerors and The Age of Kings, Teutons have a different start up from other civilizations. This is because their Town Center\'s +5 line of sight allows them to find herdables faster. This bonus was removed in The Forgotten for a more defensive bonus that allows the Town Center to garrison more units inside.
            Teutons are capable of turtling, rushing, and booming. Their infantry rush is mediocre with no Dark/Feudal Age bonuses, but infantry upgrades will scale well into the late game. Their Trush (Feudal Age Tower Rush) however is one of the best due to free Murder Holes and more garrison capacity, especially when supported by Skirmishers as these can join the forward villagers in towers for even more arrows. They also have a powerful Castle Age Knight Rush, despite the lack of Husbandry, due to their civilization\'s team bonus of conversion resistance (as monks are the ideal counter to knight rushes).
            Although lacking early game economy bonuses, the Teutons have an excellent mid-game boom due to their cheap farms. This is especially important during the late Feudal or early Castle Age when natural food sources run out but wood remains a premium. Combined with their civilization\'s defensive advantages, this makes the Teutons a very good candidate for the Fast Castle or Fast Imperial strategies.
            Just at the start of the game, Teutons have already good defense (in Age of Kings and The Conquerors, Town Centers have more attack; in The Forgotten they have more garrison space) so the other way a player normally uses the Teutons is turtling. For this, they must create several buildings in the Dark and Feudal Ages, like houses for walling and then a few towers. Once they reach the Castle Age, they must create 1-3 castles, build stone walls and research all the necessary technologies at the university and blacksmith (Fletching and Bodkin Arrow; the Teutons do not have Bracer in the Imperial Age) for improving their buildings, and it will be necessary to create infantry, especially Teutonic Knights, monks, and ranged siege units. Once in the Imperial Age the player must research Crenellations in order to allow their infantry to shoot arrows when garrisoned in buildings. Also, the Imperial Age is good for turtling strategies, as the Teutons can create several bombard towers.
            Offensively in the Castle and Imperial Age, the Teutons can use their unique unit, the Teutonic Knight, as the base of their army. Despite the fact that they have no access to siege rams, it is useful to create rams since Teutonic Knights have very low movement speed and garrisoning them in rams can improve their mobility significantly. Teutons have access to all gunpowder units except the Elite Cannon Galleon, so they normally use the Bombard Cannon as their main siege weapon. They must also use a lot their villagers to create forward towers and castles in order to provide support for the troops, which in the siege of an enemy town allows units to retreat to the buildings and shoot arrows once inside. Teutons have also good monks that have a large healing range. This means that their monks can support the front lines of infantry and cavalry at a safe distance. In terms of cavalry, Teutons must use their paladins to raid enemy towns.
            In maps with water, Teutons do not have many advantages over other civilizations, but their tower bonus gives them a little edge on defending the shoreline, so they must try to keep dry.
            In team games, Teutons should take the frontline position as they can defend their allies in the pocket position.'
        ]);

        //Turks -- DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/turks.png',
            'civcode' => 'turkish',
            'civname' => 'Turks',
            'civtype' => 'Gunpowder',
            //'uniqueunit' => 'Janissary',
            'uniquetechone' => 'Sipahi (Cavalry Archer units +20 hit points)',
            'uniquetechtwo' => 'Artillery (+2 range for Bombard Towers, Bombard Cannons, Cannon Galleons)',
            'civsbonus' => 'Gunpowder units have +25% HP.',
            'teambonus' => 'Gunpowder units are created 25% faster.',
            'civdescription' => 'Thousands of Seljuk Turkic riders poured out of Central Asia, thrusting into Persia and Mesopotamia during the 11th century. Challenge 
            the mighty Byzantine Empire and battle Crusaders with mobile mounted armies, survive the Mongol onslaught, and establish the legendary Ottoman Empire. 
            Can your vast gunpowder-wielding armies and lethal Janissaries overrun territories from the Levant to North Africa and Southeastern Europe, or will the Safavid 
            armies and the walls of Constantinople foil them?',
            'civinformation1' => 'The Turks are a Middle Eastern civilization in Age of Empires II. They focus on gunpowder units and their architecture group is Middle Eastern.',
            'civinformation2' => 'Likely originating from Northeast Asia, Oghuz Turks migrated to Central Asia and established their first state in the 8th century, and the in-game 
            civilization is based on their Persianate descendants: Seljuk Empire, the Sultanate of Rum (shown in the Manzikert scenario), and the Anatolian Turks, from whom arose the Ottomans (in the Bapheus scenario), who were best known for winning many battles in the Crusades, capturing Constantinople which ended European foothold of the Silk Road and contact with the Orient, conquering the much of the Eastern Europe until the siege of Vienna. The Turks were also highly involved in the sciences and mathematics especially in the area of alchemy that would later form the backbone of modern chemistry. Being an Islamic civilization, they were notable for transmitting this knowledge to the west. Therefore, Turks mine gold faster and get Chemistry for free.
            Ottoman Turks also used gunpowder quite effectively, becoming the first "gunpowder empire", having received it from their control of the Silk Road. Therefore, many of their unique traits benefit their gunpowder units which have greater range, are created faster, and have more hit points. Additionally, their unique unit is also a gunpowder unit.
            The earlier Turkish states, such as the Seljuk Empire, made extensive use of Light Cavalry during their campaigns. To reflect this, the Light Cavalry and Hussar upgrades are free for them and have free extra pierce armor. Turkish archery is a tradition of archery which became highly developed in the Ottoman Empire. That fact is mirrored in their unique technology Sipahi, which grants additional hit points to their cavalry archers.',
            'civoverview' => 'The Turks are a gunpowder civilization and arguably have the best units there that have greater range, are created faster, and have more hit points. Apart from gunpowder using soldiers and Champions, the Turkish foot soldiers are very weak. Especially the lack of the Elite Skirmisher and Pikeman can hurt at times. Their mounted units, however, are great. Their cavalry units are complete apart from the Paladin, their Light Cavalry get extra pierce armor, and their Cavalry Archers are among the very best, only seeking competition from the Magyars, Mongols, and Saracens. The siege weapons are good, too, especially the long-ranged Bombard Cannon, but the Onager is missing which can be a disadvantage on densely forested maps like Black Forest as the Turks have no means to quickly cut large numbers of trees. The Turkish navy is very good, only the Fast Fire Ship is missing. Their Monks rank below average, but their defensive structures get all upgrades. Their economy is overall below average without Crop Rotation and Stone Shaft Mining, but their faster gold gathering comes in very handy and greatly benefits their playing style.',
            'strategies' => 'Turks are mostly considered a Boom civilization because most of their bonuses are Imperial Age bonuses. They gain an economic edge in early game with their gold gathering bonus, but for the most part they must focus on reaching Imperial Age as soon as reasonably possible. Turks in middle game can attempt to make a Castle Age scout rush, since Scout Cavalry automatically upgrades into Light Cavalry. Apart from their gold mining bonus, Turks have no early game bonuses and because of this, Turks are very vulnerable in early game. When playing in 1 vs 1 games or in a free for all game they must try to wall themselves in to avoid a rush and focusing on aging up.
            Once in the Castle Age is when Turks start to really become a fearsome power in the game. Their Janissaries are one of the three land gunpowder units that can be created in the Castle Age (the other ones are the Spanish Conquistador and the Portuguese Organ Gun), thus this gives them a heavy advantage against infantry and buildings. A Turkish army must consist at this point mostly of light cavalry (which upgrades for free), cavalry archers, Janissaries and some siege units.
            There is no doubt that the Turks are one of the most powerful civilizations in the early Imperial Age, before gold economy starts to drag down. Once they reach Imperial Age, Turks must focus on creating gunpowder units. Their Bombard Cannons, for example, have more range with their Artillery technology than regular ones, allowing them to destroy enemy towns from longer distances. It is important for Turkish players hoping to last long in the Imperial Age to establish proper trade in team games, or at least gather Relics in free-for-alls and 1v1s, as once their gold cuts out they are forced to rely on Hussars. If possible Turks must always secure enemy markets and leave them there for trading, if their opponents forget to delete their markets or are defeated. 
            In maps with water it goes mostly the same as in land. Turks does not get any relevant buffs to their navy until they reach the Imperial Age and get Cannon Galleons. In early game, Turks must try to not engage in water unless they need the food provided by the fishing ships, and in the late game they must create several docks to spawn their formidable Cannon Galleons.'
        ]);

        //Vietnamese -- DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/vietnamese.png',
            'civcode' => 'vietnamese',
            'civname' => 'Vietnamese',
            'civtype' => 'Archers',
            //'uniqueunit' => 'Rattan Archer' + 'Imperial Skirmisher',
            'uniquetechone' => 'Chatras (Battle Elephants +100 hit points)',
            'uniquetechtwo' => 'Paper Money (the player and all allies get 500 gold)',
            'civsbonus' => 'Reveal enemy positions at game start.',
            'teambonus' => 'Imperial Skirmishers are available at the Archery Range in Imperial Age.',
            'civdescription' => 'The jungles and hills of Vietnam proved as hospitable a home to the locals as they were a formidable obstacle to invaders. 
            Lead the rebellion against the Chinese Ming Empire and become a Vietnamese hero. Guide your people to independence by waging guerilla warfare 
            with an extremely powerful arsenal of ranged units. The Vietnamese unique unit is the Rattan Archer, a heavily-armored ranged unit that is
            effectively impervious to arrow fire.',
            'civinformation1' => 'The Vietnamese are an East Asian civilization introduced in Age of Empires II HD: Rise of the Rajas. They focus on archers.',
            'civinformation2' => 'The Vietnamese are based on various dynasties in Vietnam before the European colonization. Historically, they were known as 
            one of the few nations who repelled the Mongol invasion in the 13th century. This is mostly attributed to the resistance of the Vietnamese army 
            that mostly consisted of peasants and volunteers that were quickly deployed in the battlefield to resist against enemy invasions. To reflect on the 
            Vietnamese peasant army, they get free Conscription. The Vietnamese were viewed as masters of guerilla warfare, using the local jungles, cliffs, 
            and wetlands to their advantage to ambush and strike their enemies through the shadows. Therefore, they have a unique upgrade for the Elite Skirmisher, 
            the Imperial Skirmisher, which is available as a team bonus for Vietnamese allies. Also, Vietnamese strategy relied on peasant spies and infiltrators to 
            locate enemy camps in order to set up ambushes and surprise assaults, which is why enemy Town Centers are revealed at the start of the game. Vietnamese villages 
            and towns are often self sufficient in resources and tools, which is reflected with economic upgrades not costing wood. The Vietnamese were known to be 
            skilled in archery, and their troops made extensive use of rattans, a tough, light-weight woody material, for shields, armors, and bows. This is why the 
            Vietnamese gain extra HP for their Archery Range units and their unique unit, the Rattan Archer is an archer with high pierce armor. The Vietnamese were 
            also known to capture elephants that were larger than most other elephants in the region, and deploy them in battle, which is why their unique technology 
            gives extra HP to their Battle Elephants. Even though the Vietnamese have resisted Chinese occupation and overthrew the Chinese rulers in Vietnam since 938 A.D, 
            Confucianism and Chinese culture had a strong influence on Vietnamese culture until modern times. To reflect China\'s influence, the Vietnamese are the only 
            Southeast Asian civilization to use the East Asian architecture (instead of Southeast Asian, which is the case before the Definitive Edition). Finally, their unique
            technology, Paper Money, is team-based and grants each ally gold, based on a reform of King Ho Quy Ly to replace coins by paper money to resolve the financial problems at the times.',
            'civoverview' => 'The Vietnamese are an archer civilization with strong emphasis of team support, and their foot archers are excellent soldiers, getting additional HP 
            as well as every upgrade there is. Additionally, their unique unit and team bonus are both foot archers, making the Vietnamese able to pick from a wide variety of 
            different units there. Their infantry and cavalry both miss Blast Furnace, and the latter is especially shallow with other upgrades such as Paladin and Hussar missing. 
            Their Battle Elephants, however, get additional HP out of Chatras and therefore have good defensive capabilities. The siege units are overall weak. Their navy is fair,
            but the Fast Fire Ship and Shipwright are missing. Their Monks rank below average as well. The defensive structures are overall good, but the lack of Masonry and Architecture is 
            not helping. Their economy is good and especially suited for team games with Paper Money, but the lack of a major early game economic bonus makes the Vietnamese vulnerable to rush strategies.',
            'strategies' => 'At the start of the game, the first priority of the Vietnamese is to play defensively and scout for early-game rushes. Since the enemy Town Centers are revealed at the start of 
            the game (or revealed after being built, like in Nomad-style games), the Vietnamese player can determine their strategy based on positioning and then take appropriate action. If the enemy 
            is much closer than expected, or is an aggressive, early-game civilization, the Vietnamese player should prioritize gathering Stone and placing defensive structures. A more daring strategy 
            is to send a Villager over to the enemy base early in the game to wall up critical resources that they might need, especially gold and stone. Doing so will force them to waste time breaking down 
            the walls or look for alternate sources of supplies. At the Feudal Age, the Vietnamese have two options: continue playing defensively, or go on the offensive and raid with Archers and Skirmishers. 
            Producing Spearmen is also a good idea as they can defend the base, protect Archers, and/or stop Scout rushes. During the Castle Age, the player should continue to focus on building Crossbowmen and 
            Elite Skirmishers as Archery Range units\' defensive capabilities increase with each age. Players should also strongly consider building a Castle for access to the Rattan Archer, free Conscription 
            upon reaching Imperial, and access to the Chatras tech for bulky Battle Elephants. Even without Parthian Tactics (and before the Definitive Edition, Husbandry), a Cavalry Archer rush can be viable 
            due to access to Bloodlines combined with the hit point bonus (and access to the Heavy Cavalry Archer upgrade in the Imperial Age). The Vietnamese shine in the Imperial Age; durable Heavy Cavalry Archers, 
            Arbalesters, Imperial Skirmishers, and Elite Rattan Archers will be the main backbone of any Vietnamese army, with Halberdiers and Battle Elephants as main front-line protection and Trebuchets and 
            Bombard Cannons as the main siege support. When gold becomes scarce in the late Imperial Age, the Imperial Skirmisher gives the Vietnamese player an edge in "trash wars," despite their lack of 
            Hussars and Blast Furnace. Paper Money can also generate a decent amount of gold to the Vietnamese team in multiplayer, and is always worth consideration.'
        ]);

        //Vikings -- DONE
        DB::table('civilizationdata')->insert([
            'isOriginal' => true,
            'banner' => '/coatofarms/vikings.png',
            'civcode' => 'viking',
            'civname' => 'Vikings',
            'civtype' => 'Infantry and Naval',
            //'uniqueunit' => 'Berserk' . 'Longboat',
            'uniquetechone' => 'Chieftains (infantry get attack bonus against cavalry and camels)',
            'uniquetechtwo' => 'Berserkergang (Berserks regenerate faster)',
            'civsbonus' => 'Wheelbarrow, Hand Cart upgrades free.',
            'teambonus' => 'Docks are 15% cheaper.',
            
            'civdescription' => 'The vast forests and mountain fjords of Scandinavia were home to unpredictable, adventurous gods and even more daring folk.
            Rule the rivers and seas with lithe Longboats, initiate your most fearless warriors into the Berserkergang, and set forth to plunder, settle, 
            and trade in new lands. The skálds will sing your glory in poetic verse from North America to Byzantium, and sagas shall tell of the exploits of 
            legendary kings and warriors. Only the most daring will earn the right to enter Valhalla and feast at Odin\'s table!',
            
            'civinformation1' => 'The Vikings are a Northern European civilization in Age of Empires II. They focus on infantry and navy.',
            
            'civinformation2' => 'The Vikings were best known for being advent sailors and for establishing settlements and colonies in the Northern Atlantic
            in Greenland and Newfoundland, hundreds of years before the arrivals of other European explorers (first settlement in 985). They were also known 
            for bringing fear among several European communities since they would raid small villages unexpectedly. As a result, their navy and infantry are 
            among the finest in the game and have a unique unit in both branches. Contrary to popular belief, spread through 19th and 20th centuries\' popular 
            culture, the Vikings did not actually wear spiked or horned helmets, but they refrained from trimming their head and facial hair to give the look 
            of a big, scary, and hairy beast. This is reflected by their unique unit, the Berserk, and their unique technology that benefits them. 
            Furthermore, their infantry, including the Berserk, have more health. The Vikings also excelled at naval warfare and tactics, and mastered the art of 
            various types of sailing. Therefore, their other unique unit is the Longboat which is a well-constructed slim boat that gracefully shoots through 
            the water and fires volleys of arrows. To further emphasize their ability as fine shipbuilders, all Viking ships cost fewer resources, and their 
            team bonus allows Docks to be built for less wood as well. Some Vikings settled in France and would become known as Normans, which made an 
            appearance in the Hastings scenario, represented as the Franks. Some Normans even went on to conquer and settle southern Italy and became known as 
            Italo-Normans, which are represented by the Sicilians.',
            
            'civoverview' => 'The Vikings are a naval and infantry civilization. Their ships are indeed excellent, coming with a discount which offsets the lack of Shipwright
            and an excellent unique unit to reinforce their navy. The absence of even Fire Galleys should be noted, though, as it can be a disadvantage early on when Longboats are 
            not yet available. Despite lacking the Halberdier upgrade, their infantry is excellent as well with all upgrades, additional HP, and an excellent unique technology that 
            improves their performance when engaging cavalry units. The latter are very weak for the Vikings themselves, though. Lacking upgrades across the board, most notably 
            Plate Barding Armor, Husbandry, and Bloodlines as well as all final tier upgrades, it is hard to justify their use. Their Cavalry Archers are also not worth considering, 
            but their foot archers definitely are as their Arbalesters get all upgrades. Their other unique unit, the Berserk, is an excellent all-purpose infantry warrior that heal itself, 
            but also Age of Empires II\'s most expensive units to fully upgrade. Viking siege weapons are somewhat lacking, and their Monks are simply bad. Their defensive structures are not 
            a particular highlight either, but their Castle at least gets all upgrades. Their economy excels at early Castle Age, but lacks before mid-Feudal Age unless it is a water map.',
            
            'strategies' => 'Viking are one of the most, if not the most, powerful civilization on water maps. Their Dock bonus and the discount for all their warships allows for them to 
            take control of the sea earlier than other civilizations. Vikings are perfectly capable to perform sea rushes in maps like archipelago and islands with their cheaper galleys 
            from the Feudal Age. Despite the fact that their discount bonus was modified in "The Forgotten", they can still do this. Their longboats are perfectly capable to take down 
            almost all kinds of ships in a unit vs unit combat, but they perform better if massed since these unique vessels can be created very quickly and each one shoots multiple arrows.
            On land Viking players must focus on their infantry, and are able to perform infantry rushes from the Feudal Age. Normally a Viking player will go for an Infantry Flush 
            (feudal rush) on maps that have no seas or water. The extra hp for their infantry improves this tactic but other than that, it will be a standard rush. Sadly, Vikings are a lot 
            less versatile on land than on water but if managed well they can thrive in non water maps, and should always try a rushing tactic in the early game. They get Wheelbarrow and 
            Hand Cart for free, slightly boosting their middle game economy. While the Vikings have one of the worst cavalry in game due to lacking key important technologies 
            (Bloodlines, Husbandry, Paladin, Hussars and Plate Barding Armor), the Vikings can still pull off a viable (but suboptimal when compared to Huns, Berbers, and Mongols) Knight rush 
            in the game thanks to their strong economic bonuses, meaning the Vikings can pump out Knights much sooner and in higher numbers thanks to the Wheelbarrow and Hand Cart free upgrades.
            Vikings are probably at their strongest in the Castle Age once they get Berserks and longboats. Berserks can heal themselves slowly, allowing a Viking player to not create supporting
            monks in battle. Berserks must be paired with other infantry units at this point, and also have some range support from siege units and archers. Gathering Infantry units in rams for 
            a siege is also a viable tactic for the Vikings. Viking infantry units are also able to become cannon fodder as they can take a lot of damage before dying.'
        ]);
    }
}
