CodeceptJS Kickstarter
======================

This is an acceptance testing kickstarter with [CodeceptJS](https://codecept.io).
It doesn't include any libraries to create a webserver based application, but it may be 
used to test against existing sites (live or local).

This example is configured using [WebdriverIO](http://webdriver.io) which needs a selenium instance to run.

Test Scenarios
--------------

Place your specs in `./tests` and name them `<my-test-scenario>.spec.js`, so codecept can pick them up.

Install Selenium
----------------
```bash
[sudo] npm install -g selenium-standalone
selenium-standalone install
selenium-standalone start
```

Run Tests
---------
* `yarn test` is equivalent to...
* `npm test` is equivalent to...
* `node_modules/.bin/codeceptjs run --steps`

