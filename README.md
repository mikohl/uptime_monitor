# uptime_monitor
A module that can be used with Pingdom's uptime monitoring.

I needed a white-label module that would report back to Pingdom from Drupal
sites. Additionally I was having issues where the varnish cache wasn't clearing
appropriately, so the cached page was linking to CSS files that didn't exist.

The module creates a XML document with the parameters that Pingdom is looking
for. The Response Time doesn't actually have to be a time, so I'm returning
the current time, which makes it clear that I'm not accidentally sending
cached values to Pingdom.

The module has hooks so custom checks can be created. To solve my CSS problem
I have a sub module that grabs the homepage HTML and reports back if the linked
CSS files are missing.
