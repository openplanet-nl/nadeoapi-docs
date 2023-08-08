# Meet API
The Meet API contains endpoints for interacting with competitions, matchmaking and other match infrastructure.

As of July 2023, it's the new umbrella API for the previous `competition`, `matchmaking` and `club` domains.

All of its endpoints require a token with the `NadeoClubServices` audience.

## Deprecations

- July 2023: The `/participants` endpoint for competition matches has been removed during the move to the central `meet` API - to retrieve a competition match's players, it's recommended to use the [competition match result endpoint](/meet/competition-matches/results).
