<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>mO'vie Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.34.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.34.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">

            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>

    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>

                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>

                                                </ul>

                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                        <a href="#endpoints-GETapi-user">GET api/user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies">
                        <a href="#endpoints-GETapi-movies">Permet de récupérer la liste complète des films.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies">
                        <a href="#endpoints-POSTapi-movies">Permet d&#039;enregistrer un nouveau film.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--id-">
                        <a href="#endpoints-GETapi-movies--id-">Permet de récupérer un film.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-movies--id-">
                        <a href="#endpoints-PUTapi-movies--id-">Permet de mettre à jour un film.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-movies--id-">
                        <a href="#endpoints-DELETEapi-movies--id-">Permet de supprimer un film.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-actors">
                        <a href="#endpoints-GETapi-actors">Permet de récupérer la liste complète des acteurs.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-actors">
                        <a href="#endpoints-POSTapi-actors">Permet d&#039;enregistrer un nouvel acteur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-actors--id-">
                        <a href="#endpoints-GETapi-actors--id-">Permet de récupérer un acteur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-actors--id-">
                        <a href="#endpoints-PUTapi-actors--id-">Permet de mettre à jour un acteur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-actors--id-">
                        <a href="#endpoints-DELETEapi-actors--id-">Permet de supprimer un acteur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-directors">
                        <a href="#endpoints-GETapi-directors">Permet de récupérer la liste complète des réalisateurs.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-directors">
                        <a href="#endpoints-POSTapi-directors">Permet d&#039;enregistrer un nouveau réalisateur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-directors--id-">
                        <a href="#endpoints-GETapi-directors--id-">Permet de récupérer un réalisateur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-directors--id-">
                        <a href="#endpoints-PUTapi-directors--id-">Permet de mettre à jour un réalisateur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-directors--id-">
                        <a href="#endpoints-DELETEapi-directors--id-">Permet de supprimer un réalisateur.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--movie_id--actors">
                        <a href="#endpoints-GETapi-movies--movie_id--actors">Permet de récupérer les acteurs liés à un film.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies--movie_id--actors">
                        <a href="#endpoints-POSTapi-movies--movie_id--actors">Permet d&#039;associer un acteur à un film</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movies--movie_id--director">
                        <a href="#endpoints-GETapi-movies--movie_id--director">Permet de récupérer le réalisateur lié à un film.</a>
                    </li>
                                                    </ul>
                            </ul>


            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 22 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Une API REST pour accéder à des milliers de films !</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>



            <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-movies">Permet de récupérer la liste complète des films.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/movies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/movies',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Similique cumque voluptas voluptas blanditiis illum.&quot;,
        &quot;description&quot;: &quot;Velit rerum sit qui accusamus sunt. Nemo et et odit nam voluptates laboriosam. Et deleniti sed voluptatem quaerat magni perferendis. Provident consequuntur quas odit voluptatum ea quaerat delectus. Sit rerum repellat et ut nihil dolorem ipsum.&quot;,
        &quot;duration&quot;: 8034,
        &quot;release&quot;: &quot;1982-07-31&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;director_id&quot;: 20
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Adipisci nostrum commodi.&quot;,
        &quot;description&quot;: &quot;Vel doloribus sequi qui vel minima. Quia qui delectus suscipit ea iste eius. Et et ut sapiente quis non.&quot;,
        &quot;duration&quot;: 9359,
        &quot;release&quot;: &quot;1991-11-21&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;director_id&quot;: 11
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Quo eum repellendus hic.&quot;,
        &quot;description&quot;: &quot;Voluptatem reiciendis dolorem expedita error est. Nostrum aliquam sit qui minus ut fuga ut. Quaerat facere voluptate quo distinctio harum similique. Eligendi quidem quia rerum vel autem est.&quot;,
        &quot;duration&quot;: 12849,
        &quot;release&quot;: &quot;1987-05-01&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;director_id&quot;: 15
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Aut ut at.&quot;,
        &quot;description&quot;: &quot;Aperiam et nesciunt ut voluptatum vitae quo et. Iste qui et corporis voluptas quidem autem. Cumque cum voluptatem id laudantium reiciendis voluptatibus.&quot;,
        &quot;duration&quot;: 3678,
        &quot;release&quot;: &quot;1985-04-30&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;director_id&quot;: 16
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Praesentium architecto provident.&quot;,
        &quot;description&quot;: &quot;Officia omnis consectetur pariatur ut doloribus. Fugiat aliquid placeat et voluptates atque placeat sequi. Et beatae adipisci minima consequatur. Nisi amet expedita adipisci dolores architecto natus.&quot;,
        &quot;duration&quot;: 6656,
        &quot;release&quot;: &quot;2002-09-29&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;director_id&quot;: 29
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies"></code></pre>
</span>
<span id="execution-error-GETapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies"></code></pre>
</span>
<form id="form-GETapi-movies" data-method="GET"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies"
                    onclick="tryItOut('GETapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies"
                    onclick="cancelTryOut('GETapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-movies">Permet d&#039;enregistrer un nouveau film.</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/movies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"gktcdiulxuwbfjjryywhikpvhekxhbrghtuthlkxjqvnmccxpncwupylroavfiizzapfqtpmdhnlprf\",
    \"description\": \"deleniti\",
    \"duration\": 14228,
    \"release\": \"2022-07-22T14:20:07\",
    \"director_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "gktcdiulxuwbfjjryywhikpvhekxhbrghtuthlkxjqvnmccxpncwupylroavfiizzapfqtpmdhnlprf",
    "description": "deleniti",
    "duration": 14228,
    "release": "2022-07-22T14:20:07",
    "director_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/movies',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'gktcdiulxuwbfjjryywhikpvhekxhbrghtuthlkxjqvnmccxpncwupylroavfiizzapfqtpmdhnlprf',
            'description' =&gt; 'deleniti',
            'duration' =&gt; 14228,
            'release' =&gt; '2022-07-22T14:20:07',
            'director_id' =&gt; 16,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies">
</span>
<span id="execution-results-POSTapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies"></code></pre>
</span>
<span id="execution-error-POSTapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies"></code></pre>
</span>
<form id="form-POSTapi-movies" data-method="POST"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies"
                    onclick="tryItOut('POSTapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies"
                    onclick="cancelTryOut('POSTapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-movies"
               value="gktcdiulxuwbfjjryywhikpvhekxhbrghtuthlkxjqvnmccxpncwupylroavfiizzapfqtpmdhnlprf"
               data-component="body" hidden>
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-movies"
               value="deleniti"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>duration</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="duration"
               data-endpoint="POSTapi-movies"
               value="14228"
               data-component="body" hidden>
    <br>
<p>La valeur de value doit être comprise entre 0 et 18000.</p>
        </p>
                <p>
            <b><code>release</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="release"
               data-endpoint="POSTapi-movies"
               value="2022-07-22T14:20:07"
               data-component="body" hidden>
    <br>
<p>5 heures max. Le champ value n'est pas une date valide.</p>
        </p>
                <p>
            <b><code>director_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="director_id"
               data-endpoint="POSTapi-movies"
               value="16"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-movies--id-">Permet de récupérer un film.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/movies/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Similique cumque voluptas voluptas blanditiis illum.&quot;,
    &quot;description&quot;: &quot;Velit rerum sit qui accusamus sunt. Nemo et et odit nam voluptates laboriosam. Et deleniti sed voluptatem quaerat magni perferendis. Provident consequuntur quas odit voluptatum ea quaerat delectus. Sit rerum repellat et ut nihil dolorem ipsum.&quot;,
    &quot;duration&quot;: 8034,
    &quot;release&quot;: &quot;1982-07-31&quot;,
    &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
    &quot;director_id&quot;: 20
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--id-"></code></pre>
</span>
<span id="execution-error-GETapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--id-"></code></pre>
</span>
<form id="form-GETapi-movies--id-" data-method="GET"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--id-"
                    onclick="tryItOut('GETapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--id-"
                    onclick="cancelTryOut('GETapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-movies--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-movies--id-">Permet de mettre à jour un film.</h2>

<p>
</p>



<span id="example-requests-PUTapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ovukniuerzlqkbenxmickbccdqqhqjlphjnmcbnahflpauheijwpdcwhvwmgewefdxmtpphwoyzljywbellmebpwxxykxwreorviogywavinuylvgalqljoujzmkwarcnpfguowrzhdyrknojbsahqjhvsjbfqvyclkrjtfqp\",
    \"description\": \"repellat\",
    \"duration\": 10101,
    \"release\": \"2022-07-22T14:20:07\",
    \"director_id\": 5
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ovukniuerzlqkbenxmickbccdqqhqjlphjnmcbnahflpauheijwpdcwhvwmgewefdxmtpphwoyzljywbellmebpwxxykxwreorviogywavinuylvgalqljoujzmkwarcnpfguowrzhdyrknojbsahqjhvsjbfqvyclkrjtfqp",
    "description": "repellat",
    "duration": 10101,
    "release": "2022-07-22T14:20:07",
    "director_id": 5
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/movies/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'ovukniuerzlqkbenxmickbccdqqhqjlphjnmcbnahflpauheijwpdcwhvwmgewefdxmtpphwoyzljywbellmebpwxxykxwreorviogywavinuylvgalqljoujzmkwarcnpfguowrzhdyrknojbsahqjhvsjbfqvyclkrjtfqp',
            'description' =&gt; 'repellat',
            'duration' =&gt; 10101,
            'release' =&gt; '2022-07-22T14:20:07',
            'director_id' =&gt; 5,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-movies--id-">
</span>
<span id="execution-results-PUTapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-movies--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-movies--id-"></code></pre>
</span>
<form id="form-PUTapi-movies--id-" data-method="PUT"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-movies--id-"
                    onclick="tryItOut('PUTapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-movies--id-"
                    onclick="cancelTryOut('PUTapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/movies/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-movies--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-movies--id-"
               value="ovukniuerzlqkbenxmickbccdqqhqjlphjnmcbnahflpauheijwpdcwhvwmgewefdxmtpphwoyzljywbellmebpwxxykxwreorviogywavinuylvgalqljoujzmkwarcnpfguowrzhdyrknojbsahqjhvsjbfqvyclkrjtfqp"
               data-component="body" hidden>
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-movies--id-"
               value="repellat"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>duration</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="duration"
               data-endpoint="PUTapi-movies--id-"
               value="10101"
               data-component="body" hidden>
    <br>
<p>La valeur de value doit être comprise entre 0 et 18000.</p>
        </p>
                <p>
            <b><code>release</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="release"
               data-endpoint="PUTapi-movies--id-"
               value="2022-07-22T14:20:07"
               data-component="body" hidden>
    <br>
<p>5 heures max. Le champ value n'est pas une date valide.</p>
        </p>
                <p>
            <b><code>director_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="director_id"
               data-endpoint="PUTapi-movies--id-"
               value="5"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-movies--id-">Permet de supprimer un film.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/movies/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-movies--id-">
</span>
<span id="execution-results-DELETEapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-movies--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-movies--id-"></code></pre>
</span>
<form id="form-DELETEapi-movies--id-" data-method="DELETE"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-movies--id-"
                    onclick="tryItOut('DELETEapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-movies--id-"
                    onclick="cancelTryOut('DELETEapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-movies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-movies--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-actors">Permet de récupérer la liste complète des acteurs.</h2>

<p>
</p>



<span id="example-requests-GETapi-actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/actors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/actors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-actors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Philippe Le Noel&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;&Eacute;mile-&Eacute;ric Chevalier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Chantal Faivre&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Sabine Letellier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;In&egrave;s Hardy&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Lucy-Chantal Pottier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Jules Colas&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Catherine Marchal&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Aim&eacute; Lacombe&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Isabelle du Laroche&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Luc de la Mahe&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Oc&eacute;ane Jacob&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Louise Ramos&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Marie Remy&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Martin Roger&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Patrick Boulanger&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Sabine Leroux&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;St&eacute;phanie Texier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Agn&egrave;s Boucher&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Roland de la Pires&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Christiane Jacques-Bouvier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Gilbert Blanc&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Fran&ccedil;oise Weber&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Raymond Barre&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Bernard Picard&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Audrey Leblanc&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Yves Royer&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;William Lemaitre&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Jacqueline-Nicole Peron&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Alexandre du Le Goff&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;No&eacute;mi Diaz&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;C&eacute;line Laurent&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Richard Pichon&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;&Eacute;ric du Thomas&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;name&quot;: &quot;Roland Garnier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;name&quot;: &quot;Lucy de Foucher&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;name&quot;: &quot;Guy de Dupuy&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;name&quot;: &quot;Xavier Parent&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Aur&eacute;lie Pires-Hubert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;name&quot;: &quot;Marine Benoit&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;name&quot;: &quot;Dominique Renault&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;name&quot;: &quot;Thierry Traore&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;name&quot;: &quot;&Eacute;lodie Martin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Victoire Sauvage-Lejeune&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Luc Pichon&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Aur&eacute;lie Lebreton&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Joseph Lefevre&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;Pauline de Guilbert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Nicolas Hoarau&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Marthe Mary-Garcia&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Maggie Boutin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;name&quot;: &quot;Diane Lelievre-Mallet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;name&quot;: &quot;Dominique Begue-Vincent&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Pauline Guerin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;ric-David Boulay&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;name&quot;: &quot;Gr&eacute;goire Marchand&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;name&quot;: &quot;Antoine Peltier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;name&quot;: &quot;Th&eacute;ophile Paul&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;name&quot;: &quot;Georges Ledoux&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;name&quot;: &quot;Susanne Buisson&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;name&quot;: &quot;Val&eacute;rie Guyon-Dubois&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;name&quot;: &quot;In&egrave;s Durand&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;name&quot;: &quot;No&eacute;mi Loiseau&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;name&quot;: &quot;G&eacute;rard Humbert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;name&quot;: &quot;Am&eacute;lie-Jacqueline Chauveau&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;name&quot;: &quot;Thibaut-Jean Teixeira&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;name&quot;: &quot;Isaac Vallet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;name&quot;: &quot;David-L&eacute;on Lejeune&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;name&quot;: &quot;Cl&eacute;mence Morin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;name&quot;: &quot;Henri Lemaire&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;name&quot;: &quot;&Eacute;mile du Aubert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;name&quot;: &quot;Claude Dupont&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;name&quot;: &quot;&Eacute;douard-S&eacute;bastien Delahaye&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;name&quot;: &quot;G&eacute;rard Le Gimenez&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;name&quot;: &quot;Raymond-Beno&icirc;t Bonnet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;name&quot;: &quot;Nathalie Devaux-Moreau&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;name&quot;: &quot;C&eacute;line Guillet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;name&quot;: &quot;In&egrave;s Potier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;name&quot;: &quot;&Eacute;douard Lelievre&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;ric-Alain Collet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;name&quot;: &quot;Claude Rousset&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;name&quot;: &quot;Lorraine-Henriette Riviere&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;name&quot;: &quot;Marthe de la Turpin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;name&quot;: &quot;Marguerite Lejeune&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;name&quot;: &quot;Henriette-Chantal Devaux&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;name&quot;: &quot;Adrienne-Victoire Garnier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;name&quot;: &quot;Adrien Clerc-Gosselin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;name&quot;: &quot;Pierre Schmitt-Hebert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;name&quot;: &quot;Claude Albert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;name&quot;: &quot;Suzanne Munoz&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;name&quot;: &quot;Olivier de la Gay&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;name&quot;: &quot;Luce de la Jacques&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;name&quot;: &quot;Victor Lemaire&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;name&quot;: &quot;&Eacute;lisabeth Allain&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;name&quot;: &quot;Bertrand Bodin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;name&quot;: &quot;Alfred-&Eacute;tienne Delaunay&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;name&quot;: &quot;Doroth&eacute;e Boucher&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;name&quot;: &quot;Marine Mathieu&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;name&quot;: &quot;Eug&egrave;ne Leleu&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 101,
        &quot;name&quot;: &quot;Emma Watson&quot;,
        &quot;created_at&quot;: &quot;2022-07-22T11:15:59.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-22T11:24:29.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-actors"></code></pre>
</span>
<span id="execution-error-GETapi-actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-actors"></code></pre>
</span>
<form id="form-GETapi-actors" data-method="GET"
      data-path="api/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-actors"
                    onclick="tryItOut('GETapi-actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-actors"
                    onclick="cancelTryOut('GETapi-actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/actors</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-actors">Permet d&#039;enregistrer un nouvel acteur.</h2>

<p>
</p>



<span id="example-requests-POSTapi-actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"cqyubhmfjehzyhpevvzzkceyvialxiugnifnoybykkyxqnsadurspduxwoistuprueblsypwddafbizhdarmyanaomqjswpgtracbjmbpiijzgeqdqwpharqwrkyogvbzsw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/actors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "cqyubhmfjehzyhpevvzzkceyvialxiugnifnoybykkyxqnsadurspduxwoistuprueblsypwddafbizhdarmyanaomqjswpgtracbjmbpiijzgeqdqwpharqwrkyogvbzsw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/actors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'cqyubhmfjehzyhpevvzzkceyvialxiugnifnoybykkyxqnsadurspduxwoistuprueblsypwddafbizhdarmyanaomqjswpgtracbjmbpiijzgeqdqwpharqwrkyogvbzsw',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-actors">
</span>
<span id="execution-results-POSTapi-actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-actors"></code></pre>
</span>
<span id="execution-error-POSTapi-actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-actors"></code></pre>
</span>
<form id="form-POSTapi-actors" data-method="POST"
      data-path="api/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-actors"
                    onclick="tryItOut('POSTapi-actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-actors"
                    onclick="cancelTryOut('POSTapi-actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/actors</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-actors"
               value="cqyubhmfjehzyhpevvzzkceyvialxiugnifnoybykkyxqnsadurspduxwoistuprueblsypwddafbizhdarmyanaomqjswpgtracbjmbpiijzgeqdqwpharqwrkyogvbzsw"
               data-component="body" hidden>
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères.</p>
        </p>
        </form>

            <h2 id="endpoints-GETapi-actors--id-">Permet de récupérer un acteur.</h2>

<p>
</p>



<span id="example-requests-GETapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/actors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/actors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/actors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-actors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Philippe Le Noel&quot;,
    &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-actors--id-"></code></pre>
</span>
<span id="execution-error-GETapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-actors--id-"></code></pre>
</span>
<form id="form-GETapi-actors--id-" data-method="GET"
      data-path="api/actors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-actors--id-"
                    onclick="tryItOut('GETapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-actors--id-"
                    onclick="cancelTryOut('GETapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-actors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the actor.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-actors--id-">Permet de mettre à jour un acteur.</h2>

<p>
</p>



<span id="example-requests-PUTapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/actors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"zanfcvjllnafkjrdorqgxqxjuakphxmmvhiuoicphlzmzdskobvrystdauzmyvkxhfsywlvuvoahjawdpibtdtwmonkidyghdthcvjtgfdigqgypurqdqvoqvdwheehs\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/actors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "zanfcvjllnafkjrdorqgxqxjuakphxmmvhiuoicphlzmzdskobvrystdauzmyvkxhfsywlvuvoahjawdpibtdtwmonkidyghdthcvjtgfdigqgypurqdqvoqvdwheehs"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/actors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'zanfcvjllnafkjrdorqgxqxjuakphxmmvhiuoicphlzmzdskobvrystdauzmyvkxhfsywlvuvoahjawdpibtdtwmonkidyghdthcvjtgfdigqgypurqdqvoqvdwheehs',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-actors--id-">
</span>
<span id="execution-results-PUTapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-actors--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-actors--id-"></code></pre>
</span>
<form id="form-PUTapi-actors--id-" data-method="PUT"
      data-path="api/actors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-actors--id-"
                    onclick="tryItOut('PUTapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-actors--id-"
                    onclick="cancelTryOut('PUTapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/actors/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-actors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the actor.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-actors--id-"
               value="zanfcvjllnafkjrdorqgxqxjuakphxmmvhiuoicphlzmzdskobvrystdauzmyvkxhfsywlvuvoahjawdpibtdtwmonkidyghdthcvjtgfdigqgypurqdqvoqvdwheehs"
               data-component="body" hidden>
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-actors--id-">Permet de supprimer un acteur.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-actors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/actors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/actors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/actors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-actors--id-">
</span>
<span id="execution-results-DELETEapi-actors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-actors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-actors--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-actors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-actors--id-"></code></pre>
</span>
<form id="form-DELETEapi-actors--id-" data-method="DELETE"
      data-path="api/actors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-actors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-actors--id-"
                    onclick="tryItOut('DELETEapi-actors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-actors--id-"
                    onclick="cancelTryOut('DELETEapi-actors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-actors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/actors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-actors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the actor.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-directors">Permet de récupérer la liste complète des réalisateurs.</h2>

<p>
</p>



<span id="example-requests-GETapi-directors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/directors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/directors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/directors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-directors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Juliette Morel&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Alphonse Chauvet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Alphonse-Alain Gaillard&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;&Eacute;milie Chevallier-Blin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Doroth&eacute;e Dupuis&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Gilles-Alfred Caron&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Suzanne Verdier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Luce Pierre&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Margaret du Benard&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Alain Renault&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;&Eacute;douard-Pierre Leveque&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Richard Da Costa&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Yves-Th&eacute;ophile Blot&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Laurent-&Eacute;douard Verdier&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Yves de Moreno&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Margot du Brunet&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;C&eacute;cile de la Coste&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;&Eacute;dith Ferreira&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;&Eacute;ric-Christophe Francois&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Lucas Lambert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Honor&eacute; de Lopes&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Aur&eacute;lie Alexandre-Mary&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Oc&eacute;ane Richard&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Sylvie Dias&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Lorraine Voisin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Astrid de la Benoit&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Augustin Joubert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;Claire Fontaine&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Antoinette Didier-Dupont&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Chris Colombus&quot;,
        &quot;created_at&quot;: &quot;2022-07-22T11:35:17.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-22T11:35:33.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-directors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-directors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-directors"></code></pre>
</span>
<span id="execution-error-GETapi-directors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-directors"></code></pre>
</span>
<form id="form-GETapi-directors" data-method="GET"
      data-path="api/directors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-directors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-directors"
                    onclick="tryItOut('GETapi-directors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-directors"
                    onclick="cancelTryOut('GETapi-directors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-directors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/directors</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-directors">Permet d&#039;enregistrer un nouveau réalisateur.</h2>

<p>
</p>



<span id="example-requests-POSTapi-directors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/directors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"zssouietbpaoqslewypimdkfpqorslldrvicrkopomiecrpybqhcwzourytgufjtyagdc\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/directors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "zssouietbpaoqslewypimdkfpqorslldrvicrkopomiecrpybqhcwzourytgufjtyagdc"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/directors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'zssouietbpaoqslewypimdkfpqorslldrvicrkopomiecrpybqhcwzourytgufjtyagdc',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-directors">
</span>
<span id="execution-results-POSTapi-directors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-directors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-directors"></code></pre>
</span>
<span id="execution-error-POSTapi-directors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-directors"></code></pre>
</span>
<form id="form-POSTapi-directors" data-method="POST"
      data-path="api/directors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-directors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-directors"
                    onclick="tryItOut('POSTapi-directors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-directors"
                    onclick="cancelTryOut('POSTapi-directors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-directors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/directors</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-directors"
               value="zssouietbpaoqslewypimdkfpqorslldrvicrkopomiecrpybqhcwzourytgufjtyagdc"
               data-component="body" hidden>
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères.</p>
        </p>
        </form>

            <h2 id="endpoints-GETapi-directors--id-">Permet de récupérer un réalisateur.</h2>

<p>
</p>



<span id="example-requests-GETapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/directors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/directors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/directors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-directors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Juliette Morel&quot;,
    &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-directors--id-"></code></pre>
</span>
<span id="execution-error-GETapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-directors--id-"></code></pre>
</span>
<form id="form-GETapi-directors--id-" data-method="GET"
      data-path="api/directors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-directors--id-"
                    onclick="tryItOut('GETapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-directors--id-"
                    onclick="cancelTryOut('GETapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-directors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the director.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-directors--id-">Permet de mettre à jour un réalisateur.</h2>

<p>
</p>



<span id="example-requests-PUTapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/directors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"dpmydqjlbpjmjemwytrbfhlnqngirsscsgdcuyrupqovicrbycdaqpatavmdciozwlvdafbusxrqxtpyiqgiovjasswazafgvfxgmduppkrmjyzohnbanazdqvqigviljktjz\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/directors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dpmydqjlbpjmjemwytrbfhlnqngirsscsgdcuyrupqovicrbycdaqpatavmdciozwlvdafbusxrqxtpyiqgiovjasswazafgvfxgmduppkrmjyzohnbanazdqvqigviljktjz"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/directors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'dpmydqjlbpjmjemwytrbfhlnqngirsscsgdcuyrupqovicrbycdaqpatavmdciozwlvdafbusxrqxtpyiqgiovjasswazafgvfxgmduppkrmjyzohnbanazdqvqigviljktjz',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-directors--id-">
</span>
<span id="execution-results-PUTapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-directors--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-directors--id-"></code></pre>
</span>
<form id="form-PUTapi-directors--id-" data-method="PUT"
      data-path="api/directors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-directors--id-"
                    onclick="tryItOut('PUTapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-directors--id-"
                    onclick="cancelTryOut('PUTapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/directors/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-directors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the director.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-directors--id-"
               value="dpmydqjlbpjmjemwytrbfhlnqngirsscsgdcuyrupqovicrbycdaqpatavmdciozwlvdafbusxrqxtpyiqgiovjasswazafgvfxgmduppkrmjyzohnbanazdqvqigviljktjz"
               data-component="body" hidden>
    <br>
<p>Le texte de value ne peut pas contenir plus de 255 caractères.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-directors--id-">Permet de supprimer un réalisateur.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-directors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/directors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/directors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/directors/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-directors--id-">
</span>
<span id="execution-results-DELETEapi-directors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-directors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-directors--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-directors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-directors--id-"></code></pre>
</span>
<form id="form-DELETEapi-directors--id-" data-method="DELETE"
      data-path="api/directors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-directors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-directors--id-"
                    onclick="tryItOut('DELETEapi-directors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-directors--id-"
                    onclick="cancelTryOut('DELETEapi-directors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-directors--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/directors/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-directors--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the director.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-movies--movie_id--actors">Permet de récupérer les acteurs liés à un film.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--movie_id--actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/movies/1/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies/1/actors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/movies/1/actors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--movie_id--actors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Catherine Marchal&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 8
        }
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Isabelle du Laroche&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 10
        }
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Oc&eacute;ane Jacob&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 12
        }
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;No&eacute;mi Diaz&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 31
        }
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Aur&eacute;lie Pires-Hubert&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 39
        }
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Victoire Sauvage-Lejeune&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 44
        }
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Pauline Guerin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 54
        }
    },
    {
        &quot;id&quot;: 55,
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;ric-David Boulay&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 55
        }
    },
    {
        &quot;id&quot;: 76,
        &quot;name&quot;: &quot;Nathalie Devaux-Moreau&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 76
        }
    },
    {
        &quot;id&quot;: 87,
        &quot;name&quot;: &quot;Adrien Clerc-Gosselin&quot;,
        &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
        &quot;pivot&quot;: {
            &quot;movie_id&quot;: 1,
            &quot;actor_id&quot;: 87
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--movie_id--actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--movie_id--actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--movie_id--actors"></code></pre>
</span>
<span id="execution-error-GETapi-movies--movie_id--actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--movie_id--actors"></code></pre>
</span>
<form id="form-GETapi-movies--movie_id--actors" data-method="GET"
      data-path="api/movies/{movie_id}/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--movie_id--actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--movie_id--actors"
                    onclick="tryItOut('GETapi-movies--movie_id--actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--movie_id--actors"
                    onclick="cancelTryOut('GETapi-movies--movie_id--actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--movie_id--actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{movie_id}/actors</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>movie_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="movie_id"
               data-endpoint="GETapi-movies--movie_id--actors"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-movies--movie_id--actors">Permet d&#039;associer un acteur à un film</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies--movie_id--actors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/movies/1/actors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"actor_id\": 10
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies/1/actors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "actor_id": 10
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/movies/1/actors',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'actor_id' =&gt; 10,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies--movie_id--actors">
</span>
<span id="execution-results-POSTapi-movies--movie_id--actors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies--movie_id--actors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies--movie_id--actors"></code></pre>
</span>
<span id="execution-error-POSTapi-movies--movie_id--actors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies--movie_id--actors"></code></pre>
</span>
<form id="form-POSTapi-movies--movie_id--actors" data-method="POST"
      data-path="api/movies/{movie_id}/actors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies--movie_id--actors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies--movie_id--actors"
                    onclick="tryItOut('POSTapi-movies--movie_id--actors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies--movie_id--actors"
                    onclick="cancelTryOut('POSTapi-movies--movie_id--actors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies--movie_id--actors" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies/{movie_id}/actors</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>movie_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="movie_id"
               data-endpoint="POSTapi-movies--movie_id--actors"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>actor_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="actor_id"
               data-endpoint="POSTapi-movies--movie_id--actors"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-movies--movie_id--director">Permet de récupérer le réalisateur lié à un film.</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--movie_id--director">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/movies/1/director" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/movies/1/director"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/movies/1/director',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--movie_id--director">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 20,
    &quot;name&quot;: &quot;Lucas Lambert&quot;,
    &quot;created_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-07-21T17:37:27.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--movie_id--director" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--movie_id--director"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--movie_id--director"></code></pre>
</span>
<span id="execution-error-GETapi-movies--movie_id--director" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--movie_id--director"></code></pre>
</span>
<form id="form-GETapi-movies--movie_id--director" data-method="GET"
      data-path="api/movies/{movie_id}/director"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--movie_id--director', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--movie_id--director"
                    onclick="tryItOut('GETapi-movies--movie_id--director');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--movie_id--director"
                    onclick="cancelTryOut('GETapi-movies--movie_id--director');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--movie_id--director" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{movie_id}/director</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>movie_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="movie_id"
               data-endpoint="GETapi-movies--movie_id--director"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the movie.</p>
            </p>
                    </form>




    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>
