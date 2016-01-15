<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<script type="text/javascript">
$.typeahead({
    input: "#hockey_v1-query",
    minLength: 1,
    maxItem: 8,
    maxItemPerGroup: 6,
    order: "asc",
    hint: true,
    cache: true,
    group: ["division", "{{group}} division"],
    display: ["name", "city", "division"],
    dropdownFilter: [
        {
            key: 'conference',
            value: 'Western',
            display: '<strong>Western</strong> Conference'
        },
        {
            key: 'conference',
            value: 'Eastern',
            display: '<strong>Eastern</strong> Conference'
        },
        {
            value: '*',
            display: 'All Teams'
        }
    ],
    template: '<span>' +
        '<span class="name">{{name}}</span>' +
        '<span class="division">({{city}}, {{division}} division, {{conference}} conference)</span>' +
        '<span class="team-logo">' +
            '<img src="/assets/jquerytypeahead/img/hockey_v1/{{img}}.gif">' +
        '</span>' +
    '</span>',
    correlativeTemplate: true,
    source: {
        teams: {
            url: "/jquerytypeahead/hockey_v1.json"
        }
    }
});

</script>


<?php 
header('Content-Type" => application/json');
 
echo json_encode(array(
    array(
        "name"          => "Ducks",
        "img"           => "ducks",
        "city"          => "Anaheim",
        "id"            => "ANA",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Thrashers",
        "img"           => "thrashers",
        "city"          => "Atlanta",
        "id"            => "ATL",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Bruins",
        "img"           => "bruins",
        "city"          => "Boston",
        "id"            => "BOS",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Sabres",
        "img"           => "sabres",
        "city"          => "Buffalo",
        "id"            => "BUF",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Flames",
        "img"           => "flames",
        "city"          => "Calgary",
        "id"            => "CGY",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Hurricanes",
        "img"           => "hurricanes",
        "city"          => "Carolina",
        "id"            => "CAR",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Blackhawks",
        "img"           => "blackhawks",
        "city"          => "Chicago",
        "id"            => "CHI",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Avalanche",
        "img"           => "avalanche",
        "city"          => "Colorado",
        "id"            => "COL",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Bluejackets",
        "img"           => "bluejackets",
        "city"          => "Columbus",
        "id"            => "CBJ",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Stars",
        "img"           => "stars",
        "city"          => "Dallas",
        "id"            => "DAL",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Red Wings",
        "img"           => "redwings",
        "city"          => "Detroit",
        "id"            => "DET",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Oilers",
        "img"           => "oilers",
        "city"          => "Edmonton",
        "id"            => "EDM",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Panthers",
        "img"           => "panthers",
        "city"          => "Florida",
        "id"            => "FLA",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Kings",
        "img"           => "kings",
        "city"          => "Los Angeles",
        "id"            => "LAK",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Wild",
        "img"           => "wild",
        "city"          => "Minnesota",
        "id"            => "MIN",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Canadiens",
        "img"           => "canadiens",
        "city"          => "Montreal",
        "id"            => "MTL",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Predators",
        "img"           => "predators",
        "city"          => "Nashville",
        "id"            => "NSH",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Devils",
        "img"           => "devils",
        "city"          => "New Jersey",
        "id"            => "NJD",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Islanders",
        "img"           => "islanders",
        "city"          => "New York",
        "id"            => "NYI",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Rangers",
        "img"           => "rangers",
        "city"          => "New York",
        "id"            => "NYR",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Senators",
        "img"           => "senators",
        "city"          => "Ottawa",
        "id"            => "OTT",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Flyers",
        "img"           => "flyers",
        "city"          => "Philadelphia",
        "id"            => "PHI",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Coyotes",
        "img"           => "coyotes",
        "city"          => "Phoenix",
        "id"            => "PHX",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Penguins",
        "img"           => "penguins",
        "city"          => "Pittsburgh",
        "id"            => "PIT",
        "conference"    => "Eastern",
        "division"      => "Atlantic"
    ),
    array(
        "name"          => "Sharks",
        "img"           => "sharks",
        "city"          => "San Jose",
        "id"            => "SJS",
        "conference"    => "Western",
        "division"      => "Pacific"
    ),
    array(
        "name"          => "Blues",
        "img"           => "blues",
        "city"          => "St. Louis",
        "id"            => "STL",
        "conference"    => "Western",
        "division"      => "Central"
    ),
    array(
        "name"          => "Lightning",
        "img"           => "lightning",
        "city"          => "Tampa Bay",
        "id"            => "TBL",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Maple Leafs",
        "img"           => "mapleleafs",
        "city"          => "Toronto",
        "id"            => "TOR",
        "conference"    => "Eastern",
        "division"      => "Northeast"
    ),
    array(
        "name"          => "Canucks",
        "img"           => "canucks",
        "city"          => "Vancouver",
        "id"            => "VAN",
        "conference"    => "Western",
        "division"      => "Northwest"
    ),
    array(
        "name"          => "Capitals",
        "img"           => "capitals",
        "city"          => "Washington",
        "id"            => "WSH",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    ),
    array(
        "name"          => "Jets",
        "img"           => "jets",
        "city"          => "Winnipeg",
        "id"            => "WPG",
        "conference"    => "Eastern",
        "division"      => "Southeast"
    )
));

?>

<style>

.project-jquerytypeahead.page-demo .typeahead-result .name {
    margin: 0 10px;
}
 
.project-jquerytypeahead.page-demo .typeahead-result .division {
    font-size: 12px;
    color: #777;
    font-variant: small-caps;
}
 
.project-jquerytypeahead.page-demo .typeahead-result .team-logo {
    position: absolute;
    top: 0;
    right: 0;
    background-color: #fff;
    padding: 2px 4px 0 10px;
}
 
.project-jquerytypeahead.page-demo .typeahead-result .team-logo img {
    height: 26px;
}
</style>

<body>


<form id="form-hockey_v1" name="form-hockey_v1">
    <div class="typeahead-container">
        <div class="typeahead-field">
 
            <span class="typeahead-query">
                <input id="hockey_v1-query" name="hockey_v1[query]" placeholder="Search" autocomplete="off" type="search">
            </span>
            <span class="typeahead-button">
                <button type="submit">
                    <i class="typeahead-search-icon"></i>
                </button>
            </span>
 
        </div>
    </div>
</form>



</body>
</html>
