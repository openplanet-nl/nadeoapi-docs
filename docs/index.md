---
pages:
  - glossary
dirs:
  - auth
  - guides
  - core
  - live
  - meet
roots:
  - oauth

---

# Home

This is the (unofficial) documentation for the Trackmania (2020) game APIs, documented by the Openplanet community. It was created to be a central place for the most up-to-date documentation for the most used APIs in the game.

If you're not familiar with the authentication flow for any of the game APIs, check out [the Authentication guide](/auth).

The documentation is structured by the three main API domains, each of which cover a slightly different area of the game:

- [**Core**](/core): The main API that allows the game to authenticate to all other APIs, but also has many other tasks relating to the game's native functionality. This can also be considered the game's masterserver.
- [**Live**](/live): The live API is mostly used for leaderboards and other live content such as campaigns, rooms, clubs and Tracks of the Day.
- [**Meet**](/meet): The meet API is used for competitions, matchmaking and other match infrastructure tasks.

As of July 2023, the _Competition_, _Matchmaking_ and _Club_ domains have been merged into the **Meet** API. The old domains will stay functional for a while, but it's highly recommended to migrate off of them as soon as possible.

Additionally, [the OAuth documentation](/oauth/summary) contains information on integrating external applications with the official Trackmania OAuth API. Note that this API is completely separate from the main game APIs, and authentication flows are not compatible between the two.

## Responsible usage

All game APIs are to be used responsibly. Nadeo/Ubisoft **can and will ban your accounts/IPs** if they detect any disruptive (sending too many requests too fast) or any other malicious behavior.

There are no official rate limits, but Nadeo developers have said in the past that the upper limit of acceptable usage is at about **two requests/second for short-term bursts**. If you are planning to send a lot of requests throughout a long period of time (for bulk operations or semi-live monitoring), you should reduce the frequency of requests.

Make sure you send along a useful `User-Agent` header that includes what your project is, who you are (your name or some username/handle), and how to contact you (your email address). For example:

```plain
My awesome leaderboard / @miss / miss@example.com
```

To report a potential security concern directly to Nadeo/Ubisoft, send an email to <contact@nadeo.com>.

## API status

There is an [unofficial status page](https://trackmania-status.cdn.ubi.com/status.html) for the main Web Services APIs. The same data is also available [in JSON format](https://trackmania-status.cdn.ubi.com/status.json).

Note that these resources may not always accurately reflect unexpected outages and issues with specific endpoints - they're primarily used for communicating planned maintenance periods.

## Helpful community projects

These useful projects are maintained by Trackmania community members - check them out if you're looking for starting points or convenient ways to test/utilize Nadeo's APIs.

- [nadeo-api-bruno](https://github.com/davidbmaier/nadeo-api-bruno) is a collection of commonly-used endpoints for [Bruno](https://www.usebruno.com/) (maintained by **tooInfinite**)
- [nadeo-api](https://pypi.org/project/nadeo-api/) is a Nadeo API **Python** library (maintained by **Ezio416**)
- [nadeo-api-rs](https://crates.io/crates/nadeo-api-rs) is a Nadeo API **Rust** library (maintained by **XertroV**)
- [ManiaAPI.NadeoAPI](https://www.nuget.org/packages/ManiaAPI.NadeoAPI) is a Nadeo API **C#** library (maintained by **BigBang1112**)

## Contributing and support

This is a community project that's actively being worked on - as such, the documentation is not complete in some areas. Don't hesitate to [reach out and get involved on Github](https://github.com/openplanet-nl/nadeoapi-docs), or [talk about the API on Discord](https://openplanet.dev/link/discord).
