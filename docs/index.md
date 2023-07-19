---
pages:
  - auth
dirs:
  - core
  - live
  - meet
roots:
  - oauth
---

# Home
This is the (unofficial) documentation for the Trackmania (2020) game APIs, documented by the Openplanet community. It was made to be a central place for the most up-to-date documentation for the most used APIs in the game.

If you're not familiar with the authentication flow for any of the game APIs, check out [the Authentication guide](/auth).

The documentation is structured by the three main API domains, each of which cover a slightly different area of the game:

* [**Core**](/core): The main API that allows the game to authenticate to all other APIs, but also has many other tasks relating to the game's native functionality. This can also be considered the game's masterserver.
* [**Live**](/live): The live API mostly used for leaderboards and other live content such as campaigns, rooms, clubs and Tracks of the Day.
* [**Meet**](/meet): The meet API is used for competitions, matchmaking and other match infrastructure tasks.

As of July 2023, the *Competition*, *Matchmaking* and *Club* domains have been merged into the **Meet** API. The old domains will stay functional for a while, but it's highly recommended to migrate off of them as soon as possible.

Additionally, [the OAuth documentation](/oauth/summary) contains extensive information on integrating external applications with the official Trackmania OAuth API.

## Responsible usage
All game APIs are to be used responsibly. Nadeo/Ubisoft **can and will ban your accounts/IPs** if they detect any disruptive (sending too many requests too fast) or any other malicious behavior.

Make sure you send along a useful `User-Agent` header that includes what your project is, who you are (your name or some username/handle), and how to contact you (your email address). For example:

```plain
My awesome leaderboard / @Miss#8888 / miss@example.com
```

To report a potential security concern directly to Nadeo/Ubisoft, send an email to <contact@nadeo.com>.

## Contributing and support
This is a community project that's actively being worked on - as such, the documentation is not complete in some areas. Don't hesitate to [reach out and get involved on Github](https://github.com/openplanet-nl/nadeoapi-docs), or [talk about the API on Discord](https://openplanet.dev/link/discord).
