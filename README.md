# coop.palantetech.neighborhoodlookup
A CiviCRM extension to use Google geocoding to auto-populate neighborhood.

This extension creates a custom field group on install, "Address Additional Fields",
with the field "Neighborhood" in it.  Whenever an address does a geocoding lookup, the extension
extracts the neighborhood field from the data returned from Google (if it's present) and populates
the field.
