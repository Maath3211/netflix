<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("films")->insert([
            [
                "id"=> "1",
                "titre"=>'Mission: Impossible',
                'resume'=> ' Kiev, la mort de Claire (Emmanuelle Beart) est simulée pour q\'Ethan Hunt (Tom Cruise) déguisé en russe fasse parler un homme avant de la réanimer une fois les informations obtenues sous la surveillance de deux agents de l\'IMF (Impossible Missions Force) Jack (Emilio Estevez) et Hannah (Ingeborga Dapkūnaitė).',
                'duree'=> '1h50',
                'annee'=> '1996',
                'realisateur_id'=> '1',
                'producteur_id'=> '1',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '2',
                "titre"=>'Palm Springs',
                'resume'=> 'Lors d\'un mariage à Palm Springs en Californie, Nyles rencontre Sarah, sœur de la mariée et demoiselle d\'honneur. Ils se retrouvent tous les deux piégés dans une boucle temporelle. ',
                'duree'=> '1h30',
                'annee'=> '2020',
                'realisateur_id'=> '2',
                'producteur_id'=> '2',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '3',
                "titre"=>'Les Minions 2 : Il était une fois Gru',
                'resume'=> 'Dans les années 1970, le jeune Gru ne rêve que d\'une seule chose : rejoindre le groupe de méchants appelé les « Vicious 6 ». Accompagné de ses minions, dont les plus importants sont Kevin, Bob, Stuart et Otto, il échafaude une stratégie pour se mettre au même niveau que ses idoles. Le jour tant attendu de rejoindre le groupe de méchants se présente. Gru, trop petit, est recalé. Sur un coup de tête, il décide de voler la précieuse pierre du Zodiaque afin de prouver sa méchanceté. Mais ce vol tourne court et implique Gru dans un monde de grands, dont il ne maîtrise pas les codes. Bien que rejetés dans un premier temps, ses fidèles minions décident de partir à son secours.',
                'duree'=> '1h28',
                'annee'=> '2022',
                'realisateur_id'=> '4',
                'producteur_id'=> '4',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '4',
                "titre"=>'Envoyés très spéciaux',
                'resume'=> 'R2I, célèbre radio d\'info, envoie en Irak son meilleur duo de reporters : Frank, journaliste, et Poussin, ingénieur du son. Très vite, c\'est par millions que les auditeurs suivent leurs récits très documentés, reflétant "à chaud" l\'intensité des combats et la difficile survie de la population.Le jour où Frank et Poussin sont victimes d\'une prise d\'otages, un mouvement de solidarité d\'une rare ampleur s\'organise pour obtenir leur libération : autour du slogan "un euro pour nos otages", la France se mobilise en masse. Mais le gros souci pour Frank et Poussin, nos deux envoyés très spéciaux, ce n\'est pas vraiment la prise d\'otages : leur vrai problème, c\'est plutôt qu\'ils n\'ont jamais mis les pieds en Irak, et que les récits haletants qui ont fait leur notoriété, c\'est depuis Barbes qu\'ils les enregistrent... ',
                'duree'=> '1h33',
                'annee'=> '2009',
                'realisateur_id'=> '6',
                'producteur_id'=> '6',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '5',
                "titre"=>'Dark Matter: After Dark',
                'resume'=> 'In this new after show, Syfy keeps the Dark Matter crew of the Raza talking. Go behind the scenes of each episode with the cast, take a tour of the set and get a sneak peak from the upcoming season 3 series.',
                'duree'=> '1h00',
                'annee'=> '2017',
                'realisateur_id'=> '7',
                'producteur_id'=> '7',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '6',
                "titre"=>'Fast and Furious: Tokyo Drift',
                'resume'=> 'Sean Boswell est un passionné de courses automobiles ayant eu plusieurs ennuis avec la police californienne. Pour éviter la prison, il doit se rendre chez son père, militaire basé à Tokyo. Sean se sent exclu des autres élèves jusqu’à ce qu\'il rencontre Twinkie, un passionné comme lui, qui lui fait découvrir le drift, un sport issu du milieu automobile clandestin, où l\'audace, l\'élégance et la fluidité sont plus importants que la vitesse. Malheureusement, Sean va faire la rencontre de DK (« Drift King »), le tenant du titre, qui est bien décidé à conserver son titre, quitte à utiliser des méthodes peu éthiques. Pour Sean, ce n\'est dès lors plus un amusement, mais bel et bien une véritable course. ',
                'duree'=> '1h41',
                'annee'=> '2006',
                'realisateur_id'=> '12',
                'producteur_id'=> '13',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '7',
                "titre"=>'Fast and Furious',
                'resume'=> 'Dominic Toretto est un ex-prisonnier de la prison de Lompoc qui est désormais pilote de courses de rue. Il est entouré d\'une bande, qu\'il considère comme sa famille, composée de Letty, Vince, Jesse, Leon et de sa sœur Mia Toretto. Un nouveau venu veut se joindre à cette bande, Brian Earl Spilner, mais pour des raisons différentes de celles des courses de rues. Brian se nomme en réalité Brian O\'Conner et fait partie de la police de Los Angeles. Génie du volant et de la mécanique, il a été choisi pour enquêter sur des attaques de camions ; les principaux suspects étant des pilotes de rue. Dom Toretto et sa bande sont les premiers à être visés par cette accusation. Brian doit donc infiltrer la bande de Dom mais l\'épreuve est difficile. Après une course illégale, la police intervient pour stopper les street racers ; Dom et Brian, qui participaient à la course, prennent la fuite. Dominic est sur le point de se faire arrêter mais Brian parvient à lui sauver la mise. ',
                'duree'=> '1h46',
                'annee'=> '2001',
                'realisateur_id'=> '14',
                'producteur_id'=> '13',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '8',
                "titre"=>'Retour vers le futur',
                'resume'=> 'Hill Valley, le 25 octobre 1985. Marty McFly, un adolescent typique des années 1980 mène l\'existence d\'un garçon de son âge, celle d\'un lycéen fana de musique. Son père, George McFly, timide, couard et ne supportant pas le conflit, s\'écrase sans cesse devant son chef de bureau Biff Tannen qui l\'oblige à rédiger ses propres comptes rendus. La mère de Marty, Lorraine Baines-McFly a un penchant pour la boisson, son mariage avec George lui pesant. Très possessive et un peu vieux jeu, elle juge défavorablement la petite amie de son fils, Jennifer, qu\'elle trouve trop émancipée. Marty a aussi un frère, Dave et une sœur, Linda, qui ont une vie d\'Américains moyens comme le reste de la famille. ',
                'duree'=> '1h56',
                'annee'=> '1985',
                'realisateur_id'=> '15',
                'producteur_id'=> '15',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '9',
                "titre"=>'Schumacher',
                'resume'=> 'Through exclusive interviews and archival footage, this documentary traces an intimate portrait of seven-time Formula 1 champion Michael Schumacher.',
                'duree'=> '1h52',
                'annee'=> '2021',
                'realisateur_id'=> '16',
                'producteur_id'=> '16',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ],
            [
                'id'=> '10',
                "titre"=>'Insaisissables',
                'resume'=> 'Un illusionniste, Daniel Atlas, son ancienne assistante, Henley Reeves, un prestidigitateur pickpocket, Jack Wilder, et un mentaliste hypnotiseur aigrefin, Merritt McKinney, sont recrutés par un mystérieux anonyme. Un an plus tard, ils forment « Les 4 Cavaliers », un groupe d\'illusionnistes conduits par le charismatique Daniel Atlas. Ils font d\'abord un spectacle à Las Vegas, dans lequel ils surprennent le public en cambriolant, en direct et à distance, une banque en France et en faisant pleuvoir sur le public les billets de banque volés. Puis, à La Nouvelle-Orléans, ils dérobent les millions de leur mécène, Arthur Tressler, un assureur n\'ayant pas indemnisé les victimes de l\'ouragan Katrina, afin de les répartir sur les comptes bancaires du public, composé d\'invités floués par Tressler. ',
                'duree'=> '1h55',
                'annee'=> '2013',
                'realisateur_id'=> '17',
                'producteur_id'=> '17',
                'lienFilm'=> NULL,
                'pochetteURL'=> NULL,
            ]
        ]);
    }
}
