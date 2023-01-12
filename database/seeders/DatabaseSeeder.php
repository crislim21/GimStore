<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'Test User',
            'email' => 'cris@gmail.com',
            'phonenumber' => '08123456789',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'username' => 'Test User 2 ',
            'email' => 'cris2@gmail.com',
            'phonenumber' => '081234567891',
            'password' => bcrypt('password'),
        ]);

        // Game::create([
        //     'title' => '',
        //     'description' => '',
        //     'image' => '/game-images/',
        //     'platform' => 'Windows',
        //     'price' => ,
        // ]);

        Game::create([
            'title' => 'Elden Ring',
            'description' => 'THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.',
            'image' => '/game-images/elden.jpg',
            'developer' => 'FromSoftware Inc.',
            'publisher' => 'FromSoftware Inc., Bandai Namco Entertainment',
            'price' => 600000,
        ]);

        Game::create([
            'title' => 'Call of Duty®: Modern Warfare® II',
            'description' => 'Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141.',
            'image' => '/game-images/cod.jpg',
            'developer' => 'Infinity Ward, Raven Software, Beenox, Treyarch, High Moon Studios, Sledgehammer Games, Activision Shanghai, Demonware, Toys for Bob',
            'publisher' => 'Activision',
            'price' => 1025000,
        ]);

        Game::create([
            'title' => 'Crisis Core -Final Fantasy VII- Reunion',
            'description' => 'CRISIS CORE -FINAL FANTASY VII- REUNION is a remaster of CRISIS CORE featuring updated graphics, combat systems and soundtrack. Follow the tale of SOLDIER operative Zack Fair, as he discovers the secrets of Shinras dark experiments.',
            'image' => '/game-images/header.jpg',
            'developer' => 'Square Enix, TOSE CO., LTD.',
            'publisher' => '
            Square Enix',
            'price' => 649000,
        ]);

        Game::create([
            'title' => 'Sea of Thieves',
            'description' => 'Sea of Thieves offers the essential pirate experience, from sailing and fighting to exploring and looting  everything you need to live the pirate life and become a legend in your own right. With no set roles, you have complete freedom to approach the world, and other players, however you choose.',
            'image' => '/game-images/sot.jpg',
            'developer' => 'Rare Ltd',
            'publisher' => 'Xbox Game Studios',
            'price' => 170000,
        ]);

        Game::create([
            'title' => 'EA SPORTS™ FIFA 23',
            'description' => 'Experience the excitement of the biggest tournament in football with EA SPORTS™ FIFA 23 and the mens FIFA World Cup™ update, available on November 9 at no additional cost!',
            'image' => '/game-images/fifa.jpg',
            'developer' => 'EA Canada & EA Romania',
            'publisher' => 'Electronic Arts',
            'price' => 759000,
        ]);

        Game::create([
            'title' => 'Genshin Impact',
            'description' => 'Embark on a journey across Teyvat to find your lost sibling and seek answers from The Seven — the gods of each element. Explore this wondrous world, join forces with a diverse range of characters, and unravel the countless mysteries that Teyvat holds...',
            'image' => '/game-images/genshin.jpeg',
            'developer' => 'COGNOSPHERE PTE. LTD.',
            'publisher' => 'COGNOSPHERE PTE. LTD.',
            'price' => 0,
        ]);

        Game::create([
            'title' => 'The Elder Scrolls Online',
            'description' => 'The Elder Scrolls Online is a massively multiplayer online role-playing game (MMORPG) developed by ZeniMax Online Studios and published by Bethesda Softworks. It was released for Microsoft Windows and OS X in April 2014, and for PlayStation 4 and Xbox One in June 2015.',
            'image' => '/game-images/elderscroll.png',
            'developer' => 'ZeniMax Online Studios',
            'publisher' => 'Bethesda Softworks',
            'price' => 266000,
        ]);

        Game::create([
            'title' => 'Marvels Spider-Man Remastered',
            'description' => 'In Marvel’s Spider-Man Remastered, the worlds of Peter Parker and Spider-Man collide in an original action-packed story. Play as an experienced Peter Parker, fighting big crime and iconic villains in Marvel’s New York. Web-swing through vibrant neighborhoods and defeat villains with epic takedowns.',
            'image' => '/game-images/spider.jpg',
            'developer' => 'Insomniac Games, Nixxes Software',
            'publisher' => 'PlayStation PC LLC',
            'price' => 879000,
        ]);

        Game::create([
            'title' => 'God of War: Ragnarok',
            'description' => 'His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same.',
            'image' => '/game-images/gof.jpg',
            'developer' => 'Santa Monica Studio',
            'publisher' => '
            PlayStation PC LLC',
            'price' => 800000,
        ]);

        Game::create([
            'title' => 'Detroit: Become Human',
            'description' => 'Detroit: Become Human puts the destiny of both mankind and androids in your hands, taking you to a near future where machines have become more intelligent than humans. Every choice you make affects the outcome of the game, with one of the most intricately branching narratives ever created.',
            'image' => '/game-images/detroit.jpg',
            'developer' => 'Quantic Dream',
            'publisher' => 'Quantic Dream',
            'price' => 369000,
        ]);

        Game::create([
            'title' => 'Cyberpunk 2077',
            'description' => 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the dark future of Night City — a dangerous megalopolis obsessed with power, glamor, and ceaseless body modification.',
            'image' => '/game-images/cp.jpg',
            'developer' => 'CD PROJEKT RED',
            'publisher' => 'CD PROJEKT RED',
            'price' => 699000,
        ]);

        Game::create([
            'title' => 'Dragon Ball FighterZ',
            'description' => 'DRAGON BALL FighterZ is born from what makes the DRAGON BALL series so loved and famous: endless spectacular fights with its all-powerful fighters.',
            'image' => '/game-images/db.jpg',
            'developer' => 'Arc System Works',
            'publisher' => 'BANDAI NAMCO Entertainment',
            'price' => 599000,
        ]);

        Game::create([
            'title' => 'Counter-Strike: Global Offensive',
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).',
            'image' => '/game-images/csgo.jpg',
            'developer' => 'Valve, Hidden Path Entertainment',
            'publisher' => 'Valve',
            'price' => 0,
        ]);

        Game::create([
            'title' => 'Stray',
            'description' => 'Lost, alone and separated from family, a stray cat must untangle an ancient mystery to escape a long-forgotten cybercity and find their way home.',
            'image' => '/game-images/stray.jpg',
            'developer' => 'BlueTwelve Studio',
            'publisher' => 'Annapurna Interactive',
            'price' => 149999,
        ]);

        Game::create([
            'title' => 'Among Us',
            'description' => 'An online and local party game of teamwork and betrayal for 4-15 players...in space!',
            'image' => '/game-images/amongus.jpg',
            'developer' => 'Innersloth',
            'publisher' => 'Innersloth',
            'price' => 39999,
        ]);

        Game::create([
            'title' => 'Naraka: Bladepoint',
            'description' => 'NARAKA: BLADEPOINT is an up to 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee & ranged weapons, legendary customizable heroes with epic abilities - inspired by the legends of the Far East.',
            'image' => '/game-images/naraka.jpg',
            'developer' => '24 Entertainment',
            'publisher' => 'NetEase Games Global',
            'price' => 220000,
        ]);

        Game::create([
            'title' => 'Ready or Not',
            'description' => 'Ready or Not is an intense, tactical, first-person shooter that depicts a modern-day world in which SWAT police units are called to defuse hostile and confronting situations.',
            'image' => '/game-images/ron.jpg',
            'developer' => 'VOID Interactive',
            'publisher' => 'VOID Interactive',
            'price' => 199999,
        ]);

        Game::create([
            'title' => 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 4',
            'description' => 'The latest opus in the acclaimed STORM series is taking you on a colourful and breathtaking ride. Take advantage of the totally revamped battle system and prepare to dive into the most epic fights you’ve ever seen !',
            'image' => '/game-images/naruto4.jpg',
            'developer' => 'CyberConnect2 Co. Ltd.',
            'publisher' => 'BANDAI NAMCO Entertainment',
            'price' => 320000,
        ]);

        Game::create([
            'title' => 'Phasmophobia',
            'description' => 'Phasmophobia is a 4 player online co-op psychological horror. Paranormal activity is on the rise and it’s up to you and your team to use all the ghost hunting equipment at your disposal in order to gather as much evidence as you can.',
            'image' => '/game-images/phasmo.jpg',
            'developer' => 'Kinetic Games',
            'publisher' => 'Kinetic Games',
            'price' => 89999,
        ]);

        Game::create([
            'title' => 'Choo-Choo Charles',
            'description' => 'Navigate an open-world island in an old train, upgrade it over time, and use it to fight an evil spider train named Charles.',
            'image' => '/game-images/charles.jpg',
            'developer' => 'Two Star Games',
            'publisher' => 'Two Star Games',
            'price' => 165999,
        ]);
    }
}
