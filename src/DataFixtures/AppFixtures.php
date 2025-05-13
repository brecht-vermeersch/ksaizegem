<?php

namespace App\DataFixtures;

use App\Entity\Geleding;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->loadGeleidingen($manager);

        $manager->flush();
    }

    private function loadGeleidingen(ObjectManager $manager): void
    {
        $geledingenData = [
            [
                'rangschikking' => 1,
                'naam' => 'kabouters',
                'afkorting' => 'kabs',
                'leeftijdsgroep' => '6-8 jaar (1° en 2° leerjaar)',
                'email' => 'kabouters@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'De jongste leden van onze beweging noemen we de Kabouters. KSA betekent voor hen spelen, spelen en nog eens spelen. Ze kunnen zich op elke activiteit verwonderen over de nieuwe ervaringen die ze opdoen. Hun levendige fantasie zorgt ervoor dat ze op reis kunnen naar eender waar, met eender wie, om eender welk probleem op te lossen. Leiders zijn tijdens die reizen hun troost en toeverlaat.',
                'icoon' => 'build/images/logo-kabouters.png',
                'foto' => 'build/images/monster-kabouters.png'
            ],
            [
                'rangschikking' => 2,
                'naam' => 'piepjongknapen',
                'afkorting' => 'pieps',
                'leeftijdsgroep' => '8-10 jaar (3° en 4° leerjaar)',
                'email' => 'piepjongknapen@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'De Piepjongknapen zitten halfweg hun carrière op de lagere school en zijn niet langer de jongste leden van KSA. Het is een enthousiaste bende die geregeld al echt samen kan spelen. De spelletjes worden al wat complexer. Lang stilzitten is niet aan hen besteed, in onze jeugdbeweging kunnen ze bewegen en vanalles uitproberen wat thuis niet kan.',
                'icoon' => 'build/images/logo-piepjongknapen.png',
                'foto' => 'build/images/monster-piepjongknapen.png'
            ],
            [
                'rangschikking' => 3,
                'naam' => 'jongknapen',
                'afkorting' => 'jkn',
                'leeftijdsgroep' => '10-12 jaar (5° en 6° leerjaar)',
                'email' => 'jongknapen@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'De Jongknapen vinden in KSA vooral actie en spanning. Ze mogen zelf al eens het initiatief nemen om de activiteiten wat op te vullen, al houdt de leiding steeds een oogje in het zeil. Ze zijn de waaghalzen van KSA die graag in competitie treden met elkaar. In de jeugdbeweging mogen ze echt bij de groep horen en nieuwe vrienden leren kennen.',
                'icoon' => 'build/images/logo-jongknapen.png',
                'foto' => 'build/images/monster-jongknapen.png'
            ],
            [
                'rangschikking' => 4,
                'naam' => 'knapen',
                'afkorting' => 'knapen',
                'leeftijdsgroep' => '12-14 jaar (1° en 2° secundair)',
                'email' => 'knapen@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'De leden van 12 tot 14 jaar heten in KSA de Knapen. Ze zijn stilaan \'groot\' geworden en mogen de echte wereld gaan verkennen. Ze gebruiken de vrijheid die ze genieten als pubers om op avontuur te trekken. Ook in KSA kunnen ze met vanalles gaan experimenteren. Die groep avonturiers is al redelijk zelfstandig geworden in al wat ze doen. Aangezien Knapen volop zichzelf aan het ontdekken zijn, leidt dat geregeld eens tot kleine crisissen waar de leider als moderator nodig is. De activiteiten worden al heel wat avontuurlijker en de vriendengroep heel wat hechter.',
                'icoon' => 'build/images/logo-knapen.png',
                'foto' => 'build/images/monster-knapen.png'
            ],
            [
                'rangschikking' => 5,
                'naam' => 'jonghernieuwers',
                'afkorting' => 'jhn',
                'leeftijdsgroep' => '14-16 jaar (3° en 4° secundair)',
                'email' => 'jonghernieuwers@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'KSA wordt voor de Jonghernieuwers een ontmoetingsplaats met vrienden. Ze willen soms eens stilzitten om wat gezellig te babbelen, maar trekken er even graag samen op uit om de meest uiteenlopende stunts te beleven. De leiders zetten activiteiten op die een uitdaging vormen voor de leden en hen uitnodigen om samen te werken om hun doel te bereiken. Er wordt al heel wat verantwoordelijkheid doorgespeeld naar de leden en de groep mag geregeld zelf één en ander organiseren. In KSA mogen ze zichzelf zijn, los van de doordeweekse verplichtingen en verwachtingen.',
                'icoon' => 'build/images/logo-jonghernieuwers.png',
                'foto' => 'build/images/monster-jonghernieuwers.png'
            ],
            [
                'rangschikking' => 6,
                'naam' => 'hernieuwers',
                'afkorting' => 'hn',
                'leeftijdsgroep' => '16-17 (5° secundair)',
                'email' => 'hernieuwers@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'Eens je 16 bent geworden in KSA, kom je bij de Hernieuwers terecht. Voor hen worden nog heel wat activiteiten georganiseerd, maar ze leren ook de kneepjes kennen van het leiding-zijn. Ze zijn actief bezig een eigen identiteit op te bouwen en daarin kan KSA een belangrijke rol spelen. Ze nemen een zeker engagement op binnen de groep en hebben inspraak in de richting die het uit moet. Ze maken plannen en keuzes voor de toekomst en denken na over de maatschappij en hoe die er zou moeten uitzien. Als jongeren kiezen ze ervoor zelf de handen uit de mouwen te steken en een steen(tje) bij te dragen. Daarnaast draait het natuurlijk vaak om gewoon in groep plezier maken en je eens uitleven, zonder je al te veel te moeten aantrekken van de eisen van de \'volwassen wereld\' (het blijft nog altijd jeugdbeweging).',
                'icoon' => 'build/images/logo-hernieuwers.png',
                'foto' => 'build/images/monster-hernieuwers.png'
            ],
            [
                'rangschikking' => 7,
                'naam' => 'bond',
                'afkorting' => 'bond',
                'leeftijdsgroep' => 'oud',
                'email' => 'bond@ksaizegem.be',
                'gsm' => '+32 470 18 86 88',
                'beschrijving' => 'TODO',
                'icoon' => 'build/images/logo-bond.png',
                'foto' => 'build/images/monster-bond.png'
            ],
            [
                'rangschikking' => 8,
                'naam' => 'vzw',
                'afkorting' => 'vzw',
                'leeftijdsgroep' => 'oud',
                'email' => 'vzw@ksaizegem.be',
                'gsm' => '/',
                'beschrijving' => 'TODO',
                'icoon' => 'build/images/logo-vzw.png',
                'foto' => 'build/images/monster-vzw.png'
            ],
        ];

        foreach($geledingenData as $data) {
            $geleding = (new Geleding())
                ->setRangschikking($data['rangschikking'])
                ->setNaam($data['naam'])
                ->setAfkorting($data['afkorting'])
                ->setLeeftijdsgroep($data['leeftijdsgroep'])
                ->setEmail($data['email'])
                ->setGsm($data['gsm'])
                ->setBeschrijving($data['beschrijving'])
                ->setIcoon($data['icoon'])
                ->setFoto($data['foto']);

            $manager->persist($geleding);
        }
    }
}
