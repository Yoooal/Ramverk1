---
title: "Report"
...
Report
=========================

###Kmom01

#### Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.
Har läst igenom PHP: The Right Way och den tar upp och sammanfattar mycket av det vi har gått igenom.

##### Styrkor
Tycker att jag känner mig bekväm och har en bra grundkunskap i PHP, samt har alla möjligheter att utvecklas vidare i detta språk och programmering överlag.
Förstår strukturen och hur man samarbetar PHP med HTML och SQL.
Har även förstått innebörden med objekt orienterad programmering och hur man med klasser får en mer organiserad och effektiv kod.
Har även, vid sidan av studierna, lärt mig mer av det kända ramverket Laravel.
I ramverket känner jag igen mycket av det vi har gått igenom sedan tidigare, och antagligen mycket av det vi ska gå igenom i denna kurs.

##### Svagheter
Känner att mina svagheter är all termologi och dokumentation.
Är allmänt dålig på att läsa igenom dokumentation och termologi, utan sitter hellre och lär mig praktiskt. Sen att jag inte vet exakt vad det heter i termer och dylikt är mindre viktigt för mig.
Men något jag även kanske borde fokusera mer på och ta in.

#### Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?
Jag gick in på Google och sökte på "most popular php frameworks".
Jag klickade på de 3 första träffarna/länkarna, vilket gav mig följande resultat.

I alla de tre undersökningarna/artiklarna rankade de Laravel på en självklar första plats, som det mest populära ramverket och gav liknande förklaring nedan.

#### 1. Laravel

Laravel is a comprehensive framework designed for rapidly building applications using the MVC architecture. It is the most popular PHP framework nowadays with a huge community of developers.

#####PRO’s:
* Organize ﬁles and code
* Rapid application development
* MVC architecture (and PHP7)
* Unit testing (FAST on HHVM)
* Best documentation of any
* High level of abstraction
* Overloading capabilities using dynamic methods
* Tons of out of the box functionality
* payment integration with stripe
* very strong encryption packages
* ORM
##### CON’s:
* Does Many queries on your database

Sedan var det lite mer jämt, men enligt min utvärdering kommer Symfony på andra plats, som det mest populära ramverket och gav liknande förklaring nedan.

#### 2. Symfony

The leading PHP framework to create websites and web applications. Built on top of the Symfony Components — a set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish.
##### PRO’s:
* High performance, due to byte code caching
* Stable
* Well documented, maintained, and supported
* Very good support and is very mature
##### CON’s:
* While the documentation is good, there is a steep learning curve.

Sedan var det än mer jämt, men enligt min utvärdering kommer CodeIgniter på andra plats, som det mest populära ramverket och gav liknande förklaring nedan.

#### 3. CodeIgniter

CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.
##### PRO’s:
* Very developer friendly
* Doesn’t need any special dependencies or supports
* Ability to use normal web hosting services well, using standard databases such as MySQL
* Outperforms most other frameworks (non MVC)
* Good documentation and LTS (Long Term Support)
##### CON’s:
* No namespace’s, however this can speed up
* Not as friendly towards unit testing as others
* Few libraries that are built inside the framework
* Severely out of date and does not support modern PHP features
* Has security issues which have been outstanding for years without being patched by the dev team

##### Källor:
* http://www.hongkiat.com/blog/best-php-frameworks/
* https://medium.com/@elitechsystems/the-most-popular-php-frameworks-in-2017-a90a1189405e
* https://medium.com/level-up-web/best-php-frameworks-for-web-developers-in-2017-c8a041671a79

#### Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.
Rent generellt angående communities, så antar jag att storleken på communities relativt väl speglar hur populärt fenomenet/området är i fråga och jämförelsevis med övriga besläktade områden.
Dvs. desto större community, desto större popularitet, desto mer människor och mer kunskap inom området. Banar också vägen för att området har större utvecklingspotential, än övriga mindre communities/områden.
I större communities blir det därför lättare att få hjälp och bättre hjälp, än i mindre communities.

#### Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?
#### Hur gick dina förberedelser inför kommentarssystemet?
Så som jag har förstått, så är ett ramverk, likt Laravel och Symfony, uppbyggt av moduler, som inte specifikt nödvändigtvis behövs vara kopplat till ramverket, utan kan fungera som en extern del.
Därför kan man plocka isär ramverket och istället fokusera på de externa modulerna och därmed bygga ihop sitt egna system och inte behöva vara bundet till ett specifikt ramverk.
Dock tror jag att specifika ramverk fortfarande kommer vara populära, då vi människor oftast vill ha en tydlig struktur att utgå från och göra det mer "lättare" för oss.

#### Hur gick dina förberedelser inför kommentarssystemet?
Jag började fundera på en struktur att utgå från och hitta inspiration från redan existerande kommentarssystemet, likt StackOverflow och Disqus.
Sedan började jag även fundera på hur jag kan göra detta system extern och till en egen modul, som man sedan kan applicera i andra ramverk och liknande.
Fortsättning följer..

###Kmom02

#### Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?
Jag har inga tidigare erfarenheter alls av MVC, förutom att jag kanske, undermedvetet, jobbat med det i tidigare/pågående ANAX ramverk?
Eftersom jag inte hade några direkta erfarenheter av MVC, plus att jag inte gillar att läsa text, så gav jag mig ut på youtube och sökte efter information.
Jag hittade [denna video-serie](https://www.youtube.com/watch?v=8DjzIuu49Rk&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh)
Där man går igenom OOPhp och MVC begreppet, på ett pedagogiskt sätt.
En serie som jag kan rekommendera och kanske ta med i kommande kurser :)
Fördelen med kontroller/modell-strukturen är att man får en väldigt tydligt struktur på sin kod och modullen som man lägger till i sin app/ramverk.
Nu i början kan man tycka att kontrollen är onödig, då man egentligen kan anropa metoderna i modellen med en gång, utan att gå genom kontrollen.
Men, som jag förstår, så kommer kontrollen bli mer relevant när man börjar utveckla modulen mer och börjar samla på sig mer kod.

#### Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?
Nej jag gav mig aldrig på det.
Kanske i ett senare tillfälle.

#### Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?
Yes arbetet med REM servern gick bra och jag lyckades med att integrera den i min me-sida.
Man förstår nu i efterhand att det var en bra övning/genomgång, för att förstå kontroller/modell-strukturen och tänket, så att man har ett bättre underlag när man skulle ge sig på att skapa en prototyp av kommentar-modulen.

#### Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?
Jag utgick från REM serverns kontroller/modell-struktur och rensade ut all kod som fanns i klasserna och började istället fylla på med metoder som passar en kommentar-modul.
Jag injecta app i både kontroller och model, så att classerna får del av hela app/ramverket.
I modellen så utgick jag från ett CRUD tänk, vilket vi har arbetat utifrån tidigare och började fylla på metoderna med relevant kod.
Sedan så anropa jag modellen från kontrollern och skrev även med text till view, så att användaren får noteringar av vad den gör.

### KMOM03

#### Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?
Det känns bra.
Så som jag förstår det så samlas och initieras inte alla tjänster längre i app classen, utan istället samlar man och definierar alla tjänsterna i en array med deras namn och en callback som, via DI classen, endast initieras när tjänsten behövs.

#### Hur känns det att göra dig av med beroendet till $app, blir $di bättre?
Jag förstår logiken, men vet inte om det blir så mycket "effektivare", av det jag har sett än så länge.
Den enda fördelen jag kan se hittills är att man inte behöver initiera alla klasser/tjänster samtidigt, utan man endast använder dem när man behöver dem. Men om det är så mycket effektivare, vet jag inte.

#### Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?
Vi förvarnades i introduktionen av kursen att vi kommer gå igenom mycket refaktoring, omvandling av kod och struktur. Så det känns bra och man får lära sig mycket av olika typer av kod struktur och upplägg.
Än så länge tycker jag bara det känns som kodstrukturen blir annorlunda. Men förbättringarna kanske man kommer se, förstå och uppfatta lite senare under eller efter kursen. Jag tror dock det är lärorikt att gå igenom detta.

#### Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?
Yes, jag har uppdaterat mitt kommentarssystem med DI istället för App.

#### Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?
Nej jag fortsatte inte arbetet i detta kmom utan avvaktar till kommande kmom, då jag är alldeles för nyfiken av vad nästa kmom erbjuder och kanske något som jag kan använda mig utav i mitt kommentarssystem.

#### Allmänna kommentarer kring din me-sida och dess kodstruktur?
Denna kurs lägger jag väldigt lite fokus på design, användarvänlighet och innehållet på me-sidan, utan fokuserar helt och hållet på backend delen, vilket jag känner är det viktigaste i denna kurs.
