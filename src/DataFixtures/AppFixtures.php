<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\Utilisateur;
use App\Entity\SousCategorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $c1 = new Categorie();
        $c1->setNom("arme de jet");
        $c1->setImage("41mQ+evAKBL._SS400_.jpg");
        $manager->persist($c1);

        $c2 = new Categorie();
        $c2->setNom("coutellerie");
        $c2->setImage("index.jpeg");
        $manager->persist($c2);

        $c3 = new Categorie();
        $c3->setNom("rasage");
        $c3->setImage("Top3_rasoir_papillon_pour_debuter_1920x750.jpeg");
        $manager->persist($c3);


        $c4 = new Categorie();
        $c4->setNom("archerie");
        $c4->setImage("arc.jpg");
        $manager->persist($c4);

      


        

       

       

                $souscategorie1 = new SousCategorie();
                $souscategorie1->setNom("shuriken");
                $souscategorie1->setImage("41mQ+evAKBL._SS400_.jpg");
                $souscategorie1->setCategorie($c1);
                $manager->persist($souscategorie1);

                $sc2 = new SousCategorie();
                $sc2->setNom("hache");
                $sc2->setImage("hache-corne-de-cerf.png");
                $sc2->setCategorie($c1);
                $manager->persist($sc2);

                $sc3 = new SousCategorie();
                $sc3->setNom("lance");
                $sc3->setImage("lance1.jpeg");
                $sc3->setCategorie($c1);
                $manager->persist($sc3);

                $sc4 = new SousCategorie();
                $sc4->setNom("hachette");
                $sc4->setImage("hachette1.jpg");
                $sc4->setCategorie($c1);
                $manager->persist($sc4);

                $sc5 = new SousCategorie();
                $sc5->setNom("couteau pliant");
                $sc5->setImage("couteau-pliant-de-nontron-dans-le-perigord.jpg");
                $sc5->setCategorie($c2);
                $manager->persist($sc5);

                

               

                $sc8 = new SousCategorie();
                $sc8->setNom("lame fixe");
                $sc8->setImage("hm21-3-400x246.webp");
                $sc8->setCategorie($c2);
                $manager->persist($sc8);

                $sc9 = new SousCategorie();
                $sc9->setNom("Machette");
                $sc9->setImage("machette2.webp");
                $sc9->setCategorie($c2);
                $manager->persist($sc9);

                

                $sc11 = new SousCategorie();
                $sc11->setNom("coupe_choux");
                $sc11->setImage("coupe-choux-rasoir-droit-e1501772043847.jpg");
                $sc11->setCategorie($c3);
                $manager->persist($sc11);

                $sc12 = new SousCategorie();
                $sc12->setNom("rasoir_mecanique");
                $sc12->setImage("merkur-34c-penche.jpg");
                $sc12->setCategorie($c3);
                $manager->persist($sc12);

                $sc13 = new SousCategorie();
                $sc13->setNom("arc");
                $sc13->setImage("arc2.jpg");
                $sc13->setCategorie($c4);
                $manager->persist($sc13);

                $sc14= new SousCategorie();
                $sc14->setNom("arbalete");
                $sc14->setImage("Capture_d’écran_2020-04-11_à_10.49.30.png");
                $sc14->setCategorie($c4);
                $manager->persist($sc14);
        


                            $pr1 = new Produit();
                            $pr1->setNom("Etoile de lancer Max knives NS143");
                            $pr1->setImage("etoile-de-lancer-max-knives-ns143.jpg");
                            $pr1->setPrix(12.95);
                            $pr1->setDescription("Cette véritable étoile de ninja en acier inoxydable 420 possède 4 branches à double tranchant. Résistant à la corrosion, vous pourrez l'utiliser en intérieur comme en extérieur, dans des conditions météorologiques difficiles sans vous soucier de l'abîmer.  

                            La shuriken NS143 est parfaitement équilibrée, avec un diamètre de 125mm. Compacte, elle a une épaisseur de 3mm. Un marquage EF813 habille le coeur de l'étoile de lancer. 
                            
                            Vous pourrez vous entraîner au lancer avec cette arme de diversion argentée de haute qualité. L'étoile de lancer Max knives NS143 est fournie avec un étui en nylon porte-ceinture.");
                            $pr1->setSousCategorie($souscategorie1);
                            $manager->persist($pr1);

                            $p2 = new Produit();
                            $p2->setNom("Lot de 2 étoiles de lancer Batman NS139");
                            $p2->setImage("lot-de-2-etoiles-de-lancer-batman-ns139.jpg");
                            $p2->setPrix(25.95);
                            $p2->setDescription("L'étoile de lancer Batman NS139 fait penser au Batarang tranchant que l'homme chauve-souris a l'habitude d'utiliser lors de ses missions. 

                            La shuriken NS139 noire à 2 branches en acier inoxydable 420, autrement dit qui ne rouille pas, est une arme de lancer précise et surprenante. 
                            
                            Mesurant 20cm de largeur et 6,8cm de hauteur, l'imposante shuriken Batman ne passera pas inaperçue dans votre club lors de vos entraînements. Son poids de seulement 30g sera un avantage pour vos performances. Mais également ses tranchants aux pointes bien aiguisées qui s'agripperont parfaitement à la cible. 
                            
                            L'étoile de lancer à la forme d'une chauve-souris est illustrée du mot Batman ainsi que du symbole du super héros.
                            
                            Ce lot de 2 shurikens est fourni avec son étui porte-ceinture.");
                            $p2->setSousCategorie($souscategorie1);
                            $manager->persist($p2);

                            $p3 = new Produit();
                            $p3->setNom("Etoile de lancer Maxknives NS144");
                            $p3->setImage("etoile-de-lancer-maxknives-ns144.jpg");
                            $p3->setPrix(14.95);
                            $p3->setDescription("La chemise Antitic Grouse de Prohunt est une chemise à manches longues qui vous accompagnera aussi bien à la chasse que dans la vie de tous les jours. Son traitement anti-tiques vous permettra de rester protégé en toutes circonstances. La chemise Grouse est composée d'élasthane la rendant extensible pour un meilleur confort.");
                            $p3->setSousCategorie($souscategorie1);
                            $manager->persist($p3);

                            $p4 = new Produit();
                            $p4->setNom("Etoile de lancer Maxknives NS146");
                            $p4->setPrix(14.95);
                            $p4->setDescription("L'une des armes préférés des ninjas ! La shuriken fait partie de l'attirail du parfait espion japonais. 

                            La shuriken NS146 de couleur argentée est une véritable étoile de ninja. En forme d'étoile de mer, elle est composée de 5 branches en acier inoxydable 420 réputé pour sa forte résistance à la corrosion.
                            
                            Cette arme blanche de 100mm de diamètre et 3mm d'épaisseur a toutes les caractéristiques requises pour devenir votre premier choix lors de compétitions de lancer sportif. 
                            
                            Une gravure BF816 habille le coeur de l'étoile. Un étui porte-ceinture vous sera offert avec cet accessoire.");
                            $p4->setSousCategorie($souscategorie1);
                            $p4->setImage("etoile-de-lancer-maxknives.jpg");
                            $manager->persist($p4);

                            $p5 = new Produit();
                            $p5->setNom("Hache tactique Albainox 32397");
                            $p5->setPrix(19.95);
                            $p5->setDescription("La hache Albainox ABS 32397 est un outil de qualité, conçu pour répondre aux besoins des utilisateurs les plus exigeants. Avec sa lame en acier inoxydable, cette hache est résistante à la corrosion et offre une longévité exceptionnelle. La lame a une taille de 25 cm, ce qui la rend idéale pour les travaux de coupe les plus divers.

                            Le manche de la Hache Albainox ABS 32397 est en ABS et caoutchouc, pour une prise en main ferme et confortable. Le design ergonomique assure une répartition équilibrée du poids pour une utilisation facile et efficace. Le poids total de la hache est de 500 g, ce qui la rend facile à manier pour un grand nombre d'utilisateurs.
                            
                            En plus de son efficacité, la Hache Albainox ABS 32397 est également pratique à transporter grâce à son étui en nylon. L'étui est résistant et permet de protéger la lame de la hache lorsque vous la transportez. Vous pouvez l'accrocher à votre ceinture pour la garder à portée de main en tout temps.
                            
                            La Hache Albainox ABS 32397 est un outil polyvalent et résistant, adapté à toutes sortes de travaux de coupe en extérieur. Elle est conçue pour répondre aux besoins des amateurs d'activités de plein air, des professionnels et des utilisateurs exigeants.");
                            $p5->setSousCategorie($sc2);
                            $p5->setImage("hache-tactique-albainox-32397.png");
                            $manager->persist($p5);

                            


                           

                            $p8 = new Produit();
                            $p8->setNom("POIGNARD AVC MOTIF CANARD+ETUI CUIR NOIR");
                            $p8->setPrix(39.99);
                            $p8->setDescription("Ce poignard Herbertz est un poignard en ivoirine qui est décoré d'un motif canard. Sa lame est une lame pleine soie de 10 cm qui est très tranchante. Multifonction, vous pourrez utiliser ce poignard dans de nombreuses situations. Vous pourrez ainsi trancher et dépecer la viande, vous frayer un chemin dans les forêts et les jungles lorsque vous partez à l'aventure, couper du bois, … Ce poignard est un outil très résistant qui vous dépannera dans des situations périlleuses. Il est vendu avec un étui en cuir noir permettant de le mettre en sécurité.");
                            $p8->setSousCategorie($sc8);
                            $p8->setImage("fixe1.webp");
                            $manager->persist($p8);

                            $p9 = new Produit();
                            $p9->setNom("COUTEAU HUNTER N110 MANCHE EBENE");
                            $p9->setPrix(89.99);
                            $p9->setDescription("Couteau BUCK « HUNTER » avec lame en acier 420 à cran. Manche de 12,5 cm ébène, 2 mitres laiton et étui cuir.");
                            $p9->setSousCategorie($sc5);
                            $p9->setImage("buck1.webp");
                            $manager->persist($p9);

                            $p10 = new Produit();
                            $p10->setNom("Hachette CRKT Skeggox");
                            $p10->setPrix(159.95);
                            $p10->setDescription("Le CRKT Skeggox est une hachette polyvalente, compacte et durable conçue par James Williams de Caroline du Nord. Parfaite pour les applications Outdoor, elle séduit par son grand confort d'utilisation du fait de sa poignée profilée légère en nylon renforcé de verre.

                            D'une longueur totale d'environ 328mm, la hache Skeggox CRKT possède une lame pleine soie robuste et puissante faite d'acier carbone SK-5 à hautes performances. Elle intègre un revêtement en poudre qui améliore la résistance à la corrosion. Épaisseur de la lame : 6,35mm.
                            
                            Certes on reconnaît une bonne hachette a ses performances et sa résistance, mais aussi à son ergonomie. Le Skeggox offre à l'utilisateur/utilisatrice un très bon contrôle, avec à la clef des manipulations toujours très confortables, même lors des usages les plus intensifs.
                            
                            Facile à transporter, la hachette est livrée avec sa gaine thermoplastique et ses différentes options de transport. C'est ainsi qu'elle n'aura aucun mal à vous suivre tout au long de vos aventures et excursions !");
                            $p10->setSousCategorie($sc4);
                            $p10->setImage("hachette-crkt-skeggox.jpg");
                            $manager->persist($p10);

                            $p11 = new Produit();
                            $p11->setNom("Rasoir coupe chou Le Grelot Olivier Thiers Issard");
                            $p11->setPrix(26.99);
                            $p11->setDescription("lame 6/8 demi-évidée, acier carbone
                            THIERS ISSARD
                            
                            Rasoir coupe-chou Le Grelot en olivier, lame 6/8 demi-évidée, de la marque française Thiers Issard
                            
                            Rasoir demi-évidé : les lames 1/2 évidées sont moins tranchantes et moins fragiles que les lames évidées. Elles sont donc conseillées pour débuter dans le rasage à l'ancienne.
                            
                            La lame est en acier 100 % carbone forgé C135 - 275 = deux cotés polis satin. Taille de la lame : 6/8 ème. Nez rond.
                            Crantage anti-glisse sur le dessus de la soie.
                            
                            Marque electro-chimique noire sur la lame Le Grelot Médaille d'or - Paris 1931 et Marque LE GRELOT™ Thiers-France sur le plat du rasoir
                            
                            Chasse (manche) en bois d'olivier. Le bois d'olivier est une matière résistante. Il est plus ou moins clair. Ses veines sont irrégulières et lui confèrent toute sa noblesse.
                            
                            Livré dans un étui cartonné noir coulissant marque LE GRELOT™ BY THIERS-ISSARD
                            Rasoir livré prêt à raser");
                            $p11->setSousCategorie($sc11);
                            $p11->setImage("ori-rasoir-coupe-chou-le-grelot-olivier-thiers-issard-2249.jpg");
                            $manager->persist($p11);


                            $p12 = new Produit();
                            $p12->setNom("MACHETTE 39CM");
                            $p12->setPrix(38.99);
                            $p12->setDescription("Lame de 39cm en acier 420, livrée dans fourreau à nylon.");
                            $p12->setSousCategorie($sc9);
                            $p12->setImage("machette3.webp");
                            $manager->persist($p12);

                            $p13 = new Produit();
                            $p13->setNom("Hache tactique noire K25 - 32023");
                            $p13->setPrix( 62.95);
                            $p13->setDescription("Imaginez-vous brandissant la hache tactique K25 32023 ! Cet outil polyvalent est un symbole de puissance et de fonctionnalité, conçu pour répondre à vos besoins les plus exigeants.

                            La longueur parfaite de 31,5 cm de cette hache lui confère une maniabilité incroyable, vous permettant de la manier avec aisance et précision. Sa lame en acier inoxydable, d'une épaisseur imposante de 4,8 mm, vous garantit une résistance et une durabilité exceptionnelles, vous permettant de relever les défis les plus extrêmes avec confiance.
                            
                            Mais cette hache ne se limite pas à sa lame exceptionnelle. Son manche en SFL, recouvert de caoutchouc, offre une prise en main confortable et antidérapante, vous permettant de garder le contrôle même dans des conditions difficiles. Que ce soit pour couper du bois, faire face à des situations d'urgence ou simplement explorer la nature, ce manche vous assure une utilisation sans effort et sécurisée.
                            
                            Et pour couronner le tout, cette hache est livrée avec un étui en nylon pratique et résistant. Il vous permet de transporter votre arme en toute sécurité et de la protéger des éléments, tout en étant facilement accessible lorsque vous en avez besoin.");
                            $p13->setImage("hache-noire-k25-32023.jpg");
                            $manager->persist($p13);
                            $p13->setSousCategorie($sc2);

                            $p14 = new Produit();
                            $p14->setNom("Couteau rasoir Rainblack - 18500");
                            $p14->setPrix(19.95);
                            $p14->setDescription("Le modèle Rainblack 18500, proposé par la marque Martinez Albainox, combine efficacité et esthétique. Avec une lame en acier 3Cr13MoV de 105mm, ce couteau rasoir garantit une durabilité et une performance de coupe remarquables. Cette lame noire, agrémentée de motifs, offre un contraste visuel intéressant avec l'inscription Rainblack, mise en valeur par une écriture noire sur un fond jaune.

                            Le manche, quant à lui, mesure 141mm et est conçu en acier. Son design est pensé pour s'aligner avec le style de la lame, créant ainsi une continuité visuelle tout en assurant une prise en main confortable pour l'utilisateur.
                            
                            Avec ses caractéristiques bien pensées et son design distinctif, le Rainblack 18500 de Martinez Albainox se positionne comme un choix judicieux pour ceux qui recherchent un couteau rasoir à la fois fonctionnel et esthétiquement plaisant.
                            ");
                            $p14->setImage("couteau-rasoir-rainblack-18500.jpg");
                            $manager->persist($p14);
                            $p14->setSousCategorie($sc11);


                            $p15 = new Produit();
                            $p15->setNom("MACHETTE SCIE");
                            $p15->setPrix(29.99);
                            $p15->setDescription("
                            Cette machette scie dispose d'une lame en acier et d'un manche en plastique avec un trou intégré pour protéger votre main et pour améliorer la prise en main.");
                            $p15->setSousCategorie($sc9);
                            $p15->setImage("machette4.webp");
                            $manager->persist($p15);


                            $p16 = new Produit();
                            $p16->setNom("COUTEAU LE THIERS LINER LOCK OLIVIER");
                            $p16->setPrix(69.99);
                            $p16->setDescription("Le couteau Le Thiers® de Claude DOZORME est un couteau entièrement noir avec une lame en acier à cran intérieur.");
                            $p16->setSousCategorie($sc5);
                            $p16->setImage("pliant1.webp");
                            $manager->persist($p16);

                            $p17 = new Produit();
                            $p17->setNom("POIGNARD USMC AVEC ETUI CUIR");
                            $p17->setPrix(139.00);
                            $p17->setDescription("Lame noire 178mm en acier 1095 CV. Poids 317g. Manche cuir marron. Longueur totale 301mm. Tranchant : Lisse. Profil de lame : Clip Point. Port : Etui Cuir. Verrouillage : Fixe.");
                            $p17->setSousCategorie($sc8);
                            $p17->setImage("fixe2.webp");
                            $manager->persist($p17);

                            $p10 = new Produit();
                            $p10->setNom("Hachette Fox Yankee");
                            $p10->setPrix(94.95);
                            $p10->setDescription("Ayant un nom faisant penser aux habitants du nord de l'amérique, le Fox Knives Yankee est une hachette, comprenez une petite hache ayant la particularité de pouvoir être utilisée d'une seule main. Plus facile à manier, elle dispose ici d'un manche à peine courbé en hickory américain et à la finition noyer. Tout cela accompagné d'un lacet permettant d'améliorer le transport au quotidien.

                            Avec ses 38cm de long, la hachette Yankee est plus transportable qu'une hache, et s'avère être très efficace pour les tâches nécessitant moins de force. Faite d'acier carbone C45, sa lame de 8cm de long pour 27,5mm d'épaisseur est très tranchante et marquée d'une élégante tête de renard qui n'est autre que l'emblème Fox Production, coutellerie italienne de renommée implantée à Maniago en Italie. Un incontournable pour couper du petit bois !");
                            $p10->setSousCategorie($sc4);
                            $p10->setImage("hachette-fox-yankee.jpg");
                            $manager->persist($p10);



                            $p17 = new Produit();
                            $p17->setNom("Rasoir de sécurité manche court TIMOR");
                            $p17->setPrix(36,00);
                            $p17->setDescription("ouverture papillon
                            Giesen & Forsthoff Solingen
                            
                            Rasoir de sécurité manche court, à ouverture papillon, en laiton chromé noir, de la marque TIMOR de Giesen & Forsthoff
                            
                            Un rasoir papillon est un rasoir dont la tête s'ouvre par rotation du manche, pour un changement de lame simplifié au maximum.
                            Le manche de ce rasoir Timor est en laiton chromé noir avec une longueur de 80 mm, guilloché pour une bonne prise en main.
                            Poids : 65 g environ
                            Livré avec 1 lame de rasoir premium de marque Timor, ce rasoir est compatible avec toutes marques de lames plates.
                            
                            Fabriqué en Allemagne");
                            $p17->setSousCategorie($sc12);
                            $p17->setImage("sup-rasoir-de-securite-manche-court-timor-2840_2770.jpg");
                            $manager->persist($p17);

                            $p18 = new Produit();
                            $p18->setNom("Set à raser sécurité en Olivier Gentleman Barbier");
                            $p18->setPrix(174,00);
                            $p18->setDescription("Lame de 39cm en acier 420, livrée dans fourreau à nylon.");
                            $p18->setSousCategorie($sc12);
                            $p18->setImage("sup-set-a-raser-securite-en-olivier-gentleman-barbier-2227.jpg");
                            $manager->persist($p18);
                            

                            $p19 = new Produit();
                            $p19->setNom("ARC DE CHASSE COMPOUND DIAMOND EDGE XT PRET A TIRER");
                            $p19->setPrix(499.00);
                            $p19->setDescription("Le Diamond infinite Edge Pro est un arc avec une amplitude de réglage trés importante. Il est idéal pour un  archer débutant l'arc à poulies  ou un chasseur faisant ces premier pas en archerie.

                            Le Diamond Infinite Edge Pro est livré en kit RTS avec Repose flèches, visette, viseur, et carquois d'arc. L'amplitude d'allonge est de 19 à 31 sur la même poulie. la puissance elle se régle de 20 à 70lbs.
                            
                            Il faut faire attention dans les réglages il y a une relation entre l'allonge et la puissance on ne pourra jamais obtenir 20 lbs à 31 et inversement 70lbs à 19");
                            $p19->setSousCategorie($sc13);
                            $p19->setImage("Capture_d’écran_2020-02-07_à_11.50.35.png");
                            $manager->persist($p19);

                            $p20 = new Produit();
                            $p20->setNom("OLD TRADITION METEOR");
                            $p20->setPrix(299.00);
                            $p20->setDescription("

                            Très souple et très rapide, le Météor Old Tradition conviendra à tous les gabarits.
                            
                            Excellente finition, souplesse et vitesse pour un arc au rapport qualité/prix imbattable !
                            
                            Composition :
                            
                            Grâce à ses branches en fibre Gordon renforcée et ses lames en Bambou du Tonkin, le Meteor est très performant sur toutes les plages d'allonge.
                            Poignée en Action Wood et grip anatomique.
                            Poupées renforcées pour l’utilisation de cordes en FastFlite.
                            
                            Caractéristiques :
                            
                            Dimension : 62");
                            $p20->setSousCategorie($sc13);
                            $p20->setImage("LAS_1.jpg");
                            $manager->persist($p20);


                            $p22 = new Produit();
                            $p22->setNom("SANLIDA CHACE - THE ARBALETE POUR TOI T'AMUSER");
                            $p22->setPrix(209.00);
                            $p22->setDescription("

                            Dans l’ensemble, un grand paquet, l’arbalète Chase Wind dispose de branches moulées de compression de qualité ainsi que d’une poignée usiné cnc pour donner une précision fiable.
                            
                            PUISSANCE 90 ou 150 LBS
                            
                            La détente est  légère de seulement 3,1 lb avec une sécurité manuelle intégrée.
                            
                            Dans le paquet  : - viseur red-dot - corde - bandoir - 4 traits  en aluminium
                            ");
                            $p22->setSousCategorie($sc14);
                            $p22->setImage("ARB_SANLIDA_CHACE_CAMO.jpg");
                            $manager->persist($p22);

                            $p23 = new Produit();
                            $p23->setNom("EXCALIBUR ARBALETE TWINSTRIKE 360 R01150522506");
                            $p23->setPrix(1729.00);
                            $p23->setDescription("La première arbalète au monde qui tire un deuxième coup de feu!
                            Vitesse: 360FPS
                            Poids net: 7.75lbs
                            Poids de tirage: 358lbs
                            Largeur cocked: 21.125 »
                            Largeur non coque: 25.25 »
                            Technologie DualFire, conçue pour tirer avec précision deux coups à partir d’une seule arbalète avec un regroupement serré à n’importe quelle distance.
                            Doubles gâchettes sans friction de qualité match indépendante de 4 lb.
                            Un deuxième tir rapide, en quelques millisecondes.
                            
                            Assure que votre arbalète ne tirera pas à moins qu’une flèche ne soit chargée.
                            Fonctionne en conjonction avec le nouveau Rhino Nock d’Excalibur.
                            Parfaitement équilibré avec une manivelle externe Charger EXT.
                            Configuration compacte sur/sous combinée à une prise de vue à travers la colonne montante pour une cohérence et une précision accrues.");
                            $p23->setSousCategorie($sc14);
                            $p23->setImage("twinstac360.jpg");
                            $manager->persist($p23);




                            $p24 = new Produit();
                            $p24->setNom("Hallebarde allemande XIe siècle (202 cm.)");
                            $p24->setPrix(120,32);
                            $p24->setDescription("Découvrez la fascinante hallebarde allemande du XIe siècle, un authentique joyau historique qui vous transportera au temps des batailles et des chevaliers. D'une longueur d'environ 202 cm, cette imposante arme à cornes devient le complément parfait pour tout collectionneur ou amateur d'histoire médiévale.

                            Fabriquée par la prestigieuse société espagnole Denix, spécialisée dans la création de répliques décoratives d'armes historiques de haute qualité, cette hallebarde se distingue par son incroyable niveau de détail et ses finitions impeccables. Chaque partie de cette magnifique pièce a été soigneusement travaillée avec des matériaux de première qualité, garantissant sa durabilité et sa résistance.
                            
                            Le manche en bois robuste et élégant offre une prise ferme et confortable, vous permettant de manier la hallebarde en toute confiance. Sa tête d'armes est une véritable œuvre d'art, avec un fer de lance en guise de cuirasse supérieure qui vous permettra d'attaquer vos ennemis avec précision et force. De plus, il comporte une lame croisée en forme de lame de hache, idéale pour désarmer vos adversaires, et une lance plus petite ou une cuirasse de grappin à l'opposé, vous offrant diverses options tactiques sur le champ de bataille.
                            
                            La hallebarde allemande du XIe siècle se distingue non seulement par sa beauté et son authenticité, mais aussi par son origine. Ce magnifique article a été fabriqué en Espagne, pays reconnu pour sa tradition et sa maîtrise dans la création d'armes historiques. À chaque coup que vous ferez, vous ressentirez la force et l'héritage des grands guerriers médiévaux qui l'ont utilisé dans le passé.
                            
                            Ne manquez pas votre chance de posséder cette impressionnante hallebarde, un trésor qui ne manquera pas de susciter l'admiration de tous ceux qui la verront. Qu'elle soit utilisée comme pièce décorative dans votre maison ou dans le cadre de votre collection d'armes historiques, cette réplique de haute qualité vous transportera dans une époque d'aventure et de bravoure.");
                            $p24->setSousCategorie($sc3);
                            $p24->setImage("hallebarde-allemande-xie-siecle-202-cm.webp");
                            $manager->persist($p24);

                            $p25 = new Produit();
                            $p25->setNom("MBrochet médiéval (205 cm.)");
                            $p25->setPrix(110.32);
                            $p25->setDescription("Découvrez l'imposant Pica médiéval de 205 cm. avec des gravures détaillées. Cette arme de combat incroyable est similaire à une lance, mais beaucoup plus longue, mesurant généralement entre trois et quatre mètres. Son design a évolué au fil du temps, gagnant en taille tant au niveau du manche qu'au niveau de la pointe.

                            Fabriquée par Marto à Tolède, en Espagne, cette Pica médiévale est un véritable trésor historique. Chaque détail de ses gravures a été soigneusement travaillé pour vous offrir une expérience médiévale authentique.
                            
                            Vous cherchez une pièce unique pour votre collection ? Ce brochet médiéval est le choix parfait. Sa longueur de 205 cm. en fait un véritable joyau qui ne peut pas manquer dans votre arsenal. De plus, son site de fabrication à Tolède, en Espagne, lui confère une valeur ajoutée et la distingue comme une pièce d'une qualité exceptionnelle.
                            
                            Ne manquez pas l'occasion d'acquérir ce brochet médiéval et plongez dans l'histoire. Obtenez-la dès maintenant!");
                            $p25->setSousCategorie($sc3);
                            $p25->setImage("brochet-medieval-205-cm.webp");
                            $manager->persist($p25);

                            $user1 = new Utilisateur();
                            $user1->setNom("denoyelle");
                            $user1->setPrenom('marc');
                            $user1->setAdresse("15 rue de la pompe");
                            $user1->setVille("rivery");
                            $user1->setCp('80136');
                            $user1->setTelephone("0603689748");
                            $user1->setEmail('denoyellemarc@orange.fr');
                            $user1->setPassword("123456");
                            $user1->setPays("france");
                            
                            
                            $manager->persist($user1);

                            $adresse1 = new Adresse();
                            $adresse1->setNom("denoyelle");
                            $adresse1->setPrenom('marc');
                            $adresse1->setAdresse("15 rue de la pompe");
                            $adresse1->setVille("rivery");
                            $adresse1->setCp('80136');
                            $adresse1->setTelephone("0606548973");
                            $adresse1->setPays('france');
                            $adresse1->setUti($user1);
                            $manager->persist($adresse1);

                            $adresse2 = new Adresse();
                            $adresse2->setNom("denoyelle");
                            $adresse2->setPrenom('marc');
                            $adresse2->setAdresse("15 avenue marechal ney");
                            $adresse2->setVille("amiens");
                            $adresse2->setCp('80090');
                            $adresse2->setPays('france');
                            $adresse2->setTelephone("0625487963");
                            $adresse2->setUti($user1);
                            $manager->persist($adresse2);

                            $user2 = new Utilisateur();
                            $user2->setNom("papie");
                            $user2->setPrenom('luc');
                            $user2->setAdresse("10 rue qui glisse");
                            $user2->setVille("conty");
                            $user2->setCp('80160');
                            $user2->setTelephone("0603689784");
                            $user2->setEmail('papieluc@orange.fr');
                            $user2->setPassword("987654");
                            $user2->setPays("france");
                            
                            
                            $manager->persist($user2);

                            $adresse2 = new Adresse();
                            $adresse2->setNom("papie");
                            $adresse2->setPrenom('luc');
                            $adresse2->setAdresse("10 rue qui glisse");
                            $adresse2->setVille("conty");
                            $adresse2->setCp('80160');
                            $adresse2->setTelephone("0606548984");
                            $adresse2->setPays('france');
                            $adresse2->setUti($user2);
                            $manager->persist($adresse2);

                            $adresse2 = new Adresse();
                            $adresse2->setNom("papie");
                            $adresse2->setPrenom('luc');
                            $adresse2->setAdresse("15 avenue marechal foch");
                            $adresse2->setVille("amiens");
                            $adresse2->setCp('80090');
                            $adresse2->setPays('france');
                            $adresse2->setTelephone("0625487956");
                            $adresse2->setUti($user2);
                            $manager->persist($adresse2);




                            

                            

       











        $manager->flush();
    }
}
