<?php

// Kostprijs
// -- Aanbod prijs * aantal personen
// -- Berekening vaste kosten: 320 - ( personen * aanbod prijs )
//    --> max 100 eur / min 0 eur
//    --> vanaf 320 eur wordt de vaste kost minder voor het aantal personen

// 30 personen Formule A: 
	// --> 5 * 30 = 150 eur
	// --> vaste kost: 320 - (5*30) : 170 eur. --> max 100eur.
	// --> totaal: 250 eur.

// 15 personen Formule B:
	// --> 7 * 15: 105 eur
	// --> vaste kost: 320 - (7*15) : 215 --> max 100 eur
	// --> total: 205 eur

// 50 personen Formule All In
	// 8 * 50 : 400 eur
	// --> vaste kost: 320 - (8*50) : -80 eur --> min: 0 eur.
	// totaal: 400 eur.

$aanbod = [
  'Formula A' => [
    'tagline' => 'Heerlijke frietjes! <br> Één snack om van te smullen!',
    'price' => 5,
    'features' => [
      '<b>Één puntzak</b> met overheerlijke frietjes of één hamburger/cheeseburger.',
      '<b>Één snack</b> om van te watertanden',
      'Zelf te kiezen: <b>Vijf snacks</b> uit ons assortiment'
    ]
  ],
  'All-In' => [
    'tagline' => 'Onze all-you-can-eat knaller!',
    'price' => 8,
    'features' => [
      'Friet <b>a volanté</b>!',
      '<b>Stoofvlees</b>!',
      'Zelf te kiezen:  <b>Tien snacks</b> uit ons assortiment!',
      'Tot 50pers: max 2u.<br>
      Bij iedere 50pers extra een half uur langer.'
    ]
  ],
  'Formula B' => [
      'tagline' => 'Heerlijke frietjes <br> Twee snacks om buikjes mee te vullen!',
      'price' => 7,
      'features' => [
        '<b>Één puntzak</b> met overheerlijke frietjes
        of één hamburger/cheeseburger!',
        '<b>Twee snacks</b> om van te watertanden!',
        'Zelf te kiezen:  <b>Vijf snacks</b> uit ons assortiment!'
      ]
  ]
];
?>