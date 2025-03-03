# CHANGELOG

## 10.0.5

* Bugfix to rate limiter (#123)

## 10.0.4

* Bugfix to rate limiter (#120)

## 10.0.3

* Moved `final` flag to the constructor

## 10.0.2

* Added `final` flag to `ResponseAccess` class
* CI improvements

## 10.0.1

* Fix for Graph API limit calls not accessing the correct index for last call data
* Update for microtime for rate limiter

## 10.0.0

* Bump Guzzle to version 8 from 7 (#83)

## 9.1.4

* Implemented toArray method, mainly used for Laravel integration

## 9.1.3

* Fix to allow for overriding request type for data (#80)

## 9.1.2

* Oauth error handling (#77).

## 9.1.1

* Implemented `Iterable` and `Countable` on `ResponseAccess`
* Added methods `keys` and `values` to allow for getting keys and values easier
* Add JSON serilize method

## 9.1.0

* Rate limiting for REST has been improved to use a moving window method
* `Sleep` deferrer now returns a float for the time microtime
* `Memory` store now has a `reset` method to support the new rate limiting
* `Memory` now accepts more then two values to support the new rate limiting

## 9.0.0

*Contains breaking changes*; Consult `UPGRADING.md`.

* Library refactored and split up, no longer one file
* Auth header handling moved into Guzzle middleware
* API versioning handler moved into Guzzle middleware
* Rate limiting improved and now available for GraphQL
* Options moved into its own configuration class
* "Retry" ability now built-in via `guzzle_retry_middleware` which respects Shopify's 'X-Retry-After' header
* API responses are now mapped into a response class which can be accessed as an array or object
* Storage of how/where rate limits, request times, and others are now changable with the `StateStorage` interface, and a default in-memory storage class provided
* Both GraphQL and REST success and error returns have been normalized

## 8.2.0

* Added `bodyArray` to response object of rest and graph, this is the same as `body` except instead of a stdClass being returned, its an array.

## 8.1.0

* Added response to error callback function (#64)
* Allow for additional client creation options (#65)

## 8.0.0

* Added return types to all functions.
* Added async support for GraphQL via `graphAsync`.
* Added support for call to `/admin/oauth/access_scopes.json`.

## 6.1.2

* Fix for REST calls not properly building error object (#47).

## 6.1.1

* Fixed `extractHeaderLink` for #45, to include both `next` and `previous`.

## 6.1.0

* Adds support for `Link` header (#39)

## 6.0.0

* Added ability to do Guzzle sync and async requests through Promises.
* `errors` now returns a boolean instead of an object. `body` now contains the error response.

## 5.5.0

* Added ability to use custom headers in REST calls.

## 5.4.0

* Added option to supply a PSR-compatible logger via `setLogger`.

## 5.3.3

* Added matching to ignore certain oauth paths.

## 5.3.2

* Added for for issue #24 in detection of what an authable request is.

## 5.3.1

* Fixed merged in to prevent versioning on access token calls.

## 5.3.0

* Added support for versioned API calls for both REST and GraphAPI
* New `setVersion(string $version)` method added, and new `getVersion()` method added

## 5.2.0

* Added ability for `per-user` authentication. There is now ability to set/grab a user from authentication.
* `requestAndSetAccess(string $code)` method added which will automatically set the access token and user (if applicable) to the API instance for you as a helper method.

## 5.1.0

* Added a `authRequest` middleware to Guzzle which handles adding all needed headers and checking required API keys to run those requests
* Fixed issue for redirect not working

## 5.0.0

*Possible breaking release depending on how you handle errors*

* 400-500 errors are now captured internally and accessible through the resulting object (#16)
* Middleware was added to the Guzzle requests to fix redirections (#16)

## 4.0.2

* Changes to the response of GraphQL calls to better check for errors.

## 4.0.1

* Update for more accurate timing

## 4.0.0

* Added rate limiting abilities (basic)

## 3.0.3

* Fix for #13 for requests where call limit header is not always supplied

## 3.0.2

* Adjusted API to work better with Shopify's implementation of GraphQL (#10)
* `graph()` call now accepts two arguments, `graph(string $query, array $variables = [])`

## 3.0.1

* Fix to obtaining access token

## 3.0.0

*Contains breaking changes*

To better the library, it has been reverted back to its original single-class form and backwards compatibile with 1.x.x

* GraphQL and REST are all under one class
* `getApiCalls()` now takes two arguments, first being rest|graph, second being the key
* `rest()` is now for REST calls
* `graph()` is now for GraphQL calls
* `request()` is aliased to `rest()` for backward compatibility

## 2.0.0

*Contains breaking changes*

* No longer a single file, it now namespaced under `OhmyBrew\ShopifyAPI`
* GraphQL is now introduced under `Segwitz\ShopifyAPI\GraphAPI`
* REST is moved to `Segwitz\ShopifyAPI\RestAPI`

## 1.0.1

* Fixed issue #3 by @ncpope, for newly created stores (after December 2017) not accepting GET body

## 1.0.0

* Basic API code implemented
* Tests completed with full coverage
