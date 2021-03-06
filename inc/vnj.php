<?php

function HttpGet($url)
{
$curl = curl_init( $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec( $curl );
curl_close( $curl );
return $response;
}

function GetLanguage($code)
{
	$countries = array(  "AF" => "Afghanistan" , "ZA" => "Afrique du Sud" , "AX" => "Aland Islands" , "AL" => "Albanie" , "DZ" => "Algérie" , "DE" => "Allemagne" , "AS" => "American Samoa" , "AD" => "Andorre" , "AO" => "Angola" , "AI" => "Anguilla" , "AQ" => "Antarctique" , "AG" => "Antigua-et-Barbuda" , "SA" => "Arabie Saoudite" , "AR" => "Argentine" , "AM" => "Arménie" , "AW" => "Aruba" , "AU" => "Australie" , "AT" => "Autriche" , "AZ" => "Azerbaijan" , "BS" => "Bahamas" , "BH" => "Bahrain" , "BD" => "Bangladesh" , "BB" => "Barbades" , "PW" => "Belau" , "BE" => "Belgique" , "BZ" => "Belize" , "BJ" => "Benin" , "BM" => "Bermudes" , "BT" => "Bhutan" , "BY" => "Biélorussie" , "BO" => "Bolivie" , "BA" => "Bosnie-Herzégovine" , "BW" => "Botswana" , "BN" => "Brunei" , "BR" => "Brésil" , "BG" => "Bulgarie" , "BF" => "Burkina Faso" , "BI" => "Burundi" , "KH" => "Cambodge" , "CM" => "Cameroun" , "CA" => "Canada" , "CV" => "Cap Vert" , "CL" => "Chili" , "CN" => "Chine" , "CX" => "Christmas Island" , "CY" => "Chypre" , "CO" => "Colombie" , "KM" => "Comores" , "CG" => "Congo (Brazzaville)" , "CD" => "Congo (Kinshasa)" , "KP" => "Corée du Nord" , "KR" => "Corée du Sud" , "CR" => "Costa Rica" , "HR" => "Croatie" , "CU" => "Cuba" , "CW" => "Curaçao" , "CI" => "Côte-d’Ivoire" , "DK" => "Danemark" , "DJ" => "Djibouti" , "DM" => "Dominique" , "ER" => "Erythrée" , "ES" => "Espagne" , "EE" => "Estonie" , "US" => "Etats-Unis (USA)" , "FJ" => "Fidji" , "FI" => "Finlande" , "FR" => "France" , "GA" => "Gabon" , "GM" => "Gambie" , "GH" => "Ghana" , "GI" => "Gibraltar" , "GD" => "Grenade" , "GL" => "Groenland" , "GR" => "Grèce" , "GP" => "Guadeloupe" , "GU" => "Guam" , "GT" => "Guatemala" , "GG" => "Guernesey" , "GN" => "Guinée" , "GQ" => "Guinée équatoriale" , "GW" => "Guinée-Bissau" , "GY" => "Guyane" , "GF" => "Guyane Française" , "GE" => "Géorgie" , "GS" => "Géorgie du Sud / îles Sandwich" , "HT" => "Haïti" , "HN" => "Honduras" , "HK" => "Hong Kong" , "HU" => "Hongrie" , "IN" => "Inde" , "ID" => "Indonésie" , "IR" => "Iran" , "IQ" => "Iraq" , "IE" => "Irlande" , "IS" => "Islande" , "IL" => "Israël" , "IT" => "Italie" , "JM" => "Jamaïque" , "JP" => "Japon" , "JE" => "Jersey" , "JO" => "Jordanie" , "KZ" => "Kazakhstan" , "KE" => "Kenya" , "KI" => "Kiribati" , "KW" => "Koweït" , "KG" => "Kyrgyzstan" , "RE" => "La Réunion" , "LA" => "Laos" , "LS" => "Lesotho" , "LV" => "Lettonie" , "LB" => "Liban" , "LR" => "Liberia" , "LY" => "Libye" , "LI" => "Liechtenstein" , "LT" => "Lituanie" , "LU" => "Luxembourg" , "MO" => "Macao S.A.R., Chine" , "MK" => "Macédoine" , "MG" => "Madagascar" , "MY" => "Malaisie" , "MW" => "Malawi" , "MV" => "Maldives" , "ML" => "Mali" , "MT" => "Malte" , "MA" => "Maroc" , "MQ" => "Martinique" , "MU" => "Maurice" , "MR" => "Mauritanie" , "YT" => "Mayotte" , "MX" => "Mexique" , "FM" => "Micronésie" , "MD" => "Moldavie" , "MC" => "Monaco" , "MN" => "Mongolie" , "ME" => "Montenegro" , "MS" => "Montserrat" , "MZ" => "Mozambique" , "MM" => "Myanmar" , "NA" => "Namibie" , "NR" => "Nauru" , "NI" => "Nicaragua" , "NE" => "Niger" , "NG" => "Nigeria" , "NU" => "Niue" , "MP" => "Northern Mariana Islands" , "NO" => "Norvège" , "NC" => "Nouvelle-Calédonie" , "NZ" => "Nouvelle-Zélande" , "NP" => "Népal" , "OM" => "Oman" , "PK" => "Pakistan" , "PA" => "Panama" , "PG" => "Papouasie-Nouvelle-Guinée" , "PY" => "Paraguay" , "NL" => "Pays-Bas" , "PH" => "Philippines" , "PN" => "Pitcairn" , "PL" => "Pologne" , "PF" => "Polynésie Française" , "PT" => "Portugal" , "PR" => "Puerto Rico" , "PE" => "Pérou" , "QA" => "Qatar" , "RO" => "Roumanie" , "GB" => "Royaume-Uni (UK)" , "RU" => "Russie" , "RW" => "Rwanda" , "CF" => "République Centrafricaine" , "DO" => "République Dominicaine" , "CZ" => "République Tchèque" , "BQ" => "Saba, Saint-Eustache et Bonaire" , "EH" => "Sahara occidental" , "BL" => "Saint Barthélemy" , "PM" => "Saint Pierre et Miquelon" , "KN" => "Saint-Kitts-et-Nevis" , "MF" => "Saint-Martin (partie française)" , "SX" => "Saint-Martin (partie néerlandaise)" , "VC" => "Saint-Vincent-et-les-Grenadines" , "SH" => "Sainte-Hélène" , "LC" => "Sainte-Lucie" , "SV" => "Salvador" , "WS" => "Samoa" , "SM" => "San Marino" , "ST" => "Sao Tomé-et-Principe" , "RS" => "Serbie" , "SC" => "Seychelles" , "SL" => "Sierra Leone" , "SG" => "Singapour" , "SK" => "Slovaquie" , "SI" => "Slovénie" , "SO" => "Somalie" , "SD" => "Soudan" , "SS" => "Soudan du Sud" , "LK" => "Sri Lanka" , "CH" => "Suisse" , "SR" => "Suriname" , "SE" => "Suède" , "SJ" => "Svalbard et Jan Mayen" , "SZ" => "Swaziland" , "SY" => "Syrie" , "SN" => "Sénégal" , "TW" => "Taiwan" , "TJ" => "Tajikistan" , "TZ" => "Tanzanie" , "TD" => "Tchad" , "TF" => "Terres Australes Françaises" , "PS" => "Territoire Palestinien" , "IO" => "Territoire britannique de l’océan Indien" , "TH" => "Thailande" , "TL" => "Timor-Leste" , "TG" => "Togo" , "TK" => "Tokelau" , "TO" => "Tonga" , "TT" => "Trinité-et-Tobago" , "TN" => "Tunisie" , "TM" => "Turkménistan" , "TR" => "Turquie" , "TV" => "Tuvalu" , "UG" => "Uganda" , "UA" => "Ukraine" , "UY" => "Uruguay" , "UZ" => "Uzbekistan" , "VU" => "Vanuatu" , "VA" => "Vatican" , "VE" => "Venezuela" , "VN" => "Vietnam" , "WF" => "Wallis et Futuna" , "YE" => "Yemen" , "ZM" => "Zambie" , "ZW" => "Zimbabwe" , "EG" => "Égypte" , "AE" => "Émirats Arabes Unis" , "EC" => "Équateur" , "ET" => "Éthiopie" , "BV" => "Île Bouvet" , "NF" => "Île Norfolk" , "IM" => "Île de Man" , "KY" => "Îles Caïmans" , "CC" => "Îles Cocos" , "CK" => "Îles Cook" , "FK" => "Îles Falkland" , "FO" => "Îles Féroé" , "HM" => "Îles Heard-et-MacDonald" , "MH" => "Îles Marshall" , "UM" => "Îles Mineures éloignées des États-Unis" , "SB" => "Îles Salomon" , "TC" => "Îles Turques et Caïques" , "VI" => "Îles Vierges américaines (US)" , "VG" => "Îles Vierges britanniques" );
	return $countries[$code];
}


function GetProduct($id)
{	
	$website = "https://vals-natural-journey.de";	
	$consumerkey = "ck_e3b74a274632a79a51f2e92809c392a30b7e8266";
	$consumerSecret = "cs_fa92ad1ba2a3742e8ee3fa72161e650e871ee069";

	$request = "$website/wp-json/wc/v2/products/$id?consumer_key=$consumerkey&consumer_secret=$consumerSecret";
	return  HttpGet($request);
}

function GetAllOrders()
{	
	$website = "https://vals-natural-journey.de";	
	$consumerkey = "ck_e3b74a274632a79a51f2e92809c392a30b7e8266";
	$consumerSecret = "cs_fa92ad1ba2a3742e8ee3fa72161e650e871ee069";

	$request = "$website/wp-json/wc/v1/orders?consumer_key=$consumerkey&consumer_secret=$consumerSecret";
	return  HttpGet($request);
}

function GetAllReviews($id)
{	
	$website = "https://vals-natural-journey.de";	
	$consumerkey = "ck_e3b74a274632a79a51f2e92809c392a30b7e8266";
	$consumerSecret = "cs_fa92ad1ba2a3742e8ee3fa72161e650e871ee069";

	$request = "$website/wp-json/wc/v2/products/$id/reviews?consumer_key=$consumerkey&consumer_secret=$consumerSecret";
	return  HttpGet($request);
}



$func = $_GET["func"];
if($func === "GetLanguage")
{
	echo GetLanguage($_GET["code"]);
}
else if($func === "GetProduct")
{
	echo GetProduct($_GET["id"]);
}
else if($func === "GetAllOrders")
{
	echo GetAllOrders();
}
else if($func === "GetAllReviews")
{
	echo GetAllReviews($_GET["id"]);
}
else
{
	echo "Unknown function";
}



?>