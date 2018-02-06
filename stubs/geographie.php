<?php include 'stubs/tomes.php'; ?>

<?php include 'stubs/navigation.php'; ?>

			<h2 class="wrap hide"><img class="deco-left" src="/assets/images/deco-left.png" alt="" />Néréland<img class="deco-right" src="/assets/images/deco-right.png" alt="" /></h2>

<?php /*
			<div id="planes">
				<a id="nereland" href="/geographie/nereland">Neréland</a>
				<a id="earth" href="/geographie/terre">La Terre</a>
			</div>
*/ ?>
			<div id="map" class="wrap">
				<div id="tome-1" class="tome">
					<img class="nereland_1" src="/assets/images/tome-1/nereland_1.jpg" alt="La carte de Nereland du tome 1" />
					<img class="nereland_2" src="/assets/images/tome-1/nereland_2.jpg" alt="La carte de Nereland du tome 1" />
					<img class="nereland_3" src="/assets/images/tome-1/nereland_3.jpg" alt="La carte de Nereland du tome 1" />
				</div>
				<div id="tome-2" class="tome">
					<img class="nereland_1" src="/assets/images/tome-2/nereland_1.jpg" alt="La carte de Nereland du tome 2" />
					<img class="nereland_2" src="/assets/images/tome-2/nereland_2.jpg" alt="La carte de Nereland du tome 2" />
					<img class="nereland_3" src="/assets/images/tome-2/nereland_3.jpg" alt="La carte de Nereland du tome 2" />
				</div>
<?php /*
				<div id="tome-3" class="tome">
					<img class="nereland_1" src="/assets/images/tome-3/nereland_1.jpg" alt="La carte de Nereland du tome 3" />
					<img class="nereland_2" src="/assets/images/tome-3/nereland_2.jpg" alt="La carte de Nereland du tome 3" />
					<img class="nereland_3" src="/assets/images/tome-3/nereland_3.jpg" alt="La carte de Nereland du tome 3" />
				</div>
*/ ?>
				<div class="map-points">
					<!-- All Tomes -->
					<div id="markAuthor"		data-id="Author"		title="Merci"		class="mark tome-0"></div>

					<!-- Cities -->
					<div id="markAnkhoril"		data-id="Ankhoril"		title="Ankhoril"		class="mark dot tome-2 tome-3"></div>
					<div id="markAngstel"		data-id="Angstel"		title="Angstel"			class="mark dot tome-2 tome-3"></div>
					<div id="markArak"		data-id="Arak"			title="Arak"			class="mark dot tome-2 tome-3"></div>
					<div id="markAtemon"		data-id="Atemon"		title="Atémon"			class="mark dot tome-2 tome-3"></div>
					<div id="markAullingst"		data-id="Aullingst"		title="Aullingst"		class="mark dot tome-2 tome-3"></div>
					<div id="markCedres"		data-id="Cedres"		title="Cèdres"			class="mark dot tome-2 tome-3"></div>
					<div id="markChateauVlad"	data-id="ChateauVlad"		title="Château de Vlad"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteRavine"	data-id="CiteRavine"		title="Cité Ravine"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteTalji"		data-id="CiteTalji"		title="Cité de Talji"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteThorne"	data-id="CiteThorne"		title="Cité de Thorne"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteTlemekk"	data-id="CiteTlemekk"		title="Cité de Tlemekk"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteTolgane"	data-id="CiteTolgane"		title="Cité de Tolgane"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteRuines"	data-id="CiteRuines"		title="Cité en Ruines"		class="mark dot tome-2 tome-3"></div>
					<div id="markCiteZeelonTale"	data-id="CiteZeelonTale"	title="Cité de Zeelon Tale"	class="mark dot tome-2 tome-3"></div>
					<div id="markDeltaNord"		data-id="DeltaNord"		title="Delta Nord"		class="mark dot tome-2 tome-3"></div>
					<div id="markDeltaOuest"	data-id="DeltaOuest"		title="Delta Ouest"		class="mark dot tome-2 tome-3"></div>
					<div id="markDeltaSud"		data-id="DeltaSud"		title="Delta Sud"		class="mark dot tome-2 tome-3"></div>
					<div id="markDelthie"		data-id="Delthie"		title="Delthie"			class="mark dot tome-2 tome-3"></div>
					<div id="markDeon"		data-id="Deon"			title="Déon"			class="mark dot tome-2 tome-3"></div>
					<div id="markGothnard"		data-id="Gothnard"		title="Gothnard"		class="mark dot tome-2 tome-3"></div>
					<div id="markHynt"		data-id="Hynt"			title="Hynt"			class="mark dot tome-2 tome-3"></div>
					<div id="markHelrek"		data-id="Helrek"		title="Helrek"			class="mark dot tome-2 tome-3"></div>
					<div id="markIggenbass"		data-id="Iggenbass"		title="Iggenbass"		class="mark dot tome-2 tome-3"></div>
					<div id="markIlstunn"		data-id="Ilstunn"		title="Ilstunn"			class="mark dot tome-2 tome-3"></div>
					<div id="markKegbis"		data-id="Kegbis"		title="Kegbis"			class="mark dot tome-2 tome-3"></div>
					<div id="markKlebber"		data-id="Klebber"		title="Klebber"			class="mark dot tome-2 tome-3"></div>
					<div id="markKraddlor"		data-id="Kraddlor"		title="Kraddlor"		class="mark dot tome-2 tome-3"></div>
					<div id="markNemstyl"		data-id="Nemstyl"		title="Nemstyl"			class="mark dot tome-2 tome-3"></div>
					<div id="markNerebil"		data-id="Nerebil"		title="Nérébil"			class="mark dot tome-2 tome-3"></div>
					<div id="markNessel"		data-id="Nessel"		title="Nessel"			class="mark dot tome-2 tome-3"></div>
					<div id="markNinkleton"		data-id="Ninkleton"		title="Ninkleton"		class="mark dot tome-2 tome-3"></div>
					<div id="markOrfelyne"		data-id="Orfelyne"		title="Orfélyne"		class="mark dot tome-2 tome-3"></div>
					<div id="markOrogoth"		data-id="Orogoth"		title="Orogoth"			class="mark dot tome-2 tome-3"></div>
					<div id="markPalaisDesIrmes"	data-id="PalaisDesIrmes"	title="Le palais des Irmes"	class="mark dot tome-0"></div>
					<div id="markPointeChamps"	data-id="PointeChamps"		title="Pointe aux Champs"	class="mark dot tome-2 tome-3"></div>
					<div id="markPointeNoire"	data-id="PointeNoire"		title="Pointe Noire"		class="mark dot tome-2 tome-3"></div>
					<div id="markPortEmmerel"	data-id="PortEmmerel"		title="Port Emmerel"		class="mark dot tome-2 tome-3"></div>
					<div id="markPortSyridge"	data-id="PortSyridge"		title="Port Syridge"		class="mark dot tome-2 tome-3"></div>
					<div id="markSalameh"		data-id="Salameh"		title="Salameh"			class="mark dot tome-2 tome-3"></div>
					<div id="markSinkarah"		data-id="Sinkarah"		title="Sinkarah"		class="mark dot tome-2 tome-3"></div>
					<div id="markSyruth"		data-id="Syruth"		title="Syruth"			class="mark dot tome-2 tome-3"></div>
					<div id="markTilmash"		data-id="Tilmash"		title="La Pyramide de Tilmash"	class="mark dot tome-2 tome-3"></div>
					<div id="markTourMeltdar"	data-id="TourMeltdar"		title="Tour de Meltdar"		class="mark dot tome-2 tome-3"></div>
					<div id="markUlnes"		data-id="Ulnes"			title="Ulnes"			class="mark dot tome-2 tome-3"></div>
					<div id="markVordres"		data-id="Vordres"		title="Vordres"			class="mark dot tome-2 tome-3"></div>

					<!-- Territories -->
<?php /*
					<div id="markAgoraMontagne"		data-id="AgoraMontagne"		title="Agora dans la montagne"		class="mark tome-2 tome-3"></div>
					<div id="markAnseAuxIndiens"		data-id="AnseAuxIndiens"	title="Anse-Aux-Indiens"		class="mark tome-2 tome-3"></div>
					<div id="markBaieGlacons"		data-id="BaieGlacons"		title="Baie des Glaçons"		class="mark tome-2 tome-3"></div>
*/ ?>
					<div id="markCollineAuCypres"		data-id="CollineAuCypres"	title="Colline au Cyprès"		class="mark tome-2 tome-3"></div>
					<div id="markContinentPerdu"		data-id="ContinentPerdu"	title="Le Continent Perdu"		class="mark tome-2 tome-3"></div>
					<div id="markDesertsEst"		data-id="DesertsEst"		title="Déserts de l’Est"		class="mark tome-2 tome-3"></div>
					<div id="markGrandLacSalameh"		data-id="GrandLacSalameh"	title="Grand lac Salameh"		class="mark tome-2 tome-3"></div>
					<div id="markGrandeMerSud"		data-id="GrandeMerSud"		title="Grande Mer du Sud￼"		class="mark tome-2 tome-3"></div>
					<div id="markGrandeMerSyridge"		data-id="GrandeMerSyridge"	title="Grande Mer Syridge"		class="mark tome-2 tome-3"></div>
<?php /*
					<div id="markHautesTerresAulingst"	data-id="HautesTerresAulingst"	title="Hautes Terres d’Aulingst"	class="mark tome-2 tome-3"></div>
					<div id="markIleAuxRoches"		data-id="IleAuxRoches"		title="Île aux Roches"			class="mark tome-2 tome-3"></div>
					<div id="markIleDhseth"			data-id="IleDhseth"		title="Île Dhseth"			class="mark tome-2 tome-3"></div>
*/ ?>
					<div id="markIsleHeuf"			data-id="IsleHeuf"		title="Isle d’Heuf"			class="mark tome-2 tome-3"></div>
<?php /*
					<div id="mark￼IsleEnfers"		data-id="IsleEnfers"		title="L’Isle d’Enfers￼"			class="mark tome-2 tome-3"></div>
					<div id="markLaSource"			data-id="LaSource"		title="La Source"			class="mark tome-2 tome-3"></div>
*/ ?>
					<div id="markLacEmbrume"		data-id="LacEmbrume"		title="Lac Embrumé"			class="mark tome-2 tome-3"></div>
					<div id="markLacHelrek"			data-id="LacHelrek"		title="Lac Helrek"			class="mark tome-2 tome-3"></div>
					<div id="markLacOise"			data-id="LacOise"		title="Lac d’Oise"			class="mark tome-2 tome-3"></div>
					<div id="markMaelstromNeptune"		data-id="MaelstromNeptune"	title="Le Maelstrom de Neptune"		class="mark tome-2 tome-3"></div>
					<div id="markMaraisGlost"		data-id="MaraisGlost"		title="Marais de Glost"			class="mark tome-2 tome-3"></div>
					<div id="markMaraisNord"		data-id="MaraisNord"		title="Marais du Nord"			class="mark tome-2 tome-3"></div>
					<div id="markMerOsique"			data-id="MerOsique"		title="Mer d’Osique"			class="mark tome-2 tome-3"></div>
					<div id="markMontNord"			data-id="MontNord"		title="Mont du Nord"			class="mark tome-2 tome-3"></div>
<?php /*
					<div id="markMontHowser"		data-id="MontHowser"		title="Mont Howser"			class="mark tome-2 tome-3"></div>
					<div id="markMontRhaneit"		data-id="MontRhaneit"		title="Mont Rhaneit"			class="mark tome-2 tome-3"></div>
*/ ?>
					<div id="markMontYakkthi"		data-id="MontYakkthi"		title="Mont Yakkthi"			class="mark tome-2 tome-3"></div>
					<div id="markMontagnesFeu"		data-id="MontagnesFeu"		title="Montagnes de Feu"		class="mark tome-2 tome-3"></div>
					<div id="markMontsFerreux"		data-id="MontsFerreux"		title="Monts Ferreux"			class="mark tome-2 tome-3"></div>
					<div id="markMontsSmoglia"		data-id="MontsSmoglia"		title="Monts Smoglia"			class="mark tome-2 tome-3"></div>
					<div id="markOceanNord"			data-id="OceanNord"		title="Océan du Nord"			class="mark tome-2 tome-3"></div>
					<div id="markPlainesMortes"		data-id="PlainesMortes"		title="Les Plaines Mortes"		class="mark tome-2 tome-3"></div>
					<div id="markPetiteMerSyridge"		data-id="PetiteMerSyridge"	title="Petite Mer Syridge"		class="mark tome-2 tome-3"></div>
					<div id="markPicArgente"		data-id="PicArgente"		title="Pic Argenté"			class="mark tome-2 tome-3"></div>
					<div id="markPlainesMenthyle"		data-id="PlainesMenthyle"	title="Plaines de Menthyle"		class="mark tome-2 tome-3"></div>
					<div id="markPlainesVerprey"		data-id="PlainesVerprey"	title="Les Plaines de Verprey"		class="mark tome-2 tome-3"></div>
					<div id="markPlateauOlgoth"		data-id="PlateauOlgoth"		title="Plateau d'Olgoth"		class="mark tome-2 tome-3"></div>
					<div id="markPointeMort"		data-id="PointeMort"		title="Pointe-de-la-Mort"		class="mark tome-2 tome-3"></div>
					<div id="markTaniereDuVent"		data-id="TaniereDuVent"		title="La Tanière du Vent"		class="mark tome-2 tome-3"></div>
					<div id="markRiviereCristal"		data-id="RiviereCristal"	title="Rivière de Cristal"		class="mark tome-2 tome-3"></div>
<?php /*
					<div id="markTerresFeu"			data-id="TerresFeu"		title="Terres de Feu"			class="mark tome-2 tome-3"></div>
					<div id="markTerresGlace"		data-id="TerresGlace"		title="Terres de Glace"			class="mark tome-2 tome-3"></div>
					<div id="markTerresSud"			data-id="TerresSud"		title="Terres du Sud"			class="mark tome-2 tome-3"></div>
*/ ?>


				</div>
			</div>

			<div id="point-popups">
				<div id="popupAuthor" data-id="Author" class="popupPlace">
					<div class="inner">
						<h3>Un MERCI majuscule</h3>
						<p>à mon ami Sylvain Cloutier pour le dessin de la carte du royaume de Néréland...</p>
					</div>
				</div>

				<!-- Cities -->
				<div id="popupAnkhoril" data-id="Ankhoril" class="popupPlace">
					<div class="inner">
						<h3>Ankhoril</h3>
						<p>Première ville du grand Ravin, elle abrite surtout des Nenkels, des Lycaons et des Dhorgoths. Pop. : 900 000 hab.</p>
					</div>
				</div>
				<div id="popupAngstel" data-id="Angstel" class="popupPlace">
					<div class="inner">
						<h3>Angstel</h3>
						<p>Cette cité peuplée d’humanoïdes ailés est surnommée la cité des anges. Il s’agit de la troisième ville en importance après Orfélyne et la communauté de Delta. Elle est baignée d’énergies positives. C’est peut-être à cause des nombreux îlots de verdure naturelle que les bâtisseurs ont laissés entre les gratte-ciel.</p>
					</div>
				</div>
				<div id="popupArak" data-id="Arak" class="popupPlace">
					<div class="inner">
						<h3>Arak</h3>
						<p>Bâtie à l’embouchure du fleuve Synkarh, au bord de la Mer d’Osique, la cité fortifiée du Tsar abrite des guerriers arabes armés de cimeterres. Trois ponts permettent de traverser le fleuve.</p>
					</div>
				</div>
				<div id="popupAtemon" data-id="Atemon" class="popupPlace">
					<div class="inner">
						<h3>Atémon</h3>
						<p>Située sur les Terres du Sud, royaume voisin de Néréland, cette ville abrite des marchands parmi lesquels ont trouve les meilleurs apothicaires. C’est un endroit que fréquentent les druides et les sorciers. La population demeure sur le qui-vive, car les duels sont fréquents.</p>
					</div>
				</div>
				<div id="popupAullingst" data-id="Aullingst" class="popupPlace">
					<div class="inner">
						<h3>Aullingst</h3>
						<p>Cette ville autrefois majestueuse fut la capitale des Hautes Terres d'Aullingst. Désormais sur le déclin, elle abrite les derniers survivants de ce royaume déchu.</p>
					</div>
				</div>
				<div id="popupCedres" data-id="Cedres" class="popupPlace">
					<div class="inner">
						<h3>Cèdres</h3>
						<p>Dernier village situé en bordure du fleuve Sudique, avant qu’il ne s’écoule dans les grottes pour aboutir dans la Grande Mer du Sud. Ce village forestier tranquille reçoit rarement des visiteurs, mais ceux-ci y sont accueillis comme des rois ou traités en vauriens, selon leurs intentions.</p>
					</div>
				</div>
				<div id="popupChateauVlad" data-id="ChateauVlad" class="popupPlace">
					<div class="inner">
						<h3>Château de Vlad</h3>
						<p>Cette ville fortifiée située près du Palais des Irmes abritait jadis un vil bandit repenti qui s’est reconverti dans les œuvres de bienfaisance. La ville sert désormais de fabrique de vêtements et uniformes militaires pour l’Armée des Ismèdes et pour les Silnes, soldats d’élite du royaume. On y forge également des armes.</p>
					</div>
				</div>
				<div id="popupCiteRavine" data-id="CiteRavine" class="popupPlace">
					<div class="inner">
						<h3>Cité Ravine</h3>
						<p>Quatrième et dernière ville du grand Ravin, elle est bâtie sur les deux parois parallèles d’un large canyon, profond de six kilomètres. Elle est située près du seul emplacement assez étroit pour que l’on puisse y bâtir un pont. Celui-ci traverse la rivière qui s’écoule depuis les Monts Ferreux jusqu’à l’océan de l’Ouest. Le canyon s’élargit régulièrement, puis se rétrécit à la hauteur de la ville, avant de s’ouvrir à nouveau vers l’océan. Bénéficiant de son emplacement stratégique, la ville a proliféré en imposant un péage pour franchir le pont. Son enchevêtrement légendaire de passerelles, de tunnels et de maisons superposées forme un dédale où se perdent les nouveaux venus. Cette cité est un lieu sombre où se cachent les malandrins les plus infâmes de Néréland. Des pièges attendent les âmes pures qui s’y aventurent. Zhorus y fait entrer ses complices en utilisant les raccourcis.</p>
					</div>
				</div>
				<div id="popupCiteTalji" data-id="CiteTalji" class="popupPlace">
					<div class="inner">
						<h3>Cité de Talji</h3>
						<p>Ville druidique dissimulée dans les profondeurs des Marais de Glost, sur les Hautes Terres d’Aullingst. Ces marécages hantés sont hostiles aux intrus… Il semble que la cité puisse déclencher des orages puissants et de dangereuses tempêtes électriques en présence de tout envahisseur. Elle tirerait son pouvoir de la roche magnétique enfouie sous les Marais de Glost.</p>
					</div>
				</div>
				<div id="popupCiteThorne" data-id="CiteThorne" class="popupPlace">
					<div class="inner">
						<h3>Cité souterraine de Thorne</h3>
						<p>Ville druidique souterraine dissimulée sous le Mont du Nord. Point culminant de toute la région, cette montagne s’élève si haut que son sommet se perd par delà les nuages. La ville occupe de larges corridors souterrains aux plafonds de glace qui diffusent un faible éclairage dans toute la cité. L’un de ces corridors mène à l’entrée d’un labyrinthe redoutable que peu de gens savent franchir. La sortie donne accès à la Tour de Glace du sage Ahlmankah, un oracle qui a fait vœu de solitude.</p>
					</div>
				</div>
				<div id="popupCiteTlemekk" data-id="CiteTlemekk" class="popupPlace">
					<div class="inner">
						<h3>Cité de Tlemekk</h3>
						<p>Ville druidique partiellement souterraine construite dans un massif rocheux, au cœur des Terres de Feu. Ses larges corridors comportent des baies vitrées pour admirer le paysage désolé et saisissant des Terres de Feu. Ses voûtes souterraines abritent plus de secrets que les archives d’un gouvernement.</p>
					</div>
				</div>
				<div id="popupCiteTolgane" data-id="CiteTolgane" class="popupPlace">
					<div class="inner">
						<h3>Cité montagnarde de Tolgane</h3>
						<p>Ville druidique située à l’intérieur d’une montagne, au sud-est du Plateau d’Olgoth. L’entrée est protégée par un enchantement puissant capable de déclencher de terribles sortilèges sur les éléments. De nombreux tunnels invitent le visiteur inopportun à s’y perdre, tandis que la grande porte offre un accès direct à la grande bibliothèque.</p>
					</div>
				</div>
				<div id="popupCiteRuines" data-id="CiteRuines" class="popupPlace">
					<div class="inner">
						<h3>Cité en Ruines</h3>
						<p>Ancienne capitale des Hautes Terres d'Aullingst. Elle n’est plus aujourd’hui que ruines de pierre au milieu d’un désert de sable fin.</p>
					</div>
				</div>
				<div id="popupCiteZeelonTale" data-id="CiteZeelonTale" class="popupPlace">
					<div class="inner">
						<h3>Cité Secrète de Zeelon Tale</h3>
						<p>Cachée dans les collines au nord de la Cité Ravine, au cœur d’une jungle luxuriante, cette cité souterraine fortifiée est recouverte d’un dôme de béton et de pierres. Des douves profondes entourent le dôme, ne laissant pour unique accès qu’un pont-levis conduisant à un tunnel qui s’enfonce sous terre, vers l’intérieur de la cité. Le dôme est protégé contre les intrusions par le plan Astral, également contre les vortex spatiotemporels et contre une foule de sortilèges que le sorcier a prévus. Le sous-sol de la cité dissimule une imposante mine d’or. Trois tribus d’aborigènes surveillent le territoire entourant la cité et traquent les visiteurs importuns.</p>
					</div>
				</div>
				<div id="popupDankhor" data-id="Dankhor" class="popupPlace">
					<div class="inner">
						<h3>Dankhor</h3>
						<p>Située sur l’Isle d’Enfers, cette prison occupe un delta aux terres fertiles où poussent différentes essences de vignes. On y fait un vin qui est disputé dans tout le pénitencier.</p>
					</div>
				</div>
				<div id="popupDeltaNord" data-id="DeltaNord" class="popupPlace">
					<div class="inner">
						<h3>Delta Nord</h3>
						<p>Ville côtière longeant le fleuve du sud. On y trouve des apothicaires capables de fournir des ingrédients d’une grande rareté. Elle forme avec Delta Ouest et Delta Sud la seconde plus grande métropole de Néréland.</p>
					</div>
				</div>
				<div id="popupDeltaOuest" data-id="DeltaOuest" class="popupPlace">
					<div class="inner">
						<h3>Delta Ouest</h3>
						<p>Ville côtière. Elle forme avec Delta Nord et Delta Sud la seconde plus grande métropole de Néréland.</p>
					</div>
				</div>
				<div id="popupDeltaSud" data-id="DeltaSud" class="popupPlace">
					<div class="inner">
						<h3>Delta Sud</h3>
						<p>Banlieue construite sur la pointe du delta du sud, formant, avec Delta Ouest et Delta Nord, la seconde plus grande métropole de Néréland. La communauté de Delta est l’une des plus riches de Néréland, ce qui lui donne une réputation de ville marchande. Le fait d’avoir cette ville pour origine est mal vu dans le reste du royaume.</p>
					</div>
				</div>
				<div id="popupDelthie" data-id="Delthie" class="popupPlace">
					<div class="inner">
						<h3>Delthie</h3>
						<p>Village tranquille bâti dans les montagnes, entre les Plaines Mortes et les Marais de Glost.</p>
					</div>
				</div>
				<div id="popupDemether" data-id="Demether" class="popupPlace">
					<div class="inner">
						<h3>Déméther</h3>
						<p>Pénitencier de l’Isle d’Enfers abritant une soixantaine de détenus. Situé dans un fjord profond et désolé, il est difficile d’accès et balayé par des vents forts et constants. De hautes vagues rende impossible la mise à l’eau de quelque embarcation que ce soit. Elle serait aussitôt rejetée sur les rochers escarpés qui forment le rivage.</p>
					</div>
				</div>
				<div id="popupDeon" data-id="Deon" class="popupPlace">
					<div class="inner">
						<h3>Déon</h3>
						<p>Située dans les Monts Ferreux, elle est surnommée la cité Elnak. En effet, il ne faut pas craindre ces créatures de la nuit pour oser s’y rendre. C’est une ville minière qui a mauvaise réputation, quoique bien des voyageurs en soient revenus sans pouvoir expliquer l’origine de cette réputation.</p>
					</div>
				</div>
				<div id="popupGothnard" data-id="Gothnard" class="popupPlace">
					<div class="inner">
						<h3>Gothnard</h3>
						<p>Village nordique situé sur la rive nord du grand lac Salameh, aussi appelé Mer de Salameh. On y trouve le château Valderoy, la résidence cossue du Comte de Pollosh, un riche marchand qui possède une flotte de navires et de ballons dirigeables. Le Monastère du Lac Ducherrim abrite les moines trappistes dont le chocolat aux vyrthèles est réputé. Ce sont également de grands maîtres d’armes et des combattants hors pair. Leur monastère est fortifié de murailles infranchissables protégées par des gargouilles. Pour finir, le Collège de Welton est un établissement tout indiqué pour former de brillants ingénieurs qui sauront respecter la charte de l’environnement.</p>
					</div>
				</div>
				<div id="popupGourannes" data-id="Gourannes" class="popupPlace">
					<div class="inner">
						<h3>Gourannes</h3>
						<p>Pénitencier de l’Isle d’Enfers, situé sur la pointe sud du continent. Abritant 80 détenus, il se compose d’une forteresse de briques noires comportant des tours et des arches gothiques. Toujours nappé de brume, cet endroit n’a rien de joyeux.</p>
					</div>
				</div>
				<div id="popupHynt" data-id="Hynt" class="popupPlace">
					<div class="inner">
						<h3>Hynt</h3>
						<p>Ce village dessert une région agricole peu peuplée où il fait pourtant bon vivre. Ceux qui aiment le grand air, les vastes prairies bordées de forêts clairsemées et les chaumières confortables sont servis.</p>
					</div>
				</div>
				<div id="popupHelrek" data-id="Helrek" class="popupPlace">
					<div class="inner">
						<h3>Helrek</h3>
						<p>Cette cité tranquille située à l’est-nord-est de la cité d’Orfélyne abrite 25 000 citoyens. Sur une colline du nord de la ville s’élève le monastère des Frères de l’Ordre d’Ereldim, un organisme qui soigne les enfants malades et qui élève les orphelins.</p>
					</div>
				</div>
				<div id="popupIggenbass" data-id="Iggenbass" class="popupPlace">
					<div class="inner">
						<h3>Iggenbass</h3>
						<p>C’est la cité où sont entraînés les Silnes, les soldats spéciaux du roi. Les Silnes sont entraînés pour le combat extrême, pour assurer la sécurité interne ainsi que le maintien des frontières. Leur uniforme impose le respect, leur armure suscite la crainte et leur armement est redoutable. Leur monture est un reptile ailé portant un plumage coloré. Ils travaillent de concert avec l’armée des Ismèdes, les soldats réguliers du royaume.</p>
					</div>
				</div>
				<div id="popupIlstunn" data-id="Ilstunn" class="popupPlace">
					<div class="inner">
						<h3>Ilstunn</h3>
						<p>Petit village paisible situé à une centaine de kilomètres au nord d’Helrek. Il abrite un institut scientifique.</p>
					</div>
				</div>
				<div id="popupKegbis" data-id="Kegbis" class="popupPlace">
					<div class="inner">
						<h3>Kegbis</h3>
						<p>Ville paysanne située au pied du Plateau d’Olgoth. Peuplée de Syganes pacifiques, mais prêts à faire la guerre pour une noble cause. Site du temple de Sarêgoon, grand prêtre des Syganes et puissant sorcier.</p>
					</div>
				</div>
				<div id="popupKlebber" data-id="Klebber" class="popupPlace">
					<div class="inner">
						<h3>Klebber</h3>
						<p>Seconde ville du grand Ravin, cette ville est construite dans une falaise. Lieu mal famé, il y pullule des malandrins de toutes sortes, des Nenkels, des Lycaons et des Dhorgoths.</p>
					</div>
				</div>
				<div id="popupKraddlor" data-id="Kraddlor" class="popupPlace">
					<div class="inner">
						<h3>Kraddlor</h3>
						<p>Cité marchande dont Zhorus a jadis été maire.</p>
					</div>
				</div>
				<div id="popupManoirOrnyx" data-id="ManoirOrnyx" class="popupPlace">
					<div class="inner">
						<h3>Le Manoir des Ornyx</h3>
						<p>Cet ancien manoir occupait le sommet de la falaise en forme de croissant qui donnait sur le lac embrumé. Construit pour une famille nombreuse qui vivait sur ces terres, il fut occupé ensuite par les sbires de Zhorus. Il fait l’objet d’un puissant enchantement qui le rend inaltérable, mais les Twelgs ont su l’anéantir avec tout le terrain qui l’entoure. Sur le Continent Perdu, les Ornyx ont entrepris de construire une réplique de ce manoir, en y apportant des adaptations spéciales.</p>
					</div>
				</div>
				<div id="popupManoirOrnyx" data-id="ManoirOrnyx" class="popupPlace">
					<div class="inner">
						<h3>Monument de Heingenots</h3>
						<p>Monument druidique situé sur l’Isle-D’Heuf. On ignore les secrets de sa construction et son utilité réelle, mais de puissants champs d’énergie s’en dégagent. Il produirait des effets guérisseurs sur la plupart des maux connus dans ce monde. Cependant, il n’agit que sur les gens qui en sont dignes, à la conscience tranquille. Pour ce qui est des âmes impures ou torturées, ainsi que des clandestins, il a tôt fait de les achever. Il absorbe leur énergie vitale et les force à retourner à la Source.</p>
					</div>
				</div>
				<div id="popupMortembay" data-id="Mortembay" class="popupPlace">
					<div class="inner">
						<h3>Mortembay</h3>
						<p>Pénitencier de l’Isle d’Enfers, situé dans une anse escarpée et balayée de vents violents. Ses murailles essuient de hautes vagues.</p>
					</div>
				</div>
				<div id="popupNemstyl" data-id="Nemstyl" class="popupPlace">
					<div class="inner">
						<h3>Nemstyl</h3>
						<p>Troisième ville du grand Ravin, elle abrite des gens qui préfèrent éviter qu’on les retrouve. Pop. Environ 12 000 hab.</p>
					</div>
				</div>
				<div id="popupNephrates" data-id="Nephrates" class="popupPlace">
					<div class="inner">
						<h3>Néphrates</h3>
						<p>Village de détenus qui ont quitté les pénitenciers de l’Isle d’Enfers. Ils se sont établis au centre de l’île et tentent de s’y refaire une vie tout en se défendant contre les assauts des pillards provenant des pénitenciers voisins.</p>
					</div>
				</div>
				<div id="popupNerebil" data-id="Nerebil" class="popupPlace">
					<div class="inner">
						<h3>Nérébil</h3>
						<p>Petite ville d’allure médiévale dont tous les habitants vivent en paix et en harmonie depuis que Zhorus a été changé en serpent. Ils reçoivent rarement la visite d’étrangers, mais ils se montrent accueillants et hospitaliers. Ce village comporte un temple druidique souterrain dont l’entrée est codée par les azimuts respectifs indiqués par cinq stèles de pierre cachées sur le territoire. L’ordre des azimuts est indiqué par les écrits que portent les stèles.</p>
					</div>
				</div>
				<div id="popupNessel" data-id="Nessel" class="popupPlace">
					<div class="inner">
						<h3>Nessel</h3>
						<p>Petite cité marchande, dernier rempart avant la Tour de Meltdar.</p>
					</div>
				</div>
				<div id="popupNinkleton" data-id="Ninkleton" class="popupPlace">
					<div class="inner">
						<h3>Ninkleton</h3>
						<p>Cité minière située en plein champ. Le gisement est très profond et exploité de manière propre. On en tire du charbon et du pétrole, en quantités minimes et dans le respect de l’environnement.</p>
					</div>
				</div>
				<div id="popupOasisCity" data-id="OasisCity" class="popupPlace">
					<div class="inner">
						<h3>Oasis City</h3>
						<p>Installation ultramoderne, à la fine pointe de la technologie, bâtie sur le Continent Perdu, au milieu du désert. C’est une sorte de retraite, un village d’été que les Ornyx construisent à temps perdu pour leur plaisir et pour éventuellement abriter leurs proches amis.</p>
					</div>
				</div>
				<div id="popupOrfelyne" data-id="Orfelyne" class="popupPlace">
					<div class="inner">
						<h3>Orfélyne</h3>
						<p>Cité la plus vaste et la plus peuplée de Néréland. Pour des raisons qui demeurent inconnues, les sortilèges et enchantements n’y fonctionnent pas. Elle est entourée de hautes murailles habitées, constituant en elles-mêmes de véritables villes. Ses gratte-ciels sont si hauts qu’ils masquent la vue du ciel aux citoyens. Des rues et trottoirs circulent à toutes hauteurs à travers la ville, qui représente un monument colossal. On y trouve de tout : marchandises, animaux, créatures provenant de tous les recoins de l’Univers, Éternels, Mortels clandestins, savants, sorciers, il ne vous reste qu’à chercher. Habituellement, ce sont les ennuis qui vous trouvent...</p>
					</div>
				</div>
				<div id="popupOrogoth" data-id="Orogoth" class="popupPlace">
					<div class="inner">
						<h3>Orogoth</h3>
						<p>Cette ville côtière abrite des pêcheurs Eldjinns et de redoutables guerriers à l’allure de vikings. On pense que Zhorus y aurait séjourné pendant au moins une de ses incarnations, d’où l’apparence qu’il avait avant sa condamnation.</p>
					</div>
				</div>
				<div id="popupPalaisDesIrmes" data-id="PalaisDesIrmes" class="popupPlace">
					<div class="inner">
						<h3>Palais des Irmes</h3>
						<p>Surnommé « la cité des rois », le majestueux Palais des Irmes occupe le flanc nord du Mont Olympe, qui s’élève au-dessus des collines du plateau d’Olgoth. Bâti de marbre blanc, de pierres blanches et de marbre noir, le palais occupe toute la surface d’un massif rocheux. Plusieurs ponts enjambent les profonds précipices qui l’entourent.</p>
						<p>Couverte de temples et de hauts bâtiments, la montagne-cité fait office de capitale du royaume. Il abrite les quartiers du roi, la Bibliothèque Royale, la cour de justice, la prison du royaume et de nombreux autres services. Le roi, ses conseillers, le personnel, l’armée, les gardes et leurs familles y vivent en toute sécurité.</p>
					</div>
				</div>
				<div id="popupPandemonium" data-id="Pandemonium" class="popupPlace">
					<div class="inner">
						<h3>Pandémonium</h3>
						<p>Ce pénitencier de 600 habitants s’est donné le titre ronflant de « capitale de l'Isle d'Enfers », à cause du majestueux palais de pierres noires qui fut édifié en son centre. Mais ça n’est rien de plus qu’une tour vide de toute décoration. Après tout, c’est une prison !</p>
					</div>
				</div>
				<div id="popupPlateformesAeriennes" data-id="PlateformesAeriennes" class="popupPlace">
					<div class="inner">
						<h3>Plates-formes aériennes</h3>
						<p>Les Ornyx construisent pour le plaisir un réseau de plates-formes dans les arbres géants du Continent Perdu. Sises à des dizaines de mètres du sol, elles leur servent de lieu de réflexion, d’aire de jeux et de lieu de rassemblement.</p>
					</div>
				</div>
				<div id="popupPointDeVue" data-id="PointDeVue" class="popupPlace">
					<div class="inner">
						<h3>Point-De-Vue</h3>
						<p>Situé sur le Continent Perdu, ce hameau de quelques huttes à peine domine une pointe dont l’élévation par rapport au niveau de la mer est mesurée en kilomètres. Les druides qui y vivaient pratiquaient sans doute l’astronomie car la hutte centrale est un véritable observatoire.</p>
					</div>
				</div>
				<div id="popupPointeChamps" data-id="PointeChamps" class="popupPlace">
					<div class="inner">
						<h3>Pointe aux Champs</h3>
						<p>Ville portuaire et métropole agricole située en bordure de la Mer d’Osique.</p>
					</div>
				</div>
				<div id="popupPointeNoire" data-id="PointeNoire" class="popupPlace">
					<div class="inner">
						<h3>Pointe Noire</h3>
						<p>Ville portuaire donnant sur la grande mer Syridge, à l’embouchure du fleuve et à la frontière des Hautes Terres d’Aullingst. Repaire de marins sinistres et d’aventuriers sans peur, on y trouve des pubs où l’on entend raconter des récits d’aventures qui ont de quoi faire frémir.</p>
					</div>
				</div>
				<div id="popupPointeAuxDruides" data-id="PointeAuxDruides" class="popupPlace">
					<div class="inner">
						<h3>Pointe-aux-Druides</h3>
						<p>Ruines d’un village druide situées sur le Continent Perdu. Les druides ont rebâti leur village sur l’Isle-D’Heuf et il correspond, mètre pour mètre, à celui qu’ils ont abandonné sur le Continent Perdu. On pense qu’il existerait un Raccourci permanent entre les deux villages.</p>
					</div>
				</div>
				<div id="popupPordemehr" data-id="Pordemehr" class="popupPlace">
					<div class="inner">
						<h3>Pordemehr</h3>
						<p>Pénitencier de l’Isle d’Enfers, situé à l’ouest du continent. C’est le seul endroit où il est envisageable de mettre une embarcation à l’eau. Un chantier a été entrepris pour en construire une. Le seul problème vient du manque d’arbres. Il n’y en a pas assez, ni d’assez gros, sur toute l’Isle d’Enfers pour bâtir quelque chose d’utile.</p>
					</div>
				</div>
				<div id="popupPortEmmerel" data-id="PortEmmerel" class="popupPlace">
					<div class="inner">
						<h3>Port Emmerel</h3>
						<p>Ville portuaire située dans l’Estuaire, un fjord profond où se jette la rivière Helrek. On y trouve un pont suspendu, merveille d’architecture, qui la relie à Port Syridge.</p>
					</div>
				</div>
				<div id="popupPortSyridge" data-id="PortSyridge" class="popupPlace">
					<div class="inner">
						<h3>Port Syridge</h3>
						<p>Ville portuaire située dans l’Estuaire, un fjord profond où se jette la rivière Helrek. On y trouve un pont suspendu, merveille d’architecture, qui la relie à Port Syridge.</p>
					</div>
				</div>
				<div id="popupRiviereCristal" data-id="RiviereCristal" class="popupPlace">
					<div class="inner">
						<h3>Rivière de Cristal</h3>
						<p>Site paradisiaque, non urbanisé, ayant appartenu à une communauté de druides vivant dans des cabanes forestières. La communauté a été éradiquée par Zhorus et ses acolytes, n’en laissant que des ruines mal dissimulées.</p>
					</div>
				</div>
				<div id="popupSalameh" data-id="Salameh" class="popupPlace">
					<div class="inner">
						<h3>Salameh</h3>
						<p>Petite ville en bordure de la mer de Slameh, au pied du Mont Yakkthi.</p>
					</div>
				</div>
				<div id="popupSinkarah" data-id="Sinkarah" class="popupPlace">
					<div class="inner">
						<h3>Sinkarah</h3>
						<p>Métropole du nord-est de Néréland. Elle dessert les plaines de Menthyle, où l’on trouve beaucoup de chasseurs Eldjins, d’éleveurs et d’agriculteurs. C’est un lieu d’échange et de culture.</p>
					</div>
				</div>
				<div id="popupSyruth" data-id="Syruth" class="popupPlace">
					<div class="inner">
						<h3>Syruth</h3>
						<p>Village paysan situé au nord de Delta. Le moulin en est la principale attraction. Ses sources sont également très pures et posséderaient des vertus énergisantes.</p>
					</div>
				</div>
				<div id="popupTilmash" data-id="Tilmash" class="popupPlace">
					<div class="inner">
						<h3>La Pyramide de Tilmash</h3>
						<p>Monument funéraire druidique situé dans le Grand Maquis de l’Est, un massif cristallin aux terres siliceuses qui borde la mer d’Osique. La pyramide possède de nombreux pièges pour le non-initié.</p>
					</div>
				</div>
				<div id="popupTourMort" data-id="TourMort" class="popupPlace">
					<div class="inner">
						<h3>Tour de la Mort</h3>
						<p>Ce château a été bâti par une sorcière, détenue sur l’Isle d’Enfers. Il vaut mieux éviter de s’y présenter sans invitation.</p>
					</div>
				</div>
				<div id="popupTourMeltdar" data-id="TourMeltdar" class="popupPlace">
					<div class="inner">
						<h3>Tour de Meltdar</h3>
						<p>Abrite la communauté de druides la plus ancienne de tout le royaume : la communauté de T’Zvangahr. Ces agriculteurs sont aussi de merveilleux enchanteurs.</p>
					</div>
				</div>
				<div id="popupUlnes" data-id="Ulnes" class="popupPlace">
					<div class="inner">
						<h3>Ulnes</h3>
						<p>Village portuaire situé en bordure du fleuve Sudique.</p>
					</div>
				</div>
				<div id="popupVordres" data-id="Vordres" class="popupPlace">
					<div class="inner">
						<h3>Vordres</h3>
						<p>Cité isolée du val du sud. Un seigneur sombre y a jadis régné et fut inhumé en ces lieux, désormais gardés par une confrérie de paladins assurant la tranquillité de la dépouille.</p>
					</div>
				</div>

				<!-- Territories -->
				<div id="popupAgoraMontagne" data-id="AgoraMontagne" class="popupPlace">
					<div class="inner">
						<h3>Agora dans la montagne</h3>
						<p>Situé sur le Continent Perdu, ce plateau acoustique creusé par Howser sert d’auditorium naturel aux Ornyx. Le point de vue y est assez magnifique.</p>
					</div>
				</div>
				<div id="popupAnseAuxIndiens" data-id="AnseAuxIndiens" class="popupPlace">
					<div class="inner">
						<h3>Anse-Aux-Indiens</h3>
						<p>Situé sur le Continent Perdu, cette falaise de roc en dents de scie descend jusqu’à la mer en formant une succession de plateaux superposés.</p>
					</div>
				</div>
				<div id="popupBaieGlacons" data-id="BaieGlacons" class="popupPlace">
					<div class="inner">
						<h3>Baie des Glaçons</h3>
						<p>Située au nord du Continent Perdu, cette baie accueille le glacier du Mont Rhaneit qui se déverse dans la mer le long d’une vallée. Elle comporte de nombreux icebergs qui fondent en quelques jours avant de gagner la pleine mer.</p>
					</div>
				</div>
				<div id="popupCollineAuCypres" data-id="CollineAuCypres" class="popupPlace">
					<div class="inner">
						<h3>Colline au Cyprès</h3>
						<p>Lieu d'inhumation du prince Baal Zéboul.</p><p><strong>Danger</strong>: ne jamais approcher, sous peine d'y rester prisonnier. À moins de savoir voler, quiconque tente d’en repartir y sera irrémédiablement ramené, peu importe le chemin qu’il prendra pour le quitter. Il s’épuisera à essayer de quitter ce lieu maudit et Baal Zéboul puisera alors ses énergies pour s’en abreuver.</p>
					</div>
				</div>
				<div id="popupContinentPerdu" data-id="ContinentPerdu" class="popupPlace">
					<div class="inner">
						<h3>Le Continent Perdu</h3>
						<p>Cette île isolée de la Grande Mer du Sud est l’ancien territoire des druides de la communauté de Bouhlt. Ses anciens habitants l’avaient enchanté de manière à garantir leur tranquillité et surtout, l’isolement de leur communauté. Désormais retournés à la Source, ils ont légué leur paradis perdu aux Ornyx. Le Continent Caché, aussi appelé le Continent Perdu, s’élève à des kilomètres au-dessus de la Grande Mer du Sud. Bordé de falaises sinistres et brumeuses, l’endroit est lugubre et difficile d’accès.</p>
					</div>
				</div>
				<div id="popupDesertsEst" data-id="DesertsEst" class="popupPlace">
					<div class="inner">
						<h3>Déserts de l’Est</h3>
						<p>Frontière est de Néréland, ces terres désolées sont situées entre la Mer de Salameh et la Mer d’osique. On y trouve des barbares désorganisés et sans chef qui attaquent parfois Néréland.</p>
					</div>
				</div>
				<div id="popupGrandLacSalameh" data-id="GrandLacSalameh" class="popupPlace">
					<div class="inner">
						<h3>Grand lac Salameh</h3>
						<p>Ce grand lac d’eau cristalline, aussi appelé Mer de Salameh, est séparé de l’Océan du Nord par un esker et quelques îles rocailleuses abritant des chalets isolés. Il représente la limite est du royaume de Néréland. Au-delà de ce lac, les terres sont montagneuses et boisées. On raconte qu’il y vivrait des ours, voire des peuples d’hommes-ours.</p>
					</div>
				</div>
				<div id="popupGrandeMerSud" data-id="GrandeMerSud" class="popupPlace">
					<div class="inner">
						<h3>Grande Mer du Sud</h3>
						<p>Entourée de falaises infranchissables, la Grande Mer du Sud est si vaste qu’aucune embarcation transportée jusqu’à ces eaux ne contiendrait assez de provisions pour permettre à ses passagers d’accomplir un si long voyage. Aucune créature biologique ne possède assez d’endurance pour la traverser en vol.</p>
						<p>Cette mer démontée aux eaux noires peuplées de créatures marines abominables est hantée par Leviathan. Indomptable monstre marin qui garde le Continent Perdu, Léviathan possède une peau si épaisse qu’aucune lance ni harpon ne peut la traverser. Créature à la gueule d’alligator et au corps de baleine, sa queue est assez puissante pour couler un navire ou l’aspirer dans un tourbillon. Il broie dans sa mâchoire n’importe quelle créature de ce monde.</p>
					</div>
				</div>
				<div id="popupGrandeMerSyridge" data-id="GrandeMerSyridge" class="popupPlace">
					<div class="inner">
						<h3>Grande Mer Syridge</h3>
						<p>Partie sud de l’Océan du Nord, elle forme l’estuaire de deux grands fleuves qui tirent leur source de la Petite Mer Syridge.</p>
					</div>
				</div>
				<div id="popupHautesTerresAulingst" data-id="HautesTerresAulingst" class="popupPlace">
					<div class="inner">
						<h3>Hautes Terres d’Aulingst</h3>
						<p>Royaume situé au nord-ouest de Néréland. Fondé bien après celui de Néréland, ce royaume vécut une longue période de prospérité sous la gouverne du roi Kalthar Zéboul. Lorsque ce dernier fut rappelé à la Source, il céda le trône à son fil, le capricieux prince Baal. Durant son règne, ce prince se révéla tyrannique et établit une dictature forte. Insatisfait de son pouvoir, le prince se montra influent et gourmand. Il leva les armes contre Néréland, alors sous la gouverne du roi Dylémon, pour accroître son territoire. Il réduisit en esclavage le peuple Nintshu, vivant dans les marais de Glost, mais avant d’achever sa guerre, il vit son pouvoir s’effondrer sous l’effet d’une mutinerie. Son royaume s’écroula au cours d’une guerre civile qui l’opposa à ses propres sujets, qui reçurent l’appui des Silnes. Le despotique Baal Zéboul fut capturé, emprisonné dans les geôles de son propre palais, puis disparut sans laisser de traces. On le chercha pendant longtemps, puis la culture populaire en oublia son existence. Durant sa longue absence, le peuple des Hautes Terres d’Aullingst fut décimé d’une manière aussi mystérieuse que cataclysmique. Tous les soldats Silnes demeurés sur place pour assurer le maintien des services périrent également. Il n’y eut aucun témoin de l’événement, ce qui laisse croire que les âmes qui furent détruites lors de cet holocauste furent annihilées.</p>
					</div>
				</div>
				<div id="popupIleAuxRoches" data-id="IleAuxRoches" class="popupPlace">
					<div class="inner">
						<h3>Île aux Roches</h3>
						<p>Rocher émergé situé au sud-est du Continent Perdu. Certains Ornyx le fréquentent pour son paysage époustouflant. Certains envisagent la possibilité d’y bâtir une tourelle de méditation.</p>
					</div>
				</div>
				<div id="popupIleDhseth" data-id="IleDhseth" class="popupPlace">
					<div class="inner">
						<h3>Île Dhseth</h3>
						<p>Îlot de verdure et de rochers situé au nord du Continent Perdu. Certains Ornyx le fréquentent pour la beauté de sa nature sauvage. Ils y font des pique-niques intimes, quand ils ont besoin d’isolement pour méditer.</p>
					</div>
				</div>
				<div id="popupIsleHeuf" data-id="IsleHeuf" class="popupPlace">
					<div class="inner">
						<h3>Isle d’Heuf</h3>
						<p>Cette vaste île de la mer d’Osique est habitée par les descendants d’une communauté de druides originaire du Continent Perdu. Elle a été enchantée pour empêcher qu’on y utilise la sorcellerie. Seuls les druides qui y vivent peuvent utiliser leur science, mais tout visiteur importun qui tenterait d’utiliser des pouvoirs de sorcellerie s’en trouverait impuissant. Notons que les pouvoirs Médiumniques et Psioniques fonctionnent néanmoins.</p>
					</div>
				</div>
				<div id="popupIsleEnfers" data-id="IsleEnfers" class="popupPlace">
					<div class="inner">
						<h3>L’Isle d’Enfers</h3>
						<p>Pénitencier géré par l'Ordre des Archanges, situé dans un plan parallèle d’où l’on ne s’évade pas. Inaccessible sauf par ceux qui savent déjà où elle se trouve, même le pouvoir de la Clé-des-Champs ne fonctionne pas dans cet endroit. Cet univers artificiel comporte une étoile unique, dont la seule planète habitable n’est qu’un océan sans fin à forte concentration en acide organique. Sous un ciel orangé couvert de nuages noirs, cet océan rouge n’est interrompu que par un chapelet d’îles rocailleuses, dont la plus grande est la fameuse Isle d’Enfers.</p>
						<p>Les plus grandes îles sont aménagées pour accueillir des détenus. Séparés en étant disposés sur différentes îles plutôt que d’être enfermés dans des cellules, les malfrats y purgent leur peine pour l’éternité. Les cachots sont dépourvus de barreaux. Libres de se promener sur leur île comme bon leur semble, les prisonniers qui tentent d’aller sur les autres îles doivent affronter un océan bien capricieux.</p>
						<p>Au sens théologique, l’enfer n’est pas un lieu, mais un état, une situation, qui résulte d’un refus de reconnaître Dieu au coeur de son existence. Ce refus peut être temporaire et lorsque l’acceptation finit par survenir, Dieu vous accueille en lui. Donc le seul moyen de quitter l’Isle d’Enfers est d’accéder à la Source. Il faut le faire dans un état de paix intérieure, par le repentir et le pardon.</p>
					</div>
				</div>
				<div id="popupLaSource" data-id="LaSource" class="popupPlace">
					<div class="inner">
						<h3>La Source</h3>
						<p>Au sens théologique, le retour à la Source signifie la possibilité pour une âme d’atteindre une communion définitive avec Dieu après avoir achevé son cycle d’existences terrestres par une vie dans le Monde Central. Cette communion n’implique pas la néantisation ni la fusion en Dieu, mais le renoncement à l’individualité en face de Dieu par l’accomplissement définitif et plénier de l’être en tant qu’individu. Cet accomplissement se caractérise par l’accession à une nouvelle existence empreinte de félicité et de paix intérieure.</p>
					</div>
				</div>
				<div id="popupLacEmbrume" data-id="LacEmbrume" class="popupPlace">
					<div class="inner">
						<h3>Lac Embrumé</h3>
						<p>Situé au milieu des montagnes Sérades, ce lac forme un microclimat où le vent ne souffle jamais. Les montagnes demeurent ainsi noyées dans une brume épaisse qui flotte au-dessus du lac et qui perdure indéfiniment.</p>
					</div>
				</div>
				<div id="popupLacHelrek" data-id="LacHelrek" class="popupPlace">
					<div class="inner">
						<h3>Lac Helrek</h3>
						<p>Lac situé au nord-est de la ville d’Helrek. On y trouve de modestes chalets au pied des montagnes boisées.</p>
					</div>
				</div>
				<div id="popupLacOise" data-id="LacOise" class="popupPlace">
					<div class="inner">
						<h3>Lac d’Oise</h3>
						<p>Lac d’eau volcanique situé au nord des Montagnes de Feu. On y puise une eau sulfureuse qui aurait des propriétés utiles en sorcellerie.</p>
					</div>
				</div>
				<div id="popupMaelstromNeptune" data-id="MaelstromNeptune" class="popupPlace">
					<div class="inner">
						<h3>Le Maelstrom de Neptune</h3>
						<p>Ce puissant tourbillon se forme dans la Grande Mer Syridge, au large des Terres de Feu. Il tire son énergie des eaux bouillantes, réchauffées par les veines volcaniques des Terres de Feu et du courant froid du fleuve. Ce maelstrom avale systématiquement toute embarcation qui s’approche de son point de non retour.</p>
					</div>
				</div>
				<div id="popupMaraisGlost" data-id="MaraisGlost" class="popupPlace">
					<div class="inner">
						<h3>Marais de Glost</h3>
						<p>Situés à la frontière sud des Hautes Terres d’Aullingst, ces basses terres inondées et parsemées d’eskers et de boues mouvantes sont peuplées d’insectes, de batraciens et de Nintshus, de terribles arthropodes géants. Sous un ciel chargé de nuages noirs, ces lugubres terres humides s’étendent à perte de vue. Sur ces terres inhospitalières, des touffes de hautes herbes bleues et violettes alternent avec des mares d’eau stagnante d’un noir ocre, des étangs à grenouilles, de grands arbres morts et d’autres, vivants, au feuillage abondant.</p>
					</div>
				</div>
				<div id="popupMaraisNord" data-id="MaraisNord" class="popupPlace">
					<div class="inner">
						<h3>Marais du Nord</h3>
						<p>Territoire des Lycaons, cette région marécageuse circulaire est entourée d’une chaîne de hautes montagnes au climat glacial bordant la Petite Mer Syridge. Le seul accès terrestre à ces marais est un tunnel de 37 Km creusé sous les montagnes. Traversant une cité de Fersems pour rejoindre la route qui relie Helrek au Château de Vlad, ce tunnel garantit un sauf-conduit aux voyageurs qui ne causent pas d’ennuis.</p>
					</div>
				</div>
				<div id="popupMerOsique" data-id="MerOsique" class="popupPlace">
					<div class="inner">
						<h3>Mer d’Osique</h3>
						<p>Cet océan profond borde des hectares de terres fertiles. La Mer d’Osique dissimule la cité sous-marine de Venan-Baddhi. Cette ville méconnue ne figure sur aucune carte. Elle se compose de vastes massifs coralliens où vivent les Tsethes, un peuple aquatique qu’il vaut mieux éviter de visiter sans raison très valable.</p>
					</div>
				</div>
				<div id="popupMontNord" data-id="MontNord" class="popupPlace">
					<div class="inner">
						<h3>Mont du Nord</h3>
						<p>Ce majestueux massif rocheux géant représente la frontière entre les Hautes Terres d’Aullingst, les Terres de Glace et les Terres de Feu. Point culminant des Hautes Terres d’Aullingst, cette montagne s’élève si haut que son sommet se perd par delà les nuages. Le massif du Mont du Nord est si imposant qu’il constitue un point de repère majeur pour orienter les voyageurs.</p>
					</div>
				</div>
				<div id="popupMontHowser" data-id="MontHowser" class="popupPlace">
					<div class="inner">
						<h3>Mont Howser</h3>
						<p>Située sur la pointe sud du Continent Perdu, cette montagne de 28 Km d’altitude est faite de roche ignée, truffée de grottes naturelles. Cette ancienne cheminée volcanique fut guidée par les druides, à l’aide de leurs pouvoirs, pour former le sol du Continent Perdu.</p>
					</div>
				</div>
				<div id="popupMontRhaneit" data-id="MontRhaneit" class="popupPlace">
					<div class="inner">
						<h3>Mont Rhaneit</h3>
						<p>Cette montagne de 31 Km d’altitude possède un sommet enneigé. Couverte de glaciers, elle forme la pointe nord du Continent Perdu.</p>
					</div>
				</div>
				<div id="popupMontYakkthi" data-id="MontYakkthi" class="popupPlace">
					<div class="inner">
						<h3>Mont Yakkthi</h3>
						<p>Situé dans la région de Salameh, cette montagne isolée atteint 25 Km d’altitude. Son sommet arrondi est couvert de forêt dense. C’est une destination pour les alpinistes en herbe et les amateurs de pique-nique parmi les oiseaux et les rongeurs arboricoles.</p>
					</div>
				</div>
				<div id="popupMontagnesFeu" data-id="MontagnesFeu" class="popupPlace">
					<div class="inner">
						<h3>Montagnes de Feu</h3>
						<p>Ces volcans actifs forment une ceinture qui entoure le lac d’Oise par le sud. Ces montagnes sont le repère de Twuilsugs.</p>
					</div>
				</div>
				<div id="popupMontsFerreux" data-id="MontsFerreux" class="popupPlace">
					<div class="inner">
						<h3>Monts Ferreux</h3>
						<p>La chaîne de montagnes la plus étendue de Néréland entoure la Grande Mer du Sud par le nord et l’est. Comme leur nom l’indique, ces montagnes représentent un massif ferreux et donc, magnétique qui oriente la boussole vers elle, rendant impossible son utilisation à des centaines de kilomètres autour. On y trouve quelques volcans actifs, mais surtout des mines de fer, des royaumes souterrains appartenant aux Fersems ainsi que des vallées désolées où se terrent quelques bandits recherchés, quelque monstre inconnu et quoi d’autre encore…</p>
					</div>
				</div>
				<div id="popupMontsSmoglia" data-id="MontsSmoglia" class="popupPlace">
					<div class="inner">
						<h3>Monts Smoglia</h3>
						<p>Chaîne de montagnes qui sépare Néréland des Hautes-Terres d'Aullingst par l’extrême ouest. On y exploita jadis des métaux tels que le cuivre et l’argent. Le Gouffre du Grand Puits est l’une de ces mines, abandonnée depuis la chute des Hautes Terres d’Aullingst.</p>
					</div>
				</div>
				<div id="popupOceanNord" data-id="OceanNord" class="popupPlace">
					<div class="inner">
						<h3>Océan du Nord</h3>
						<p>Cet océan borde Néréland par le nord. Ceux qui ont réussi à le traverser n’ont pas eu envie de répéter leur exploit pour revenir nous raconter ce qu’ils ont découvert sur la rive nord. On sait qu’il existe au nord un autre royaume, peuplé de Dhoriks et autres créatures exotiques, des âmes provenant de coins éloignés de l’Univers, qu’aucune personne de Néréland n’a visité au cours de ses multiples réincarnations. Quant à savoir si ce royaume est aussi agréable que Néréland, plus encore, ou dangereux à un tel point qu’il vaille mieux ne pas déranger ses habitants, on demeure dans l’ignorance.</p>
					</div>
				</div>
				<div id="popupPlainesMortes" data-id="PlainesMortes" class="popupPlace">
					<div class="inner">
						<h3>Les Plaines Mortes</h3>
						<p>Terre désolée située tout juste au sud des monts Smoglia. On trouvait en ces lieux une cité maritime moderne et prospère, peuplée de clandestins dont la soif de confort et de richesse était sans limites. Zhorus y a passé une grande partie de son existence. Cette cité, industrialisée au-delà des limites du raisonnable, était alimentée à l’énergie nucléaire et excessivement polluée. Elle a été détruite par un accident nucléaire résultant de la négligence de ses citoyens et de leur faux sentiment de prospérité. L’accident nucléaire décima sa population, rasa les bâtiments et détruisit toute vie sur une centaine de kilomètres. Comprenant alors que des jeunes âmes dépourvues d’expérience étaient entrées clandestinement dans le Monde Central et s’étaient regroupées dans cette vaste cité, le roi de l’époque, Yahveh, fit sceller les raccourcis créés par l’amiral Thendarq avec l’aide de la Clé-des-Champs, puis fit chasser du Monde Central ces jeunes âmes immatures. Il ne reste de cet endroit que des plaines vitrifiées et des grottes, un ancien réseau de tunnels de métro.</p>
					</div>
				</div>
				<div id="popupPetiteMerSyridge" data-id="PetiteMerSyridge" class="popupPlace">
					<div class="inner">
						<h3>Petite Mer Syridge</h3>
						<p>Cette mer intérieure borde les Monts Ferreux par le nord. La mégalopole d’Orfélyne est construite sur sa berge nord-ouest. L’eau y est glaciale et provient des glaciers qui entourent les Marais du Nord.</p>
					</div>
				</div>
				<div id="popupPicArgente" data-id="PicArgente" class="popupPlace">
					<div class="inner">
						<h3>Pic Argenté</h3>
						<p>Cette montagne de 80 Km d’altitude est le point culminant du royaume de Néréland. Elle délimite la frontière des terres du Sud. Sa base se situe à 11 Km d’altitude par rapport au niveau moyen des mers. On trouverait en ses flancs et sur son sommet des ingrédients d’une grande rareté pour le monde du druidisme et de la sorcellerie.</p>
					</div>
				</div>
				<div id="popupPlainesMenthyle" data-id="PlainesMenthyle" class="popupPlace">
					<div class="inner">
						<h3>Plaines de Menthyle</h3>
						<p>Ces vastes plaines où ne pousse qu’une végétation désertique abrite malgré tout  des troupeaux de bisons sauvages. Territoire des chasseurs Eldjinns, ces plaines sont parsemées de massifs rocheux, de petits lacs et de ruisseaux.</p>
					</div>
				</div>
				<div id="popupPlainesVerprey" data-id="PlainesVerprey" class="popupPlace">
					<div class="inner">
						<h3>Les Plaines de Verprey</h3>
						<p>C'est un endroit que les humains trouveraient effrayant. Les vents forts et les intempéries fréquentes balayent les rochers noirs dénudés de végétation. Les nombreuses grottes creusées par la mer abritent des créatures plus terrifiantes les unes que les autres. Les Twelgs y sont parfaitement à l'aise parce que ce sont de redoutables prédateurs.</p>
					</div>
				</div>
				<div id="popupPlateauOlgoth" data-id="PlateauOlgoth" class="popupPlace">
					<div class="inner">
						<h3>Plateau d'Olgoth</h3>
						<p>Ce vaste amas de montagnes de haute altitude, à la végétation rachitique, s’étend à une altitude de dix kilomètres au-dessus du niveau moyen des terres. Il est bordé au nord par les montagnes Sérades, de majestueuses collines verdoyantes, ainsi que par le Lac Embrumé. Tout le sud et l’est du plateau ne sont que d’abruptes falaises de roc nu.</p>
					</div>
				</div>
				<div id="popupPointeMort" data-id="PointeMort" class="popupPlace">
					<div class="inner">
						<h3>Pointe-de-la-Mort</h3>
						<p>Des moines bénédictins y ont jadis bâti leur monastère. La Pointe-de-la-Mort doit son nom à l’air salin qui tue rapidement les arbres qui poussent trop près de la mer, lorsqu’ils atteignent la hauteur des vents dominants. Les montagnes ont toutes un sommet dégarni, rocheux, émergeant par-dessus une forêt qui, dans les vallées, est luxuriante.</p>
					</div>
				</div>
				<div id="popupTaniereDuVent" data-id="TaniereDuVent" class="popupPlace">
					<div class="inner">
						<h3>La Tanière du Vent</h3>
						<p>Cet ensemble de collines sépare les Terres de Glace des Hautes Terres d’Aullingst. Les vents violents et perpétuels y sont si froids que n’importe quel corps, à part celui d’un Kraalt des glaces, gèlerait en quelques instants.</p>
					</div>
				</div>
				<div id="popupTerresFeu" data-id="TerresFeu" class="popupPlace">
					<div class="inner">
						<h3>Terres de Feu</h3>
						<p>Ces terres volcaniques s’étendent sur une large péninsule qui surplombe l’Océan du Nord de ses hautes falaises de roche ignée. Ses longues et étroites bandes de pierre lisse s’allongent entre des monolithes aux sommets tronqués. Le climat y est sec et chaud. Le vent se fait brûlant et son intensité augmente avec l’altitude. Plus au centre de ces terres, les monolithes se font plus nombreux et pour certains, plus massifs. On croirait une forêt d’arbres de pierre s’élevant au-dessus du niveau de la mer. Sur un sol accidenté et dénudé de végétation, des veines volcaniques en surface s’écoulent depuis de hautes cheminées fumantes. Sous une atmosphère torride, des cratères de lave et de gros rochers vitrifiés parsèment ce paysage désolé, d’où s’élèvent des volutes de fumée sulfureuse et des tourbillons d’air chaud.</p>
					</div>
				</div>
				<div id="popupTerresGlace" data-id="TerresGlace" class="popupPlace">
					<div class="inner">
						<h3>Terres de Glace</h3>
						<p>Dans cette région parmi les plus froides de tout le Monde Central, aucune créature connue ne peut résister au froid qui règne au cœur de ce désert gelé, mis à part le Kraalt des glaces. Les vents y sont si violents qu’ils rendent impossible tout vol coordonné. Un vaste glacier qui descend du nord nivèle en permanence les collines qui bordent les Terres de Glace. Ce glacier fond à mesure qu’il glisse vers le sud. Ces terres inexplorées représentent une frontière naturelle infranchissable entre les Hautes Terres d’Aullingst et tout ce qui pourrait se trouver au nord, au-delà.</p>
					</div>
				</div>
				<div id="popupTerresSud" data-id="TerresSud" class="popupPlace">
					<div class="inner">
						<h3>Terres du Sud</h3>
						<p>Royaume voisin de Néréland, situé à l’extrême sud. On y trouve des peuples désunis, sans gouvernement central. Certains se sont comportés en envahisseurs par le passé, obligeant Néréland à se doter d’une armée pour les repousser.</p>
					</div>
				</div>


			</div>