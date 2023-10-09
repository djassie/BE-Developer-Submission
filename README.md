# BE-Developer-Test
BE Developer Test [2-5 Years]

## Assignment for developer

### Install this site on your local machine
This Drupal 10 site is based on DDEV/Composer. So
Clone the repository
Run ddev [DDEV with Docker installation needed], in case you want to use DB attached in the repository, can ignore DDEV but you have to run composer

### Setup a Drupal system with custom content types based on Organization departments

##### Sales
Sale ID, product ID, price, description, tax

##### Production
production id, product ID, price, manufactured datetime, description, category (a taxonomy)

### Create views for all the above content types where records can be listed with option to sort by creation date, name, price etc. Add a range filter to drill down records created between certain dates and a category filter for the Production list view page

### Create roles and attach to content types such that, no one can edit/delete other departments' data, the view can be public.

### Add-on [Nice to do]: create a workflow for sending emails to the sales head when a new quote is generated from sales team.

## When you are done, send the code/configuration to the shared email id, a wetransfer/dropbox/googledrive link.
