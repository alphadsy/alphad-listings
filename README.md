# Alphad-Listings

Laravel Listing Project
 

## Usage:

### Views

#### layouts

we use three master layouts with 1-2-3 col and
left-middle-right sections   

#### Shared Data 

shared data variables you can use across any view
shared view located at Providers\AppServiceProvider

locations => Utilities\Location::locations()

#### custom if 

company => @if(Auth::user()->isCompany())

### Utilities

Http\Utilities

#### Location

Location return array of locations

### Requests

CompanyRequest
ListingRequest

### Policies

CompanyPolicies
ListingPolicies

### MiddleWare

Company restrict access to edit/update company route  

