### Project Import
- Project Developed on Rocky Linux 9 (RPM Linux), Docker, DDEV

- To Import - database `db.sql` also, `config`s can be imported, not necessary if database is imported
- `ddev composer install`
- `ddev import-db < db.sql`

### New Content Types Created

##### Sales
Sale ID, product ID, price, description, tax

##### Production
production id, product ID, price, manufactured datetime, description, category (a taxonomy)

### Roles Created

- Sales Team
- Production Team
- Sales Head

#### No-one from other department can not edit/delete content

#### Views Created - with Table format to the address
- Sales (/sales)
![Image](images/Screenshot%20from%202023-11-27%2016-51-25.png "Sales View")
- Production(/production)
![Image](images/Screenshot%20from%202023-11-27%2017-51-42.png "Production View")

#### Create views for all the above content types where records can be listed with option to sort by creation date, name, price etc. Add a range filter to drill down records created between certain dates and a category filter for the Production list view page


#### On new Sales quote creation or update of existing sales content, email sent to Sales Head
- Emails
![Image](images/Screenshot%20from%202023-11-28%2014-38-12.png "Emails")
- New Quote
![Image](images/Screenshot%20from%202023-11-28%2014-39-47.png "New Quote Email")
- Update Quote
![Image](images/Screenshot%20from%202023-11-28%2014-39-52.png "Quote Update Email")
#### configuration added to config folder or can be imported from db1.tar.gz file as well.
