<?php

$movies = [
  1 => [
    'id' => 1,
    'related' => [3, 7],
    'title' => 'Iron Man',
    'poster' => 'images/ironman.jpg',
    'release' => DateTime::createFromFormat('d m Y', '30 04 2008'),
    'director' => 'Jon Favreau',
    'reviews' => [
      "Tien jaar geleden lag deze film aan de basis van het huidige Marvel Cinematic Universe. We kunnen dus stellen dat het allemaal de schuld is van Robert Downey Jr. als Tony Stark. Hij moest maar niet zo'n sympathieke klootzak spelen.",
      "The amazing yet realistic action is paced by the plot and characters that keep you interested from start to finish. What absolutely blew me away were the phenomenal special effects. I know they built a practical, working armor. What I loved is the use of CGI was used to augment the real life armor and not create something from scratch. Most all CGI constructs feel fake somehow but the stuff in Iron Man didn't seem fake even for an instant. As great as everything looked, what really drives the movie is the emotional resonance and down to earth nature of the plot. Sure the concept is wild but it's all presented so that you really believe it could happen. I doubt anyone will find fault with this movie unless they went in trying to dislike it."
    ],
    'score' => 9.4,
    'synopsis' => "<p>When history tells the story of the Marvel Cinematic Universe, the tale will always begin with the introduction of Tony Stark (Robert Downey Jr.) in Jon Favreau's Iron Man. An engineering prodigy and genius who follows in his father's footsteps to run the world's biggest weapons manufacturer, Tony is first presented as a careless playboy only interested in making money. That all changes, however, when he is kidnapped by a deadly terrorist organization demanding his technology. With the help of a fellow hostage, Ho Yinsin (Shaun Toub), he uses his ingenuity to design a suit of armor to escape... but it's an experience that winds up haunting him.</p><p>Tony finds himself unable to live with the idea of his inventions harming innocent lives, and upon returning home he not only shuts down weapons manufacturing at his company, but begins to advance and improve the armor he invented. With the backing of his best friend, Air Force Col. James \"Rhodey\" Rhodes (Terrence Howard), and his trusty assistant, Pepper Potts (Gwyneth Paltrow), he successfully roots out the man responsible for his kidnapping -- his business partner Obadiah Stane (Jeff Bridges) -- and changes the world forever when he announces that he is actually a superhero: the Iron Man. Of course, as he would learn from S.H.I.E.L.D. Director Nick Fury (Samuel L. Jackson) in a post-credits scene, this was just his first step into a larger world.</p>"
  ],
  2 =>[
    'id' => 2,
    'related' => [],
    'title' => 'The Incredible Hulk',
    'poster' => 'images/hulk.jpg',
    'release' => DateTime::createFromFormat('d m Y', '25 06 2008'),
    'director' => 'Louis Leterrier',
    'reviews' => [
      'Na een wetenschappelijk ongelukje wordt Edward Norton de Hulk. Na een volsterkt onverklaard ongelukje wordt Edward Norton later vervangen door Mark Ruffalo in The Avengers. Riddle me this, Batman! (Sorry, verkeerde franchise.)',
      "I attended a sneak preview of The Incredible Hulk last night. Incredible? No, but Very Good. And it washes the bad taste left in my mouth from Indiana Jones and the Big Letdown. The story is good, the acting is awesome. Ed Norton is the perfect person to play the tormented Bruce Banner. He is more believable in the roll than Eric Bana. Liv Tyler is very good as Betty Ross (formally played by the tasty Jennifer Connelly) William Hurt as General Ross is impressive and makes for a worthy adversary to Bruce Banner. If I had to come up with a negative, it would be Tim Roth. While I really like him, and he always plays great villains, I feel he's just miss cast here. He seems tiny next to General Ross. Instead of coming off like the English bad ass special op he's supposed to be, he comes off more like a jerk with Napoleon Syndrome. Someone more physically imposing like Vinnie Jones (Bullet tooth from Snatch), or Daniel Craig (the new Bond) would have been more convincing for the part. But I'm just picking here. The movie is a joy. Great action. No long boring, dragging development stuff that the first Hulk had in spades. There are some very nice cameos as well. Some were a surprise, some were not. I didn't see Nick Fury anywhere except in a brief headline in a montage. However I did not remain through the credits, so there might have been a scene at the end like Iron Man that I don't know about. I give it ***1/2 out of ****. I also predict it to make 80+million this weekend when it opens to the public and should \"Hulk Smash\" the competition. The movie received an ovation from the audience at the end which sums it up. A worthy movie made for the fans and everyone else."
    ],
    'score' => 6.7,
    'synopsis' => "<p>Louis Leterrier's The Incredible Hulk is the first Marvel Cinematic Universe story to follow Dr. Bruce Banner (Edward Norton), a scientist who has spent years on the run in South America thanks to an experiment gone wrong. Following extreme exposure to gamma radiation, whenever his pulse raises to a high enough level he undergoes a transformation into a huge, green monster that is totally out of his control. Gen. Thaddeus \"Thunderbolt\" Ross (William Hurt), the father of Bruce's former girlfriend, Betty (Liv Tyler), wants nothing in the world more than to see him captured -- and figures the only way to actually do it is to create a monster of his own.</p><p>When Bruce believes there may be a cure for the Hulk, collaborating with a colleague named Dr. Samuel Sterns (Tim Blake Nelson), he starts to make his way back home -- but all the while finds himself pursued by Ross' enhanced soldier, Emil Blonsky (Tim Roth). The situation becomes much worse when Blonsky, who has become obsessed with Bruce's monster, convinces Sterns to turn him into an Abomination, but it ultimately proves to be an important test for Bruce. While he still can't fully control the Hulk, he discovers he can \"aim\" it, and becomes a hero when he stops Abomination from tearing Harlem apart.</p>"
  ],
  3 =>[
    'id' => 3,
    'related' => [1, 7],
    'title' => 'Iron Man 2',
    'poster' => 'images/ironman2.jpg',
    'release' => DateTime::createFromFormat('d m Y', '29 04 2010'),
    'director' => 'Jon Favreau',
    'reviews' => [
      'Het Amerikaanse leger heeft haar zinnen gezet op het Iron Man-harnas en schakelt daarvoor zelf Mickey Rourke-als-Rus in. Uiteindelijk krijgen ze het pak. Al hoefden ze daarvoor gewoon Tony Stark (Robert Downey jr.) dronken te voeren.',
      "For anyone who has seen the first Iron Man you can expect much of the same in this movie. Robert Downey Jr. plays Tony Stark like he is meant for the part. He has the same sarcastic wit and self-confidence that is evident in his other movie roles. Gwyeneth Paltrow, as Pepper Potts, has a comes more to the forefront in the sequel. I also personally love that Jon Favreau is the driver for Stark/Potts, and that he gets into the action a little bit. You have to respect the director for that, even though Jon has done plenty of acting himself.",
      "Iron Man 2 is an extremely satisfying sequel on all accounts. While the original film is probably slightly better, the sequel does everything right and doubles up on everything in comparison; action, strong characters, teases for upcoming Marvel films, etc. Despite some of its early negative criticism, Iron Man 2 delivers a worthwhile sequel with a fantastic cast and spectacular action."
    ],
    'score' => 7.3,
    'synopsis' => "<p>Picking up shortly after the events of the first film, Jon Favreau's Iron Man 2 finds Tony Stark as the most famous man on the planet, but simultaneously dealing with some huge issues. He is in a fight with the government about privatizing world peace; his relationship with Pepper Potts is constantly stressed; he unknowingly hires a spy named Natasha Romanoff (Scarlett Johansson) to be his new assistant; the palladium power source he is using for his suit is slowly poisoning him; and there is a new villain on the scene named Ivan Vanko a.k.a. Whiplash (Mickey Rourke) who has managed to recreate his special arc reactor technology.</p><p>The whole experience leads Tony to hit rock bottom -- influencing James \"Rhodey\" Rhodes (Don Cheadle) to steal an Iron Man suit and become War Machine -- but it's an experience he bounces back from quickly. The \"discovery\" of a new element (which happens to be Vibranium) proves to be a positive substitute for palladium and stops the self-poisoning; he begins to repair and respect the personal relationships in his life; and despite Whiplash becoming a serious threat thanks to a partnership with Tony's business rival, Justin Hammer (Sam Rockwell), he is eventually able to fight and defeat him with the help of his comrades.</p>"
  ],
  4 =>[
    'id' => 4,
    'related' => [8, 17],
    'title' => 'Thor',
    'poster' => 'images/thor.jpg',
    'release' => DateTime::createFromFormat('d m Y', '28 04 2011'),
    'director' => 'Kenneth Branagh',
    'reviews' => [
      'De Noorse dondergod Thor wordt verbannen van het godenrijk Asgard naar New Mexico, de Amerikaanse staat bekend voor Billy The Kid, Breaking Bad en chili. Natuurlijk wil hij daar als de bliksem weg. '
    ],
    'score' => 7.7,
    'synopsis' => "<p>After three earthbound adventures, it was Kenneth Branagh's Thor that first introduced audiences to the cosmos of the Marvel Cinematic Universe. The titular God of Thunder (Chris Hemsworth) is first shown as an adult on his coronation day -- set to replace his father, Odin (Anthony Hopkins), as the King of Asgard -- but this big event is interrupted by an unexpected invasion from an old enemy, the Frost Giants. Being impetuous and arrogant, Thor leads his brother Loki (Tom Hiddleston), and his four friends, Sif (Jaimie Alexander), Volstagg (Ray Stevenson), Hogun (Tadanobu Asano) and Fandral (Josh Dallas), for a revenge mission... but it proves to be a foolish and immensely dangerous move. As a result, Odin strips his son of his power and banishes him to Midgard a.k.a. Earth.</p><p>It's eventually revealed that this exile was all part of a manipulative ploy by Loki, but still it proves to be an important experience for Thor. Spending time with scientists Jane Foster (Natalie Portman) and Erik Selvig (Stellan Skarsgard), and their intern Darcy Lewis (Kat Dennings), the God of Thunder begins to learn some humility while questing to retrieve his magic hammer, Mjolnir, and regain his power. After saving a New Mexico town from an Asgardian weapon known as The Destroyer, Thor returns home to stop Loki, though he is unable to do so without stopping his maniacal sibling from falling into the vastness of space and disappearing.</p>"
  ],
  5 =>[
    'id' => 5,
    'related' => [9, 13],
    'title' => 'Captain America: THe First Avenger',
    'poster' => 'images/captainamerica.jpeg',
    'release' => DateTime::createFromFormat('d m Y', '17 08 2011'),
    'director' => 'Joe Johnston',
    'reviews' => [
      'Chris Evans ziet eruit alsof hij een Amerikaanse vlag heeft ingeslikt. En alsof dat nog niet erg genoeg is, sturen ze uitgerekend hém met een frisbee naar het front van de Tweede Wereldoorlog. Dat was in 1942 een slecht idee. En dat is het vandaag nog.'
    ],
    'score' => 7.9,
    'synopsis' => "<p>Tony Stark made a spectacle of himself when he announced himself as Iron Man, but the real first superhero of the Marvel Cinematic Universe emerged back in the early 1940s during World War II, as featured in Joe Johnston's Captain America: The First Avenger. Steve Rogers (Chris Evans) is first shown to be a scrawny kid from Brooklyn who wants nothing more than the opportunity to fight for his country, but is repeatedly told he is unfit for service. His fortunes change, however, when he meets Dr. Abraham Erskine (Stanley Tucci) and is given the Super Soldier Serum -- a chemical that transforms him into the heroic Captain America.</p><p>While he is first used as just a propaganda tool, Steve proves his worth when he is able to rescue an entire battalion, including his best friend, Sgt. James \"Bucky\" Barnes (Sebastian Stan), and he winds up becoming one of the great heroes of the Great War. Unfortunately, this puts him in direct conflict with Erskine's former creation, Johann Schmidt a.k.a. The Red Skull (Hugo Weaving), the leader of the Nazi deep science division, Hydra. His weapons fueled by a cosmic device called The Tesseract, Red Skull has plans to drop bombs on all the world's capitals, but it's a plan that Steve is able to foil by crashing the carrier into the North Pole. He is presumed dead for decades, but the reality is that he is only frozen...</p>"
  ],
  6 =>[
    'id' => 6,
    'related' => [11, 19],
    'title' => 'Avengers',
    'poster' => 'images/avengers.jpg',
    'release' => DateTime::createFromFormat('d m Y', '25 04 2012'),
    'director' => 'Joss Whedon',
    'reviews' => [
      'Conflict is de hoeksteen van elke goede groep. Dus is een openingsscène waar Iron Man, Captain America en Thor elkaar duchtige kop- en andere stoten verkopen alleen maar aan te moedigen. Uiteindelijk vormen ze The Avengers, samen met Black Widow, Hawkeye en Hulk. En straf stukje blockbustergeschiedenis.'
    ],
    'score' => 9.2,
    'synopsis' => "<p>With all of their principal heroes introduced, Marvel Studios brought its first crossover vision to life in 2012 with Joss Whedon's The Avengers. It all starts with The Tesseract, which has been in the possession of S.H.I.E.L.D. since shortly after World War II. It turns out there is a being in the cosmos that wants it, and they decide to send Loki to go get it. Utilizing a special staff that allows him to sway hotshot agent Clint Barton a.k.a. Hawkeye (Jeremy Renner) and Dr. Erik Selvig to his side, the God of Mischief makes plans to open a portal to outer space that will initiate a full-blown alien invasion on Earth. What he doesn't anticipate, though, is the unification of the planet's Mightiest Heroes.</p><p>Iron Man, Captain America, Thor, Hulk (Mark Ruffalo), Black Widow and Hawkeye don't really get along at first, but they manage to come together when it really counts. Making brave and bold moves, they refuse to stand down in the face of overwhelming odds -- and while there is a lot of destruction caused during what is later dubbed the Battle of New York, at the end of the day the Avengers are victorious. Loki is taken into custody by Thor and brought back to Asgard... but it's also revealed for the first time in a foreboding mid-credits sequence that Thanos has started paying attention to the planet.</p>"
  ],
  7 =>[
    'id' => 7,
    'related' => [1, 3],
    'title' => 'Iron Man 3',
    'poster' => 'images/ironman3.jpg',
    'release' => DateTime::createFromFormat('d m Y', '24 04 2013'),
    'director' => 'Shane Black',
    'reviews' => [],
    'score' => 8.0,
    'synopsis' => "<p>The events that went down in The Avengers had an effect on all of the heroes, but Shane Black's Iron Man 3 shows that Tony Stark was hit hardest of all. After all, the guy was willing to die so that he could stop a nuclear bomb from destroying Manhattan -- and he also witnessed first-hand the kinds of serious threats that exist in the cosmos. He's having regular panic attacks before the film even starts, and things get so much worse with the arrival of a terrorist known as The Mandarin (Ben Kingsley).</p><p>Tony finds himself on an adventure that challenges what kind of hero he is without his armor, while simultaneously facing down serious demons from his past. While investigating the recent rash of terrorist attacks, he discovers that The Mandarin is nothing more than an actor/puppet being manipulated by one of Stark Industries' greatest rivals, Aldrich Killian (Guy Pearce). Having sway over America's Vice President, Killian attempts to kill the President of the United States (William Sadler), but with help from both Rhodey and Pepper the eponymous hero is able to save the day. Tony makes the decision to surgically remove the arc reactor from his chest, choosing to retire as Iron Man -- but as audiences would find out in the coming years, this is a promise that is basically impossible to keep.</p>"
  ],
  8 =>[
    'id' => 8,
    'related' => [4, 17],
    'title' => 'Thor: The Dark World',
    'poster' => 'images/thor2.jpg',
    'release' => DateTime::createFromFormat('d m Y', '30 10 2013'),
    'director' => 'Alan Taylor',
    'reviews' => [
      'Iets met Chris Hemsworth, rollende spierballen en een hamer. Verder is de zin van deze Thor-sequel ons compleet ontgaan.'
    ],
    'score' => 6.6,
    'synopsis' => "<p>At the start of Alan Taylor's Thor: The Dark World, Jane Foster is studying a cosmic anomaly in England when she comes upon a material known as the Aether and makes contact with it. This has the effect of bringing Thor back to her side, having spent months trying to bring peace to the Nine Realms, but it also puts her in grave danger. An alien race known as the Dark Elves, commanded by their leader Malekith (Christopher Eccleston), has been searching for the Aether for centuries, and are now closer than ever to finding it.</p><p>In order to stop the Dark Elves, Thor finds himself needing the assistance of his brother Loki, who has been locked away in Asgard's dungeon, and along with Jane they escape to the Dark Elf planet Svartalfheim. Things go from bad to worse when it seems that Loki is killed (he's not), Malekith gets the Aether, and Thor and Jane are stranded -- but the aforementioned cosmic anomaly saves their skin. Back on Earth, Thor has a showdown with Malekith, the God of Thunder trying to stop darkness spreading across the universe, and a wormhole-filled battle ultimately sees him victorious. In a pair of post-credits scenes, Thor makes his way back to Earth to be with Jane after denying the throne of Asgard, while Volstagg and Sif deliver the Aether, which turns out to be an Infinity Stone, to the being known as The Collector (Benicio Del Toro).</p>"
  ],
  9 =>[
    'id' => 9,
    'related' => [5, 13],
    'title' => 'Captain America: The Winter Soldier',
    'poster' => 'images/captainamerica2.jpg',
    'release' => DateTime::createFromFormat('d m Y', '26 03 2014'),
    'director' => 'Anthony & Joe Russo',
    'reviews' => [
      "De sequel op Captain America: The First Avenger speelt zich godzijdank niet langer af in '40-'45. In plaats daarvan krijgt deze film zelfs een politiek kritische ondertoon. Maar het blijft zonde van dat vlaggenpak."
    ],
    'score' => 8.9,
    'synopsis' => "<p>Steve Rogers didn't have much time to adapt to the modern world between being unfrozen and facing down an alien invasion, but in Joe and Anthony Russo's Captain America: The Winter Soldier he makes a very important discovery: while things once were black and white, modernity is all shades of grey. He commits himself to working for S.H.I.E.L.D., partnering with Black Widow and working under Nick Fury, but it turns out that the organization of \"good guys\" was infiltrated by Hydra decades earlier.</p><p>Captain America and Black Widow find themselves on the run from not just one of the world's elite spy agencies, but also a ghost from Steve's past. It turns out that his old pal Bucky didn't die back during World War II, and has instead been operating as a brainwashed, cryogenically frozen assassin known as The Winter Soldier for decades. Along with the help from a new friend, Sam Wilson a.k.a. Falcon (Anthony Mackie), Cap and Black Widow are successfully able to foil a plot from S.H.I.E.L.D. Secretary Alexander Pierce (Robert Redford), and disable three Hydra Helicarriers designed to assassinate anyone deemed a threat to the evil organization. Following this victory, Steve then goes on the search for his former best friend, convinced he can bring him back to the side of good.</p>"
  ],
  10 =>[
    'id' => 10,
    'related' => [15],
    'title' => 'Guardians Of The Galaxy',
    'poster' => 'images/guardians.jpg',
    'release' => DateTime::createFromFormat('d m Y', '13 08 2014'),
    'director' => 'James Gunn',
    'reviews' => [
      'Een superheldenfilm die opent met een mixtape-op-cassette? Dat kunnen wij wel smaken. Guardians heeft alles wat een Marvel écht goed maakt: een killer soundtrack, een compleet eigen stijl, een hilarisch script. En een wandelende boom en een pratende wasbeer, natuurlijk.'
    ],
    'score' => 9.1,
    'synopsis' => "<p>In August 2014, James Gunn offered Marvel fans a very different flavor of blockbuster with Guardians of the Galaxy -- a sci-fi space opera centering on an amoral thief named Peter Quill a.k.a. Star-Lord (Chris Pratt); the most dangerous woman in the universe, Gamora (Zoe Saldana); a brute with a taste for revenge named Drax (Dave Bautista); a perpetually pissed-off, genetically modified rodent named Rocket (Bradley Cooper); and a walking, talking tree named Groot (Vin Diesel).</p><p>The adventure begins when Quill steals what seems like a harmless little trinket -- which turns out to be one of the six incredibly powerful Infinity Stones. After being arrested and imprisoned with his four future friends, he begins to devise a plan with them to try and sell it. Unfortunately, the stone is being hunted for by not only the evil lord Thanos (Josh Brolin), but the Kree fanatic Ronan The Accuser (Lee Pace). All seems lost when Ronan acquires the prize from Gamora's sister, Nebula (Karen Gillan) -- who successfully steals it after nearly killing Gamora -- but the group ultimately comes together to stop Ronan and save an entire planet. Groot is destroyed but reborn, their records are all expunged, and they decide to stick together as a family, ready to face anything that the universe may throw at them.</p>"
  ],
  11 =>[
    'id' => 11,
    'related' => [6, 19],
    'title' => 'Avengers: Age Of Ultron',
    'poster' => 'images/avengers2.jpg',
    'release' => DateTime::createFromFormat('d m Y', '22 04 2015'),
    'director' => 'Joss Whedon',
    'reviews' => [
      'We herinneren het ons nog alsof het gisteren was: toen de Avengers nog met zes waren. En ook dat vonden we toen al véél helden voor één film. Al waren we bij deze sequel niet rouwig om méér Scarlett Johansson.'
    ],
    'score' => 7.5,
    'synopsis' => "<p>When it comes right down to it, the events depicted in Joss Whedon's The Avengers: Age of Ultron happen because Tony Stark can't let go. He becomes Iron Man again when the opportunity presents itself to take down Hydra once and for all, but more importantly he's entirely obsessed with the idea of protecting the world from any outside force that may threaten it. This may seem like a good thing, but any obsession has consequences. Working with Bruce Banner and manipulating the newly discovered Mind Stone, he creates the artificial intelligence Ultron (James Spader) -- but in doing so also introduces the planet to one of the greatest threats it's ever seen, and the Avengers' newest enemy.</p><p>Ultron believes that humanity is a poison that needs to be destroyed, and so he tries to turn the Eastern European nation of Sokovia into a planet-decimating asteroid. Captain America, Thor, Hulk, Black Widow, Iron Man and Hawkeye all must reunite to stop the metallic foe -- but this time around they also find assistance from Vision (Paul Bettany), a living incarnation of Tony's digital butler Jarvis created by Ultron; Wanda Maximoff a.k.a. Scarlet Witch (Elizabeth Olsen), a telekinetic and energy manipulator; and Pietro Maximoff a.k.a. Quicksilver (Aaron Taylor-Johnson), a speedster. Quicksilver dies in the battle, and Hulk has to fly away, but Earth's Mightiest Heroes are once again able to save the day.</p>"
  ],
  12 =>[
    'id' => 12,
    'related' => [],
    'title' => 'Ant-Man',
    'poster' => 'images/antman.jpg',
    'release' => DateTime::createFromFormat('d m Y', '23 07 2015'),
    'director' => 'Peyton Reed',
    'reviews' => [
      'Een soort hedendaagse Robin Hood steelt iets wat lijkt op een motorpak. Wanneer hij het draagt, wordt hij zo groot als een mier. Wij hebben dit ook niet verzonnen, hoor.'
    ],
    'score' => 8.2,
    'synopsis' => "<p>Scott Lang (Paul Rudd) is introduced to the Marvel Cinematic Universe in Peyton Reed's Ant-Man hanging pretty close to the bottom rung of society. He has just been released from prison, and while he is a reformed criminal dedicated to doing right by his daughter, nobody will give him a chance. As a result, he is forced to act upon a tip from his former cellmate Luis (Michael Pena), and he decides to burgle the home of noted scientist Dr. Hank Pym (Michael Douglas). Rather than finding any money or valuables, however, what he really gets is a second chance at life.</p><p>As it turns out, Hank set up the entire burglary as a test, as he needs Scott's help. Hank's former protégé, Darren Cross (Corey Stoll), is close to discovering the secret behind his ultra-secretive shrinking technology, and he needs Scott to wear a specially designed Ant-Man suit to take it from him. With assistance from Hank's daughter, Hope van Dyne (Evangeline Lilly), Scott trains to shrink down to insect-size, and communicate with ants - all in hopes of sabotaging the unveiling of Cross' innovation. It's a successful mission in the end, and Scott finds permission to begin again as a hero.</p>"
  ],
  13 =>[
    'id' => 13,
    'related' => [5, 9],
    'title' => 'Captain America: Civil War',
    'poster' => 'images/captainamerica3.jpg',
    'release' => DateTime::createFromFormat('d m Y', '27 04 2016'),
    'director' => 'Anthony & Joe Russo',
    'reviews' => [
      'Deze Captain America draait niet om onze favoriete patriot-in-vlaggenpak, wél om het gekibbel tussen de Avengers. Het twistpunt: of het collectief niet beter zou splitten. En als ze dat doen, wie er als Yoko Ono wordt aangewezen.'
    ],
    'score' => 9.1,
    'synopsis' => "<p>If you ever wondered why superheroes are allowed to operate free from consequence in global conflicts, Joe and Anthony Russo's Captain America: Civil War provides the answer. The entire film begins because of the collateral damage caused by The Avengers, as the world agrees to sign The Sokovia Accords: a treaty that demands registration for \"enhanced\" individuals if they want to operate as heroes. Iron Man, Black Widow, War Machine, and Vision are all for the idea, but it ruffles the feathers of Captain America, Falcon, Hawkeye and Scarlet Witch -- and things are not made better when The Winter Soldier reemerges and is fingered for a terrorist attack.</p>

    <p>Captain America strongly believes he is the only one who can safely bring The Winter Soldier in, but trying to do so technically breaks international law. This leads to a massive showdown in Germany -- with Ant-Man, Spider-Man (Tom Holland) and Black Panther (Chadwick Boseman) all recruited for the fight -- and it all ends in disaster. It turns out that the whole plot was a carefully designed revenge scheme orchestrated by a Sokovia survivor named Helmut Zemo (Daniel Bruhl). His ultimate plan is to reveal that The Winter Soldier killed Tony Stark's parents, creating a divide among the Avengers, and his plan very much succeeds, as the blockbuster ends with half the heroes beaten and defeated, and the other half on the run as fugitives.</p>"
  ],
  14 =>[
    'id' => 14,
    'related' => [],
    'title' => 'Doctor Strange',
    'poster' => 'images/strange.jpg',
    'release' => DateTime::createFromFormat('d m Y', '13 10 2016'),
    'director' => 'Scott Derrickson',
    'reviews' => [
      'Is het een heldenkostuum? Of toch maar een tovenaarscape? Wat het ook zij: Benedict Cumberbatch is meesterlijk als gekke dokter-tovernaar. Geen idee welke paddenstoelen de schrijvers van Doctor Strange hebben geconsumeerd om tot dit psychedelische resultaat te komen. Hoe dan ook: die willen wij ook.'
    ],
    'score' => 8.9,
    'synopsis' => "<p>Up until November 2016, the Marvel Cinematic Universe could be primarily describes as a sci-fi franchise, but Scott Derrickson's Doctor Strange introduced a brand new flavor to the mix: fantasy. In it we first meet Dr. Stephen Strange (Benedict Cumberbatch) as a world-renowned brain surgeon whose ego and arrogance levels compete with Tony Stark. His entire life is dedicated to his work -- but all of that gets flushed away when a horrific car accident damages the nerve endings in his hands.</p><p>Searching for some kind of cure, Strange finds himself destitute and desperate in Nepal, where he finds the training institute known as Kamar-Taj. Under the tutelage of The Ancient One (Tilda Swinton), Karl Mordo (Chiwetel Ejiofor), and Wong (Benedict Wong), the hero begins training in the mystic arts, and before long begins to master them. Of course, this kind of power comes with certain responsibilities, and Strange finds himself embroiled in a conflict with a student named Kaecilius (Mads Mikkelson) -- who wishes to open our universe up to the timeless being known as Dormammu. Utilizing an amulet known as the Eye of Agamotto, which is actually the Time Infinity Stone, Strange is able to defeat Dormammu, and takes up residence in New York's Sanctum Sanctorum as a protector of the Earth from dangerous magical forces.</p>"
  ],
  15 =>[
    'id' => 15,
    'related' => [10],
    'title' => 'Guardians Of The Galaxy: Vol 2',
    'poster' => 'images/guardians2.jpeg',
    'release' => DateTime::createFromFormat('d m Y', '10 04 2017'),
    'director' => 'James Gunn',
    'reviews' => [
      "Niemand zat te wachten op een luie remake van de eerste Guardians of the Galaxy. Wel op een nieuwe mixtape. Met nummers als 'Mr. Blue Sky' (Electric Light Orchestra), 'Brandy (You're a Fine Girl)' (Looking Glass) en 'The Chain' (Fleetwood Mac) is volume 2 dan weer wel uitmuntend."
    ],
    'score' => 8.3,
    'synopsis' => "<p>James Gunn's Guardians of the Galaxy Vol. 2 picks up just two months after the end of the previous adventure, and finds the titular team enjoying their newfound fame and success. They've used their notoriety to get hero work -- though they find a bit of trouble when Rocket steals some valuable batteries from an alien race known as the Sovereign. It looks like the Guardians may be doomed, but they are saved at the last minute by an alien named Ego (Kurt Russell), who claims to be Star-Lord's dad.</p><p>While Star-Lord (who discovers he's half god), Gamora, and Drax join Ego and his assistant, Mantis (Pom Klementieff), on a journey to Ego's home world, Rocket, Groot and the captured Nebula find themselves dealing with Yondu (Michael Rooker) and the Ravagers -- who aim to collect the bounty on the Guardians' heads. The blue-finned leader wishes to go soft on the group, but the situation escalates into a giant mutiny, with Yondu having to kill all his former friends. This all goes down just in the nick of time, because Star-Lord discovers Ego's plans to remake the universe, and the fact that he was responsible for his mother's cancer). An epic battle ensues that sees Ego destroyed, but Star-Lord sacrifices his powers, and Yondu sacrifices himself, leading Star-Lord realize who his real father was all along.</p>"
  ],
  16 =>[
    'id' => 16,
    'related' => [],
    'title' => 'Spiderman: Homecoming',
    'poster' => 'images/spiderman.jpg',
    'release' => DateTime::createFromFormat('d m Y', '28 05 2017'),
    'director' => 'Jon Watts',
    'reviews' => [
      'Wij zaten niet te wachten op de zesde Spider-Manfilm in vijftien jaar tijd. Toch is Spider-Man: Homecoming geen complete waste of time. Al was het maar omdat tiener Peter Parker zich deze keer ook gedraagt als een tiener. Met de stem én de babyface van een tiener.'
    ],
    'score' => 9.2,
    'synopsis' => "<p>Young Peter Parker got a taste of the big time superhero life during the events of Captain America: Civil War, but Jon Watts' Spider-Man: Homecoming sees the web-slinging hero return to his more humdrum normal life. He is desperate to prove himself as good enough to join The Avengers, but Tony Stark -- who designed his suit -- refuses to let him off the leash. This is pretty unbearable, but things get even worse when Peter discovers a villainous plot involving the hijacking of alien and advanced technology from the government for the development of black market weapons.</p><p>Spider-Man begins to look into the criminal behaviors of Adrian Toomes a.k.a. The Vulture (Michael Keaton), but simultaneously has to hide his secret life from his classmates and Aunt May (Marisa Tomei). He fortunately has an ally in his best friend Ned (Jacob Batalon), and by the end of the film he is legitimately able to save the day -- stopping a plane loaded with Avengers equipment from being stolen by Toomes. It winds up being a hit to his social life, as his crush, Liz Allen (Laura Harrier), is actually the villain's daughter, but what Peter doesn't know is that his classmate Michelle a.k.a. M.J. (Zendaya) has a serious crush on him. He also very much grows from the experience, as he has the maturity to turn down Tony Stark's offer to join the Avengers, and instead remains a friendly neighborhood Spider-Man.</p>"
  ],
  17 =>[
    'id' => 17,
    'related' => [4, 8],
    'title' => 'Thor: Ragnarok',
    'poster' => 'images/thor3.png',
    'release' => DateTime::createFromFormat('d m Y', '25 10 2017'),
    'director' => 'Taika Waititi',
    'reviews' => [
      'Na twee heel (maar echt héél) slechte Thor-films wist regisseur Taika Waititi het tij te keren. Hoe? Door er iets compleet anders van te maken. In Thor: Ragnarok is Chris Hemsworth meer comedian dan held. En dat staat hem goed.'
    ],
    'score' => 9.2,
    'synopsis' => "<p>As depicted in the Marvel Cinematic Universe, Thor has long had some serious family issues -- but they truly all come to a head in Taika Waititi's Thor: Ragnarok. It starts when the God of Thunder discovers that his brother, Loki, is actually alive and ruling Asgard pretending to be Odin -- but things only get worse from there. Together they only find the real Odin just moments before his death, and that particular event leads to the introduction of Hela (Cate Blanchett), the evil sister that Thor and Loki never knew they had.</p><p>It turns out that Odin has been working to keep Hela banished from Asgard for centuries, as she has serious plans to introduce Ragnarok: the end of all things. A quick attempt to stop Hela results in Thor's hammer being destroyed and the hero being stranded with Loki on Sakaar, a garbage planet where the Hulk happens to have become a gladiator superstar. With the help of the green monster and Valkyrie (Tessa Thompson), an alcoholic former Asgardian, Thor and Loki escape from under the thumb of Sakaar's oppressive ruler, The Grandmaster (Jeff Goldblum), and return home to try and save their people from Hela. Thor loses an eye in the final battle, but also realizes that Asgard is about a community and not a place -- allowing him to let his homeland be totally destroyed after rescuing as many of his people as he can.</p>"
  ],
  18 =>[
    'id' => 18,
    'related' => [],
    'title' => 'Black Panther',
    'poster' => 'images/blackpanther.jpg',
    'release' => DateTime::createFromFormat('d m Y', '14 02 2018'),
    'director' => 'Ryan Coogler',
    'reviews' => [
      "Het was lang uitkijken naar de eerste, zwarte superheld. En Black Panther 'delivers'. Maar gelukkig werd het ook méér dan ‘die Marvel-film met die zwarte acteurs’. Een film die ergens over gaat, bijvoorbeeld. Wakanda forever!"
    ],
    'score' => 9.7,
    'synopsis' => "<p>Following the titular character's introduction in Captain America: Civil War, Ryan Coogler's Black Panther brings the regal and heroic T'Challa back home to the African nation of Wakanda. He is to be named king following the unexpected death of his father, T'Chaka (John Kani), and fortunately has the support of the Queen Mother, Ramonda (Angela Bassett), his genius younger sister Shuri (Letitia Wright), his bodyguard Okoye (Danai Gurira), and his secret love, Nakia (Lupita Nyong'o). It seems like it should be smooth sailing ascending to the crown, but the situation proves anything but.</p><p>T'Challa's coronation coincides with the arrival of Erik Killmonger (Michael B. Jordan) -- a foreign-born mercenary who also happens to be the son of T'Chaka's brother. Killmonger believes that the throne of Wakanda rightfully belongs to him, and he challenges T'Challa in ritual combat for the crown -- with visions of exporting Wakanda's immense resources to the rest of the world and starting a global war. It becomes a successful revolution, as Killmonger takes over the country, but with support from his people the Black Panther fights back. T'Challa is eventually able to rescue his nation from Killmonger's grip, but also learns something from his cousin's efforts. After centuries of isolation, he decides that it's time for Wakanda to open itself up to everybody.</p>"
  ],
  19 =>[
    'id' => 19,
    'related' => [6, 11],
    'title' => 'Infinity War',
    'poster' => 'images/infinitywar.jpg',
    'release' => DateTime::createFromFormat('d m Y', '25 04 2018'),
    'director' => 'Anthony & Joe Russo',
    'reviews' => [
      "Het onwaarschijnlijke is gebeurd. In de derde Avengers bundelen zo'n 22 superhelden de krachten in een 2,5 uur durende zit. En die is al bij al nog redelijk bevattelijk. Meer zelfs: we kijken nu al uit naar het vervolg. Nog een jaartje."
    ],
    'score' => 8.3,
    'synopsis' => "As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain."
  ]
];