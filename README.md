# RiotApi
Riot Api library for PHP (RALPHP)

##General information about Riot api
* Project using Riot Api should comply to Riot policies
(see https://developer.riotgames.com/general-policies)
* Riot api required an api key to authenticate issuer. This api key is
linked to a personal account and should **NOT** be shared.  
* Api could be submitted to a request rate limitation,
see (https://developer.riotgames.com/docs/api-keys)

##Limit query amount
* Use a cache method, you should not query the same thing
twice in a second, as results should not be *that* different
* Use global methods. When dealing with 10 champions,
do not query for each of them. Use a single query to
get *all* champions, then retrieve yours from this list

##RiotApi object
###Why several api?
There are currently 3 api object
* Global: static data from the game, not expected to change quickly.
Could not count in request rate limit
* Regional: dynamic data on server, such as summoner's games
* Status: server status global information
(see http://status.leagueoflegends.com/)

Each api could be configured differently
(typically, cache lifetime could be longer for global api)

###Request method
Request uses the curl library (or file_get_contents if curl not found).

###Server
Api object is constructed with a default server provided, but each query
will be able to determine targeted server.

###Cache
Cache object should be provided on api constructor.  
By default, RiotApi object uses a static variable but no advanced cache is set.  
If provided, RiotApi object will use getter ('get' or 'fetch')
and setter ('set' or 'save') methods.  
In constructor, you can provide a cache key prefix for this library.

Cache lifetime could be defined in the api constructor and overridden
later globally or temporarily (for a single request)

###Output format
API can return response in different format
* json: raw json string returned by Riot api
* array: raw json decoded as associative array
* stdClass: raw json decoded as standard class
* dto: raw json decoded as DTO class
(implemented in this library with pre-defined methods)
  
Format is specified in constructor and could be overridden later globally
or temporarily (for a single request)

##Services
Each api includes one or more services depending on your needs.
Globally, a service groups similar api methods.
Service methods will query the Riot api.
Service can be retrieve from Api object.
```
//Retrieve champions information on server
$regionalApi->getServiceChampion()->getChampions();
```

##DTO
Dto object are a representation of the JSON response from Riot api.
Object provides setter and getter (usefull for autocompletion)
and could nest other Dto object

##CDN
This library include a CDN support (implement with dDragon default CDN).
These objects could be use to get images url
(such as profile icons, champs, items, ...).
