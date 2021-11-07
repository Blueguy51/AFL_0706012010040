<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniqueUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //--~INFANTRY~--// -- (Aztecs1 - Vikings1)
        DB::table('uniqueunitsdata')->insert([
            //Aztecs1 - Jaguar Warrior - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'jaguarwarrior',
                'uniticon' => '/uniqueuniticons/jaguar_warrior.png',
                'unitname' => 'Jaguar Warrior',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Infantry ',
                'civcode' => 'aztec',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '10 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, infantry, buildings',
                'weak'  => 'Archers, Scorpions, Mangonels, Cataphracts, Boyars, Hand Cannoneers, Conquistadors, Janissaries, Slingers, Knights',
                //Unit Description
                'unitdes' => 'The Jaguar Warrior is the unique unit of the Aztecs in Age of Empires II: The Conquerors. It is an infantry unit with an attack bonus against other infantry.',
                //Unit Strategy
                'unitstrategy' => 'Jaguar Warriors have a high anti-infantry attack bonus. That enables them to defeat any other infantry unit in one-on-one combat apart from Teutonic Knights and Samurais, though Jaguar Warriors will win in large army battles. However, they are not as effective against other units, especially archers. As with most infantry, they also struggle against heavy cavalry.
                Jaguar Warriors have an ideal mate with the Eagle Warrior as the Eagle Warrior can cover the Jaguar Warriors\' weaknesses against Monks, Siege and Archers, since they have an attack bonus against Monks and Siege, and are very effective against foot archers. Also, the Jaguar Warrior covers the Eagle\'s main weakness which is infantry, so they make an excellent team and are very common amongst Aztec armies. Monk support for both units should not be disregarded. The biggest threat to the Aztec infantry combo is Hand Cannoneers, so Aztec players should consider using Onagers to counter them if they show up. Cataphracts can also decimate Aztec infantry, but Monks can convert them if needed.
                When facing Elite Samurai, the outcome will favor whichever unit attacks first. Both units cost the exact same, so there is no point of cost effectiveness.'
            ],
            //Aztec2 - Eagle Scout - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'eaglescout',
                'uniticon' => '/uniqueuniticons/eagle_scout.png',
                'unitname' => 'Eagle Scout',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Infantry ',
                'civcode' => 'aztec',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '4, melee',
                'attackbonus' => '+8 vs Monk
                +3 vs Siege weapon
                +2 vs Cavalry
                +1 vs Camel
                +1 vs Ship
                +1 vs Fishing Ship',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '2',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1.1',
                'lineofsight' => '5',
                //Unit Training
                'trainedat' => 'Barracks',
                'traincost' => '20 food, 50 gold',
                'traintime' => '35 seconds',

                //Unit Further Statistic
                'strong' => 'Skirmishers, Scout Cavalry, Archers',
                'weak'  => 'Infantry',
                //Unit Description
                'unitdes' => 'Fast unique infantry with extensive sight.',
                //Unit Strategy
                'unitstrategy' => 'Eagle Scouts move quickly, have a long Line of Sight, conversion resistance, and an attack bonus against Monks. They also have an attack bonus against siege weapons and a small anti-cavalry bonus (in the Castle Age), however, almost every other infantry unit deals bonus damage against Eagle Scouts. Essentially, they help compensate for the Aztecs\', Mayans\', and Incas\' lack of cavalry.
                In the Feudal Age, the Eagle Scout is a very powerful military unit that excels at taking out enemy Villagers with the hit-and-run tactic. They are significantly slower than the Scout Cavalry, but it is much harder to counter them, since Spearmen are not such a threat against them and Archers do not deal a lot of damage. In order to perform an Eagle rush, however, the player will need much gold and at least two Barracks, which may be difficult to perform.
                Since Native American civilizations have Eagle Scouts instead of a Scout Cavalry, exploring the map becomes different for those civilizations, as Eagle Scouts are slower, but have an extensive Line of Sight. In The Forgotten, Eagle Scouts can only be trained in the Castle and Imperial Ages, so it is important to be careful when scouting to avoid losing it. But that was changed in The African Kingdoms and the Eagle Scout is now available from the Feudal Age on. Also, as with all other infantry units, researching Tracking and Squires is important.
                It is worth noting that the upgrade to the Eagle Warrior, while cheap, only offers little improvement (+5 HP, +1 pierce armor, and +0.05 speed). Therefore, it should be postponed in favor of training troops and researching technologies with wider use, such as Squires or Iron Casting.'
            ],

            //Burgundians2 - Flemish Militia - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'flemishmilitia',
                'uniticon' => '/uniqueuniticons/flemish_militia.png',
                'unitname' => 'Flemish Militia',
                'introduced' => 'Age of Empires II: Lords of the West',
                'type' => 'Infantry, Unique ',
                'civcode' => 'burgundian',
                'age' => 'Imperial Age',
                //Unit Statistics
                'hitpoint' => '75',
                'attack' => '12, melee',
                'attackbonus' => '+8 vs Cavalry
                +8 vs War elephant
                +6 vs Camel
                +6 vs Ship
                +2 vs Eagle Warrior',
                'rateoffire' => '3',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '0.9',
                'lineofsight' => '7',
                //Unit Training
                'trainedat' => 'Town Center',
                'traincost' => '60 food, 25 gold',
                'traintime' => '14 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, cavalry, Spearmen, rams, Camel Riders',
                'weak'  => 'Plumed Archers, Scorpions, Mangonels, Hand Cannoneers, Janissaries, Monks, Slingers, Cataphracts, Teutonic Knights, Samurai, Organ Guns',
                //Unit Description
                'unitdes' => 'Burgundian unique infantry unit. Strong vs. cavalry. Weak vs. archers.',
                //Unit Strategy
                'unitstrategy' => 'The Flemish Militia becomes available after researching the Flemish Revolution unique technology at the Castle in Imperial Age. It provides an immediate military advantage, as it turns all of the player\'s Villagers into military units. The obvious drawback is that Flemish Militia can no longer build structures, repair, or gather resources, so Flemish Revolution disrupts the player\'s economy for a long period of time.
                Because of this, choosing the proper moment to research Flemish Revolution would, in most cases, decide the outcome of a game. A strong Imperial Age economy relies on a large contingent of Villagers, so Flemish Militia can quickly swarm the battlefield in a final push attempting to break a resilient enemy or a desperate last stand in hopes of an eventual turnover.                
                Fishing Ships, Trade Cogs, and Trade Carts, if present, will continue to provide resource income after researching Flemish Revolution. This can aid in rebooming if the game continues much longer. However, a high proportion of those units in one\'s economy will lessen the size and thus effectiveness of the resulting army of Flemish Militia.
                As a unit, the Flemish Militia should not be considered as a variation of the Halberdier, but a Champion. Compared to the Champion, the Flemish Militia has an advantage of 5 HP and a disadvantage of 1 less attack, while the armor stats, Rate of Fire and movement speed are the same. The Flemish Militia also has a distinct advantage when facing cavalry due to an attack bonus. Due to their better rate of fire, their damage output is much better than what the stats show, compared to a Halberdier. They have nearly 79% of the effectiveness of Halberdier vs cavalry and nearly 86% vs camels. These are rough estimates and do not cover every unit. As an edge case, Flemish Militia are nowhere near as effective against Cataphracts as Halberdiers are.
                With 15 HP and 1 melee armor advantage over the Halberdiers, the Flemish Militia has a decisive edge, combat-wise against foot (except Monks) and siege units. On the other hand, Halberdiers provide better value per resource spent, due to the heavier cost of the Flemish Militia, both in the case of future income lost from the Villagers and the cost of new units if one were to keep producing them. Similar to the Kamayuk, the Flemish Militia has better survivability and is more suitable to engage in combat with all types of units, except for the direct counters. Contrasted with the Halberdier, with weak stats, a slow fire rate of 3, a fatal weakness against all non-mounted military units. It must also be noted that Flemish Militia (just like Kamayuks) are NOT affected by the damage bonuses that are dealt against the Spearmen armor class, i.e., they are not weak against Elite Skirmishers, and are less afflicted by arrow fire from Arbalesters and Heavy Cavalry Archers.
                The Flemish Militia shares the common weakness of infantry against siege units, archers and fortifications. It is also ineffective against Cataphracts, who absorb all their bonus damage. Samurai are also very effective, as the Flemish Militia is treated as a unique unit.'

            ],

            //Celts - Woad Raider - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'woadraider',
                'uniticon' => '/uniqueuniticons/woad_raider.png',
                'unitname' => 'Woad Raider',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Infantry ',
                'civcode' => 'celtic',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '65',
                'attack' => '8, melee',
                'attackbonus' => '
                +2 vs Eagle Warrior
                +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1.38',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '85 food, 43 gold',
                'traintime' => '25 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, Halberdiers, Eagle Warriors, siege weapons, buildings, Light Cavalry, Huskarls',
                'weak'  => 'Massed archers, Jaguar Warriors, Hand Cannoneers, Conquistadors, Slingers, heavy cavalry, Samurai, Berserks, Teutonic Knights',
                //Unit Description
                'unitdes' => 'Celtic unique unit. Exceptionally quick infantry.',
                //Unit Strategy
                'unitstrategy' => 'The Woad Raider is one of the fastest infantry units in the entire game. Because of this they are very effective as a raiding unit. The standard variant has fairly similar stats to the Long Swordsman; the elite variant is most comparable to the Champion. Apart from speed, the Woad Raiders generally cost slightly more gold, but have more HP in both cases.
                Due to their high attack and HP they can hold their own against most infantry, though they pale in comparison to cavalry and stronger variants of infantry. They are also effective against siege weapons and are useful for destroying meddling Trebuchets. However, as with most infantry, their durability in battle is a drawback as they have weak armor. They are somewhat fragile to other unique infantry, mainly Teutonic Knights, Samurai, and Jaguar Warriors. As infantry units, they also struggle against heavy cavalry and massed archers.'

            ],

            //Ethiopians - Shotel Warrior - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'shotelwarrior',
                'uniticon' => '/uniqueuniticons/shotel_warrior.png',
                'unitname' => 'Shotel Warriot',
                'introduced' => 'Age of Empires II: The African Kingdoms',
                'type' => 'Infantry, Unique ',
                'civcode' => 'ethiopian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '40',
                'attack' => '16, melee',
                'attackbonus' => '+2 vs Eagle Warrior
                +1 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '0',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1.2',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '50 food, 30 gold',
                'traintime' => '8 seconds',
                //Unit Further Statistic
                'strong' => 'Villagers, Skirmishers, Pikemen, siege weapons, Light Cavalry, Monks',
                'weak'  => 'Cavalry Archers, Mangonels, Hand Cannoneers, heavy cavalry and infantry',
                //Unit Description
                'unitdes' => 'Ethiopian unique unit. Cheap infantry unit with high creation speed.',
                //Unit Strategy
                'unitstrategy' => 'Shotel Warriors excel at raiding because of their high damage and movement speed, and they can serve as a last minute defense due to their quick creation speed. Once Royal Heirs is researched, they can be massed very quickly. They train even more quickly than Goth infantry.
                They are extremely effective at picking off Villagers, needing only two strikes to kill them in the Imperial Age, a feat few other melee units can boast. They also raid buildings quite effectively, although they should not take on defensive structures. If uncontested, a quickly-made group of them can destroy a Town Center in seconds.
                Shotel Warriors are very squishy, with the Elite version providing only one pierce armor and 50 HP. Consequently, they die quickly to anything that has a fair amount of damage output such as Knights, Champions, or archers in larger numbers.
                Still, in the early Castle Age they can be valuable when the player decides to place an offensive Castle because they can easily fend off enemy rams, thereby guaranteeing the Castle to stand. In open battles, Shotel Warriors are effective against siege units due to their high movement speed and attack.
                Given the Ethiopian siege might, it is also a sound strategy to garrison groups of Shotel Warriors inside rams before sending them towards the enemy. Provided the enemy leans more towards archers and uses Castles and towers for protection, or that the rams themselves are adequately upgraded and escorted, large armies of the Warriors can be transported without much hassle into the heart of an enemy town where they can unload and cause major damage. The rams also serve as additional building destroyers during a siege.
                The use of Shotel Warriors is situational as they demand a high amount of gold. In general, the Shotel Warrior is mostly meant to be used as a raiding unit, and a Shotel Warrior rush is a somewhat a better alternative to the Knight rush since a group of Shotel Warriors is more cost-effective than Knights for raiding enemy villages due to their high mobility and much higher attack (in conjunction with Arson) than Knights. In addition, the Ethiopians lack key important upgrades for their cavalry such as Bloodlines, Plate Barding Armor, and the Paladin upgrade, making the Ethiopian Knight rush far weaker than other civilizations\' Knight rushes such as the Berbers, Huns, and the Franks. However, given the Ethiopians\' strong economic bonuses with the free Pikeman upgrade in addition to their free food and gold whenever they age up, they have better alternative rushing strategies than Shotel Warriors or their below average Knight rush (such as a Feudal/Castle Age Archer rush).'

            ],

            //Franks - Throwing Axeman - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'throwingaxeman',
                'uniticon' => '/uniqueuniticons/throwing_axeman.png',
                'unitname' => 'Throwing Axeman',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Infantry ',
                'civcode' => 'frank',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '60',
                'attack' => '7, melee',
                'attackbonus' => '+1 vs Eagle Warrior
                +1 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '0',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1',
                'lineofsight' => '5',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '55 food, 25 gold',
                'traintime' => '17 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, Halberdiers, Eagle Warriors, Rams, Trebuchets, buildings, Light Cavalry, Huskarls, Camel Riders',
                'weak'  => 'Archers, Jaguar Warriors, Hand Cannoneers, Conquistadors, Slingers, Boyars, Cataphracts, Samurai, Teutonic Knights, Heavy Cavalry',
                //Unit Description
                'unitdes' => 'Frankish unique unit. Infantry with ranged attack.',
                //Unit Strategy
                'unitstrategy' => 'The Throwing Axeman deal melee damage at range. That can be very useful, especially in dealing with most traditional anti-archer units (most prominently Skirmishers and Huskarls). Also, since Throwing Axemen have an attack bonus against buildings, they can be used in large mobs as a practical alternative to siege machines.
                Throwing Axemen can destroy Rams quickly, without having to compromise defenses by opening Gates. They deal high damage for a ranged unit, particularly against buildings, and can take more hits than the average archer. However, their inferior range means that Throwing Axemen are vulnerable against melee units, siege weapons, and hit-and-run tactics employed by archers. They are not as vulnerable to Mangonels and Onagers as archers due to their higher HP (they require 2 shots to be taken down), but Siege Onagers will still kill them in one shot. Throwing Axemen, however, can kill said siege weapons easily due to their melee damage as long as they can avoid being hit and can close the gap. Heavy cavalry units such as Paladins are also quite effective against them, though Hussars are not a suitable choice.
                Since the Franks are reliant on their Paladins, using Throwing Axemen against cavalry counters such as Camel Riders and Halberdiers is a promising tactic, since both units have low melee armor. Combined with Paladins, they can cover each other\'s weaknesses.
                It is not advisable to try to kite melee units using Throwing Axemen as they have a long frame delay.'

            ],

            //Goths - Huskarl - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'huskarl',
                'uniticon' => '/uniqueuniticons/huskarl.png',
                'unitname' => 'Huskarl',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Infantry, Unique ',
                'civcode' => 'gothic',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '60',
                'attack' => '10, melee',
                'attackbonus' => '+6 vs Archer
                +2 vs Eagle Warrior
                +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '6',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1.05',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle, Barracks (After "Anarchy" researched)',
                'traincost' => '56 food, 28 gold',
                'traintime' => '16 seconds',
                //Unit Further Statistic
                'strong' => 'Archers, buildings, Eagle Warriors, Light Cavalry, Scorpions, gunpowder units',
                'weak'  => 'Mangonels, most melee units',
                //Unit Description
                'unitdes' => 'Gothic unique unit. Infantry with substantial pierce armor, virtually immune to archer fire.',
                //Unit Strategy
                'unitstrategy' => 'Huskarls are infantry units that have good attack and speed, but their biggest asset is their high base pierce armor. This makes them one of the best raiding units in the game, and an absolute nightmare for archers (they even deal a large amount of bonus damage vs units with the archer armor class). Their pierce armor, base bonus attack vs buildings and the Goth anti-building infantry civilization bonus means that Huskarls can destroy a Castle with minimal effort.
                With 0 base melee armor and relatively low HP, they are not recommended for any melee combat except vs Camel Riders, Light Cavalry, Halberdiers, or Eagle Warriors (they lose one-on-one against Mongol Hussars). However, the Goths are able to field Huskarls very cheaply and rapidly, so they may still be able to overwhelm standard melee units (such as Paladins or Champions) by sheer numbers.
                Melee units with higher armor (Boyar, Teutonic Knight) or an attack bonus against Huskarls (Jaguar Warrior, Cataphract, Samurai) should generally be avoided. War Elephants and Battle Elephants can also decimate them thanks to their high HP, powerful attacks, and splash damage, but must be wary of Halberdiers that are usually a part of a Goth player\'s army composition. Ranged melee units such as Throwing Axemen, Gbetos, or Mamelukes are also effective against Huskarls, though the latter takes bonus damage from them.
                Onagers can also be a threat since they deal melee-type damage and large area damage. Scorpions, however, are not effective since they deal pierce damage, and can be easily handled if not protected well. Hand Cannoneers and Slingers can be effective against Huskarls due to their attack bonus and range, but as both of the units take huge bonus damage themselves (an Elite Huskarl kills them in two strikes), they must be massed or protected by melee units in order to be effective.'
            ],

            //Incas1 - Kamayuk - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'kamayuk',
                'uniticon' => '/uniqueuniticons/kamayuk.png',
                'unitname' => 'Kamayuk',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Infantry ',
                'civcode' => 'inca',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '60',
                'attack' => '7, melee',
                'attackbonus' => '+20 vs War elephant
                +8 vs Cavalry
                +6 vs Camel
                +1 vs Mameluke',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '0',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1',
                'lineofsight' => '4',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '10 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, cavalry (except Cataphracts), Cavalry Archers, Spearmen, rams',
                'weak'  => 'Plumed Archers, Scorpions, Mangonels, Hand Cannoneers, Janissaries, Monks, Slingers, Cataphracts, Teutonic Knights, Jaguar Warriors, Samurai',
                //Unit Description
                'unitdes' => 'Inca unique unit. Infantry unit with attack bonus vs. cavalry. Carries a long spear to infiltrate formations.',
                //Unit Strategy
                'unitstrategy' => 'Kamayuks are most effective in large groups, as they have a range of one, enabling them to attack from behind one another. Due to this, they can counter cavalry effectively, as they do not have to run around each other in order to attack. Also, their fast training speed means they are easy to mass. Much like Pikemen, Kamayuks get an additional attack bonus against elephant type units such as the Battle Elephant.
                Their range allows them to attack through Walls, making them good at defending or attacking in walled areas. This also means they can be a great defense against enemy Rams.                
                Unlike Pikemen, Kamayuks trade decently against other infantry in large enough groups due to their higher Rate of Fire and considerably higher base attack. Additionally, their 1 range means that in large numbers they can inflict surprising casualties on enemy infantry. Still, they should be used in conjunction with Slingers to protect them from infantry, while Kamayuks can mow down hordes of cavalry without worrying about infantry. Eagle Warriors can also be included to protect the Kamayuks from archers and siege weapons, which can deal heavy damage to them despite their pierce armor from Fabric Shields. Hand Cannoneers will decimate Kamayuks. Lastly, Cataphracts will dominate Kamayuks due to their resistance to anti-cavalry attacks, their bonus damage against infantry, and their trample damage.
                A common dilemma for Inca players is whether to use Halberdiers or Kamayuks, this will depend on resource availability. If there is gold to spend, the Kamayuk should be always the cavalry counter unit of choice, if there is not enough gold, the player can mix in some Halberdiers that are cheaper than the more expensive and effective Kamayuk.'

            ],

            //Japanese - Samurai - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'samurai',
                'uniticon' => '/uniqueuniticons/samurai.png',
                'unitname' => 'Samurai',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Infantry ',
                'civcode' => 'japanese',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '130',
                'attack' => '8, melee',
                'attackbonus' => '+10 vs Unique unit
                +2 vs Eagle Warrior
                +2 vs Standard building',
                'rateoffire' => '1.45',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1',
                'lineofsight' => '4',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '9 seconds',
                //Unit Further Statistic
                'strong' => 'Buildings, Eagle Warriors, Pikemen, Skirmishers, Light cavalry, Infantry and cavalry unique units (except Jaguar Warriors, Teutonic Knights, Cataphracts, War Elephants, Mamelukes, massed Throwing Axemen)',
                'weak'  => 'Archers, Hand Cannoneers, heavy cavalry especially Cataphracts and War Elephants, Slingers',
                //Unit Description
                'unitdes' => 'Japanese unique unit. Infantry with fast attack.',
                //Unit Strategy
                'unitstrategy' => 'Samurai should be used to seek out the strongest late-game enemies, as they possess an attack bonus against other unique units. At first glance, The Samurai appears to be similar in combat to its equivalent swordsman from the Barracks, (the Long Swordsman in the Castle Age, and the Champion in the Imperial Age), the Japanese bonus to infantry attack speed makes them better in combat than swordsmen from most other civilizations.
                The Samurai already innately has a faster attack rate than most infantry but combined with the Japanese civilization bonus of 33% faster attack speed gives them a lightning fast attack. Due to their attack bonus against unique units (10 for regular, 12 for Elite), the Samurai fares better in the late-game, when unique units play a bigger role in combat. However, Samurai aren\'t cost effective against Cataphracts and War Elephants. As with most sword-wielding infantry, they struggle against the Knight line, Scorpions, and archers.
                Samurai perform well when paired with Pikemen (who also receive the Japanese infantry attack bonus) to answer cavalry, but against archers they need ranged support. They should be supported by the strong Japanese archers, Skirmishers, or Scorpions when dealing with an archer-using opponent.
                The Imperial Camel Rider, Imperial Skirmisher and the Houfnice are the only unique units not to take the bonus damage from the Samurai, due to being unique upgrades of common units.'

            ],

            //Malay - Karambit Warrior - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'karambitwarrior',
                'uniticon' => '/uniqueuniticons/karambit_warrior.png',
                'unitname' => 'Karambit Warrior',
                'introduced' => 'Age of Empires II: Rise of the Rajas',
                'type' => 'Infantry ',
                'civcode' => 'malay',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '30',
                'attack' => '7, melee',
                'attackbonus' => '+2 vs Eagle Warrior',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1.2',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '85 food, 43 gold',
                'traintime' => '25 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, Halberdiers, Eagle Warriors, Rams',
                'weak'  => '	Archers, Cavalry Archers, Jaguar Warriors, Hand Cannoneers, Conquistadors, Slingers, Samurai, Berserks, Teutonic Knights, War Elephants, heavy Cavalry',
                //Unit Description
                'unitdes' => 'Malay unique unit. Cheap and weak infantry unit that only takes half a population spot.',
                //Unit Strategy
                'unitstrategy' => 'Karambit Warriors are the prime example of "quantity over quality". They are very cheap and only take half population space per unit. Furthermore, they move faster than most other infantry. They should always be used in swarm to balance the fact that they have very low HP. However, because they still cost gold, it is inadvisable to mass Karambit Warriors without correct purpose and proper micromanagement. For example, they shouldn\'t be used against a group of units with ranged attack or bonus damage against infantry. While spammable, they are by no means expendable, as unlike Shotel Warriors they have poor attack and even lower HP than them, while costing three quarters the gold a Militia-line unit costs.
                Karambit Warriors are an excellent choice for a raiding tactic. A group of Karambit Warriors can be sent into an unprotected enemy base, kill some of their Villagers or destroy some of their important buildings, and then retreat quickly when enemy troops arrive. When sending them into an enemy base, the player has to make sure there are no defensive buildings, ranged units, or cavalry around because Karambit Warriors die very quickly when hit. As far as this tactic is concerned, it is interesting to note that as a Karambit Warrior is affected by Arson and also boasts a +1 attack bonus against standard buildings, and Karambit Warriors can easily envelop structures with sheer numbers, and inflict "death of a thousand cuts" destruction on enemy buildings, preferably away from defensive structures. Gold-free Long Swordsmen and cheaper Battle Elephants (depending on many factors, such as the stage of the game and available resources) can further assist in wreaking as much havoc as possible, as they have superior stats and attack bonuses against buildings.
                Karambit Warriors also work well as emergency reinforcement. They are created very fast and can be massed in a very short time. That means if the player\'s base is attacked with Rams or Trebuchets and there are no other military units around to defend the base, the player can simply train a small number of Karambit Warriors and then send them to destroy the invading siege units. Against Onagers or Scorpions, a group of Karambit Warriors should be sent in staggered or flank formation to reduce the splash damage taken.
                Similarly, a swarm of Karambits, utilizing their great speed and numbers, can envelop some stronger units such as Boyars (but War Elephants and Cataphracts will crush them easily, thanks to trample damage and/or anti-infantry attack bonuses) in order to constrict their movement and prevent them from engaging more important units, such as Bombard Cannons. Combined with archers, this tactic can cause disproportionate damage to expensive-but-mighty units that can otherwise spell trouble.
                Other potential uses in a game include distraction and Ram-filling. In the first case, somewhat similar to the raiding tactic described above, the player can utilize large groups of Karambits and probably Light Cavalry (despite Malay cavalry being the worst in the game) to harass an unguarded enemy position (preferably one with many Villagers), in order to invoke a panicked reaction from another player, due to their numbers, and make them do a wrong move (e.g. an army that would strike a nearby ally could be forced to withdraw).
                In the second case, Karambits can quickly fill Rams and save time needed for preparing a siege, or even provide a well-played Castle Age Ram rush.'

            ],

            //Malians - Gbeto - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'gbeto',
                'uniticon' => '/uniqueuniticons/gbeto.png',
                'unitname' => 'Gbeto',
                'introduced' => 'Age of Empires II: The African Kingdom',
                'type' => 'Infantry ',
                'civcode' => 'malian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '30',
                'attack' => '10, ranged-melee',
                'attackbonus' => '+1 vs Eagle Warrior',
                'rateoffire' => '2',
                'armormelee' => '0',
                'armorpierce' => '0',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '1.25',
                'lineofsight' => '6',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '85 food, 43 gold',
                'traintime' => '25 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, Pikemen, Cavalry Archers, Battering Rams, infantry',
                'weak'  => 'Mangonels, Jaguar Warriors, Hand Cannoneers, Janissaries, Monks, heavy cavalry, Samurai, Slingers, Plumed Archers',
                //Unit Description
                'unitdes' => 'Malian unique unit. Quick infantry unit with a high ranged attack.',
                //Unit Strategy
                'unitstrategy' => 'Gbetos are ranged infantry units, dealing melee damage at range like the Mameluke and Throwing Axeman. They have the longest range of these units, the highest attack, and high movement speed. They are fragile by lack of any base armor and low HP, but are capable of dealing out considerable damage readouts. Since they move quite fast, they can employ hit-and-run tactics against all other infantry apart from Elite Eagle Warriors, Woad Raiders, and Celtic Condottieri. But by using their range and high melee attack, they can defeat Eagle Warriors quickly, so in total they are effective against the entire infantry branch bar the Teutonic Knight.
                Despite their good base range, Gbetos can be outranged by foot archers and are vulnerable against most ranged units due to their low HP and pierce armor. Onagers and Heavy Scorpions can be lethal for Gbetos, but with good micromanagement, they can effectively get close to the machines and destroy them. In any case it is recommended to only use a small army for that tactic, as hits taken have devastating effect. Hand Cannoneers are also effective against Gbetos, able to take them out in two shots.            
                Gbetos are in certain ways a better alternative to Cavalry Archers when it comes to hit-and-run attacks. First, because Gbetos deal melee damage, they can easily dispose of units with high pierce armor such as Huskarls, Skirmishers, and Rams whereas Cavalry Archers will have some difficulty even when upgraded. Secondly, Gbetos do not share the former\'s weakness against Pikemen, and win even if the enemy gets close.
                Gbetos are very versatile and can perform various roles effectively. For example, Gbetos upgraded with Arson can destroy unprotected bases quickly and retreat safely when the situation becomes disadvantageous. Gbetos also work well with cavalry units (including Light Cavalry) because both are fast and can cover each other\'s weakness. Cavalry acts as meat shield and eliminates units dangerous to Gbetos (especially siege weapons and archers), while Gbetos provide additional damage from behind and protect the cavalry from Pikemen.'

            ],

            //Poles1 - Obuch - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'obuch',
                'uniticon' => '/uniqueuniticons/obuch.png',
                'unitname' => 'Obuch',
                'introduced' => 'Age of Empires II: Dawn of Dukes',
                'type' => 'Infantry ',
                'civcode' => 'polish',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '60',
                'attack' => '8, melee',
                'attackbonus' => '+2 vs. Eagle Warrior
                +4 vs. Standard building',
                'rateoffire' => '2',
                'armormelee' => '2',
                'armorpierce' => '2',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '0.9',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '55 food, 20 gold',
                'traintime' => '9 seconds',
                //Unit Further Statistic
                'strong' => 'Skirmishers, Halberdiers, Camel Riders, Eagle Warriors, buildings, Light Cavalry,Champions, Huskarls, Kamayuks, Rams, Serjeants, Teutonic Knights, Boyars and high melee armor units',
                'weak'  => 'Samurai, gunpowder and archer units, Scorpions, Jaguar Warriors, Slingers, Organ Guns, Throwing Axemen, Gbetos, high hit point units such as Battle Elephants and War Elephants',
                //Unit Description
                'unitdes' => 'Polish unique infantry unit which can damage the armor of units it is fighting.',
                //Unit Strategy
                'unitstrategy' => 'The Obuch is a cheap infantry similar in functionality to the Militia line, but with key differences: the Obuch has 20 more Hit points than the Two-Handed Swordsman, while the Elite Obuch has 25 more hit points than a Champion, and they have more armor than the Militia line, making the unit highly resilient. The Obuch, even in its Elite form, however, has less attack than a Two-Handed Swordsman and less Line of Sight. Despite having less attack, a fully upgraded Elite Obuch can defeat a fully upgraded Champion due to the durability of the Obuch, while the unit also tears the armor of the Champion with each attack.
                The Obuch\'s main strength is its ability to tear armor of units with each hit by –1/–1 (normal/pierce). Bonus armor classes such as the Cavalry armor of Cataphracts are unaffected. Armor can be reduced to a minimum of 0, so units with negative armor such as Battering Ram (-3/180) cannot lose further normal armor (but can still lose pierce armor). This effect is applied after the Obuch\'s attack has inflicted damage to a unit. The armor loss is permanent until the unit is fully healed (by Monks or repairers). Upon reaching their maximum hit points, all lost armor is restored.
                Notable uses include weakening units with heavy melee armor (such as Teutonic Knights, Boyars, Serjeants and Bulgarian Two-Handed Swordsmen with Bagains). In this role, the player should consider that Obuchs still lose againsts Teutonic Knights or Boyars in equal numbers, but not in equal resources spent; in the case of Serjeants or Bulgarian Two-Handed Swordsmen, Obuchs can be considered a hard counter just by itself. It can also also weaken units with strong pierce armor, such as Huskarls, Skirmishers, War Wagons, and Elephants Archers. In this case, a Polish player may pair the Obuch with archers, as in a way, the Obuch may be played as a counter to anti-archer/anti-building units. The Obuch can mitigate the usefulness of enemy Blacksmith armor upgrades; however, researching armor against Obuch\'s still provides some value, unlike against the Leitis.
                The Obuch shares typical infantry shortcomings: a slow movement speed and no ranged attack, making them vulnerable to archers (and gunpowder units), siege weaponry, and units with attack bonuses against them (Cataphract, Jaguar Warrior and Samurai). Heavy Cavalry Archers, Plumed Archers, Conquistadors and Mamelukes can be particularly deadly against Obuchs, possessing superior speed and range to kite effectively. Throwing Axemen and Gbetos are also effective, and Battle Elephants and War Elephants due to high hit points and the Poles\' lack of Halberdier.
                Berserks are a soft counter to Obuchs, since they are fast and can automatically regenerate hit points (and lost armor at full health) after an engagement. Against Vikings, a Polish player may prefer investing into the Knight line instead.
                When paired with other high attack units (such as an ally\'s charging Coustilliers), Obuchs can enable devastating engagements.'

            ],

            //Sicilians - Serjeant - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'serjeant',
                'uniticon' => '/uniqueuniticons/serjeant.png',
                'unitname' => 'Serjeant',
                'introduced' => 'Age of Empires II: Lords of the West',
                'type' => 'Infantry ',
                'civcode' => 'sicilian',
                'age' => 'Feudal Age',
                //Unit Statistics
                'hitpoint' => '45 (+20 upon reaching the Castle Age)',
                'attack' => '5 (+3 upon reaching the Castle Age), melee',
                'attackbonus' => '+2 vs Eagle Warrior
                +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '2 (+1 upon reaching the Castle Age)',
                'armorpierce' => '2 (+1 upon reaching the Castle Age)',
                'armorclass' => 'Infantry, Unique ',
                'movement' => '0.9',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle, Donjon',
                'traincost' => '60 food, 35 gold',
                'traintime' => '12 seconds (Castle), 20 (Donjon)',
                //Unit Further Statistic
                'strong' => 'Archers, Infantry with less melee armor, Skirmishers, buildings, Hussars, Camels',
                'weak'  => 'Scorpions, Mangonels, Hand Cannoneers, Conquistadors, Janissaries, Slingers, Monks, Cataphracts, Leitis, Samurai, Teutonic Knight, Jaguar Warrior, Obuch',
                //Unit Description
                'unitdes' => 'Sicilian unique infantry unit which can construct Donjons.',
                //Unit Strategy
                'unitstrategy' => 'Serjeants are a very peculiar infantry, as they are able to build (and repair) Donjons and can be trained in the Feudal Age, unlike any other unique unit. They can be seen as a variant of the Militia line with this peculiar quirk. Indeed, compared to a Man-at-Arms, a Serjeant in the Feudal Age has the same hit points, less attack and Line of Sight, and better melee and pierce armor. Still, Serjeants cost more than Men-at-Arms and need to be trained at a Donjon in the Feudal Age (which costs 175 Stone and 75 wood each, so it is a substantial investment).
                Their ability to build Donjons enables Sicilians to perform a very peculiar strategy called Donjon Drop or Donjon Rush, and it can be done in the Feudal Age if the player has gathered stone beforehand (at least another 175 stone for making a second Donjon). For performing this, the player must go with few Villagers near an opponent\'s settlement, create the first Donjon, and then start spawning Serjeants, which should also create more Donjons near the opponent, especially near their main Gold and Stone Mines and their main Lumber Camp. The building time of a Donjon is the same for Villagers and Serjeants, so the initial Villagers must return to gather resources. Also, Donjons can garrison 10 units, so this tactic can be supported with archers that will increase the number of arrows of a Donjon if garrisoned inside. With enough resources, a Donjon Drop can snowball quickly, as it does not need the assistance of villagers, unlike a Castle drop, except for the first Donjon.
                Once the player reaches the Castle Age, Serjeants automatically gain +20 hit points (for a total of 65 HP), +3 attack (for a total of 8), +1 Melee armor, and +1 Pierce armor (for a total 3/3 armor). Compared to a Long Swordsman, a Serjeant in the Castle Age is much more resilient against arrowfire and melee attacks, thanks to the extra armor. Still, its attack is a bit weaker than the Long Swordsman, and its attack bonuses are inferior to Long Swordsmen. Its armor makes this unit more versatile than its Barracks counterpart, since it can be used to defend a location against different types of units (also, all Sicilian units have bonus armor vs attack bonuses, so infantry counters are less effective). After the Castle Age, Serjeants must be the infantry of choice for Sicilians, unless the player has a shortage of stone for making Castles or Donjons. However, the Militia line of infantry is still a better counter against Eagle Warriors and Buildings, so there are situations in which the player may focus more on the Militia line rather than Serjeants.
                The Elite Serjeants in the Imperial Age continue the trend of being a better armored infantry with less attack than the Militia line. Elite Serjeants\' armor and movement speed sits on the middle ground between a Huskarl (which is highly specialized against arrowfire) and a Teutonic Knight (which is highly specialized against melee attack).
                The Sicilian unique technology First Crusade brings a muster of 7 Serjeants from each Town Center (maximum 5 Town Centers). This technology can still be researched even if the player has reached maximum population and is highly useful for an emergency if the player needs to defend but does not have enough troops. It can also be used to rapidly increase the player\'s army for a Serjeant raid against an opponent.
                Serjeants fare much better than most infantry against their counters, due to their high melee and pierce armor, as well as the reduced bonus damage taken, but there are some units that can deal with Serjeants pretty well without problem. High-melee armor units, such as Teutonic Knights and Boyars can counter Serjeants pretty well. Jaguar Warriors and Samurai can be devastating due to their attack bonuses. Leitis can also counter Serjeants, since their melee armor is useless against them.The Obuchs are in a similar situation. Since their attack removes armor, they will easily erase the advantage of the Serjeants. Despite having their bonus damage reduced, Cataphracts can still effectively deal with an army of Serjeants, due to the trample damage, and their bonus damage is still enormously high for Serjeants, and finally, Battle Elephants and War Elephants destroy them due to their very high hit points, attack and trample damage.'

            ],

            //Teutons - Teutonic Knight
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'teutonicknight',
                'uniticon' => '/uniqueuniticons/teutonic_knight.png',
                'unitname' => 'Teutonic Knight',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Infantry, Unique ',
                'civcode' => 'teuton',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '130',
                'attack' => '7, melee',
                'attackbonus' => '+9 vs Ship +9 vs Fishing Ship +7 vs Building +4 vs Ram',
                'rateoffire' => '3',
                'armormelee' => '0',
                'armorpierce' => '6',
                'armorclass' => ', Unique ',
                'movement' => '1.54',
                'lineofsight' => '8',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '85 food, 43 gold',
                'traintime' => '25 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Vikings1 - Berserk
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'berserk',
                'uniticon' => '/uniqueuniticons/berserk.png',
                'unitname' => 'Berserk',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Infantry, Unique ',
                'civcode' => 'viking',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '130',
                'attack' => '7, pierce',
                'attackbonus' => '+9 vs Ship +9 vs Fishing Ship +7 vs Building +4 vs Ram',
                'rateoffire' => '3',
                'armormelee' => '0',
                'armorpierce' => '6',
                'armorclass' => ', Unique ',
                'movement' => '1.54',
                'lineofsight' => '8',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '85 food, 43 gold',
                'traintime' => '25 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Italians2 - Condottiero 
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'condottiero',
                'uniticon' => '/uniqueuniticons/condottiero.png',
                'unitname' => 'Condotierro',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Infantry, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'italian',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ]
        ]);

        //--~ARCHER~--// -- (Chinese1 - )
        DB::table('uniqueunitsdata')->insert([

            //Britons - Longbowman
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'longbowman',
                'uniticon' => '/uniqueuniticons/longbowman.png',
                'unitname' => 'Longbowman',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Archer, Unique ',
                'civcode' => 'briton',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Chinese - Chu Ko Nu
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'chukonu',
                'uniticon' => '/uniqueuniticons/chu_ko_nu.png',
                'unitname' => 'Chu Ko Nu',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Archer, Unique ',
                'civcode' => 'chinese',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Incas2 - Slinger
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'slinger',
                'uniticon' => '/uniqueuniticons/slinger.png',
                'unitname' => 'Slinger',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Archer, Unique ',
                'civcode' => 'inca',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Italians1 - Genoese Crossbowman
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'genoesecrossbowman',
                'uniticon' => '/uniqueuniticons/genoese_crossbowman.png',
                'unitname' => 'Genoese Crossbowman',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Archer, Unique ',
                'civcode' => 'italian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Mayans - Plummed Archer
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'plumedarcher',
                'uniticon' => '/uniqueuniticons/plumed_archer.png',
                'unitname' => 'Plumed Archer',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Archer, Unique ',
                'civcode' => 'mayan',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Vietnamese1 - Rattan Archer
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'rattanarcher',
                'uniticon' => '/uniqueuniticons/rattan_archer.png',
                'unitname' => 'Rattan Archer',
                'introduced' => 'Age of Empires II: Rise of Rajas',
                'type' => 'Archer, Unique ',
                'civcode' => 'vietnamese',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],
            //Vietnamese2 - Imperial Skirmisher - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'imperialskirmisher',
                'uniticon' => '/uniqueuniticons/imperial_skirmisher.png',
                'unitname' => 'Imperial Skirmisher',
                'introduced' => 'Age of Empires II: Rise of Rajas',
                'type' => 'Archer ',
                'civcode' => 'vietnamese',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '35',
                'attack' => '4, melee',
                'attackbonus' => '+5 vs Archer
                +3 vs Spearman
                +3 vs Cavalry archer',
                'rateoffire' => '3',
                'armormelee' => '0',
                'armorpierce' => '5',
                'armorclass' => 'Archer ',
                'movement' => '0.96',
                'lineofsight' => '7',
                //Unit Training
                'trainedat' => 'Archery Range',
                'traincost' => '25 food, 35 wood',
                'traintime' => '22 seconds',
                //Unit Further Statistic
                'strong' => 'Archers, Pikemen',
                'weak'  => 'Melee units, siege units',
                //Unit Description
                'unitdes' => 'Stronger than Elite Skirmisher. Ranged unit equipped with armor vs. archer attacks.',
                //Unit Strategy
                'unitstrategy' => 'Skirmishers are very weak to everything except archers, some gunpowder units like Hand Cannoneers and Conquistadors, and Pikemen (to a degree). With a weak and slow attack, as well as a minimum range, they deal almost no damage to infantry and cavalry. Nevertheless, their attack bonus against archers can make them valuable against any archer-using opponent, especially if the player\'s civilization bonuses benefit Skirmishers.
                Unlike its predecessor, Imperial Skirmishers are better suited for range support with better stats (1 more attack, 1 more pierce armor, slightly better accuracy and 1 more bonus damage for archers and cavalry archers) especially in the late Imperial Age. As the Imperial Skirmishers cost no gold, they are considered trash units and as such they become especially important in the late game when gold becomes scarce and players have to rely on wood and food economy. The Imperial Skirmisher also have a +3 attack bonus against Pikemen, allowing groups of them to quickly take out approaching Pikemen, but their minimum range and low melee armor still makes them vulnerable.
                As the team bonus for the Vietnamese, Imperial Skirmishers can only be trained if the player has a Vietnamese ally or are playing with the Vietnamese in the same fashion Condottieri and Genitours are trained, but unlike the other shared units it must be researched for each allied player at the Archery Range. As some other civilizations have bonuses for Skirmishers and Elite Skirmishers those buffs will also apply to the Imperial Skirmisher and this will give to the team an edge in late Imperial Age at "Trash Wars". It should also be noted that as Elite Skirmishers count as a generic unit, it is unaffected by the Samurai\'s attack bonus.
                Unfortunately, the Turks cannot use the Imperial Skirmisher because it is an upgrade of the Elite Skirmisher, which the Turks have no access to. In contrast, other civilizations can put these units to great use, especially the Aztecs, Britons, Byzantines, Incas, Lithuanians and Mayans; the first in particular, having somewhat lackluster Arbalesters, whereas Atlatl-boosted Imperial Skirmishers are superior to most domains, including cost efficiency, training time, and bonuses.
                The Spanish and Bulgarians appreciate the Imperial Skirmisher, due to lacking the Crossbowman.'

            ]
        ]);

        //--~CAVALRY~--// -- ()
        DB::table('uniqueunitsdata')->insert([
            //Bulgarians - Konnik - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'konnik',
                'uniticon' => '/uniqueuniticons/konnik.png',
                'unitname' => 'Konnik',
                'introduced' => 'Age of Empires II: The Last Khans',
                'type' => 'Cavalry, Infantry (when dismounted), Unique ',
                'civcode' => 'bulgarian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '100(mounted), 45(dismounted)',
                'attack' => '12, melee',
                'attackbonus' => '',
                'rateoffire' => '2.4',
                'armormelee' => '2, 0 (Dismounted)',
                'armorpierce' => '1, 0 (Dismounted)',
                'armorclass' => 'Cavalry, Infantry (when dismounted), Unique ',
                'movement' => '1.35',
                'lineofsight' => '5',
                //Unit Training
                'trainedat' => 'Castle, Krepost',
                'traincost' => '60 food, 70 gold',
                'traintime' => '19 seconds',
                //Unit Further Statistic
                'strong' => 'Infantry, archers (Mounted), Villagers, siege weapons (Mounted), Light Cavalry, Monks (after Heresy)',
                'weak'  => 'Archers (Dismounted), Boyars, Pikemen (Mounted), Kamayuks, Berserks, Genoese Crossbowmen, Teutonic Knights, Mamelukes, Camel Riders (Mounted), War Elephants, Battle Elephants, ranged siege weapons (Dismounted), Obuch, Samurai, Cataphract (Dismounted), Monks (before Heresy, especially without Teuton ally), Flemish Militias',
                //Unit Description
                'unitdes' => 'Bulgarian unique cavalry unit that fights on as infantry when felled.',
                //Unit Strategy
                'unitstrategy' => 'Stat-wise with Stirrups, a non-Elite Konnik is comparable to a Knight (better in melee fights, worse against ranged units), while a fully upgraded Elite Konnik is better than a Cavalier. This makes the Konnik incredible as a shock troop, able to raid, soak damage, and disrupt enemy Villages, destroy colonies, or diminish an enemy garrison. In addition, they turn to infantry when killed, so for any Bulgarian player, they should prefer them over the Knight line in most situations.
                It takes 3 seconds for a Dismounted Konnik to get back into the fight after being dismounted. The unit cannot be interacted with during this animation, as technically the Dismounted Konnik is spawned only after the animation has been completed.
                As an infantry unit, Dismounted Konnik is affected by infantry-related technologies (Blacksmith upgrades, Arson, Squires) and receives a +4 anti-building attack bonus. The infantry non-Elite version is a little weaker than a Long Swordsman, with the exception of the attack. The Elite dismounted version can be seen as a frail Two-Handed Swordsman with a slightly better attack value but slower attack rate.
                Konniks can be created at Kreposts, and for this reason Bulgarian players must use a combination of both for a "Krepost Drop".
                The Castle Age unique technology Stirrups gives them an attack speed boost of 33%, which drops the mounted version\'s ROF from 2.4 (slowest melee attack in cavalry) to 1.8 which is the same as that of Knights and Cavaliers, their standard counterparts, and better than that of a Paladin (1.9). Stirrups does not affect the dismounted version, which makes it the slowest attacking infantry unit outside of the trash Spearman line (3). The dismounted Konniks are also special in the infantry branch, being tied with the Militia for being the only non-specialised unit, to not have an attack bonus against Eagle units.
                They also have a 5 tile LOS, which is better than Knights, Cavaliers and Long Swordsmen, which have 4, and the same as Paladins, Two-Handed Swordsmen and Champion, all of which are its standard counterparts in two forms. They also have the same speed as all of their counterparts.'
            ],

            //Burgundians1 - Coustiller - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'coustiller',
                'uniticon' => '/uniqueuniticons/coustiller.png',
                'unitname' => 'Coustiller',
                'introduced' => 'Age of Empires II: Dawn of Dukes',
                'type' => 'Cavalry, Unique ',
                'civcode' => 'burgundian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '115',
                'attack' => '8, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '1.9',
                'armormelee' => '2',
                'armorpierce' => '2',
                'armorclass' => 'Cavalry, Unique ',
                'movement' => '1.35',
                'lineofsight' => '5',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '55 food, 55 gold',
                'traintime' => '15 seconds',

                //Unit Further Statistic
                'strong' => 'Infantry, archers, Villagers, siege weapons, Cavalry Archers, Light Cavalry',
                'weak'  => '	Kamayuks, Genoese Crossbowmen, Mamelukes, Camel Riders, War Elephants, Heavy Cavalry, Halberdiers (if massed), Monks (if kept away)',
                //Unit Description
                'unitdes' => 'Burgundian unique cavalry unit which can charge its attack. Strong vs. infantry and archers. Weak vs. Camel Riders and Monks.',
                //Unit Strategy
                'unitstrategy' => 'The Coustillier can charge its attack up to +25 (+30 for Elite) melee damage (with base melee damage inflicted as well). The melee damage part of the charge attack can be lowered by melee armor if the latter is higher than base Coustillier attack (e.g. in the case of a non-Elite Coustillier versus a fully upgraded Elite Teutonic Knight, the resulting charge damage will be lower than 25).
                When trained, Coustilliers have their charge built up at maximum. Upon catching up with the enemy unit (i.e. entering the attack animation), it takes 0.6 sec for the Coustillier to inflict its first charged blow (marked with a unique attack animation) after which the animation switches to regular, and the Coustillier deals usual damage. It takes 40 seconds for the ability to be recharged for both Elite and non-Elite Coustillier. The Charge attack does not affect buildings and is not triggered when Coustillier is attacking them.
                One way to maximize the usefulness of its charge attack is by Hit-and-Run, and this way, Coustilliers are able to diminish even armies of Halberdiers if the timing of the charge is correct. This quirk makes Coustilliers extremely useful against slow-moving units as well; however, micromanagement is very important. Because of this, the best counters against Coustilliers are Camels, Paladins and Eagle Warriors to a degree, or by outnumbering them with Halberdiers. It is stated that the Monks can counter them, but Coustilliers can kill Monks in one hit with their charge attack. However, if a Monk successfully converts a Coustillier, the newly converted unit will attack their fellow cavalry with their charge, potentially ruining the momentum of the attack.
                If used for sustained attacks, Coustilliers are inferior to Cavaliers and Paladins, even if the Charge attack is taken into account. This is due to its inferior normal attack and rate of fire compared to the Knight-line. Also, Coustilliers have fewer hit points. Factoring in charge attacks in sustained combat, the Standard version has +1.19 attack and the Elite version has +1.42 attack. While the Coustillier can rival the Burgundian Cavalier (+5 HP), the Elite Coustillier steeply falls off compared to Paladin (+15 HP and +1 pierce armor; ability to retain value in sustained combat and against buildings), even before considering the cheap Paladin upgrade.
                Probably one of the best uses of the Coustillier is as a raiding unit, since its charge attack enables them to kill Villagers with two strikes (one for the Elite version), so a powerful strategy is to atract attention at another front so the enemy army is busy dealing with a distraction and then attack the back of the opponent settlement with the Coustilliers. The focus should be on the Villagers only, and not the buildings. This way, the player can diminish the opponent\'s economy very quickly.'
            ],

            //Burmese1 - Arambai
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'arambai',
                'uniticon' => '/uniqueuniticons/arambai.png',
                'unitname' => 'Arambai',
                'introduced' => 'Age of Empires II: Rise of the Rajas',
                'type' => 'Cavalry, Cavalry Archer, Unique',
                'civcode' => 'burmese',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Burmese2 - Battle Elephant --~-- SHARED
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'battleelephant',
                'uniticon' => '/uniqueuniticons/battle_elephant.png',
                'unitname' => 'Battle Elephant',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry, Elephant, Unique ',
                'civcode' => 'burmese',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Cumans2 - Steppe Lancer --~-- SHARED
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'steppelancer',
                'uniticon' => '/uniqueuniticons/steppe_lancer.png',
                'unitname' => 'Steppe Lancer',
                'introduced' => 'Age of Empires II: The Last Khans',
                'type' => 'Cavalry, Unique ',
                'civcode' => 'cuman',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Byzantines - Cataphract
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'cataphract',
                'uniticon' => '/uniqueuniticons/cataphract.png',
                'unitname' => 'Cataphract',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Cavalry, Unique ',
                'civcode' => 'byzantine',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Huns - Tarkan
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'tarkan',
                'uniticon' => '/uniqueuniticons/tarkan.png',
                'unitname' => 'Tarkan',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry, Unique ',
                'civcode' => 'hun',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Indians2 - Imperial Camel Rider
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'imperialcamelrider',
                'uniticon' => '/uniqueuniticons/imperial_camel_rider.png',
                'unitname' => 'Imperial Camel Rider',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Cavalry, Camel, Unique ',
                'civcode' => 'indian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Lithuanians - Leitis - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'leitis',
                'uniticon' => '/uniqueuniticons/leitis.png',
                'unitname' => 'Leitis',
                'introduced' => 'Age of Empires II: The Last Khans',
                'type' => 'Cavalry ',
                'civcode' => 'lithuanian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '13, melee',
                'attackbonus' => '',
                'rateoffire' => '1.9',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Cavalry, Unique ',
                'movement' => '1.4',
                'lineofsight' => '5',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '70 food, 50 gold',
                'traintime' => '20 seconds',

                //Unit Further Statistic
                'strong' => 'Melee units (especially Serjeants, Teutonic Knights, and Boyars).',
                'weak'  => 'Pikemen, Kamayuks, Genoese Crossbowmen, Mamelukes, Camel Riders, Monks, War Elephants, Samurais, large groups of archers.',
                //Unit Description
                'unitdes' => 'Lithuanian unique cavalry unit with attack that ignores armor.',
                //Unit Strategy
                'unitstrategy' => 'The Leitis is a variation on the Knight line, with more Line of Sight in the Castle Age, less hit points in Imperial Age, a cheaper gold cost but slightly more food cost, more speed, less armor, and higher attack and the ability to bypass enemy armor.
                Aside from the extra 150 food at the beginning, Lithuanians have no real economy bonus that helps them in the Castle Age, and while an early rush into fast Castle is a viable strategy, in most cases the player would follow this up with Knights rather than Leiciai. Most of the time, the player is better off focusing on Knights until the late Castle Age.
                If the player starts with a Castle (like in the Regicide game mode) or the game reaches such a point, Leiciai generally outperform Knights in a few ways: in the Castle Age, Leiciai beat generic Knights one-on-one and in the Imperial Age, they are cheaper and much quicker to upgrade.
                However, if player\'s economy is thriving, and the player manages to create at least two Castles, they may prefer the Leitis over the Knight line, as their attack ignores armor, so they are able to easily defeat well-armored units like the Serjeant, the Teutonic Knight or the Boyar, leaving units like these basically "naked". The special attack of the Leitis also has the advantage that it negates every armor upgrade at the Blacksmith researched by its opponents, bonuses regarding melee armor, or unique technologies that improve melee armor, so if an opponent researches all of these upgrades, it will be a waste of resources that could be better spent on more units or attack upgrades, rather than increasing armor. For the Leitis itself, the increased attack upgrade from the Blacksmith will amplify their already powerful anti-armor attack.
                A common dilemma for Lithuanian players in the late game is whether to use Paladins or Elite Leiciai, as both are affected by the Relic bonus. This depends on the situation and available resources. If it is a 1v1 match and there are not large amounts of archers, or if there are some specific match-ups (e.g. durable melee-armor units), the Leitis should be preferred, since their attack deals much higher damage and can decimate the enemy army much quicker. But in team games and particularly in a pocket position as well as against large groups of archers and to destroy enemy bases, the player should prefer Paladins instead, since their hit points and pierce armor are higher, and they can still also deal a fair amount of damage, which can be high as 20 with all four Relics collected.
                As a cavalry unit itself, the Leitis can be cost-effectively countered by any of the common anti-cavalry counters, such as Halberdiers but with just two Relics, the Elite Leitis can kill Halberdiers in three hits, faster than most units in the game, like the Elite War Elephant. Camel Riders can also pose a threat to them, since they have high attack bonus against cavalry and are tankier than Halberdiers, although in some cases, Leiciai can actually survive a combat and trade cost-effectively against Camel Riders, due to the latter\'s slightly lower attack speed and higher gold cost than Leiciai. Leiciai still will not fare well against Battle Elephants and Imperial Camel Riders, so it is advisable to avoid these match-ups. Also, they can be defeated by other unique units such as the Samurai, Kamayuk, Genoese Crossbowman, Mameluke and War Elephant, though they will receive a lot of damage from Leiciai. Leiciai can also suffer against large groups of foot archers, Cavalry Archers and even Hand Cannoneers due of having less hit points and pierce armor than a Paladin, even when they are faster than them. For this reason, using Leiciai in conjunction with the fast and armored Lithuanian Skirmishers is neccesary when facing archer civilizations. Due to Leiciai\'s attacks ignoring any melee armor, their attacks are not amplified by the negative armor of rams, but that is not an issue because Leiciai have a better attack than the Knight line anyway.
                Leiciai are more of a 1vs1 unit because of less varied enemy army (it will be either cavalry-focused or archer-focused) and less reliance on gold. They are less preferred in team games, due to gold being more easily available and the Paladin being more well rounded. Also, Relics are easier to get, since they are more in number (Elite Leiciai usually do not offer much improvement after two Relics except against buildings).'
            ],

            //Magyars - Magyar Huszar
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'magyarhuszar',
                'uniticon' => '/uniqueuniticons/magyar_huszar.png',
                'unitname' => 'Magyar Huszar',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Cavalry, Unique ',
                'civcode' => 'magyar',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Persians - War Elephant
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'warelepahnt',
                'uniticon' => '/uniqueuniticons/war_elephant.png',
                'unitname' => 'War Elephant',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Cavalry, Elephant, Unique ',
                'civcode' => 'persian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Saracens - Mameluke
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'mameluke',
                'uniticon' => '/uniqueuniticons/mameluke.png',
                'unitname' => 'Mameluke',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry, Camel, Unique',
                'civcode' => 'saracen',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Slavs - Boyar
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'boyar',
                'uniticon' => '/uniqueuniticons/boyar.png',
                'unitname' => 'Boyar',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Cavalry, Unique ',
                'civcode' => 'slavic',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],

            //Tatars1 - Keshik - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'keshik',
                'uniticon' => '/uniqueuniticons/keshik.png',
                'unitname' => 'Keshik',
                'introduced' => 'Age of Empires II: The Last Khans',
                'type' => 'Cavalry ',
                'civcode' => 'tatar',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '110',
                'attack' => '9, melee',
                'attackbonus' => '',
                'rateoffire' => '1.9',
                'armormelee' => '1',
                'armorpierce' => '2',
                'armorclass' => 'Cavalry, Unique Unit',
                'movement' => '1.4',
                'lineofsight' => '5',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 40 gold',
                'traintime' => '16 seconds',
                //Unit Further Statistic
                'strong' => 'Infantry, Archers, Villagers, Siege weapons, Cavalry Archers, Light Cavalry',
                'weak'  => '	Boyars, Pikemen, Kamayuks, Berserks, Genoese Crossbowmen, Teutonic Knights, Mamelukes, Camel Riders, Monks, War Elephants, Knights',
                //Unit Description
                'unitdes' => 'Tatar unique cavalry unit that generates gold when fighting other units.',
                //Unit Strategy
                'unitstrategy' => 'Keshiks are an interesting case: a medium cavalry unit similar to a Cavalier with an economic quirk. Their high attack and hit points (for a Castle Age unit) and ability to generate gold while attacking make them excellent raiding units. A powerful strategy is to attract the opponent\'s attention with Cavalry Archers or Steppe Lancers and hit-and-run their military while a group of Keshiks raid their economy. The gold generated can be modest, but the player still earns 3 gold per enemy Villager killed, which is definitely favorable. Usually, population space can be better spent on Cavalry Archers, Steppe Lancers, or siege units. The exception lies in Town Center snipes and raids on the opponent\'s trade line, where the Keshik has the potential to generate huge sums of gold, or in massive pitched battles, especially when there are no cavalry counters on the field.
                For a Town Center snipe in the Castle Age, a group of 14 Keshiks can easily take down an unguarded, generic, fully-garrisoned Town Center. However, the Tatar player should not destroy the Town Center completely. Once the Villagers are ejected from the Town Center, the Keshiks should target them instead. A Town Center with 15 Villagers garrisoned within means 45 gold with 14 units in a split second, as well as the damage inflicted on the opponent\'s economy.
                Keshiks should be preferred over knights in the early Castle Age for a rush (if the player can afford a Castle or starts with it), as they generate gold when attacking an enemy unit while also being cheaper. They can also make a great difference in the late Imperial Age, especially in 1 vs 1 or FFA games, as their gold generation may help to sustain late game gold economy and delay the "trash wars" a bit (but the player should still take Relics and support Keshiks with trash units).
                Soon after release, the Keshik was changed from a heavy cavalry to a medium cavalry unit. The difference between the two is attack (armed), whereas both are usually equally armored. The reason for this may be because it was a \'Paladin\' at the Castle for a civilization (Tatars), which lacks the upgrade, similar to the case of Boyars and Slavs. Paladins and equivalents are not a popular unit in 1vs1 Random Map games due to the scarcity of gold. While the Boyar packs a lot of punch with its extra melee armor, making it unique in melee combat, the Keshik was just a weaker (-30 HP, -1 armor) and more expensive (+5G) Paladin at the Castle. The unit was overhauled in the next patch to give it a unique and viable role.
                The Keshik is slightly faster than a Knight, but this speed advantage allows them to keep up with all mounted archers, which should be the ideal composition for Tatars in late-game in presence of gold. The Keshik being a medium cavalry, it is still slower than both Camels and Light Cavalry.
                While the melee fight of a Cavalier and Keshik can go either way, the player should prefer the Keshik because of its higher HP and pierce armor, making it the more durable unit in a variety of situations, most importantly raiding. This is ignoring the facts that it is cheaper in gold as well as generates gold. Another factor favoring the Keshik is the extra line of sight radius over non-Frank Cavaliers, equaling non-Frank Paladins\'.
                The Elite Keshik faces a lot of competition in the Tatar technology tree. At the Stable, they have Hussars (which have the same armor as Keshiks due to a unique technology), Elite Steppe Lancers, Heavy Camel Riders, and Cavaliers. At the Castle, the superior Tatar Trebuchets demand work time to be created. The player should use their decision-making to decide which units need to be created, since the Trebuchets can be replaced by perfectly viable Siege Rams at close range.
                The specific drawback of Keshiks compared to Paladins is the lower melee attack, which becomes a huge factor in razing Castles and Kreposts. Nonetheless, Tatars have quite potent siege.
                Even being a very cost-effective cavalry unit, they quickly fall to any anti-cavalry unit or stronger units like Paladins, Teutonic Knights, Samurais, Boyars, Konniks, Leitis, Battle Elephants and War Elephants, making the use of other units to protect Keshiks a must.'

            ],

            //Poles2 - Winged Hussar 
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'wingedhussar',
                'uniticon' => '/uniqueuniticons/winged_hussar.png',
                'unitname' => 'Winged Hussar',
                'introduced' => 'Age of Empires II: Dawn of Dukes',
                'type' => 'Cavalry, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'polish',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ]
        ]);

        //--~CAVALRY ARCHER~--// -- (Cumans1 - Mongol1)
        DB::table('uniqueunitsdata')->insert([
            //Berbers1 - Camel Archer
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'camelarcher',
                'uniticon' => '/uniqueuniticons/camel_archer.png',
                'unitname' => 'Camel Archer',
                'introduced' => 'Age of Empires II: The African Kingdoms',
                'type' => 'Cavalry Archer, Camel',
                'civcode' => 'berber',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],
            //Berbers2 - Genitour --~-- SHARED
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'genitour',
                'uniticon' => '/uniqueuniticons/geenitour.png',
                'unitname' => 'Genitour',
                'introduced' => 'Age of Empires II: The African Kingdoms',
                'type' => 'Cavalry Archer, Skirmisher',
                'civcode' => 'berber',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Cumans - Kipchak - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'kipchak',
                'uniticon' => '/uniqueuniticons/kipchak.png',
                'unitname' => 'Kipchak',
                'introduced' => 'Age of Empires II: The Last Khans',
                'type' => 'Cavalry Archer',
                'civcode' => 'cuman',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '40',
                'attack' => '4, pierce with extra 2 projectiles',
                'attackbonus' => '+1 vs Spearman',
                'rateoffire' => '2.2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Archer, Cavalry, Cavalry Archer, Unique ',
                'movement' => '1.4',
                'lineofsight' => '6',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => 'Slow and non-ranged units, Rams',
                'weak'  => 'Kamayuks, Genoese Crossbowmen, Huskarls, Skirmishers, Eagle Warriors, Genitours, Mangonels, Scorpions, camel units, Rattan Archers',
                //Unit Description
                'unitdes' => 'Cuman unique cavalry archer with rapid-fire attack.',
                //Unit Strategy
                'unitstrategy' => 'Kipchaks are great harassers, especially if massed, as their extra arrows enables hit-and-run arrow volleys. They perform exceptionally well against slow-moving units. As their secondary arrows deal 0 melee damage (in addition to their regular 3 pierce damage), they are a great counter against Rams.
                Unlike other cavalry archers, and in a similar fashion to the Chu Ko Nu, they can still fare fairly well against most anti-archer units. This is because most anti-archer units (such as Skirmishers) can survive archer fire due to their pierce armor. But due to the high number of arrows fired, the Kipchak (especially Elite) still deals a considerable amount of damage, especially to Rams. However, they should still try to avoid anti-archer units in general. They are also weak against camels, especially the Berber Camel Archer, and other anti-Cavalry units such as Kamayuks and Halberdiers, but they can hit-and-run them if properly microed.
                Cuman players should prefer the Kipchak over regular Cavalry Archers in most circumstances, unless the player does not have enough Castles to produce a sizeable army of them. Not only do they have a better attack, but Kipchaks also cost less gold than regular Cavalry Archers. However, Cavalry Archers have more HP than Kipchaks, and may be used in circumstances in which the player need to soak damage instead of harassing the opponent. Also, they are affected by Steppe Husbandry which boosts their creation speed, while the Kipchaks are not affected. Kipchaks work well if they are paired with Light Cavalry (which only cost food, so the wood and gold can be spent on Kipchaks, and Light Cavalry can be used as "cannon fodder" for the front lines, as well affected by Steppe Husbandry) or Steppe Lancers (which can deal very effectively with most anti-archer units that Kipchaks may have trouble with, especially if massed).
                Elite Kipchaks can be considered a semi-shared unique unit and a "semi-trash" unit, since they become available at the Castle for free to every allied player after the Cuman player researches Cuman Mercenaries, but limited to 10 of them. Naturally, if an allied civilization has further bonuses and unique upgrades for Cavalry or Cavalry Archers, those will apply to their ten Elite Kipchaks.
                Cuman Mercenaries stacks up, so it can facilitate the production of the Elite Kipchak even on a team entirely composed by Cumans. However, in free for all games or 1 vs 1 matches, it may be preferable to just train Kipchaks the regular way in several circumstances, unless the player needs Elite Kipchaks at the ready (not the regular ones) and has not researched the elite upgrade.'
            ],

            //Khmer - Ballista Elephant
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'balistaelephant',
                'uniticon' => '/uniqueuniticons/ballista_elephant.png',
                'unitname' => 'Ballista Elephant',
                'introduced' => 'Age of Empires II: Rise of the Rajas',
                'type' => 'Cavalry Archer, Elephant, Siege, Unique ',
                'civcode' => 'khmer',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Koreans1 - War Wagon
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'warwagon',
                'uniticon' => '/uniqueuniticons/war_wagon.png',
                'unitname' => 'War Wagon',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry Archer, Siege, Unique ',
                'civcode' => 'korean',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Indians - Elephant Archer
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'elephantarcher',
                'uniticon' => '/uniqueuniticons/elephant_archer.png',
                'unitname' => 'Elephant Archer',
                'introduced' => 'Age of Empires II: The Forgotten',
                'type' => 'Cavalry Archer, Elephant, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'indian',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',

                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Mongols - Mangudai
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'mangudai',
                'uniticon' => '/uniqueuniticons/mangudai.png',
                'unitname' => 'Mangudai',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry Archer, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'mongol',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ]
        ]);

        //--~OTHERS~--// -- (Spanish2 - Tatars2)
        DB::table('uniqueunitsdata')->insert([
            //Spanish2 - Missionary
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'missionary',
                'uniticon' => '/uniqueuniticons/missionary.png',
                'unitname' => 'Missionary',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry, Monk, Unique ',
                'civcode' => 'spanish',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Tatars2 - Flaming Camel - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'flamingcamel',
                'uniticon' => '/uniqueuniticons/flaming_camel.png',
                'unitname' => 'Flaming Camel',
                'introduced' => 'Age of Empires II: The Last Khans',
                'type' => 'Camel, Unique ',
                'civcode' => 'tatar',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '55',
                'attack' => '20, melee',
                'attackbonus' => '+100 vs Building
                +50 vs Cavalry
                +50 vs Camel
                +130 vs War elephant',
                'rateoffire' => '0',
                'armormelee' => '0',
                'armorpierce' => '0',
                'armorclass' => 'Camel, Unique Unit',
                'movement' => '1.3',
                'lineofsight' => '4',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '75 food, 30 gold',
                'traintime' => '20 seconds',
                //Unit Further Statistic
                'strong' => 'Buildings, Cavalry especially Elephants',
                'weak'  => 'Archers, Castles, towers, Monks, infantry',
                //Unit Description
                'unitdes' => 'Incendiary camel loaded with flammable hay and brush. Strong vs. mounted units, especially elephants. Weak vs. archers and infantry. Self-destructs when used.	',
                //Unit Strategy
                'unitstrategy' => 'It is advisable to use Flaming Camels against large contingents of cavalry, despite the fact that they explode when used. Their bonus damage enables them to kill most kinds of cavalry in two or three blows while also dealing splash damage to all enemy units nearby.
                Flaming Camels are probably one of the best counters against packed groups of War Elephants, Battle Elephants, Ballista Elephants, and Elephant Archers, with each blow dealing 200 total damage against said units (before armor and blast distance are taken into account). So, it is highly viable for a Tatar player to make use of Flaming Camels against civilizations that have access to an elephant unit. When used against cavalry, it is advisable to support them with Heavy Camel Riders so they can finish cavalry that survive the detonation.
                Flaming Camels perform moderately well against buildings, as they deal +100 bonus damage to the Building armor class. Being a siege weapon, they must be used as a support unit for weakening or finishing an opponent settlement, but they are not as effective as Trebuchets and other siege weapons. However, they can be used in conjunction with siege units like Trebuchets, and cavalry like Keshiks, Cavaliers or Steppe Lancers, to make haste in leveling towns and buildings. This is specially useful in game modes like Sudden Death, or even Regicide.
                Like Petards, Flaming Camels are a single-use unit. Nevertheless, Flaming Camels are inferior to them in the in an anti-building role. And like Petards, they also cost gold and have only one use: their course of action must be chosen wisely and/or with the adequate support of other units. As expected, Pikemen and Elite Skirmishers can be cost-effective against them.
                Flaming Camels have no pierce armor and do not benefit from armor upgrades, so they are destroyed quickly by ranged units. Researching Husbandry can greatly compensate this, and pose a big threat towards big groups of cavalry archers when left unsupervised by the opponent. This is what gives them an edge against Petards as a unit killer (in a fashion like the Heavy Demolition Ship, but landbased). Similarly, making use of the Flaming Camels\' speed overshadows their relative ineffectiveness against buildings, minimizing arrow fire taken from defensive structures like Castles, thus avoiding wasteful deaths.
                Last but not least, unlike other suicide units, it should be noted that Flaming Camels lack high base attack and/or bonus against siege units. This missed detail can catch unaware players off-guard when trying to use them against rams and other non-suicide siege units'
            ]
        ]);

        //--~GUNPOWDER&&SIEGE~--// -- ()
        DB::table('uniqueunitsdata')->insert([
            //Bohemians1 - Hussite Wagon - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'hussitewagon',
                'uniticon' => '/uniqueuniticons/hussite_wagon.png',
                'unitname' => 'Hussite Wagon',
                'introduced' => 'Age of Empires II: Dawn of Dukes',
                'type' => 'Gunpowder, Siege ',
                'civcode' => 'bohemian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '17, pierce with 2 extra projectiles',
                'attackbonus' => '+3 vs Ram
                +1 vs Building',
                'rateoffire' => '3.45',
                'armormelee' => '0',
                'armorpierce' => '7',
                'armorclass' => 'Hussite Wagon, Siege, Gunpowder, Unique ',
                'movement' => '0.85',
                'lineofsight' => '8',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '110 wood, 70 gold',
                'traintime' => '21 seconds',

                //Unit Further Statistic
                'strong' => '	Infantry units, Archer units',
                'weak'  => 'Mangonel-line and Bombard Cannon-line, Knight-line, Throwing Axemen, Huskarls, Magyar Huszars, Samurai, Condottieri, Mangudai',
                //Unit Description
                'unitdes' => 'Bohemian unique siege unit. Units behind it receive 50% less damage from incoming projectiles.',
                //Unit Strategy
                'unitstrategy' => 'The Hussite Wagon can be seen as a "mobile wall" due to its protection effect. When selecting a mixed group of units that includes them and placing them in a formation, the Hussite Wagons will always be placed in front of other ranged units, but behind melee units; this, of course, is done for facilitating its use. Because of this quirk alone, this unit is a great pairing for Bohemian ranged units, as it serves as protection from ranged attacks. In this regard, the Box formation may be the most useful when using Hussite Wagons paired with ranged units. Of course, the player must have a good number of them in order to cover all possible gaps in the box, and also mix both ranged siege units (such as Houfnices) and archers or Hand Cannoneers due to how the Box formation works, and maybe in some cases Monks, which will be at the center of the box. Another way which requires more micromanagement is to make the Hussite Wagons use the box Formation while archers and siege units use the line formation (which is more compact, so the player can protect more units with Hussite Wagons) and try to maintain the archers or siege units at the center of the Hussite Wagon box. Another thing that also makes the unit good in its "mobile wall" role is its collision size, which enables this unit to block spaces.'
            ],
            //Bohemians2 - Houfnice - DONE
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'houfnice',
                'uniticon' => '/uniqueuniticons/houfnice.png',
                'unitname' => 'Houfnice',
                'introduced' => 'Age of Empires II: Dawn of Dukes',
                'type' => 'Gunpowder, Siege ',
                'civcode' => 'bohemian',
                'age' => 'Castle Age',
                //Unit Statistics
                'hitpoint' => '90',
                'attack' => '55, melee',
                'attackbonus' => '+250 vs Building
                +55 vs Ship
                +55 vs Fishing Ship
                +55 vs Stone defense
                +20 vs Siege weapon
                +55 vs Hussite Wagon',
                'rateoffire' => '6.5',
                'armormelee' => '2',
                'armorpierce' => '6',
                'armorclass' => 'Siege, Gunpowder, Unique ',
                'movement' => '0.7',
                'lineofsight' => '14',
                //Unit Training
                'trainedat' => 'Siege Workshop',
                'traincost' => '225 wood, 225 gold',
                'traintime' => '56 seconds',

                //Unit Further Statistic
                'strong' => 'Buildings, units in dense formations, slow moving units, Scorpions, archers, Siege Onagers, Trebuchets',
                'weak'  => 'Melee units at close range especially Condottieri and Magyar Huszars',
                //Unit Description
                'unitdes' => 'Bohemian unique siege unit. Siege weapon with long range.',
                //Unit Strategy
                'unitstrategy' => 'Compared with a regular Bombard Cannon, the Houfnice has +10 hit points, +1 pierce armor, +15 melee damage, +0.35 tiles of blast radius (0.85), +15 bonus damage vs. ships, stone defenses, and Hussite Wagons, and +50 bonus damage vs. buildings.
                The Houfnice can take up to 23 fully upgraded Arbalester bolts, compared to 16 for a Bombard Cannon. It also has a 70% larger blast radius, making it more effective against massed infantry and foot archers. It flips the trade against Siege Onagers, which kills the Houfnice in 2 shots (one shot if 4–5 extra Siege Onager projectiles hit the Houfnice with an attack order (not attack ground), depending on Chemistry) but only needs one Houfnice shot to be killed (guaranteed on attack ground). It is the other way around for ordinary Bombard Cannons.
                Its higher pierce armor also means it takes 1 damage from fully upgraded Elite Skirmishers, rather than 2 damage like a Bombard Cannon would.
                Although not defined in game, the firing arc of the Houfnice appears to strike much lower than that of a Bombard Cannon, and far lower than that of a Trebuchet. This allows Houfnice units to destroy moving siege weapons as long as they are directly in front of them; their cannonballs will strike the unit\'s hitbox and do full damage, never reaching their attack point.'
            ],

            //Portuguese1 - Organ Gun
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'prgangun',
                'uniticon' => '/uniqueuniticons/organ_gun.png',
                'unitname' => 'Organ Gun',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Gunpowder, Siege, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'portuguese',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ],
            //Spanish1 - Conquistador
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'conquistador',
                'uniticon' => '/uniqueuniticons/conquistador.png',
                'unitname' => 'Conquistador',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Cavalry, Gunpowder, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'spanish',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Turks - Janissary
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'janissary',
                'uniticon' => '/uniqueuniticons/janissary.png',
                'unitname' => 'Janissary',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Gunpowder, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'turkish',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ]
        ]);

        //--~WARSHIP~--// -- (Koreans2 - Portuguese2 - Vikings2)
        DB::table('uniqueunitsdata')->insert([
            //Koreans2 - Turtle Ship
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'turtleship',
                'uniticon' => '/uniqueuniticons/turtle_ship.png',
                'unitname' => 'Turtle Ship',
                'introduced' => 'Age of Empires II: The Conquerors',
                'type' => 'Warship, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'korean',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Vikings - Longboat
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'longboat',
                'uniticon' => '/uniqueuniticons/longboat.png',
                'unitname' => 'Lonngboat',
                'introduced' => 'Age of Empires II: The Age of Kings',
                'type' => 'Warship, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'viking',
                //Unit Statistics
                'hitpoint' => '130',
                'attack' => '7, pierce',
                'attackbonus' => '+9 vs Ship, +9 vs Fishing Ship, +7 vs Building, +4 vs Ram',
                'rateoffire' => '3',
                'armormelee' => '0',
                'armorpierce' => '6',
                'armorclass' => ', Unique ',
                'movement' => '1.54',
                'lineofsight' => '8',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '85 food, 43 gold',
                'traintime' => '25 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''
            ],

            //Portuguese2 - Caravel
            [
                //Informatiom
                'isOriginal' => true,
                'unitcode' => 'caravel',
                'uniticon' => '/uniqueuniticons/caravel.png',
                'unitname' => 'Caravel',
                'introduced' => 'Age of Empires II: The African Kingdoms',
                'type' => 'Warship, Unique ',
                'age' => 'Castle Age',
                'civcode' => 'portuguese',
                //Unit Statistics
                'hitpoint' => '50',
                'attack' => '10, melee',
                'attackbonus' => '+10 vs Infantry, +10 vs Condottiero, +2 vs Eagle Warrior, +2 vs Standard building',
                'rateoffire' => '2',
                'armormelee' => '1',
                'armorpierce' => '1',
                'armorclass' => 'Infantry, Unique Unit',
                'movement' => '1',
                'lineofsight' => '3',
                //Unit Training
                'trainedat' => 'Castle',
                'traincost' => '60 food, 30 gold',
                'traintime' => '11 seconds',
                //Unit Further Statistic
                'strong' => '',
                'weak'  => '',
                //Unit Description
                'unitdes' => '',
                //Unit Strategy
                'unitstrategy' => ''

            ]

        ]);
    }
}
