<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Nýskráningar og innskráningarvandamál'
	),
	array(
		0 => 'Hvers vegna þarf ég að skrá mig á spjallið?',
		1 => 'Þú þarft þess ekki endilega. Þú getur skoðað og lesið spjallið án þess að skrá þig, en til þess að taka þátt í umræðum og nýta þér aðra eiginlega spjallborðsins þarftu að skrá þig. Það er mjög fljótlegt að skrá nýjan notanda, svo við mælum með því að þú gerir það.'
	),
	array(
		0 => 'Hvað er COPPA?',
		1 => 'COPPA stendur fyrir "Children’s Online Privacy Protection Act of 1998" eru bandarísk lög sem eiga ekki við hér.',
	),
	array(
		0 => 'Hvers vegna get ég ekki nýskráð mig?',
		1 => 'Mögulega hafa stjórnendur gert nýskráningu notanda óvirka. Einnig gæti verið að IP tala þín eða notendanafn sé á bannlista. Hafðu samband við stjórnanda ef þú þarft hjálp.',
	),
	array(
		0 => 'Ég nýskráði notanda en get ekki skráð mig inn!',
		1 => 'Byrjaðu á því að athuga hvort notendanafn og lykilorð séu rétt. Ef þau eru rétt gæti eftirfarandi hafa gerst. Ef COPPA er virkt og þú undir 13 ára aldri við nýskráningu, þá ættir þú að hafa fengið sendar leiðbeiningar sem þú þarft að fylgja. Sum spjallborð krefjast þess að nýir notendur séu staðfestir, annað hvort af þeim sjálfum eða stjórnendum, áður en þú getur skráð þig inn. Þær upplýsingar komu fram við nýskráningu. Ef þú fékkst sendan tölvupóst, fylgdu fyrirmælunum sem þar eru að finna. Ef þú fékkst ekki tölvupóst gæti verið að þú hafi skráð rangt tölvupóstfang eða að tölvupósturinn hafi lent í ruslasíu. Ef þú ert viss um að tölvupóstfangið sem þú skráðir hafi verið rétt, hafðu samband við stjórnanda.'
	),
	array(
		0 => 'Hvers vegna get ég ekki skráð mig inn?',
		1 => 'Það gætu verið nokkrar ástæður. Í fyrsta lagi, gakktu úr skugga um að notendanafn og lykilorð séu rétt. Ef þau eru rétt, hafðu samband við stjórnanda ef ske kynni að notandi þinn hefi verið bannaður. Það gæti einnig verið villa á okkar enda sem við þurfum að laga!',
	),
	array(
		0 => 'Ég var búinn að skrá mig áður en núna get ég ekki skráð mig inn?',
		1 => 'Það gæti verið að aðgangur þinn hafi verið gerður óvirkur. Einnig gæti verið að óvirkum notendum sé eytt með vissu millibili. Ef það hefur gerst, endilega skráðu þig upp á nýtt og vertu virkari í framtíðinni!'
	),
	array(
		0 => 'Ég gleymdi lykilorðinu mínu',
		1 => 'Engar áhyggur! Við getum ekki endurheimt lykilorðið en það er ekkert mál að endurnýja það. Kíktu á innskráningarsíðuna og klikkaðu á <em>Ég gleymdi lykil mínu</em>. Fylgdu leiðbeiningunum og þú ættir að geta skráð þig inn fljótlega.<br />Ef þú getur ekki endurnýjað lykilorðið, hafðu samband við stjórnanda',
	),
	array(
		0 => 'Hvers vegna útskráist ég sjálfkrafa?',
		1 => 'Ef þú hefur ekki hakað við <em>Muna mig</em> kassan þegar þú skráir þig inn mun innskráningin einungis vera virk í fyrirfram ákveðinn tíma. Þetta hjálpar tilvið að koma í veg fyrir misnotkun á aðganginum þínum. Til að haldast skráð/ur inn, hakaðu við <em>muna mig</em> kassann þegar þú skráir þig inn. Það er ekki mælst með því að gera það ef þú ert að tengjast spjallborðinu í tölvu sem deilt er með öðrum, t.d. á bókasafni, netkaffi og svo framvegis. Ef þú sérð þennan kassa ekki merkir það að þessi möguleiki hefur verið gerður óvirkur af stjórnanda.',
	),
	array(
		0 => 'Hvað gerir “Eyða vafrakökum”?',
		1 => '“Eyða vafrakökum” eyðir vafrakökum sem phpBB kerfið býr til svo þú skráist inn sjálfkrafa. Kökurnar þjóna ýmsum öðrum tilgangi en ef þú átt í vandræðum með að skrá þig inn gæti hjálpað að eyða kökunum.',
	),
	array(
		0 => '--',
		1 => 'Notendastillingar'
	),
	array(
		0 => 'Hvernig breyti ég stillingunum mínum?',
		1 => 'Ef þú ert skráður notandi geymir kerfið upplýsingarnar þínar. Til að breyta þeim velur þú „Stillingar“. Þú finnur það með því ýta á notendanafnið þitt efst á síðunni. Þar getur þú stillt allar breytur eftir eigin höfði.',
	),
	array(
		0 => 'Hvernig kem ég í veg fyrir að ég sjást sem innskráður notandi?',
		1 => 'Í stjórnborðinu undir „Stillingar“ velur þú „Stillingar spjalborðs“, finnur þú valmöguleikann <em>Fela tengingu</em>. Ef þú virkjar þennan valmöguleika birtist þú aðeins stjórnendum, ritstjórum og sjálfum þér. Þú telst þá sem falinn notandi.'
	),
	array(
		0 => 'Tímasetningar eru rangar!',
		1 => 'Það gæti verið að tíminn sem birtist sé frá öðru tímabelti en því sem þú ert staddur í. Ef svo er, kíktu í „Stillingar“ og breyttu tímabeltinu svo það stemmi við þitt. Vinsamlegast athugaðu að einungis skráðir notendur geta breytt tímastillingum. Ef þú ert ekki skráður nú þegar, þá er þetta rétti tíminn!'
	),
	array(
		0 => 'Ég breytti tímabeltinu en tíminn er enn ekki réttur!',
		1 => 'Ef þú ert viss um að þú hafir stillt tímabeltið rétt og tíminn á spjallborðinu er enn ekki réttur þá er klukkan á vefþjóninum ekki rétt. Vinsamlegast láttu stjórnanda vita svo hægt sé að stilla klukkuna.'
	),
	array(
		0 => 'Tungumálið mitt er ekki á listanum!',
		1 => 'Annað hvort hefur stjórnandi ekki sett upp pakka með tungumálinu þínu eða enginn hefur þýtt það. Þú getur prófað að biðja stjórnanda að setja upp tungumálapakka fyrir þig.',
	),
	array(
		0 => 'Hvaða myndir eru þetta við notendanafnið mitt?',
		1 => 'Það eru tvær myndir sem geta birst ásamt notendanafninu þínu. Önnur þeirra gæti tengst stöðu þinni, yfirleitt stjörnur, punktar eða kassar. Hin er smámynd notanda, en hana stillir notandi sjálfur.',
	),
	array(
		0 => 'Hvernig set ég inn smámynd?',
		1 => 'Í „Stillingar“ finnur þú „Prófíl“ þar sem þú getur bætt við smámynd. Ef þú getur ekki sett upp smámynd, hafðu samband við stjórnanda.',
	),
	array(
		0 => 'Hvað er staðan mín og hvernig breyti ég henni?',
		1 => 'Stöður, sem birtast við notendanafn þitt, gefa til kynna fjölda pósta eða til aðgreiningar notanda, svo sem stjórnendur.'
	),
	array(
		0 => 'Þegar ég klikka á hlekk fyrir tölvupóstfang notanda er ég beðinn um að skrá mig inn?',
		1 => 'Einungis skráðir notendur geta skrifað öðrum notendum tölvupóst með innbyggða kerfinu og þá einungis ef notendur hafa opnað á þann möguleika. Þetta er til að koma í veg fyrir misnotkun á tölvupóstföngum notenda.'
	),
	array(
		0 => '--',
		1 => 'Innlegg, skilaboð, umræður og þræðir'
	),
	array(
		0 => 'Hvernig bý ég til nýja umræðu eða set inn svar?',
		1 => 'Til að búa til nýja umræðu velur þú „Nýr þráður“. Til að svara þræði sem er nú þegar til, veldu „Svara“. Þú verður að vera innskráður til að taka þátt í umræðum.',
	),
	array(
		0 => 'Hvernig breyti ég eða eyði innleggi?',
		1 => 'Notendur geta ekki eytt innleggi en geta breytt innihaldi þeirra sem og titli. Eingöngu stjórnendur eða póststjórar geta eytt innleggjum. Þú breytir innleggi með „Breyta“ takkanum við viðkomandi innlegg.'
	),
	array(
		0 => 'Hvernig bæti ég við undirskrift?',
		1 => 'Undirskrift er stillt í notendastillingum, nánar tiltekið undir „Prófíl“. Ef þú gerir það verður undirskrift þinni bætt sjálfkrafa við öll innlegg þín. Þú getur þó valið að sleppa undirskrift á einstaka innleggjum þegar þú semur þau.'
	),
	array(
		0 => 'Hvernig bý ég til skoðanakönnun?',
		1 => 'Þegar þú býrð til nýjan þráð eða ert að breyta fyrsta innleggi þráðar, velur þú „Skoðanakönnun“ flipann fyrir neðan ritilinn. Ef þú sérð flipann ekki, hefur þú ekki réttindi til að búa til skoðanakönnun. Bættu við titli og að minnsta kosti tveimur valmöguleikum. Hver valmöguleiki skal vera á sér línu. Þú getur einnig stillt hversu marga valmöguleika hver notandi hefur, fjölda daga sem skoðanakönnunin er virk (0 fyrir óendanlegt) og að lokum hvort notendur megi skipta um skoðun.'
	),
	array(
		0 => 'Afhverju get ég ekki haft fleiri valmöguleika?',
		1 => 'Stjórnendur stilla fjölda valmöguleika. Ef þú vilt fleiri valmöguleika, endilega hafðu samband við stjórnanda.'
	),
	array(
		0 => 'Hvernig breyti ég eða eyði skoðanakönnun?',
		1 => 'Eingungis höfundur, póststjórar eða stjórnandi geta breytt skoðanakönnun.  Til að breyta skoðanakönnun, velur þú að breyta fyrsta innlegginu. Ef enginn hefur kosið geta notendur eytt eða breytt könnuninni. Hinsvegar, ef einhver hefur kosið geta eingöngu stjórnendur eða póststjórar eytt eða breytt könnuninni. Þetta hjálpar að koma í veg fyrir kosningasvindl.'
	),
	array(
		0 => 'Hvers vegna kemst ég ekki inn á spjallsvæði?',
		1 => 'Sum spjallborð geta verið með aðgangstakmörkunum. Til að sjá þau, lesa, skrifa eða eiga við þau á einhvern annan hátt þurfa notendur leyfi til þess. Hafðu samband við stjórananda í sambandi við aðgangsmál.'
	),
	array(
		0 => 'Hver svegna get ég ekki bætt við viðhengi?',
		1 => 'Leyfi fyrir viðhengjum ræðst af stillingum fyrir notanda, notendahóp eða fyrir hvert spjallborð. Það gæti verið að þú hafir ekki réttindi til að bæta við viðhengi. Hafðu samband við stjórnanda ef þú ert óviss um ástæðu þess að þú getir ekki notað viðhengi.'
	),
	array(
		0 => 'Hvers vegna fékk ég viðvörun?',
		1 => 'Spjallborðin hafa reglur. Ef þú hefir brotið reglu gætir þú fengið viðvörun. Hafðu samband við stjórnanda ef þú veist ekki ástæðuna á bakvið viðvörunina.'
	),
	array(
		0 => 'Hvernig get ég tilkynnt innlegg?',
		1 => 'Ef möguleikinn er í boði, ættir þú að sjá takka til að tilkynna viðkomandi innlegg við hlið þess.'
	),
	array(
		0 => 'Hvað er „Vista“ í ritlinum?',
		1 => 'Þú getur vistað drög til að klárað þau seinna. Þú finnur vistuð drög í „Stillingar“.'
	),
	array(
		0 => 'Hvers vegna þarf að samþykkja innleggið mitt?',
		1 => 'Stjórnendur gætu hafa ákveðið að samþykkja þurfi innlegg áður en þau eru birt. Hafðu samband við stjórnendur fyrir nánari upplýsingar.'
	),
	array(
		0 => 'Hvernig bumpa ég umræðunni minni?',
		1 => 'Með því að velja „Færa upp“ hlekkinn færir þú umræðuna þína efst upp á fyrstu síðuna. Ef þú sérð valmöguleikann ekki gæti verið að möguleikinn sé ekki til staðar eða að ekki hafi liðið nægur tími frá síðustu uppfærslu. Einnig er hægt að færa umræður upp með því að svara þeim en vinsamlegast sýnið tillitsemi og notið bara „Færa upp“ virknina.'
	),
	array(
		0 => '--',
		1 => 'Uppsetning og umræður'
	),
	array(
		0 => 'Hvað er BBkóði?',
		1 => 'BBkóði er sérstök útfærsla af HTML, sem býður upp á aukna möguleika til að að vissa hluti í umræðum. Notkun á BBkóða er háð samþykki stjórnenda en einnig er hægt að gera hann óvirkan í einstaka innleggjum þegar þau eru send inn.  BBkóði lítur svipað út HTML, en tögin eru innan hornklofa  [ og ] í stað &lt og &gt. Frekari upplýsingar er að finna í ritlinum við gerð innleggja.'	),
	array(
		0 => 'Má ég nota HTML?',
		1 => 'Nei. Flest má leysa með notkun þess BBkóða sem leyfður er.'
	),
	array(
		0 => 'Hvað eru broskallar?',
		1 => 'Broskallar eru litlar myndir sem tákna geiflur. Eins og í raunheimum skal takmarka geiflur því þær gera samræður þreytandi. Þó eru þær stundum nauðsynlegar.'
	),
	array(
		0 => 'Get ég birt myndir?',
		1 => 'Já, þú getur bætt myndum við í innlegg þín. Hér eru viðhengi leyfð og notendur eru kvattir til að nýta sér það. Einnig er hægt að hlekkja í myndir ef þær eru aðgengilegar á netinu. Þú getur ekki vísað beint á myndir sem eru vistaðar á tölvunni þinni, í því tilfelli þarftu að bæta þeim við í viðhengi. Til að birta myndir sem eru aðgengilegar á netinu notar þú BBkóða tagið [img].'
	),
	array(
		0 => 'Hvað eru víðvær tilkynningar?',
		1 => 'Víðværar tilkynningar innihalda mikilvægar upplýsingar og þú ættir að kynna þér þær. Þær birtast efst á hverju spjallborði. '
	),
	array(
		0 => 'Hvað eru tilkynningar?',
		1 => 'Tilkynningar innihalda einnig mikilvægar upplýsingar og þú ættir að kynna þér þær. Þær birtast þó ekki allstaðar heldur eingöngu á viðeigandi spjallborðum.'
	),
	array(
		0 => 'Hvað eru límdar umræður??',
		1 => 'Límdar umræður birtast fyrir neðan tilkynningar og eru eingöngu á forsíðunni. Oft eru þær mikilvægar og þú ættir að kynna þér þær.'
	),
	array(
		0 => 'Hvað eru læstar umræður?',
		1 => 'Læstar umræður eru umræður sem hefur verið læst af einhverri ástæðu, en margar ástæður gætu legið þar að baki. Notendur geta þá ekki lengur bætt við innleggjum eða tekið þátt í skoðanakönnunu. Ef spjallborðið er þannig stillt getur þú læst þínum eigin þráðum.'
	),
	array(
		0 => 'Hvað eru umræðumerki?',
		1 => 'Höfundur þráðar getur valið mynd sem lýsir innihaldi.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Stöður notenda og hópar'
	),
	array(
		0 => 'Hvað eru stjórnendur?',
		1 => 'Stjórnendur eru notendur sem mest hafa valdið. Þeir geta ráðið öllum stillingum í tenglsum við spjallborðið og notendur þess.'
	),
	array(
		0 => 'Hvað eru póststjórar?',
		1 => 'Póststjórar eru notendur sem líta eftir spjallborðunum. Þeir geta eytt eða breytt práðum og innleggjum ásamt því að læsa, aflæsa, færa og skipta þeim niður. Þeir eru einnig siðapostular og gæta þess að umræður afvegaleiðist ekki eða verði særandi.'
	),
	array(
		0 => 'Hvað eru notendahópar?',
		1 => 'Hægt er að nota notendahópa til að gera umsjón kerfisins auðveldari. Hver notandi getur tilheyrt mörgum mismunandi hópum þar sem hver hópur hefur sín sérstöku réttindi.'
	),
	array(
		0 => 'Hvar eru notendahóparnir og hvernig kemst ég í þá?',
		1 => 'Þú getur séð alla notendahópana í stillingunum þínum. Ef þú vilt komast í hóp velurðu hann og notar hnappinn til að sækja um inngöngu. Hinsvegar eru ekki allir hópar opnir og gæti þurft að samþykkja þig inn í hann. Ef hópurinn er opinn kemstu sjálfkrafa inn með því að sækja um aðgang. Ef þess er krafist að notendur séu samþykktir í hópa þarftu að bíða eftir samþykki hópstjóra eftir að þú sendir ósk um inngöngu.'
	),
	array(
		0 => 'Hvernig verð ég hópstjóri?',
		1 => 'Hópstjórar eru valdir af stjórnanda þegar notendahópur er búinn til. Ef þú hefur áhuga á þínum eigin notandahóp, hafðu samband við stjórnanda.',
	),
	array(
		0 => 'Hvers vegna eru mismunandi litir á sumum hópunum?',
		1 => 'Stjórnendur geta úthlutað mismunandi litum til notendahópa svo að það verði auðveldara að aðgreina þá.'
	),
	array(
		0 => 'Hvað er sjálfgefinn notendahópur?',
		1 => 'Ef þú ert meðlimur í fleiri en einum notendahóp, þá er notast við sjálgefna notendahópinn til að ákveða lit og stöðu þína.'
	),
	array(
		0 => 'Hvað er bakvið þennan Teymið hlekk?',
		1 => 'Síðan atarna birtir þér upplýsingar um þá sem sjáum síðuna, bæði stjórnendur og póststjóra, ásamt nánari upplýsingum um hvaða spjallborðum þeir stýra.'
	),
	array(
		0 => '--',
		1 => 'Einkaskilaboð'
	),
	array(
		0 => 'Ég get ekki sent einkaskilaboð!',
		1 => 'Þrjár ástæður koma til greina; Þú ert ekki innskráður, stjórnandi hefur gert allt einkaskilaboðakerfið óvirkt eða stjórnandi hefur bannað þér að senda einkaskilaboð. Hafðu samband við stjórananda fyrir frekari upplýsingar.'
	),
	array(
		0 => 'Mér berast óæskileg einkaskilaboð!',
		1 => 'Þú getur komið í veg fyrir að þér berist skilaboð frá vissum notendum í gegnum stillingarnar þínar. Ef þú ert að fá óæskileg skilaboð frá vissum notanda, láttu stjórnendur vita. Þeir geta tekið í lurginn á viðkomandi.'
	),
	array(
		0 => 'Mér hefur borist ruslpóstur eða annar óæskilegur póstur frá einhverjum af þessu spjallborði!',
		1 => 'Það er glatað. Tölvukerfi spjallborðsins reynir að koma í veg fyrir þessháttar hegðun og reynir að rekja misnotkun til gerenda. Þú getur hjálpað okkur með því að senda stjórnendum afrit af tölvupóstinum sem þú fékkst. Það er mikilvægt að fyrirsögn og öll smáatriði um sendanda fylgi með, stjórnendur geta þá vonandi brugðist við.'
	),
	array(
		0 => '--',
		1 => 'Vinir og óvinir'
	),
	array(
		0 => 'Hvað eru vinalisti og óvinalisti?',
		1 => 'Þú getur notað þessa lista til að flokka notendur á spjallborðinu. Notendur á vinalistanum þínum birtast í stillingunum þínum svo þú getur á auðveldan máta séð hvort þeir séu tengdir og sent þeim skilaboð. Með því að bæta notanda á óvinalistann þinn hverfa öll innlegg frá honum, svo þú þurfir ekki að lesa þau.'
	),
	array(
		0 => 'How can I add / remove users to my Friends or Foes list?',
		1 => 'You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your Friend or Foe list. Alternatively, from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'Searching the Forums'
	),
	array(
		0 => 'How can I search a forum or forums?',
		1 => 'Enter a search term in the search box located on the index, forum or topic pages. Advanced search can be accessed by clicking the “Advance Search” link which is available on all pages on the forum. How to access the search may depend on the style used.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB. Be more specific and use the options available within Advanced search.',
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => 'Your search returned too many results for the webserver to handle. Use “Advanced search” and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'How do I search for members?',
		1 => 'Visit to the “Members” page and click the “Find a member” link.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => 'Your own posts can be retrieved either by clicking the “Show your posts” link within the User Control Panel or by clicking the “Search user’s posts” link via your own profile page or by clicking the “Quick links” menu at the top of the board. To search for your topics, use the Advanced search page and fill in the various options appropriately.',
	),
	array(
		0 => '--',
		1 => 'Subscriptions and Bookmarks',
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => 'In phpBB 3.0, bookmarking topics worked much like bookmarking in a web browser. You were not alerted when there was an update. As of phpBB 3.1, bookmarking is more like subscribing to a topic. You can be notified when a bookmarked topic is updated. Subscribing, however, will notify you when there is an update to a topic or forum on the board. Notification options for bookmarks and subscriptions can be configured in the User Control Panel, under “Board preferences”.',
	),
	array(
		0 => 'How do I bookmark or subscribe to specific topics?',
		1 => 'You can bookmark or subscribe to a specific topic by clicking the appropriate link in the “Topic tools” menu, conveniently located near the top and bottom of a topic discussion.<br />Replying to a topic with the “Notify me when a reply is posted” option checked will also subscribe you to the topic.',
	),
	array(
		0 => 'How do I subscribe to specific forums?',
		1 => 'To subscribe to a specific forum, click the “Subscribe forum” link, at the bottom of page, upon entering the forum.',
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => 'To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Attachments'
	),
	array(
		0 => 'What attachments are allowed on this board?',
		1 => 'Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.'
	),
	array(
		0 => 'How do I find all my attachments?',
		1 => 'To find your list of attachments that you have uploaded, go to your User Control Panel and follow the links to the attachments section.'
	),
	array(
		0 => '--',
		1 => 'phpBB Issues',
	),
	array(
		0 => 'Who wrote this bulletin board?',
		1 => 'This software (in its unmodified form) is produced, released and is copyright <a href="https://www.phpbb.com/">phpBB Limited</a>. It is made available under the GNU General Public License, version 2 (GPL-2.0) and may be freely distributed. See <a href="https://www.phpbb.com/about/">About phpBB</a> for more details.',
	),
	array(
		0 => 'Why isn’t X feature available?',
		1 => 'This software was written by and licensed through phpBB Limited. If you believe a feature needs to be added please visit the <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, where you can upvote existing ideas or suggest new features.'
	),
	array(
		0 => 'Who do I contact about abusive and/or legal matters related to this board?',
		1 => 'Any of the administrators listed on the “The team” page should be an appropriate point of contact for your complaints. If this still gets no response then you should contact the owner of the domain (do a <a href="http://www.google.com/search?q=whois">whois lookup</a>) or, if this is running on a free service (e.g. Yahoo!, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that the phpBB Limited has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Limited in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do email phpBB Limited <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.'
	),
	array(
		0 => 'How do I contact a board administrator?',
		1 => 'All users of the board can use the “Contact us” form, if the option was enabled by the board administrator.<br />Members of the board can also use the “The team” link.',
	),
);
