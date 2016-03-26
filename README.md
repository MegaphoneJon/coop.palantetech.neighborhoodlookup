# coop.palantetech.neighborhoodlookup
A CiviCRM extension to use Google geocoding to auto-populate neighborhood.

Caveats:
* This relies on a hook that isn't yet part of core as of this writing -
  CRM-19298.
* It works with Google geocoding only.
* Most areas in Google Maps API don't have neighborhood data.
* IMPORTANT: This relies on a custom field that is currently a hardcoded ID in this extension.  Don't expect this to just work on your site without modifying the code.
