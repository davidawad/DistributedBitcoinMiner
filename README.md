# Distributed Client Side Bitcoin Miner

This is an app aimed at assisting servers in monetizing client sessions
by providing an API through which to use javascript to calculate bitcoin hashes.

By having multiple client sessions you can distribute the work across multiple
clients.

If a site were popular enough it could be quite successful!

## Getting Started
So, starting the server is easy.

Just clone the repo, `cd` into it and use PHP's internal server.

`php -S localhost:8000`

Then open the demo at 'localhost:3000/index.html'

##  Development
Look inside of `credentials.class.php`, adjust those variables for your local
instance of bitcoind.

If you're looking for an easy way to set up a bitcoind instance, and you know
vagrant, you can try [bitcoin-vagrant](https://github.com/chetanbhat/bitcoin-vagrant).

Just jump in and it will work beautifully!

## API

```JavaScript

begin_mining()

/*
RETURN VALUE

This function will perform a continuous, multi-worker series of function calls.
If we're not in test mode we call
*/

get_work(true);
long_poll();

```


# Contributors
Original Source being improved upon the original by [derjanb](https://github.com/derjanb)
